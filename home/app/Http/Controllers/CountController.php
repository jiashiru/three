<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class CountController extends Controller
{

	//计算
	public function get($goods_id,$times_id)
	{

		//获取计算所需的信息
		$goods = $this->getShop($goods_id, $times_id);
		$price = $goods['goods_price'];
		$num = $this->checkNum();
		//获取最后的中奖号码
		$code = $this->checkCode($price, $num);
		echo $code;die;
		//调用方法更改该商品中奖号码的状态
		$res = $this->addCode($goods_id, $code, $times_id);
		if($res)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	//获取该商品的信息
	public function getShop($goods_id)
	{
		return DB::table("goods")->where(["goods_id"=>$goods_id])->first();
	}

	//时间戳总数计算
	private function checkNum()
	{
		//获取当前网站中最后100条成交数据的成交时间
		$data = DB::table("goods_code")->limit(100)->get();

		//通过循环将数据的值相加
		$num = 0;
		foreach ($data as $key => $value) 
		{
			$num+=$value['buy_time'];
		}

		return $num;
	}

	//通过计算获取最后的中奖号码
	public function checkCode($price, $time)
	{
		// $price = intval($price);
		// echo $price;die;
		// $time = intval($time);
		// echo $time;die;
		return $time%$price+10000001;
	}
	
	//修改中奖号码状态
	public function addCode($goods_id, $code, $times_id)
	{
		return DB::table("goods_code")->where(['goods_id'=>$goods_id, "code"=>$code, "times_id"=>$times_id])->update(['state'=>1]);
	}
}	
