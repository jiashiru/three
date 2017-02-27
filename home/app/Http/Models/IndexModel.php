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
    //查看品牌
    public function brand_show()
    {
        $brand = DB::table('goods_brand')->where(['is_show'=>1])->get();
        return $brand;
    }
    //滑动展示最热最新
    public function hot_show($field)
    {
        $data = DB::table('goods')->where([$field=>1,'state'=>1])->limit(8)->get();
        return $data;
    }
    //查看云期
    public function times_show()
    {
        $times = DB::table('goods_times')->where(['state'=>1])->get();
        return $times;
    }
    //即将揭晓
    public function goods_times()
    {
        $data = DB::table('goods_times')->where(['state'=>1])->orderBy('number','asc')->limit(8)->get();
        return $data;
    } 
    //全部商品
    public function goods_all()
    {
        $data = DB::table('goods')->where(['state'=>1])->limit(8)->get();
        return $data;
    }  
}