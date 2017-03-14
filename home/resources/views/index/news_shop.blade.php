<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>商品列表_1元云购</title>
    <meta name="keywords" content="1元云购,一元云购,1元夺宝,一元夺宝,1元云购官网,一元云购官

网,云购网,云购" />
    <meta name="description" content="1元云购是一种全新的购物方式，是时尚、潮流的风向标，能

满足个性、年轻消费者的购物需求，由深圳市一元云购网络科技有限公司注入巨资打造的新型购物网。" 

/>
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" type="text/css" href="style/css/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="style/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-

cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top 

a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts 

li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-

png');
    </script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="style/CSS/GoodsList.css?date=150717" />
    <script language="javascript" type="text/javascript" 

src="style/js/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" 

data="style/js/GoodsList.js"></script>
</head>
<body class="sort" rf="2" id="loadingPicBlock">

<!--顶部-->
@include('public.head')
<!--头部-->
@include('public.header')

<!--导航-->
@include("public.navigation")
<input name="hidSortID" type="hidden" id="hidSortID" value="0" />
<input name="hidBrandID" type="hidden" id="hidBrandID" value="0" />
<input name="hidNvgID" type="hidden" id="hidNvgID" value="101" />
<input name="hidPreView" type="hidden" id="hidPreView" value="0" />
<input name="hidPageIndex" type="hidden" id="hidPageIndex" value="1" />
<input name="hidOrder" type="hidden" id="hidOrder" value="10" />
<input name="hidLimitTag" type="hidden" id="hidLimitTag" value="0" />
<div class="g-main-con clrfix">
    <div class="w1190">


        <!--分类 品牌-->
   <div class="m-list-classification clrfix">
        <!--加载-->
        <div id="" class="g-loading-2014 w1190" style="display: none;"><i></i></div>
    
        <!--列表-->
              <div id="" class="announced-soon clrfix" style="height:300px">
            <?php foreach($new_end as $k=>$v){ ?>
                <div style='height:300px' class="soon-list-con" goodsid="23516" 

codeid="10595378" idx="{{$v['times_id']}}">
                    <div class="soon-list" style="height:300px">
                        <ul>
                            <li class="g-soon-pic">
                              <a href="indexShop?goods_id={{$v['goods_id']}}" 

target="_blank"
                               title="{{$v['keywords']}} {{$v['goods_name']}}" 

rel="nofollow">
                                <img alt="(第qwe云){{$v['keywords']}} {{$v['goods_name']}}"
                                     src="{{$v['goods_picture']}}" />
                            </a>
                            </li>
                            <li class="gray6"  style='margin-left:70px'>
                                    <span>恭喜</span>
                                    <span class="blue">
                                    <a href="setMyself?u_id={{$v['u_id']}}" target="_blank" 

title="{{$v['nickname']}}" class="blue">
                                        {{$v['nickname']}}
                                    </a>
                                  </span>
                                  <span>获得</span>
                            </li>
                             <li class="soon-list-name" style='margin-left:60px'>
                               {{$v['location']}}
                            </li>
                        </ul>

                    </div>
                </div>
            <?php } ?>

</div>
</div>
                <!--无购物车页面版-->
                <div id="divRTool"  class="g-narrow-con" style="display:none;">
                    <div class="m-narrow-list">
                        <ul>
                            <li class="f-pur-records">
                                <div class="u-small-list">
                                    <a href="http://member.1yyg.com/UserBuyList.do" 

target="_blank">
                                        <i></i><cite>云购记录</cite>
                                    </a>
                                </div>
                            </li>
                            <li class="f-client">
                                <div class="u-small-list">
                                    <a  href="http://info.1yyg.com/app/mobile.html" 

target="_blank">
                                        <i></i><cite>手机APP</cite>
                                    </a>
                                    <b class="curr-arrow"><s></s></b>
                                </div>
                                <div class="activateCon">
                                    <div class="u-activate">
                                        <a href="http://info.1yyg.com/app/mobile.html" 

target="_blank">
                                            <img src="style/images/andriod.jpg?

v=20141105"/>
                                            下载客户端
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="f-weixin">
                                <div class="u-small-list">
                                    <a href="http://info.1yyg.com/app/microchannel.html" 

