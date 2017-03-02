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

//需要登录的，都走中间件
Route::group(['middleware' => 'session'], function () {
    //账号设置
    Route::get("setInfo","SetController@setInfo");//个人资料
    Route::post("infoDo","SetController@infoDo");//修改个人信息
    Route::post("checkNick","SetController@checkNick");//验证昵称唯一
    Route::get("header","SetController@header");//修改头像页面
    Route::post("uploadHead","SetController@uploadHead");//上传头像


    Route::any("setMyself","SetController@myself");//个人主页


});
//通用
Route::get("login",function(){ return view("login"); });//登陆页面
Route::post("loginDo","LoginController@loginDo");  //登录

Route::any("register",function(){ return view("register"); });//注册页面

Route::post("checkName","RegisterController@checkName");  //注册验证用户名唯一
Route::post("registerDo","RegisterController@registerDo");  //注册

//主页

Route::any("/","IndexController@index");//主页
Route::any("indexClassify","IndexController@classify");//分类
Route::any("indexShop","IndexController@shop");//商品详情
Route::any("indexGoods_photo","IndexController@goods_photo");//商品详情
Route::any("indexTime","IndexController@server_time");//获取当前服务器时间，用户主页下面


Route::any("indexCarousel","IndexController@carousel");//轮播图
Route::any("indexHot","IndexController@hot");//查询最热产品


//中奖计算
Route::any("codeGet","CountController@get");

//我的一元云够
Route::any("userIndex",function(){ return view("user/index"); });
Route::any("userRecord",function(){ return view("user/record"); });//我的记录




//buy

Route::any("buycarIndex","BuycarController@index");//购物车
Route::any("buycarCart_num","BuycarController@cart_num");//在购物车 增加和减少的时候用
Route::any("buycarAdd","BuycarController@add_buy");//添加购物车
Route::any("buycarDel","BuycarController@buy_del");//删除
Route::any("buycaraccount","BuycarController@account");//结算1


Route::any("buycarAccount",function(){ return view("buycar/account"); });//结算1




Route::any("successBuySuccess",function(){ return view("buycar/buy_success"); });





