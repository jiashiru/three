<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndexController extends Controller
{
    //主页
    public function index()
    {
        return view("index/index");
    }


    //分类
    public function classify()
    {
        return view("index/classify");
    }

    //商品详情
    public function shop()
    {
        return view("index/shop");
    }
}
