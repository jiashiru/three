<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Session;
use Storage;
use App\Http\Requests;

class PayController extends Controller
{
    //支付
    public function index()
    {
        $cart_id = Input::get("cart_id");
        $payName = Input::get("payName");
        $res = $this->order($cart_id,$payName);
//        print_r($res);
        if($res){
            if($payName == "alipay"){
//            echo $price;
//                return redirect('alipay/index.php?WIDout_trade_no='.$res['order_number'].'&WIDsubject=3组项目1元购&WIDtotal_fee='.$res['price']);
//                return redirect(pay_url($res['order_number'],$res['price']));
                return redirect(pay_url($res['order_number'],0.01));//测试价钱0。01
//                $url = pay_url(2333443,66565);
            }
        }
    }

    //网银充值
    public function rechange()
    {   
        $price = Input::get("money");
        $payName = Input::get("payName");
//        echo "<a href='$url'>1231</a>";
        $order_number = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
        if($payName=='alipay'){
            return redirect(pay_url($order_number,0.01));//测试价钱0。01
        }
    }

    //生成订单号
    public function order($cart_id,$payName)
    {
        $data['order_number'] = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
        //通过cart_id查询出 要结算的times_id
        $sql = sprintf("select * from cart where cart_id in (%s)",$cart_id);
        $cart = DB::select($sql);
        //计算出价钱
        $price = '';
        $times_id = "";
        foreach($cart as $k=>$v){
            $price = $price + $v['code_number'];
            $times_id = $times_id.",".$v['times_id'];
        }
        $data['times_id'] = substr($times_id,1);
        $data['price']=sprintf("%.2f", $price);
        $data['pay_name'] = $payName;
        $id = DB::table('order')->insertGetId($data);
        return $id ? $data : 0;

//        $price=sprintf("%.2f", $price);
//            echo $price;
//        return redirect('alipay/index.php?WIDout_trade_no=212223121&WIDsubject=1元购&WIDtotal_fee='.$price);


    }



}