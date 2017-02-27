<?php


Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
//主页
Route::get('404',function(){ return view("errors.404"); });
Route::get('500',function(){ return view("errors.500"); });
Route::get('503',function(){ return view("errors.503"); });

Route::any("/",function(){ return view("index/index"); });
Route::any("indexV1",function(){ return view("index/index_v1"); });

//login
Route::any('loginLogin',['uses' => 'LoginController@login']);
Route::any('loginGetCapath',['uses' => 'LoginController@getCapath']);
//message
Route::any('showMsg',['uses' => 'CommonController@showMsg']);

//RBAC
Route::any('adminShow',['uses' => 'AdminController@show']);
// Route::any('adminAdd',['uses' => 'AdminController@add']);

//RBAC
Route::any('adminAdd',['uses' => 'AdminController@adminAdd']);
Route::any('adminList',['uses' => 'AdminController@adminList']);



Route::group(['middleware' => ['web']], function () {
    Route::any('adminAdd',['uses' => 'AdminController@add']);
});


Route::group(['middleware' => ['web']], function () {
    Route::get('navAdd', 'NavController@add');
    Route::post('navDoAdd','NavController@doAdd');
    Route::get('navShow','NavController@show');
    Route::get('navDel','NavController@del');
});




