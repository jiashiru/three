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
        if($payName == "alipay"){
            $sql = sprintf("select * from cart where cart_id in (%s)",$cart_id);
            $cart = DB::select($sql);
            $price = '';
            foreach($cart as $k=>$v){
                $price = $price + $v['code_number'];
            }
            $price=sprintf("%.2f", $price);
//            echo $price;
        return redirect('alipay/index.php?WIDout_trade_no=21222312&WIDsubject=1元购&WIDtotal_fee='.$price);
        }
    }

    //网银充值
    public function rechange()
    {   
        $price = Input::get("money");

        $price=sprintf("%.2f", $price);
//            echo $price;
        return redirect('alipay/index.php?WIDout_trade_no=212223121&WIDsubject=1元购&WIDtotal_fee='.$price);

    }


}