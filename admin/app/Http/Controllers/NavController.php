<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;
use App\Nav;


class NavController extends Controller
{
    //导航添加页面
    public function add()
    {
        return view("admin/nodeAdd");
    }

    //实现导航添加
    public function doAdd(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
            'desc' => 'required',
        ],[
            'required' => ':attribute 为必填项',
        ],[
            "name" => "姓名",
            "desc" => "描述",
            "url" => "地址",
        ]);

        $nav = new nav;

        $nav->nav_name = $request->name;
        $nav->nav_url = $request->url;
        $nav->nav_desc = $request->desc;
        $res = $nav->save();
        if($res){
            return redirect("navShow");
        }else{
            return redirect("navAdd");
        }
    }


    //导航展示
    public function show()
    {
        $nav  = Nav::all()->toArray();
        return view("admin/navList",["list"=>$nav]);
    }

    //删除ajax方法
    public function del(Request $request)
    {
        $id = $request->id;
        $res = Nav::destroy($id);
        return $res;


    }
}