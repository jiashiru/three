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
Route::post('adminShow',['uses' => 'AdminController@show']);
Route::get('adminDelete',['uses' => 'AdminController@delete']);
Route::post('roleShow',['uses' => 'RoleController@show']);
Route::get('roleDelete',['uses' => 'RoleController@delete']);
Route::post('nodeShow',['uses' => 'NodeController@show']);
Route::get('nodeDelete',['uses' => 'NodeController@delete']);

Route::group(['middleware' => ['web']], function () {
    Route::post('adminAdd',['uses' => 'AdminController@add']);
    Route::post('adminEdit',['uses' => 'AdminController@edit']);
    Route::post('roleAdd',['uses' => 'RoleController@add']);
    Route::post('roleEdit',['uses' => 'RoleController@edit']);
    Route::post('nodeAdd',['uses' => 'NodeController@add']);
    Route::post('nodeEdit',['uses' => 'NodeController@edit']);
});


//商品品牌
Route::any('brandAdd',['uses' => 'BrandController@add']);
Route::post('brandShow',['uses' => 'BrandController@show']);
Route::any('brandEdit',['uses' => 'BrandController@edit']);
Route::get('brandDelete',['uses' => 'BrandController@delete']);



Route::group(['middleware' => ['web']], function () {
    Route::get('navAdd', 'NavController@add');
    Route::post('navDoAdd','NavController@doAdd');
    Route::get('navShow','NavController@show');
    Route::get('navDel','NavController@del');
});

Route::any('getNode',['uses' => 'CommonController@getNode']);


//商品类型
Route::any('categoryAdd',['uses' => 'CategoryController@add']);
Route::post('categoryShow',['uses' => 'CategoryController@show']);
Route::any('categoryEdit',['uses' => 'CategoryController@edit']);
Route::get('categoryDelete',['uses' => 'CategoryController@delete']);

//商品分类
Route::any('typeAdd',['uses' => 'TypeController@add']);
Route::post('typeShow',['uses' => 'TypeController@show']);
Route::any('typeEdit',['uses' => 'TypeController@edit']);
Route::get('typeDelete',['uses' => 'TypeController@delete']);

//商品添加
Route::any('goodsAdd',['uses' => 'GoodsController@add']);
Route::any('goodsShow',['uses' => 'GoodsController@show']);
Route::any('goodsEdit',['uses' => 'GoodsController@edit']);

Route::get('goodsDelete',['uses' => 'GoodsController@delete']);


Route::any('goodsAlter',['uses' => 'GoodsController@alter']);
Route::any('goodsSearch',['uses' => 'GoodsController@search']);


Route::group(['middleware' => ['web']], function () {
    Route::get('goodsAjax', 'GoodsController@ajax');
});


