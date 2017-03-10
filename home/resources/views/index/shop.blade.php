
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="htmlHead"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>
        苹果（Apple）iMac MK462CH/A 27英寸一体电脑 苹果（Apple）iMac MK462CH/A 27英寸一体电脑_1元云购
    </title><meta name="Description" content="配备Retina 5K 显示屏的iMac，画质如此夺目，足以让画面之外的世界都顿显失色！" />
    <meta name="keywords" content="苹果,Apple,苹果一体机,苹果电脑,苹果 电脑,电脑,一体机,苹果462,苹果 462,iMac,苹果iMac,苹果 iMac,imac,IMAC,Apple iMac," />
    <link rel="stylesheet" type="text/css" href="style/css/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="style/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]--><link rel="stylesheet" type="text/css" href="style/CSS/GoodsDetail.css?v=160718" />
    <script language="javascript" type="text/javascript" src="style/JS/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="style/JS/GoodsDetail.js"></script>
</head>

<body id="loadingPicBlock" rf="2" goods_id="<?php echo $goods['goods_id'] ?>">

<!--顶部-->
@include("public.head")
        <!--头部-->

@include("public.header")

        <!--导航-->
@include("public.navigation")

<input name="hidGoodsID" type="hidden" id="hidGoodsID" value="22592" />
<input name="hidCodeID" type="hidden" id="hidCodeID" value="8629237" />
<input name="hidTitle" type="hidden" id="hidTitle" value="苹果（Apple）iMac MK462CH/A 27英寸一体电脑&lt;span class=&quot;o-info&quot;>配备Retina 5K 显示屏的iMac，画质如此夺目，足以让画面之外的世界都顿显失色！&lt;/span>" />
<input name="hidGoodsTag" type="hidden" id="hidGoodsTag" value="0" />
<input name="hidCodeState" type="hidden" id="hidCodeState" value="1" />
<input name="hidMostPeriod" type="hidden" id="hidMostPeriod" value="1666" />
<input name="hidIsEnd" type="hidden" id="hidIsEnd" value="0" />
<input name="hidLimitBuy" type="hidden" id="hidLimitBuy" value="0" />
<input name="hidSnImg" type="hidden" id="hidSnImg" value="4D661CAB8CC1EA57926C700FF19CFE81" />
<!--当前位置-->

