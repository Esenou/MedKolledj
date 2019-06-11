<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    $tasks=DB::table('tasks')->get();
    return view('tasks.index',compact('tasks'));
});


Route::get('/tasks/{task}', function ($id) {
    $task=DB::table('tasks')->find($id);

    return view('tasks.show',compact('task'));
});

Route::get('/en', function () {
    return view('en',[
        'name'=>'esec'

   ]);
});

Route::auth();

Route::get('/home', 'HomeController@index');*/


Route::group(["middleware" => "admin"], function() {

    Route::get('/admin', 'AdminHomeController@dashboard');


//Home slider route

    Route::get('/add-section', 'HomeSliderController@addSliderSection')->name("addClassSection");
    Route::get('/edit-section/{id?}', 'HomeSliderController@editSection')->name("editsection");
    Route::get('/list-section', 'HomeSliderController@listSliderSection')->name("listClassSection");
    Route::get('/list-sections-data', 'HomeSliderController@listAllSection')->name("listallsection");
    Route::post('/save-section', 'HomeSliderController@saveSection')->name("savesection");
    Route::post('/delete-section', 'HomeSliderController@deleteSection')->name("deletesection");
    Route::post('/edit-section-data', 'HomeSliderController@editSaveSection')->name("editsavesection");


//New route
    Route::get('/add-news', 'NewsContrller@addNews')->name("addNews");
    Route::get('/list-news', 'NewsContrller@listNews')->name("listNews");
    Route::get('/list-news-data', 'NewsContrller@listAllNews')->name("listAllNews");
    Route::get('/edit-news/{id?}', 'NewsContrller@editNews')->name("editNews");
    Route::post('/save-news', 'NewsContrller@saveNews')->name("saveNews");
    Route::post('/delete-news', 'NewsContrller@deleteNews')->name("deleteNews");
    Route::post('/edit-news-data', 'NewsContrller@editSaveNews')->name("editSaveNews");

//Info route
    Route::get('/add-info', 'InfoController@addInfo')->name("addInfo");
    Route::get('/list-info', 'InfoController@listInfo')->name("listInfo");

});
//Route::get('send','mailController@send');

Route::get("/login", "AdminController@adminLoginForm")->name("adminlogin");
Route::post("/check-login", "AdminController@checkUserLogin")->name("checklogin");
Route::get("/logout", "AdminController@logout")->name("adminlogout");



Route::get('/', 'ViewController@index')->name("index");
Route::get('/news','ViewController@news')->name("news");
Route::get('/meksifrah','ViewController@meksifrah')->name("meksifrah");
Route::get('/mission','ViewController@mission')->name("mission");
Route::get('/history','ViewController@history')->name("history");
Route::get('/sestrinskoe','ViewController@sestrinskoe')->name("sestrinskoe");
Route::get('/farmatsia','ViewController@farmatsia')->name("farmatsia");
Route::get('/social','ViewController@social')->name("social");

Route::get('/akusherskoe','ViewController@akusherskoe')->name("akusherskoe");
Route::get('/menedgment','ViewController@menedgment')->name("menedgment");
Route::get('/finance','ViewController@finance')->name("finance");
Route::get('/economic','ViewController@economic')->name("economic");
Route::get('/doschool','ViewController@doschool')->name("doschool");
Route::get('/tourism','ViewController@tourism')->name("tourism");
Route::get('/conferens','ViewController@conferens')->name("conferens");
Route::get('/nirs','ViewController@nirs')->name("nirs");
Route::get('/how','ViewController@how')->name("how");

Route::get('/faculties','ViewController@faculties')->name("faculties");
Route::get('/trustee','ViewController@trustee')->name("trustee");
Route::get('/teacher','ViewController@teacher')->name("teacher");
Route::get('/metod','ViewController@metod')->name("metod");
Route::get('/supervisory','ViewController@supervisory')->name("supervisory");

Route::get('/akty','ViewController@akty')->name("akty");
Route::get('/polojenia','ViewController@polojenia')->name("polojenia");
Route::get('/standarty','ViewController@standarty')->name("standarty");
Route::get('/license','ViewController@license')->name("license");
Route::get('/contact','ViewController@contact')->name("contact");
Route::get('/life','ViewController@life')->name("life");
Route::get('/about','ViewController@about')->name("about");
Route::get('/sennosti', 'ViewController@sennosti')->name("sennosti");





