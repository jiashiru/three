<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Models\IndexModel as index_m;

class IndexController extends Controller
{

    public function __construct()
    {
        session_start();
    }

    //主页
    public function index()
    {
        //查询商品的 分类表 与 类型表 并且处理数组
        $goods_type = $this->type_and_category();
        //获取当前服务器时间，用户主页下面
        $time = $this->server_time();

        return view("index/index",[
            'goods_type'=>$goods_type,//分类表 与 类型表
            'time'=>$time,//分类表 与 类型表
        ]);
    }

    //查询商品的 分类表 与 类型表 并且处理数组
    public function type_and_category()
    {
        $model = new index_m();
        //查询商品的分类表
        $goods_type = $model->type_show();
        //查询分类表下面的类型
        $goods_category = $model->cate_show();
        foreach($goods_type as $k=>$v)
        {
            foreach($goods_category as $key=>$val)
            {
                if($v['type_id'] == $val['parent_id'])
                {
                    $goods_type[$k]['category'][] = $goods_category[$key];
                }
                if (!array_key_exists("category",$goods_type[$k]))
                {
                    $goods_type[$k]['category'] = array();
                }
            }
        }
        return $goods_type;
    }
    //查询轮播图
    public function carousel()
    {
        //查询轮播图
        $model = new index_m();
        $carousel = $model->carousel_show();
        return  json_encode($carousel);
    }
    //根据 传的参数 查询出热门推荐、新品上架
    public function hot()
    {
        $field = Input::get('field');
        $model = new index_m();
       //查看品牌
        $brand = $model->brand_show();
        //查看云期
        $times = $model->times_show();
        //参与的人数
        if ($field != 'state') 
        {
            $data = $model->hot_show($field);
            $data = $this->show_filed($data,$brand,$times);
            return  json_encode($data);
        }
        else
        {
            $goods_times = $model->goods_times();
            $goods = $model->goods_all();  
            foreach ($goods_times as $key => $value) 
            {
                foreach ($goods as $ke => $val) 
                {
                    if ($val['goods_id']==$value['goods_id']) 
                    {
                        $goods_times[$key]['goods_id'] = $val['goods_id'];
                        $goods_times[$key]['brand_id'] = $val['brand_id'];
                        $goods_times[$key]['goods_name'] = $val['goods_name'];
                        $goods_times[$key]['goods_price'] = $val['goods_price'];
                        $goods_times[$key]['goods_picture'] = $val['goods_picture'];
                    }
                }
            }
            foreach ($goods_times as $key => $val) 
            {
                  foreach ($brand as $k => $v) 
                  {
                        if ($val['brand_id']==$v['brand_id']) 
                        {
                            $goods_times[$key]['brand_name'] = $v['brand_name'];
                            if ($v['brand_desc']) 
                            {
                                $goods_times[$key]['brand_desc'] = $v['brand_desc'];
                            }
                        }
                  }
            }
  
            return json_encode($goods_times);
        }

    }
    public function show_filed($data,$brand,$times)
    {
           
            foreach ($data as $key => $val) 
            {
                foreach ($brand as $k => $v) 
                {
                    if ($val['brand_id']==$v['brand_id']) 
                    {
                        $data[$key]['brand_name'] = $v['brand_name'];
                        if ($v['brand_desc']) 
                        {
                            $data[$key]['brand_desc'] = $v['brand_desc'];
                        }
                    }
                }
                foreach ($times as $key => $value) 
                {
                    if ($value['goods_id']==$val['goods_id']) 
                    {
                        if ($value['times']&&$value['number']) 
                        {
                            $data[$key]['times'] = $value['times'];
                            $data[$key]['number'] = $value['number'];
                            $data[$key]['num'] = $val['goods_price']-$value['number'];
                        }
                    }
                }
            }
            return $data;
    }

    //分类
    public function classify()
    {
        return view("index/classify");
    }
    //商品详情
    public function shop()
    {
        if (isset($_SESSION['u_id'])) 
        {
           $u_id = $_SESSION['u_id'];
        }
        else
        {
            $u_id = '';
        }
        //接受商品的ID
        $goods_id = Input::get("goods_id");
        //该商品的所有云期
        $times_all = DB::table('goods_times')->where(['goods_id'=>$goods_id])->orderBy('times','desc')->get();
        //该商品现在的云期
        $times_ing = DB::table('goods_times')->where(['goods_id'=>$goods_id,'state'=>1])->first();
        //查询本商品的信息
        $goods = DB::table("goods")->where(['goods_id'=>$goods_id])->first();
        $content = DB::table('goods_content')->where(['goods_id'=>$goods_id])->first();
        return view("index/shop",[
                        'goods'=>$goods,
                        'content'=>$content['goods_content'],
                        'times'=>$times_all,
                        'times_ing'=>$times_ing,
                        'session_u'=>$u_id
                    ]);
    }
    //查询单个商品的 商品图片
    public function goods_photo()
    {
        $goods_id = Input::get("goods_id");
        $goods_gallery = DB::table("goods_gallery")->where(['goods_id'=>$goods_id,'img_type'=>0])->get();
        echo json_encode($goods_gallery);
    }
    //获取当前服务器时间，用户主页下面
    public function server_time()
    {
        $data['h'] = date("H",time());
        $data['i'] = date("i",time());
        $data['s'] = date("s",time());
        return $data;
    }
    
}
