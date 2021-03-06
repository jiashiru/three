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

    //支付
    Route::post("PayIndex","PayController@index");//当点击支付  跳转到本页面
    Route::post("rechange","PayController@rechange");//充值

    //账号设置
    Route::get("setInfo","SetController@setInfo");//个人资料
    Route::post("infoDo","SetController@infoDo");//修改个人信息
    Route::post("checkNick","SetController@checkNick");//验证昵称唯一
    Route::get("header","SetController@header");//修改头像页面
    Route::post("uploadHead","SetController@uploadHead");//上传头像

    Route::get("address","SetController@address");//收货地址页面
    Route::post("addressAdd","SetController@addressAdd");//添加收货地址

    Route::get("security","SetController@security");//账户安全页面
    Route::get("updatePwd","SetController@updatePwd");//修改密码页面
    Route::post("checkPwd","SetController@checkPwd");//验证原始密码
    Route::post("pwdDo","SetController@pwdDo");//修改密码


    Route::get("telCode","SetController@telCode");//手机验证码页面
    Route::post("telephone","SetController@telephone");//获取手机验证码
    Route::post("checkCode","SetController@checkCode");//验证手机验证码
    Route::get("payPwd","SetController@payPwd");//设置支付密码页面
    Route::post("codeAdd","SetController@codeAdd");//设置支付密码页面

    Route::get("sendEmail","SetController@sendEmail");//发送邮箱页面
    Route::post("sendEmailDo","SetController@sendEmailDo");//发送邮箱
    Route::post("CheckEmailCode","SetController@CheckEmailCode");//验证邮箱验证码


    Route::get("myIndex","MyyungouController@myIndex");//我的一元云购首页
    Route::get("myGoods","MyyungouController@myGoods");//云购记录
    Route::get("detail","MyyungouController@detail");//云购记录详情
    Route::get("getGoods","MyyungouController@getGoods");//获得的商品

    Route::get("invite","MyyungouController@invite");//邀请好友页面


    Route::get("myWallet","MyyungouController@myWallet");//我的钱包
    Route::get("userRechange","MyyungouController@userRechange");//网银充值页面
    Route::get("CardRechange","MyyungouController@CardRechange");//充值卡充值页面
    Route::post("rechange","PayController@rechange");//网银充值






    Route::get("setMyself","SetController@myself");//个人主页
    Route::any("time_record","SetController@time_record");//个人主页ceshi  一会就删







});
//通用
Route::get("login",function(){ return view("login"); });//登陆页面
Route::post("loginDo","LoginController@loginDo");  //登录

Route::get("quit","LoginController@quit");  //退出

Route::any("register",function(){ return view("register"); });//注册页面

Route::post("checkName","RegisterController@checkName");  //注册验证用户名唯一
Route::post("registerDo","RegisterController@registerDo");  //注册

//主页

Route::any("/","IndexController@index");//主页
Route::any("indexRemmend","IndexController@remmend");//主页
Route::any("indexLimit","IndexController@limit");//限时抢购
Route::any("indexNews","IndexController@news_shop");//限时抢购
Route::any("indexUser","IndexController@user_shop");//云购圈

Route::any("indexClassify","IndexController@classify");//分类
Route::get("indexShop","IndexController@shop");//商品详情
Route::any("indexGoods_photo","IndexController@goods_photo");//商品详情
Route::any("indexTime","IndexController@server_time");//获取当前服务器时间，用户主页下面
Route::any("indexHeader_sel","IndexController@header_sel");//header头里面的查询


Route::any("indexCarousel","IndexController@carousel");//轮播图
Route::any("indexHot","IndexController@hot");//查询最热产品

//中奖计算
Route::any("codeGet","CountController@get");

//我的一元云够
//Route::any("userIndex",function(){ return view("user/index"); });
//Route::any("userRecord",function(){ return view("user/record"); });//我的记录


//buy

Route::any("buycarIndex","BuycarController@index");//购物车
Route::any("buycarCart_num","BuycarController@cart_num");//在购物车 增加和减少的时候用
Route::any("buycarAdd","BuycarController@add_buy");//添加购物车
Route::any("buycarDel","BuycarController@buy_del");//删除
Route::any("buycaraccount","BuycarController@account");//结算1
Route::any("buycarOrder","PayController@order");//结算1

//成功
Route::any("success","SuccessController@index");//支付成功


Route::any("successBuySuccess",function(){ return view("buycar/buy_success"); });





