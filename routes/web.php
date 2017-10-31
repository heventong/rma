<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// 
function loadRoutes($locale){
	$route = include('uedit_web.php');
	App::setLocale($locale);
	Route::get('/', "HomeController@index");
	Route::get('/index', "HomeController@index");
	Route::get('/award', "HomeController@award");
	Route::get('/home', "HomeController@home");
	Route::get('/about', "HomeController@about");
	Route::get('/belief', "HomeController@belief");
	Route::get('/careers', "HomeController@careers");
	Route::get('/contact', "HomeController@contact");
	Route::get('/serve', "HomeController@serve");
	Route::get('/work', "HomeController@work");
	Route::get('/news', "HomeController@news");
	Route::get('/workDetail', "HomeController@workDetail");
	Route::get('/workDetail_dforce', "HomeController@workDetail");
	Route::get('/workDetail', "HomeController@workDetail");
	Route::get('/workList', "HomeController@workList");
	
	Route::get('/admin', "AdminController@index");
	Route::get('/manage', "AdminController@manage");
	Route::any('/upload', "AdminController@upload");
	Route::get('/storage', "AdminController@storage");
    Route::any('/update', "AdminController@update");
//    Route::any('/test', "AdminController@test");
    Route::any('/getlang', "AdminController@getlang");
    Route::any('/uploadview', "AdminController@uploadview");
    Route::any('/login', "AdminController@login");
    Route::any('/loginCheck', "AdminController@loginCheck");
    Route::any('/logout', "AdminController@logout");
    Route::any('/editPage', "AdminController@editPage");
    Route::any('/showPage', "AdminController@showPage");
    Route::any('/addPage', "AdminController@addPage");
    Route::any('/delPage', "AdminController@delPage");
    Route::any('/ueditPage', "NewController@ueditPage");
    Route::any('/add', "NewController@add");
    Route::any('/new', "NewController@index");
    Route::any('/newAdd', "NewController@newAdd");
    Route::any('/addupdate', "NewController@addupdate");
    Route::any('/editcareers', "AdminController@editcareers");
    Route::any('/addsavecareers', "AdminController@addsavecareers");
    Route::any('/removecareer', "AdminController@removecareer");
	foreach($route as $key=>$value){
		Route::any("/".$value['url'], "NewController@ueditPage");
	}
//	Route::any('');
}

Route::group(['domain' => 'en.*'], function () {
    loadRoutes("en");
});

loadRoutes("en");