<div class="ng-wrap">
    <div id="ng_pt_line" class="ng-pt-line"></div>
    <div id="divMain" class="ng-main-wrapper">
        <!--期数-->
        <div class="ng-total-nav">
            <ul class="ng-sort clearfix">
                   <?php foreach ($times as $k => $v) { 
                        if ($v['state']==1) 
                        {
                          echo '<li class="current now "><a href="javascript:;" title="第'.$v['times'].'云进行中">第'.$v['times'].'云进行中<span class="dotting"></span></a></li>';
                        }
                        else
                        {
                          echo '<li class=""><a href="http://www.1yyg.com/lottery/8629234.html" title="第'.$v['times'].'云">第'.$v['times'].'云</a></li>'; 
                        }
                  } ?>
                <li id="li_more"><a href="javascript:;" title="更多">更多<i>+</i></a></li>
                
            </ul>
        </div>

        <!--商品信息 begin-->
        <div id="divMainInfo" class="ng-main clearfix">
            <!--图片展示-->
            <div class="ng-goods-img">

                <img id="imgGoodsPic" alt="" src="" style="display: none;" />
                <div id="middle" class="ng-middle-box">
                    <img class="z-middle-loading" style="width:343px;height:343px; "
                         src="{{$goods['goods_picture']}}" alt="加载中..." />
                </div>
                <div class="ng-goods-piclist">
                    <div class="ng-goods-btn prev ng-box-bg" style="display: none;"></div>
                    <div class="ng-list-wrapper">
                        <ul id="mycarousel" class="ng-list-inner clearfix" style="width: 999px;">

                            {{--<li>--}}
                                {{--<img width="40" height="40"  src="style/images/20160511140647469.jpg" alt="" name="20160511140647469.jpg" />--}}
                            {{--</li>--}}

                            {{--<li>--}}
                                {{--<img width="40" height="40"  src="style/images/20151026092740751.jpg" alt="" name="20151026092740751.jpg" />--}}
                            {{--</li>--}}



                        </ul>
                    </div>
                    <div class="ng-goods-btn next ng-box-bg" style="display: none;"></div>
                </div>
                <script>
                    $(function(){
                        var goods_id = $("#loadingPicBlock").attr("goods_id");
                        $.ajax({
                            type: "POST",
                            url: "indexGoods_photo",
                            data: {goods_id:goods_id},
                            dataType: "json",
                            success: function(msg){
                                img(msg);
                            }
                        });
                        function img(msg)
                        {
                            var str = "";
                            $.each(msg,function(k,v){
                                str += '<li class="small">';
                                str += '<img width="40" height="40"  src="'+ v.img_path_tiny+'" alt="" name="20160511140647469.jpg" />';
                                str += '</li>';
                            });

                            $("#mycarousel").html(str);


                        }
                    });
                </script>
                <script>
                    $(document).on("mouseover",".small",function(){
                        var img = $(this).children().attr('src');
//                        alert("big/"+img)
                        var middle_src = "big/"+img;
                        $("#middle").children().attr('src',middle_src);
                    });
                </script>
                <div class="ng-share-out">
                    <a id="a_sc" href="javascript:;" class="sc"><i class="t-icon sc-icon ng-box-bg"></i>关注</a>
                    <div class="fx">
                        <div class="fx-txt">
                            <i class="t-icon fx-icon ng-box-bg"></i>分享
                        </div>
                        <div>
                            <div class="fx-out-inner">
                                <div class="bdsharebuttonbox">
                                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                                    <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                                    <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                                    <!--<a href="#" class="bds_more" data-cmd="more"></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--正在进行中-->
            <div class="ng-goods-detail">

                <h2 class="o-title">
                    <span class="num" id = 'times_num' >

                                (第
                                   {{$times_ing['times']}}
                                云)
                    </span>
                    <?php echo $goods['goods_name'] ?>
                    <span class="o-info"><?php echo $goods['goods_desc'] ?></span>
                </h2>
                <p class="text-left price o-p">
                    价值：￥<?php echo $goods['goods_price'] ?>
                </p>
                <div class="line-time">
                    <div class="text-wrapper clearfix">
                        <div class="now-has">
                                            <span>
                                             {{$goods['goods_price']-$times_ing['times']}}</span>
                            <p>已参与</p>
                        </div>
                        <div class="total-has">
                                            <span id="CodeQuantity">
                                            <?php echo $goods['goods_price'] ?></span>
                            <p>总需人次</p>
                        </div>
                        <div class="overplus-has">
                                            <span id="CodeLift">
                                             {{$times_ing['number']}}</span>
                            <p>剩余</p>
                        </div>
                    </div>
                </div>
                <div class="my-buy clearfix">
                    <p class="mine">我要参与</p>
                    <div id="divNumber" class="option-wrapper clearfix">
                        <a href="javascript:;" class="mius">-</a>
                        <input type="text" class="input-num" id = 'code_number' value="1" />
                        <a href="javascript:;" class="add">+</a>

                    </div>
                    @if($goods['is_limit']==0)
                    <ul class="check-num clearfix"><li>10</li><li>50</li><li>100</li><li>200</li></ul>
                    <p class="fl">人次</p>
                    @endif
                    <div class="mine-prob" style="display:none;" ><i></i></div>
                    <span id="span_tip">
                        @if($goods['is_limit']==1)
                          <div class="xg-tips">
                            <i></i>
                            限购
                            <span>{{$goods['limit_number']}}</span>
                            人次
                            </div>
                            @endif
                    </span>
                </div>
                <div id="divBuy" class="consume-wrapper clearfix">
                    <a href="javascript:;" class="consume-now">立即1元云购</a>
                    <a href="javascript:;" class="consume-addcar" id='buycart'>加入购物车</a>
                    <div class="min-code-con">
                        <a href="javascript:;"><i class="ng-xq-bg"></i></a>
                        <div class="code-show" style="display:none;">
                            <span>使用手机扫码参与</span>
                            <img src="" />
                            <b class="white-sub"><b></b></b>
                        </div>
                    </div>

                </div>

                <div class="about-tips clearfix">
                    <ul class="f-inner clearfix">
                        <li class="z-beginning">三大服务保证：</li>
                        <li><a href="http://help.1yyg.com/htm-genuinetwo.html" target="_blank"><i class="ng-xq-bg t1"></i>100%公平公正</a></li>
                        <li class="z-lines"><b></b></li>
                        <li><a href="http://help.1yyg.com/htm-genuine.html" target="_blank"><i class="ng-xq-bg t2"></i>100%正品保证</a></li>
                        <li class="z-lines"><b></b></li>
                        <li><a href="http://help.1yyg.com/htm-deliveryFees.html" target="_blank"><i class="ng-xq-bg t3"></i>全国免费配送</a></li>
                    </ul>
                </div>

                <div class="advert-wrapper">
                    <ul class="select-wrapper">
                        <li class="gray9">怎么玩儿<i class="ng-xq-bg"></i></li>
                    </ul>
                    <div id="div_advertinner" class="advert-inner clearfix">
                        <div class="advert-list01 advert-m">
                            <div class="ad-icon01 ng-xq-bg"></div>
                            <p class="ad-title">选择商品</p>
                            <p class="ad-info">
                                选择心仪商品<br /> 点击立即1元云购
                            </p>
                            <div class="arrow ng-xq-bg"></div>
                        </div>
                        <div class="advert-list02 advert-m">
                            <div class="ad-icon02 ng-xq-bg"></div>
                            <p class="ad-title">支付1元</p>
                            <p class="ad-info">
                                支持1元<br /> 获得1个云购码
                            </p>
                            <div class="arrow ng-xq-bg"></div>
                        </div>
                        <div class="advert-list03 advert-m">
                            <div class="ad-icon03 ng-xq-bg"></div>
                            <p class="ad-title">揭晓幸运儿</p>
                            <p class="ad-info">
                                当1件商品的所有份额都获得<br /> 支持后，计算出幸运获得者
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--揭晓倒计时-->

            <!--右侧：云购记录-->
            <div class="ng-goods-buy">
                <!--进行中状态-->

                <div class="ng-buy-list">
                    <div id="div_buynav" class="ng-buy-nav">
                        <a href="javascript:;" title="最新云购记录" class="ng-fl current">最新云购记录</a>
                        <a href="javascript:;" title="我的云购记录" class="ng-fr">我的云购记录</a>
                        <div class="b-line"></div>
                    </div>
                    <div id="div_goodsrecord" class="list-wrap">
                        <div class="my-list">
                            <ul id="UserBuyNewList" class="list">

                                <li><a rel="nofollow" href="http://u.1yyg.com/1016445258" title="不中就删YG掉" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20170217183509670.jpg" width="22" height="22"></i>不中就删YG掉</a>
                                                        <span class="buy-num">
															1
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1009842942" title="今天不中从此卸载不玩" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20161114141451781.jpg" width="22" height="22"></i>今天不中从此卸载不玩</a>
                                                        <span class="buy-num">
															2
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1016516623" title="很久没中了随便漏点我" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20170217191121557.jpg" width="22" height="22"></i>很久没中了随便漏点我</a>
                                                        <span class="buy-num">
															3
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1008541775" title="春节没车开" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20151222025209994.jpg" width="22" height="22"></i>春节没车开</a>
                                                        <span class="buy-num">
															5
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1013260667" title="在不中就生气了我汉奸" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20160524175045811.jpg" width="22" height="22"></i>在不中就生气了我汉奸</a>
                                                        <span class="buy-num">
															1
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1010151038" title="是不是该给个安慰奖了" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20161115153934319.jpg" width="22" height="22"></i>是不是该给个安慰奖了</a>
                                                        <span class="buy-num">
															1
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1009054983" title="中奖中奖啦中奖中奖啦" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/00000000000000000.jpg" width="22" height="22"></i>中奖中奖啦中奖中奖啦</a>
                                                        <span class="buy-num">
															22
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1016220404" title="来中-50-100-150-200" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20170217225732948.jpg" width="22" height="22"></i>来中-50-100-150-200</a>
                                                        <span class="buy-num">
															100
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1010836581" title="命里无时莫强求0117" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20170223111005932.jpg" width="22" height="22"></i>命里无时莫强求0117</a>
                                                        <span class="buy-num">
															7
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1016360481" title="给辆汽车好过年" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20170102173955880.jpg" width="22" height="22"></i>给辆汽车好过年</a>
                                                        <span class="buy-num">
															1
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1010312580" title="给爸爸换台高大尚手机" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20170220001349560.jpg" width="22" height="22"></i>给爸爸换台高大尚手机</a>
                                                        <span class="buy-num">
															3
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1010174899" title="2017永发" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20161025223726147.jpg" width="22" height="22"></i>2017永发</a>
                                                        <span class="buy-num">
															5
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1012399533" title="云狗全球好中车速度来" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20160922020059255.jpg" width="22" height="22"></i>云狗全球好中车速度来</a>
                                                        <span class="buy-num">
															5
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1012069512" title="云兄再不中奖哭倒长城" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20160924204220901.jpg" width="22" height="22"></i>云兄再不中奖哭倒长城</a>
                                                        <span class="buy-num">
															1
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1008685006" title="爱在公元前点灯" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20170223105915438.jpg" width="22" height="22"></i>爱在公元前点灯</a>
                                                        <span class="buy-num">
															1
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1012760033" title="猜不透你是人是鬼" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20170220142132438.jpg" width="22" height="22"></i>猜不透你是人是鬼</a>
                                                        <span class="buy-num">
															4
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1011246115" title="恭喜您成为获" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/00000000000000000.jpg" width="22" height="22"></i>恭喜您成为获</a>
                                                        <span class="buy-num">
															2
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1016516623" title="很久没中了随便漏点我" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20170217191121557.jpg" width="22" height="22"></i>很久没中了随便漏点我</a>
                                                        <span class="buy-num">
															6
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1013516549" title="我要汽车--" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20160403104519507.jpg" width="22" height="22"></i>我要汽车--</a>
                                                        <span class="buy-num">
															1
																</span>人次</li>

                                <li><a rel="nofollow" href="http://u.1yyg.com/1012070168" title="再不中车鱼死网破" target="_blank" class="buy-name"><i class="head-s-pic"><img src="http://img.1yyg.net/UserFace/30/20170223015516496.jpg" width="22" height="22"></i>再不中车鱼死网破</a>
                                                        <span class="buy-num">
															16
																</span>人次</li>

                            </ul>
                        </div>
                        <a href="javascript:;" style="display: none;" class="select-all">查看全部</a>
                    </div>

                    <div id="div_myrecord" class="list-wrap" style="display: none;">
                        <div class="my-record">
                            <!--未登录-->
                            <div class="no-login-wrapper">
                                <div class="gth-icon transparent-png"></div>
                                <p class="ng-see-mycord">请您<a id="a_login" href="javascript:;">登录</a>后查看云购记录！</p>
                            </div>
                        </div>
                        <a href="javascript:;" style="display: none;" target="_blank" class="select-all">查看全部</a>
                    </div>
                </div>


                <!--结束状态-->

            </div>
            <!--清除浮动-->
            <div class="clear"></div>
        </div>
    </div>

    <!--中间浮动导航-->
    <div id="div_menu" class="ng-goods-option">
        <ul id="ul_menu" class="options-menu">
            <li class="current"><span>商品详情</span><i class="bor"></i></li><li><span>所有参与记录</span><i class="bor"></i></li><li><span>晒单</span><i class="bor"></i></li>
        </ul>
        <a id="btnAdd2Card" href="javascript:;" class="op-addcar" style="display:none;">加入购物车<i class="a-icon transparent-png"></i></a>
    </div>

    <!--商品信息-->
    <div id="div_desc" class="ng-product-content">
        <div class="product-con">
            <div style="width:800px; margin:0px auto; padding-top:10px;">
                <?php echo $content?>
            </div>

        </div>
    </div>

    <!--所有参与记录-->
    <div id="div_allrecord" class="ng-all-record" style="display: none;">
        <!--记录表-->
        <div class="record">
            <div class="rocord-header">所有参与记录</div>
            <ul class="record-list">
                <div class="ng-b-wait"></div>
            </ul>
        </div>
    </div>

    <!--晒单-->
    <div id="div_postlist" class="ng-share-goods">
        <div class="ng-share-header">
            <span class="title">商品晒单</span>
        </div>
        <div class="ng-share-wrapper">
            <!--晒单开始-->
            <div class="ng-b-wait"></div>
            <!--晒单结束-->
        </div>
    </div>
