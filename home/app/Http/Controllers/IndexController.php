<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndexController extends Controller
{
    public function __construct()
    {
        session_start();
    }
    public function index()
    {
//        print_r($_SESSION['u_id']);
        return view("index/index");
    }

    public function sel()
    {
        $users = DB::table("user")->get();
        print_r($users);
//        echo 1;
    }
}
