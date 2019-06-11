<?php


namespace App\Http\Controllers;


class InfoController
{

    public function addInfo(){

        return view("admin.views.add_info");
    }

    public function listInfo(){
        return view ("admin.views.list_info");
    }
 /*   public function listAllSection() {
        $students_sections = HomeSlider::query();
        return Datatables::of($students_sections)
            ->editColumn("image", function($students_sections) {

                return '<img src="'. $students_sections->image . '" style="height:100px;width:100px;"/>';
            })
            ->editColumn("action_btns", function($students_sections) {

                return '<a href="' . URL::to('/edit-section/' . $students_sections->id) . '" class="btn btn-info class-section-edit" data-id="' . $students_sections->id . '">Edit</a>'
                    . '<a href="javascript:void(0)" class="btn btn-danger class-section-delete" data-id="' . $students_sections->id . '">Delete</a>';
            })
            ->editColumn("status", function($students_sections) {

                if ($students_sections->status) {
                    return '<button class="btn btn-success">Active</button>';
                } else {
                    return '<button class="btn btn-danger">Inactive</button>';
                }
            })
            ->rawColumns(["action_btns", "status"])
            ->make(true);
    }

    public function saveSection(Request $request) {

        $validator = Validator::make(array(
            "title" => $request->homeSlider_title,
            "description" => $request->homeSlider_description,
            "image" => $request->homeSlider_image,


        ), array(
            // "title" => "required|unique:tbl_home_slider",
            "title" => "required",
            "description" => "required",
            "image" => "required",

        ));

        if ($validator->fails()) {

            return redirect("add-section")->withErrors($validator)->withInput();
        } else {

            // successfully we have passed our form
            $section = new HomeSlider;
            // to save profile photo




            $valid_images = array("png", "jpg", "gif", "jpeg");

            if ($request->hasFile("homeSlider_image") && in_array($request->homeSlider_image->extension(), $valid_images)) {

                $image = $request->homeSlider_image;
                $fileName = time() . "." . $image->getClientOriginalName();
                $image->move("resource/assets/images/faculty/", $fileName);
                $uploadedImageName = "resource/assets/images/faculty/" . $fileName;
                $section->image = $uploadedImageName;
            }





            $section->title = $request->homeSlider_title;
            $section->description = $request->homeSlider_description;



            $section->save();

            $request->session()->flash("message", "Class Section has been created successfully");

            return redirect("add-section");
        }
    }

    public function deleteSection(Request $request) {

        $id = $request->delete_id;

        $section_data = HomeSlider::find($id);

        if (isset($section_data->id)) {

            $section_data->delete();

            echo json_encode(array("status" => 1, "message" => "Section deleted successfully"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Section doesnot exists"));
        }

        die();
    }

    public function editSection($id = null){
        // function to add class sections
        $class_section = HomeSlider::find($id);
        return view("admin.views.edit_section", ["title" => $class_section]);
    }

    public function editSaveSection(Request $request){
        $update_id = $request->update_id;

        $validator = Validator::make(array(
            "title" => $request->homeSlider_title,
            "description" => $request->homeSlider_description,
            "image" => $request->homeSlider_image,


        ), array(
            // "title" => "required|unique:tbl_home_slider",
            "title" => "required",
            "description" => "required",
            "image" => "required",

        ));

        if ($validator->fails()) {

            return redirect("edit-section/". $update_id)->withErrors($validator)->withInput();
        } else {

            // successfully we have passed our form
            $section = HomeSlider::find($update_id);
            $section->title = $request->homeSlider_title;
            $section->description = $request->homeSlider_description;


            $valid_images = array("png", "jpg", "gif", "jpeg");

            if ($request->hasFile("homeSlider_image") && in_array($request->homeSlider_image->extension(), $valid_images)) {

                $image = $request->homeSlider_image;
                $fileName = time() . "." . $image->getClientOriginalName();
                $image->move("resource/assets/images/faculty/", $fileName);
                $uploadedImageName = "resource/assets/images/faculty/" . $fileName;
                $section->image = $uploadedImageName;
            }


            $section->save();

            $request->session()->flash("message", "Class Section has been updated successfully");

            return redirect("edit-section/". $update_id);
        }
    }*/

}