</div>

<link type="text/css" rel="stylesheet" href="https://skin.1yyg.net/CSS/pageDialog.css?v=161208" />
<script language="javascript" type="text/javascript" src="https://skin.1yyg.net/JS/pageDialog.js?v=161208"></script>
<div class="pageDialogBG" id="pageDialogBG"></div>
<div class="pageDialogBorder" id="pageDialogBorder"></div>
<div class="pageDialog" id="pageDialog">
    <div class="pageDialogClose" id="pageDialogClose" title="关闭"></div>
    <div class="pageDialogMain" id="pageDialogMain"> </div>
</div>
<!--底部-->
@include('public/footer')
</div>

<input type='hidden'  id='session_u' value="{{$session_u}}">
<input type='hidden'  id='times_id' value="{{$times_ing['times_id']}}">
<input type='hidden'  id='goods_id' value="{{$times_ing['goods_id']}}">
<script language="javascript" type="text/javascript">
    var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
    function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
    Base.getScript('style/JS/Bottom.js?v=' + GetVerNum());
    
    $('#buycart').click(function(){
        var u_id = $('#session_u').val();
        var times_id = $('#times_id').val();
        var code_number = $('#code_number').val();
        var goods_id = $('#goods_id').val();

        if (u_id) 
            {
                      $.ajax({
                        type: "POST",
                        url: "buycarAdd",
                        data: {goods_id:goods_id,u_id:u_id,times_id:times_id,code_number:code_number},
                        success: function(msg)
                        {
                            if(msg)
                            {
                                location.href = 'buycarIndex';
                            }
                            else
                            {
                                alert('系统繁忙，请重新添加');
                            }
                        }
                    });
            }
            else
            {
                $('#divRTLogin').show();
            }
    })
   $('#miniLoginBtn').click(function(){
       var username  = $('#username').val();
       var password = $('#password').val();
       var ajax = 1;
        $.ajax({
                    type: "POST",
                    url: "loginDo",
                    data: {name:username,pwd:password,ajax:ajax},
                    success: function(msg)
                    {
                        if(msg==1)
                        {
                            history.go(0);
                           $('#divRTLogin').hide();
                        }
                        else
                        {
                            alert('登录失败');
                        }
                    }
                });

   })
</script>
<div style="display: none;">
    <script type="text/javascript" language="JavaScript" src="http://s22.cnzz.com/stat.php?id=3362429&web_id=3362429"  async="async"></script>
</div>

</body>

</html>