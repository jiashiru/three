<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
/**
 * 首页
 */
class IndexModel extends Model
{
    public function type_show()
    {
        //查询商品的分类表
        $goods_type = DB::table("goods_type")->get();
        return $goods_type;
    }
    public function cate_show()
    {
        //查询分类表下面的类型
        $goods_category = DB::table("goods_category")->get();
        return $goods_category;
    }
    //查询轮播图
    public function carousel_show()
    {
        $carousel = DB::table("carousel")->get();
        return $carousel;
    }

    //滑动展示最热最新
    public function hot_show($field)
    {
        $data = DB::table('goods')->where([$field=>1,'state'=>1])->limit(8)->get();
        return $data;
    }
    //云期
    public function show_times($goods_id)
    {
        $data = DB::table('goods_times')->select('goods_id','times','state','number')->where(['state'=>1])->whereIn('goods_id',$goods_id)->get();
        return $data;
    }
    //即将揭晓
    public function goods_times($state)
    {
        $data = DB::table('goods_times')->where(['state'=>$state])->orderBy('number','asc')->limit(8)->get();
        return $data;
    }

    //正在云购
    public function code($limit)
    {
        $data = DB::table('goods_code')->orderBy('buy_time','desc')->limit($limit)->get();
        return $data;
    }
    //用户（*）
    public function user_name($uid)
    {
        $data = DB::table('user_information')->select('nickname','u_img','location')->where(['u_id'=>$uid])->first();
        return $data;
    }
    //商品（*）
    public function goods_name($goods_id)
    {
        $data = DB::table('goods')->select('goods_name','brand_id','goods_desc','goods_id')->where(['goods_id'=>$goods_id])->first();
        return $data;
    }
    //品牌（*）
    public function goods_brand($brand_id)
    {
        $data = DB::table('goods_brand')->select('brand_name','brand_id','brand_desc')->whereIn('brand_id',$brand_id)->get();
        return $data;
    }
    //商品
    public function goods_in($goods_id)
    {
        $data = DB::table('goods')->select('goods_name','brand_id','goods_desc','goods_id','goods_picture')->whereIn('goods_id', $goods_id)->get();
        return $data;
    }
    //中奖人
    public function user_code($t_id)
    {
        $data = DB::table('goods_code')->where(['state'=>1])->whereIn('times_id',$t_id)->get();

        return $data;
    }
    // //中奖人信息
    // public function user_info($u_id)
    // {
    //     $data = DB::table('user_information')->select('nickname','location')->whereIn('u_id',$u_id)->get();
    //      return $data;
    // }
}