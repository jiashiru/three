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
Route::any("login",function(){ return view("login"); });//登陆页面
Route::any("register",function(){ return view("register"); });//注册页面

Route::post("checkName","RegisterController@checkName");  //注册验证用户名唯一
Route::post("registerDo","RegisterController@registerDo");  //注册

//主页
<<<<<<< HEAD
Route::get("indexIndex","IndexController@index");//主页
Route::any("index/classify",function(){ return view("index/classify"); });//分类
Route::any("index/sel","IndexController@sel");//分类
=======


Route::any("/","IndexController@index");//主页
Route::any("indexClassify","IndexController@classify");//分类
Route::any("indexShop","IndexController@shop");//商品详情
Route::any("indexCarousel","IndexController@carousel");//轮播图
Route::any("indexHot","IndexController@hot");//查询最热产品



>>>>>>> 4be34aa824cc57cf206ebffefdb70924ef83861a


//我的一元云够
Route::any("userIndex",function(){ return view("user/index"); });
Route::any("userRecord",function(){ return view("user/record"); });//我的记录



//账号设置
Route::any("setIndex",function(){ return view("set/index"); });

//商品详情
Route::any("shopIndex",function(){ return view("shop/index"); });



//buy
Route::any("buycarIndex",function(){ return view("buycar/index"); });//购物车
Route::any("buycarAccount",function(){ return view("buycar/account"); });//结算1




Route::any("successBuySuccess",function(){ return view("buycar/buy_success"); });





