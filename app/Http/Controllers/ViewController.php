<?php


namespace App\Http\Controllers;


use App\Models\HomeSlider;
use App\Models\Info;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rules\In;

class ViewController
{
    public function index() {

        $tasks=HomeSlider::query()->get();
        $news=News::query()->get();
        return view('view.views.index',['tasks'=>$tasks],['news'=>$news]);
    }

    public function news(){
        $news=News::query()->get();
        return view('view.views.news',['news'=>$news]);
    }
    public function meksifrah(){
        return view('view.views.meksifrah');
    }
    public function mission(){
        return view('view.views.mission');
    }
    public function history(Request $request){
        $id=1;
        $column = 'category'; // This is the name of the column you wish to search
        $history = DB::table('info')->where('category', '1')->get();

        return view('view.views.history',['history'=>$history]);
    }
    public function sestrinskoe(){
        return view('view.views.sestrinskoe');
    }
    public function farmatsia(){
        return view('view.views.farmatsia');
    }
    public function akusherskoe(){
        return view('view.views.akusherskoe');
    }
    public function social(){
        return view('view.views.social');
    }
    public function menedgment(){
        return view('view.views.menedgment');
    }
    public function finance(){
        return view('view.views.finance');
    }
    public function economic(){
        return view('view.views.economic');
    }
    public function doschool(){
        return view('view.views.doschool');
    }
    public function tourism(){
        return view('view.views.tourism');
    }
    public function conferens(){
        return view('view.views.conferens');
    }
    public function nirs(){
        return view('view.views.nirs');
    }
    public function how(){
        return view('view.views.how');
    }
    public function faculties(){
        return view('view.views.faculties');
    }

    public function trustee(){
        return view('view.views.trustee');
    }

    public function teacher(){
        return view('view.views.teacher');
    }
    public function metod(){
        return view('view.views.metod');
    }
    public function supervisory(){
        return view('view.views.supervisory');
    }
    public function akty(){
        return view('view.views.akty');
    }
    public function polojenia(){
        return view('view.views.polojenia');
    }
    public function standarty(){
        return view('view.views.standarty');
    }
    public function license(){
        return view('view.views.license');
    }
    public function contact(){
        return view('view.views.contact');
    }
    public function life(){
        return view('view.views.life');
    }
    public function about(){
        return view('view.views.about');
    }

    public function sennosti(){
        return view('view.views.sennosti');
    }



}