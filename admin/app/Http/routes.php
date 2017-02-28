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
Route::group(['middleware' => ['web']], function () {
    Route::any('loginLogin', ['uses' => 'LoginController@login']);
    Route::get('loginGetCapath', ['uses' => 'LoginController@getCapath']);
});
//register
Route::group(['middleware' => ['web']], function () {
    Route::any('registerRegister', ['uses' => 'RegisterController@register']);
});
//message
Route::any('showMsg',['uses' => 'CommonController@showMsg']);

//RBAC
Route::any('adminShow',['uses' => 'AdminController@show']);
Route::any('adminDelete',['uses' => 'AdminController@delete']);
Route::any('roleShow',['uses' => 'RoleController@show']);
Route::any('roleDelete',['uses' => 'RoleController@delete']);
Route::any('nodeShow',['uses' => 'NodeController@show']);
Route::any('nodeDelete',['uses' => 'NodeController@delete']);

Route::group(['middleware' => ['web']], function () {
    Route::any('adminAdd',['uses' => 'AdminController@add']);
    Route::any('adminEdit',['uses' => 'AdminController@edit']);
    Route::any('roleAdd',['uses' => 'RoleController@add']);
    Route::any('roleEdit',['uses' => 'RoleController@edit']);
    Route::any('nodeAdd',['uses' => 'NodeController@add']);
    Route::any('nodeEdit',['uses' => 'NodeController@edit']);
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


