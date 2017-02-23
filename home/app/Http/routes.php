<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

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

//通用
Route::any("login",function(){ return view("login"); });//登陆
Route::any("zhuce",function(){ return view("zhuce"); });//注册

//主页
Route::any("index/index","IndexController@index");//主页
Route::any("index/classify",function(){ return view("index/classify"); });//分类
Route::any("index/sel","IndexController@sel");//分类


//我的一元云够
Route::any("user/index",function(){ return view("user/index"); });
Route::any("user/record",function(){ return view("user/record"); });//我的记录



//账号设置
Route::any("set/index",function(){ return view("set/index"); });

//商品详情
Route::any("shop/index",function(){ return view("shop/index"); });



//buy
Route::any("buycar/index",function(){ return view("buycar/index"); });//购物车
Route::any("buycar/account",function(){ return view("buycar/account"); });//结算1




Route::any("success/buy_success",function(){ return view("buycar/buy_success"); });





