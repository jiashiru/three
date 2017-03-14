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
        if(empty($_SESSION['u_id'])){
            $u_id = 0;
        }else{
            $u_id = $_SESSION['u_id'];
        }

        //查询商品的 分类表 与 类型表 并且处理数组
        $goods_type = $this->type_and_category();
        //获取当前服务器时间，用户主页下面
        $time = $this->server_time();
        //获取最新 揭晓
        $new_end = $this->newest();
        //正在云购
        $goods_code = $this->code();
        //广告下的推荐
        $remmend = $this->remmend();
   
        return view("index/index",[
            'goods_type'=>$goods_type,//分类表 与 类型表
            'time'=>$time,//分类表 与 类型表
            'new_end'=>$new_end,//获取最新 揭晓
            'goods_code'=>$goods_code,//获取最新 揭晓

            'u_id'=>$u_id,//用户ID


            'remmend'=>$remmend

        ]);
    }
    //广告下方的推荐（最好）
    public function remmend()
    {
       $remmend = DB::table('goods')->where(['is_best'=>1])->limit(2)->get();
       foreach ($remmend as $key => $v) 
       {
           $goods_id[] = $v['goods_id'];
       }

       $goods_times = DB::table('goods_times')->where(['state'=>1])->whereIn('goods_id',$goods_id)->get();
       foreach ($remmend as $key => $v) 
       {
           $remmend[$key]['num_price'] = $v['goods_price']-$goods_times[$key]['number'];
       }
       return $remmend;
    }
    //获取正在云购的信息
    public function code()
    {
        $goods_code = DB::table("goods_code")->orderby('code_id',"desc")->limit(14)->get();
        //提取goods_id  u_id
        $goods_id_all = array();
        $user_id = array();
        foreach($goods_code as $k=>$v){
            $goods_id_all[] = $v['goods_id'];
            $user_id[] = $v['u_id'];
        }
        //用户信息
        $user = DB::table('user_information')->wherein('u_id',$user_id)->get();
        //商品信息
        $goods = DB::table("goods")->wherein("goods_id",$goods_id_all)->get();
        foreach($goods_code as $k=>$v){
            foreach($goods as $key=>$val){
                if($v['goods_id'] == $val['goods_id']){
                    $goods_code[$k]['keywords'] = $val['keywords'];//品牌
                    $goods_code[$k]['goods_name'] = $val['goods_name'];//名字
                    $goods_code[$k]['goods_desc'] = $val['goods_desc'];//描述
                }
            }
            foreach($user as $a=>$b){
                if($v['u_id'] == $b['u_id']){
                    $goods_code[$k]['nickname'] = $b['nickname'];
                    $goods_code[$k]['u_img'] = $b['u_img'];
                }
            }
        }

        return $goods_code;
    }
    //获取最新 揭晓
    public function newest()
    {
        //查询表 中 最新的数据
        $goods_code = DB::table("goods_code")->where(['state'=>1])->orderby('buy_time',"desc")->get();
        //提取goods_id  u_id
        $goods_id_all = array();
        $user_id = array();
        foreach($goods_code as $k=>$v){
            $goods_id_all[] = $v['goods_id'];
            $user_id[] = $v['u_id'];
        }

        //查询用户信息
        $user = DB::table("user_information")->wherein('u_id',$user_id)->get();
        foreach($goods_code as $k=>$v){
            foreach($user as $key=>$val){
                if($v['u_id'] == $val['u_id']) {
                    $goods_code[$k]['nickname'] = $val['nickname'];//昵称
                    $goods_code[$k]['location'] = $val['location'];//地区
                }
            }
        }
        //查询商品信息
        $goods = $this->goods_mess($goods_id_all);
        $times = DB::table('goods_times')->where(['state'=>3])->wherein('goods_id',$goods_id_all)->get();

        //获奖者信息
        foreach($goods_code as $k=>$v){
            foreach($goods as $key=>$val){
                if($v['goods_id'] == $val['goods_id']){
                    $goods_code[$k]['goods_picture'] = $val['goods_picture'];//图片
                    $goods_code[$k]['keywords'] = $val['keywords'];//品牌
                    $goods_code[$k]['goods_name'] = $val['goods_name'];//名字
                }
            }
            foreach($times as $a=>$b){
                if($v['goods_id'] == $b['goods_id']){
                    $goods_code[$k]['times'] = $b['times'];
                }
            }
        }

        return $goods_code;
    }
    //查询商品信息
    public function goods_mess($goods_id_all)
    {
        $goods = DB::table("goods")->wherein('goods_id',$goods_id_all)->get();
        //查询品牌
        $goods_all = array();
        foreach($goods as $K=>$v){
            $goods_all[] = $v['brand_id'];
        }
        $brand_goods = DB::table("goods_brand")->wherein('brand_id',$goods_all)->get();
        foreach($goods as $k=>$v){
            foreach($brand_goods as $key=>$val){
                if($v['brand_id'] == $val['brand_id']){
                    $goods[$k]['brand_name'] = $val['brand_name'];
                }
            }
        }


        return $goods;
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
        //判断接的值  ， 是查询的什么类型
        //查询的不是即将揭晓的
        if ($field != 'state') 
        {
            //按条件查询 goods表 查询的最新或者最热
            $goods = DB::table('goods')->where([$field=>1,'state'=>1])->limit(8)->get();
            //处理最新 和 热门的商品信息
            $goods = $this->hot_new($goods);

            return  json_encode($goods);
        } else {
            //查询即将揭晓
            $goods_time = DB::table("goods_times")->where(['state'=>1])->orderBy('number','asc')->limit(8)->get();

            $goods = $this->be_about_to($goods_time);


//            print_r($goods);
            return json_encode($goods);
        }

    }

    //处理最新 和 热门的商品信息
    public function hot_new($goods)
    {
        $goods_id_all = array();;//用goods_id查询云期
        $brand_id = array();;//用 查goods_brand表的品牌
        foreach($goods as $k=>$v){
            $goods_id_all[] = $v['goods_id'];
            $brand_id[] = $v['brand_id'];
        };
        //根据商品ID 查询 goods_brand表
        $brand_goods = DB::table("goods_brand")->wherein('brand_id',$brand_id)->get();
        //根据商品ID 查询 goods_times表
        $times_goods = DB::table("goods_times")->where(['state'=>1])->wherein('goods_id',$goods_id_all)->get();
        //处理数组
        $goods = $this->hot_new_array($goods,$brand_goods,$times_goods);

        return $goods;
    }

    //处理即将揭晓的商品
    public function be_about_to($goods_time)
    {
        $goods_time_id_all = array();
        foreach($goods_time as $k=>$v){
            $goods_time_id_all[] = $v['goods_id'];
        }
        //用goods_time表中的ID 查询goods表   查询goods中商品的信息  返回要展示的商品的信息
        $goods = DB::table("goods")->wherein('goods_id',$goods_time_id_all)->get();
        //查询品牌
        $goods_all = array();
        foreach($goods as $K=>$v){
            $goods_all[] = $v['brand_id'];
        }
        $brand_goods = DB::table("goods_brand")->wherein('brand_id',$goods_all)->get();

        //处理数组
        $goods = $this->hot_new_array($goods,$brand_goods,$goods_time);

        return $goods;
    }

    //处理数组
    public function hot_new_array($goods,$brand_goods,$goods_time)
    {
        //处理品牌的数组
        foreach($goods as $k=>$v){
            foreach($brand_goods as $key=>$val){
                if($v['brand_id'] == $val['brand_id']){
                    $goods[$k]['brand_name'] = $val['brand_name'];
                }
            }
        }

        //处理云期的数组
        foreach($goods as $k=>$v){
            foreach($goods_time as $key=>$val){
                if($v['goods_id'] == $val['goods_id']){
                    $goods[$k]['times'] = $val['times'];
                    $goods[$k]['number'] = $val['number'];
                    $goods[$k]['participation'] = $v['goods_price'] - $val['number'];
                }
            }
        }

        return $goods;
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
        $goods_type = $this->type_and_category();//全部商品分类
        $nav = sel_nav();
        return view("index/shop",[
            'nav'=>$nav,
            'goods_type'=>$goods_type,
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
        $data['h'] = date("H", time());
        $data['i'] = date("i", time());
        $data['s'] = date("s", time());


        return json_encode($data);
    }



    //分类
    public $array;
    public function classify()
    {

        if(empty($_SESSION['u_id'])){
            $u_id = 0;
        }else{
            $u_id = $_SESSION['u_id'];
        }

        //查询导航
        $nav = sel_nav();

        $data['order'] = empty(Input::get("order")) ? "default" : Input::get("order");
        $data['type_id'] = empty(Input::get("type_id")) ? "all" : Input::get("type_id");

        //查询分类
        $goods_type = DB::table("goods_type")->get();
        $goods_type = $this->type_and_category();

        //查询品牌
        $goods_brand = DB::table("goods_brand")->get();

        //查询正在卖的商品  在goods_times表中
        $goods_times = DB::table("goods_times")->where(['state'=>1])->get();
        $goods_times_id = $this->extract_id($goods_times,"goods_id");

        //查询商品表
        $goods = $this->goods_where($data,$goods_times_id);

        //处理数组
        $goods = $this->goods_array($goods,$goods_times,$goods_brand);


        return view("index/classify",[
            'nav'=>$nav,//查询导航
            'goods_type'=>$goods_type,//查询出所有分类
            'data'=>$data,//根据条件排序
            'goods'=>$goods,//查询的商品
            'u_id'=>$u_id,//用户ID

        ]);
    }
    //提取ID
    public function extract_id($array,$val)
    {
        $goods_times_id = array();
        foreach($array as $k=>$v){
            $goods_times_id[]=$v[$val];
        }

        return $goods_times_id;
    }
    //处理数组
    public function goods_array($goods,$goods_times,$goods_brand)
    {
        foreach($goods as $k=>$v){
            //获取该商品的云期
            foreach($goods_times as $key=>$val){
                if($v['goods_id'] == $val['goods_id']){
                    $goods[$k]['times'] = $val['times'];
                    $goods[$k]['times_id'] = $val['times_id'];
                    $goods[$k]['number'] = $val['number'];
                    $goods[$k]['participation'] = $v['goods_price']-$val['number'];
                }
            }
            //获取品牌
            foreach($goods_brand as $key=>$val){
                if($v['brand_id'] == $val['brand_id']){
                    $goods[$k]['brand_id'] = $val['brand_id'];
                }
            }
        }

        return $goods;
    }

    //根据条件查询goods表
    public function goods_where($data,$times_id)
    {
        if($data['order'] == "default"){
            $order = "goods_id";
        }else{
            $order = $data['order'];
        }

        if($data['type_id'] == "all"){
            $goods = DB::table("goods")->wherein('goods_id',$times_id)->orderby($order)->get();
        }else{
            $where['type_id'] = $data['type_id'];
            $goods = DB::table("goods")->where($where)->wherein('goods_id',$times_id)->orderby($order)->get();
        }


        return $goods;
    }

    //header头里面的查询
    public function header_sel()
    {
        $data['type_name'] = Input::get('content');
        $arr = DB::table('goods_type')->where($data)->first();
        if($arr){
            return $arr['type_id'];
        }else{
            return "all";
        }
    }



}
