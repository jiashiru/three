

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>
        贾大大_个人主页_1元云购
    </title><meta name="description" content="1元云购是一种全新的购物方式，是时尚、潮流的风向标，能满足个性、年轻消费者的购物需求，由深圳市一元云购网络科技有限公司注入巨资打造的新型购物网。" /><meta name="keywords" content="1元云购,1元购iphone,1元购电脑,1元购笔记本,1元购物,云购,云购网" /><link rel="stylesheet" type="text/css" href="http://skin.1yyg.net/css/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]--><link href="http://skin.1yyg.net/Member/css/base.css?date=20150731" rel="stylesheet" type="text/css" /><link rel="stylesheet" type="text/css" href="http://skin.1yyg.net/member/css/mine-index.css?v=150728" />
    <script language="javascript" type="text/javascript" src="http://skin.1yyg.net/JS/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="http://skin.1yyg.net/Star/JS/userPage.js"></script>
</head>
<body id="loadingPicBlock">
<input name="hidUserID" type="hidden" id="hidUserID" value="15519195" />
<input name="hidUserWeb" type="hidden" id="hidUserWeb" value="1016650713" />
<input name="hidIsLogin" type="hidden" id="hidIsLogin" value="0" />
<input name="hidLoginUserID" type="hidden" id="hidLoginUserID" value="0" />
<!--顶部-->
<!--顶部-->
@include('../public/head')
<!--主体-->
<div class="mine-wrapper">
    <div class="mine-inner">
        <!--banner以及相关操作-->
        <div class="map-banner">
            <div class="map-info">
                <div class="h-pic">
                    <a class="pic" href="javascript:;">
                        <img alt="" src="http://img.1yyg.net/UserFace/160/00000000000000000.jpg" width="140" height="140">
                    </a>
                </div>
                <div class="text-info">
                    <span class="name">{{$user_info['nickname']}}(ID:{{$user_info['u_id']}})</span>
                    <p>
                        <span class="address">{{$user_info['location']}}</span>
                    </p>
                    <p class="mr4">
                        <a  href="javascript:void(0);">
                            <span class="level class-icon01"><s></s>云购小将</span>
                        </a>
                    </p>
                    <p class="about" title="{{$user_info['signature']}}">{{$user_info['signature']}}</p>
                </div>
                <!--三个操作选项-->
                <ul class="option-wrapper">
                    <!-- <li><a  href="javascript:;"><b class="code transparent-png"></b><span>扫码</span> </a><i class="animation-bg transparent-png"></i></li>
                    <li style="display: none;"><a  class="o-inner" href="javascript:;"><b class="friend transparent-png"></b><span>加好友</span> </a><i class="animation-bg transparent-png"></i></li>
                    <li style="display: none;"><a  class="o-inner" href="javascript:;"><b class="message transparent-png"></b><span>发私信</span> </a><i class="animation-bg transparent-png"></i></li>-->
                    <li style="display: none;">
                        <i class="o-inner"></i>
                        <a  id="btnAddFriend" class="o-href" href="javascript:;"><b class="friend transparent-png"></b><span>加好友</span> </a>
                    </li>
                    <li style="display: none;">
                        <i class="o-inner"></i>
                        <a id="btnSendMsg" class="o-href" href="javascript:;"><b class="message transparent-png"></b><span>发私信</span></a>
                    </li>

                </ul>
                <div id="div_jb" class="ju-b-wrap" style="right:0px;display:none; ">举报</div>
                <!--私信编辑框-->
                <div id="divMsgBox" class="Pop-news">
                    <div class="Pop-Con">
                        <div class="arrow arrow_left"><em></em><span></span></div>
                        <div class="Close"><a href="javascript:void(0);" class="u-personal"></a></div>
                        <div class="Comment_form">
                            <textarea rows="3" cols="10" id="txtPrivateMsg"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--详细记录-->
        <div class="mine-content">
            <div class="left-sides">
                <div class="con">
                    <div class="c-nav">
                        <ul id="ul_Menu">
                            <li><a href="javascript:;" class="minute" attr="record">云购记录</a> </li>
                            <li><a href="javascript:;" class="minute" attr="commodity" >获得的商品</a> </li>
                            <li><a href="javascript:;" class="minute" attr="indent">晒单</a> </li>
                        </ul>
                        <div id="midNavLine" class="c-line"></div>
                    </div>
                    <div>
                        <!--云购记录-->
                        <div id="record" style=""  class="content-wrap">
                            <div class="content">
                                <div class="good-list-wrap">
                                    <ul class="good-list">

                                        <?php foreach($goods as $k=>$v){ ?>


                                            <li>
                                                <a class="g-pic" href="http://www.1yyg.com/product/10585720.html" target="_blank">
                                                    <img width="100" height="100" src="http://img.1yyg.net/GoodsPic/pic-200-200/20150324160104108.jpg" alt="">
                                                    <span class="g-bg g-end"></span>
                                                    <span class="g-txt">
                                                        <?php
                                                        if($v['goods']['number'] == 0){
                                                            echo '已揭晓';
                                                        }else{
                                                            echo '进行中<span class="dotting"></span>';
                                                        }
                                                        ?>
                                                    </span>
                                                </a>
                                                <div class="g-info">
                                                    <h2 class="g-title">
                                                        <a href="http://www.1yyg.com/product/10585720.html" target="_blank" rel="nofollow">
                                                            (第{{$v['goods']['times']}}云){{$v['goods']['brand_name']}} {{$v['goods']['goods_name']}}
                                                        </a>
                                                    </h2>
                                                    <p class="g-price">价值：￥{{$v['goods']['goods_price']}}.00</p>
                                                    <div class="g-older">
                                                        <p>开始时间：{{$v['goods']['start_time']}}</p>
                                                        <p>揭晓时间：
                                                        <?php
                                                                if($v['goods']['number'] == 0){
                                                                    echo $v['goods']['end_time'];
                                                                }else{
                                                                    echo '进行中<span class="dotting"></span>';
                                                                }
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="g-total">
                                                    参与
                                                    <span class="orange">1</span>
                                                    人次
                                                </div>
                                                <a class="g-see" href="http://www.1yyg.com/lottery/10585720.html" target="_blank">查看详情</a>
                                                <i class="single">
                                                    <i class="single"></i>
                                                </i>
                                                <div class="g-time">
                                                    <div class="aricle">
                                                        <div class="cir"></div>
                                                    </div>
                                                    <div class="time-str">
                                                        <div class="str">{{$v['buy_time']}}</div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </li>

                                        <?php } ?>
                                        <li>
                                            <a class="g-pic" href="http://www.1yyg.com/product/10585720.html" target="_blank">
                                                <img width="100" height="100" src="http://img.1yyg.net/GoodsPic/pic-200-200/20150324160104108.jpg" alt="">
                                                <span class="g-bg g-end"></span>
                                                <span class="g-txt">已揭晓</span>
                                            </a>
                                            <div class="g-info">
                                                <h2 class="g-title">
                                                    <a href="http://www.1yyg.com/product/10585720.html" target="_blank" rel="nofollow">(第40466云)云南白药 牙膏 180g（留兰香型）</a>
                                                </h2>
                                                <p class="g-price">价值：￥39.00</p>
                                                <div class="g-older">
                                                    <p>
                                                        获得者：
                                                        <a target="_blank" href="http://u.1yyg.com/1012636424">艹啃着馒头支持云</a>
                                                    </p>
                                                    <p>揭晓时间：2017-02-22 08:59:36</p>
                                                </div>
                                            </div>
                                            <div class="g-total">
                                                参与
                                                <span class="orange">1</span>
                                                人次
                                            </div>
                                            <a class="g-see" href="http://www.1yyg.com/lottery/10585720.html" target="_blank">查看详情</a>
                                            <i class="single">
                                                <i class="single"></i>
                                            </i>
                                            <div class="g-time">
                                                <div class="aricle">
                                                    <div class="cir"></div>
                                                </div>
                                                <div class="time-str">
                                                    <div class="str">02月22日 08:58</div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </li>

                                        <li>
                                            <a class="g-pic" href="http://www.1yyg.com/product/10332343.html" target="_blank">
                                                <img width="100" height="100" src="http://img.1yyg.net/GoodsPic/pic-200-200/20170122161417912.jpg" alt="">
                                                <span class="g-bg"></span>