target="_blank">
                                        <i></i><cite>官方微信</cite>
                                    </a>
                                    <b class="curr-arrow"><s></s></b>
                                </div>
                                <div class="activateCon">
                                    <div class="u-activate">
                                        <a 

href="http://info.1yyg.com/app/microchannel.html" target="_blank">
                                            <img src="style/images/1yyg-wx.png?

v=20141105"/>
                                            关注官方微信
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="f-customer-service">
                                <div class="u-small-list">
                                    <a href="javascript:;" class="z-customer-on"  

id="btnRigQQ2">
                                        <i></i><cite>在线客服</cite>
                                    </a><!-- z-customer-off 客服不在线时 -->
                                </div>
                            </li>
                            <li class="f-feedback">
                                <div class="u-small-list">
                                    <a href="http://help.1yyg.com/htm-suggestion.html" 

target="_blank">
                                        <i></i><cite>意见反馈</cite>
                                    </a>
                                </div>
                            </li>
                            <li class="f-back-to" title="返回顶部">
                                <div class="u-small-list">
                                    <a href="javascript:;"><i></i><cite>返回顶部</cite></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <input type="hidden" value="{{$u_id}}" id="u_id" />
        </div>
        <script>
            //加入购物车
            $(".u-cart").click(function(){
                var u_id = $("#u_id").val();
                if(u_id != 0){
                    var times_id = $(this).attr("times_id");
                    var goods_id = $(this).attr("goods_id");
                    $.ajax({
                        type: "POST",
                        url: "buycarAdd",
                        data: 

{times_id:times_id,goods_id:goods_id,u_id:u_id,code_number:1},
                        success: function(msg){
                            if(msg){
//                                alert( "添加购物车成功 ");
                                var res = confirm("添加购物车成功,是否前去购物车");
                                if(res){
                                    window.location="buycarIndex";
                                }
                            }
                        }
                    });
                }else{
                    alert("请先登陆！")
                }

            });

            //直接到结算页面
            $(".u-now").click(function(){
                var u_id = $("#u_id").val();
                if(u_id != 0) {
                    var times_id = $(this).next().attr("times_id");
                    var goods_id = $(this).next().attr("goods_id");
                    $.ajax({
                        type: "POST",
                        url: "buycarAdd",
                        data: 

{times_id:times_id,goods_id:goods_id,u_id:u_id,code_number:1},
                        success: function(msg){
//                            alert(msg)
                            if(msg){
                                window.location="buycaraccount?id_all="+msg;
                            }
                        }
                    });
                }else{
                    alert("请先登陆！")
                }
            });
            $("#btnGoPay").click(function(){
                var id = $("#buy").val();
                if(id != ""){
                    $("#buycar").submit();
                }
            });
            //类型分类搜索
            $
        </script>

        <!--分页-->
        <div id="divPageNav"></div>

    </div>
</div>
<!--底部-->
@include('public/footer')


<script language="javascript" type="text/javascript">
    var Base = { head: document.getElementsByTagName("head")[0] || 

document.documentElement, Myload: function (B, A) { this.done = false; B.onload = 

B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState 

=== "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = 

B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } 

} }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } 

var D = document.createElement("script"); D.setAttribute("language", "javascript"); 

D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild

(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != 

undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", 

"text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); 

this.head.appendChild(C); this.Myload(C, B) } }
    function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring

(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + 

(D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
    Base.getScript('style/js/Bottom.js?v=' + GetVerNum());
</script>
<div style="display: none;">
    <script type="text/javascript" language="JavaScript" 

src="http://s22.cnzz.com/stat.php?id=3362429&web_id=3362429"  async="async"></script>
</div>
<link type="text/css" rel="stylesheet" href="https://skin.1yyg.net/CSS/pageDialog.css?

v=161208" />
<script language="javascript" type="text/javascript" 

src="https://skin.1yyg.net/js/pageDialog.js?v=161208"></script>
<div class="pageDialogBG" id="pageDialogBG"></div>
<div class="pageDialogBorder" id="pageDialogBorder"></div>
<div class="pageDialog" id="pageDialog">
    <div class="pageDialogClose" id="pageDialogClose" title="关闭"></div>
    <div class="pageDialogMain" id="pageDialogMain"> </div>
</div>
</body>
</html>
