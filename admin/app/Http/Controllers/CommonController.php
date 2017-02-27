<?php
namespace App\Http\Controllers;

use DB;

class CommonController extends Controller
{
    public function __construct()
    {
        //判断是否拥有权限
//        $this->authorities();

    }



    //查看用户角色
    public function getRole()
    {
        $admin_id = 2;
        $role_id = DB::table('admin_role')->where(['admin_id' => $admin_id])->get();
        $roleId = [];
        foreach ($role_id as $val) {
            $roleId[] = $val['role_id'];
        }

        return $roleId;
    }

    //查看用户用于权限节点
    public function getNode()
    {
        $role_id = $this->getRole();
        $node_id = DB::table('role_node')->whereIn('role_id', $role_id)->get();
        $nodeId = [];
        foreach ($node_id as $val) {
            $nodeId[] = $val['node_id'];
        }
        $nodeList = DB::table('node')->whereIn('node_id', $nodeId)->select('route')->get();
        $routeList = [];
        foreach ($nodeList as $val) {
            $routeList[] = $val['route'];
        }

        return $routeList;
    }

    //判断是否拥有权限
    public function authorities()
    {
        $route = $this->getRoute();
        $routeList = $this->getNode();
        if (!in_array($route, $routeList)) {
            die('no power');
        }
    }

    //获得路由名称
    public function getRoute()
    {
        $action = \Route::current()->getActionName();
        list($class, $method) = explode('@', $action);
        $controller = substr(substr($class,strrpos($class, '\\') + 1), 0, strlen(substr($class,strrpos($class, '\\') + 1)) - strlen('Controller'));

        return strtolower($controller).ucfirst($method);
    }

}