<span class="g-txt">
进行中
<span class="dotting"></span>
</span>
                                            </a>
                                            <div class="g-info">
                                                <h2 class="g-title">
                                                    <a href="http://www.1yyg.com/product/10332343.html" rel="nofollow" target="_blank">(第26云)2016款 进口宝马（BMW）5系 528i 中东版 四门轿车</a>
                                                </h2>
                                                <p class="g-price">价值：￥539888.00</p>
                                                <div class="g-progress">
                                                    <dl class="m-progress">
                                                        <dt title="已完成43.01%">
                                                            <b style="width: 120.43275642355451px">
                                                                <i class="cur"></i>
                                                            </b>
                                                        </dt>
                                                        <dd>
<span class="orange fl">
<em>232215</em>
已参与
</span>
<span class="gray6 fl">
<em>539888</em>
总需人次
</span>
<span class="blue fr">
<em>307673</em>
剩余
</span>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="g-total">
                                                参与
                                                <span class="orange">1</span>
                                                人次
                                            </div>
                                            <a class="g-buy" href="http://www.1yyg.com/product/10332343.html" target="_blank" rel="nofollow">继续云购</a>
                                            <i class="single">
                                                <i class="single"></i>
                                            </i>
                                            <div class="g-time">
                                                <div class="aricle">
                                                    <div class="cir"></div>
                                                </div>
                                                <div class="time-str">
                                                    <div class="str">刚刚</div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </li>


                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!--获得的商品-->
                        <div id="commodity" style="display: none;"  class="content-wrap">
                            <div class="null-retips-wrapper kt-icon">
                                <img src="http://skin.1yyg.net/images/kt-jl.jpg">
                                <p class="gray">您最近还没有获得商品哦~</p>
                            </div>
                        </div>
                        <!--晒单列表-->
                        <div id="indent" style="display: none;" class="content-wrap">
                            <div class="null-retips-wrapper kt-icon">
                                <img src="http://skin.1yyg.net/images/kt-jl.jpg">
                                <p class="gray">您最近还没有晒单记录哦~</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(".minute").click(function(){
                    var name = $(this).attr("attr");
                    $("#"+name).show();
                    $("#"+name).siblings().hide();
                });
            </script>



            <div class="right-sides">
                <div class="con">
                    <p class="title">近期访客</p>
                    <div class="user-list-wrap">
                        <ul id="" class="user-list">

                            <div class="null-retips-wrapper kt-icon">
                                <img src="http://skin.1yyg.net/images/kt-where.jpg">
                                <p class="gray">暂无访客哦~</p>
                            </div>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--底部-->
@include('public/footer')
</div>
<script language="javascript" type="text/javascript">
    var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
    function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
    Base.getScript('http://skin.1yyg.net/JS/Bottom.js?v=' + GetVerNum());
</script>
<div style="display: none;">
    <script type="text/javascript" language="JavaScript" src="http://s22.cnzz.com/stat.php?id=3362429&web_id=3362429"  async="async"></script>
</div>
<link type="text/css" rel="stylesheet" href="https://skin.1yyg.net/CSS/pageDialog.css?v=161208" />
<script language="javascript" type="text/javascript" src="https://skin.1yyg.net/JS/pageDialog.js?v=161208"></script>
<div class="pageDialogBG" id="pageDialogBG"></div>
<div class="pageDialogBorder" id="pageDialogBorder"></div>
<div class="pageDialog" id="pageDialog">
    <div class="pageDialogClose" id="pageDialogClose" title="关闭"></div>
    <div class="pageDialogMain" id="pageDialogMain"> </div>
</div>
</body>
</html>
