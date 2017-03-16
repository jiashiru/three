<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我的云购中心_1元云购</title>
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/header.css?v=170215')}}" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="1元云购是一种全新的购物方式，是时尚、潮流的风向标，能满足个性、年轻消费者的购物需求，由深圳市一元云购网络科技有限公司注入巨资打造的新型购物网。" />
    <meta name="keywords" content="1元云购,1元购手机,1元购电脑,1元购笔记本电脑,1元购物,云购" />

    <link href="{{asset('style/css/set/base.css?date=160525')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('style/css/set/home.css?date=160525')}}" rel="stylesheet" type="text/css" />

    <script language="javascript" type="text/javascript" src="{{asset('style/js/JQuery1.12.js')}}"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="{{asset('style/js/set/Member.js')}}"></script>
</head>
<body id="loadingPicBlock">
<input name="hidGetCount" type="hidden" id="hidGetCount" />
<div class="wrapper">
    <!--顶部-->
    <!--顶部-->

    @include('../public/head')
    <!--头部-->

    <!--导航-->
    @include("public/personNav")
    <!--右侧工具栏-->
    @include("public/right")


    <div class="p-center-main clrfix">
        <!--左边导航-->

        <div class="sidebar_l clrfix fl">
            <ul>

                <li class="curr z-first"><a href="myIndex" title="首页">首页</a><b></b></li>
                <li><a href="myGoods" title="云购记录">云购记录</a><b></b></li>
                <li><a href="{{url('getGoods')}}" title="获得的商品">获得的商品</a><b></b></li>
                {{--<li><a href="/PostSingleList.do" title="晒单管理">晒单管理</a><b></b></li>--}}
                {{--<li><a href="/CollectList.do" title="我的关注">我的关注</a><b></b></li>--}}


                <li><a href="myWallet" title="我的钱包">我的钱包</a><b></b></li>


            </ul>
        </div>


        <div class="sidebar_m clrfix fl">

            <div class="g-information clrfix">
                <div class="m-info-inner">
                    <div class="m-info-user">
                        <div class="info-up-left">
                            <div class="head-portrait">
                                <a id="a_UserPhoto" href="header"><img src="{{isset($data['picture']) ? 'uploads/uploads_mid/'.$data['picture'] : 'style/images/00000000000000000.jpg' }}" /><b class="u-personal"></b></a>
                            </div>
                            <dl>
                                <dt class="gray3">
                                    <a href="header" target="_blank"><cite>{{$data['nickname']}}</cite></a>
                                </dt>

                            </dl>
                        </div>
                        <a href="header" class="edit-btn u-personal"></a>
                    </div>
                    <div class="m-info-mon">
                        <div class="info-up-right">
                            <ul>
                                {{--<li class="z-news">--}}
                                    {{--<a href="/UserMessage.do" class="u-personal"><b class="u-personal"></b>消息</a>--}}
                                {{--</li>--}}

                                <li class="z-not-bound">
                                    @if(empty($data['email']))
                                    <a href="sendEmail" class="u-personal"><b class="u-personal"></b>未绑定</a>
                                    {{--<div class="tips" id="divBindEmailTip">--}}
                                        {{--<b class="t-bg"></b>--}}
                                        {{--<span class="t-info">绑定邮箱可得10福分哦！</span>--}}
                                        {{--<i class="u-personal" onclick="closeDivTip('divBindEmailTip')"></i>--}}
                                        {{--<em></em>--}}
                                    {{--</div>--}}
                                    @else
                                        <a href="sendEmail" class="u-personal current"><b class="u-personal"></b>已绑定</a>
                                    @endif
                                </li>


                                <li class="z-binding">
                                    @if(empty($data1['tel']))
                                        <a href="{{url('telCode')}}" class="u-personal"><b class="u-personal"></b>未绑定</a>
                                    @else
                                     <a href="{{url('telCode')}}" class="u-personal current"><b class="u-personal"></b>已绑定</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="info-down-l">
                                <span class="fl gray9">可用余额 : <b class="orange">￥0.00</b>
                                </span>
                            <p class="fl">
                                <a href="{{url('userRechange')}}" title="充值" class="z-recharge-btn">充值</a>
                                <a href="javascript:;" id="a_transaccount" title="转账" class="z-transfer-accounts">转账</a>
                            </p>
                        </div>

                    </div>
                </div>

            </div>

            <!--提示信息列表-->
            <div class="g-operation clrfix">



                 @if(empty($data1['email']))
                <div class="m-modify-single m-verification clrfix">
                    <p class="orange"><b class="u-personal u-Email-icon"></b>您还未验证邮箱哦，请及时验证！</p>
                    <a href="sendEmail" class="z-operation-btn">立即验证</a>
                    {{--<a onclick="ColseMessage(this,'2')" class="z-operation-close u-personal"></a>--}}
                </div>
                @endif

                     @if(empty($data1['tel']))
                         <div class="m-modify-single m-verification clrfix">
                             <p class="orange"><b class="u-personal u-Email-icon"></b>您还未验证手机哦，请及时验证！</p>
                             <a href="sendEmail" class="z-operation-btn">立即验证</a>
                             {{--<a onclick="ColseMessage(this,'2')" class="z-operation-close u-personal"></a>--}}
                         </div>
                     @endif
            </div>


            <!--获得的商品列表-->

            <!--云购记录列表-->

            <!--关注列表-->
            <div class="g-my-attention g-common-control clrfix" style="display: none;">
                <div class="m-getGood-title clrfix">
                    <a href="http://member.1yyg.com/CollectList.do" class="gray9">全部<em class="f-tran">&gt;</em></a>
                    <b class="gray3">我的关注</b>
                </div>
                <div class="m-comm-scroll">
                    <div class="loading-2015">
                        <em></em>
                    </div>
                    <a href="javascript:;" class="z-prev" style="display: none;"><i class="u-personal"></i><span></span></a>
                    <a href="javascript:;" class="z-next" style="display: none;"><i class="u-personal"></i><span></span></a>
                    <div class="commodity-list">
                        <div id="div_AttentionList" style="position: absolute;"></div>
                    </div>
                </div>
            </div>
            <!--最新晒单列表-->
            <div class="g-common-control clrfix" style="display: none;">
                <div class="m-getGood-title clrfix">
                    <b id="b_posttitle" class="gray3">云友最新晒单</b>
                </div>

                <div id="div_PostList" class="single-part clrfix">
                    <div class="loading-2015">
                        <em></em>
                    </div>
                </div>

                <div class="m-see-more clrfix">想要看更多？去<a href="http://post.1yyg.com/" target="_blank" class="orange">晒单分享</a>看看
                </div>

            </div>
        </div>
        <!--右侧-->
        <div class="sidebar_r clrfix fr">

            <div class="g-QR-code g-sid-title">
                <h3 class="gray3"><b>下载手机APP</b></h3>
                <div class="clrfix">
                        <span class="fl"><a href="http://info.1yyg.com/app/mobile.html" target="_blank">
                                <img src="http://skin.1yyg.net/Member/images/app.jpg"></a></span>
                    <p class="fl gray6">
                        参与云购随心所欲！
                        <a href="http://info.1yyg.com/app/mobile.html" target="_blank">立即下载</a>
                    </p>
                </div>
                <s class="u-personal"></s>
            </div>

            <div class="g-QR-code g-sid-title">
                <h3 class="gray3"><b>关注官方微信</b></h3>
                <div class="clrfix">
                        <span class="fl"><a href="http://info.1yyg.com/app/microchannel.html" target="_blank">
                                <img src="http://skin.1yyg.net/Member/images/wx.jpg"></a></span>
                    <p class="fl gray6">
                        扫一扫<br />
                        享受更多微信专享服务
                    </p>
                </div>
                <em class="u-personal"></em>
            </div>
            <div class="g-service-hotline g-sid-title">
                <h3 class="gray3"><b>服务热线</b></h3>
                <p class="orange">4000-588-688<i>（工作时间：09:00-21:00）</i></p>
                <a id="a_service" href="javascript:;"><b class="u-personal"></b>在线客服</a>
                <em class="u-personal"></em>
            </div>
        </div>
    </div>

    <!--底部-->
    @include('public/footer')
</div>

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
</div>


</body>
</html>