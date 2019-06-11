<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use URL;

use  Datatables;
use App\Models\News;

class NewsContrller extends Controller
{

    public function addNews(){

        return view("admin.views.add_news");
    }

    public function listNews(){
        return view ("admin.views.list_news");
    }


    public function listAllNews() {
        $students_sections = News::query();
        return Datatables::of($students_sections)
            ->editColumn("action_btns", function($students_sections) {

                return '<a href="' . URL::to('/edit-news/' . $students_sections->id) . '" class="btn btn-info class-section-edit" data-id="' . $students_sections->id . '">Edit</a>'
                    . '<a href="javascript:void(0)" class="btn btn-danger class-section-delete" data-id="' . $students_sections->id . '">Delete</a>';
            })


            ->rawColumns(["action_btns"])
            ->make(true);
    }

    public function saveNews(Request $request) {

        $validator = Validator::make(array(
            "title" => $request->newsTitle,
            "description" => $request->newsDescription,
            "data" => $request->newsData,


        ), array(
            // "title" => "required|unique:tbl_home_slider",
            "title" => "required",
            "description" => "required",
            "data" => "required",

        ));

        if ($validator->fails()) {

            return redirect("add-news")->withErrors($validator)->withInput();
        } else {

            // successfully we have passed our form
            $section = new News;
            // to save profile photo

            $section->title = $request->newsTitle;
            $section->description = $request->newsDescription;
            $section->data = $request->newsData;
            $section->save();

            $request->session()->flash("message", "Class Section has been created successfully");

            return redirect("add-news");
        }
    }

    public function deleteNews(Request $request) {

        $id = $request->delete_id;

        $section_data = News::find($id);

        if (isset($section_data->id)) {

            $section_data->delete();

            echo json_encode(array("status" => 1, "message" => "Section deleted successfully"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Section doesnot exists"));
        }

        die();
    }

    public function editNews($id = null){
        // function to add class sections
        $class_section = News::find($id);
        return view("admin.views.edit_news", ["title" => $class_section]);
    }

    public function editSaveNews(Request $request){
        $update_id = $request->update_id;
        $validator = Validator::make(array(
            "title" => $request->newsTitle,
            "description" => $request->newsDescription,
            "data" => $request->newsData,


        ), array(
            // "title" => "required|unique:tbl_home_slider",
            "title" => "required",
            "description" => "required",
            "data" => "required",

        ));
        if ($validator->fails()) {

            return redirect("edit-news/" . $update_id)->withErrors($validator)->withInput();
        } else {



            // successfully we have passed our form
            $section = News::find($update_id);
            $section->title = $request->newsTitle;
            $section->description = $request->newsDescription;
            $section->data = $request->newsData;


            $section->save();

            $request->session()->flash("message", "Class Section has been updated successfully");

            return redirect("edit-news/" . $update_id);
        }
    }


}