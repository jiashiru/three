<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我参与的云购_1元云购</title>
    <link rel="stylesheet" type="text/css" href="http://skin.1yyg.net/css/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->
    <link href="http://skin.1yyg.net/Member/css/base.css?date=20150716" rel="stylesheet" type="text/css" />
    <link href="http://skin.1yyg.net/Member/css/member_q.css?date=20150716" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="http://skin.1yyg.net/JS/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="http://skin.1yyg.net/Member/JS/UserBuyList.js"></script>
</head>
<body id="loadingPicBlock">
<input name="hidTimeInterval" type="hidden" id="hidTimeInterval" value="1m" />
<input name="hidHisBtTime" type="hidden" id="hidHisBtTime" value="3" />
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

                <li><a href="myIndex" title="首页">首页</a><b></b></li>
                <li class="curr"><a href="myGoods" title="云购记录">云购记录</a><b></b></li>
                <li><a href="myGoods" title="获得的商品">获得的商品</a><b></b></li>
                {{--<li><a href="/PostSingleList.do" title="晒单管理">晒单管理</a><b></b></li>--}}
                {{--<li><a href="/CollectList.do" title="我的关注">我的关注</a><b></b></li>--}}


                <li><a href="myWallet" title="我的钱包">我的钱包</a><b></b></li>

                {{--<li><a href="/MyFriends.do" title="我的好友">我的好友</a><b></b></li>--}}
                {{--<li><a href="/JoinGroup.do" title="云购圈">云购圈</a><b></b></li>--}}
                {{--<li><a href="/UserMessage.do" title="消息管理">消息管理</a><b></b></li>--}}

            </ul>
        </div>

        <div class="sidebar_main clrfix fr">
            <div class="g-purchase-title">
                <span class="gray3">云购记录</span>
            </div>
            <div class="g-screen-state clrfix">
                <ul id="ul_state" class="a-screen fl">
                    <li><a state="-1" href="javascript:;" class="z-checked">全部</a></li>
                    <li><a state="1" href="javascript:;">进行中</a></li>
                    <li><a state="3" href="javascript:;">已揭晓</a></li>
                    <li><a state="4" href="javascript:;">已退购</a></li>
                </ul>
                <div class="g-screen-datewrapper">
                    <div class="g-screen-date clrfix">
                        <ul class="m-select long fr">
                            <li class="gray9">
                                <label>筛选：</label></li>
                            <li>
                                    <span id="span_menu" class="u-select-con">
                                    </span>
                            </li>
                            <li class="b-date" style="display:none;">
                                <input id="txtBeginTime" type="text" maxlength="10" value="2015-04-15" /><b class="u-personal"></b>
                                <div class="date_selector"></div>
                            </li>
                            <li style="display:none;"><em>-</em></li>
                            <li class="u-click" style="display:none;">
                                <input id="txtEndTime" type="text" maxlength="10" value="2015-07-13" /><b class="u-personal"></b>
                                <div class="date_selector"></div>
                            </li>
                            <li style="display:none;"><a id="a_serach" href="javascript:;">确定</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div id="div_UserBuyList" class="g-purchase-records">
                <dl>
                    <dt>
                        <span class="u-commodity-pic">商品图片</span>
                        <span class="u-commodity-name">商品名称</span>
                        <span id="span_BuyState" class="u-select-con">
                            <a class="gray6" href="javascript:;" state="-1">全部状态<s class="u-personal"></s></a>
                            <div class="select-state">
                                <a href="javascript:;" state="1">进行中</a>
                                <a href="javascript:;" state="3">已揭晓</a>
                                <a href="javascript:;" state="4">已退购</a>
                            </div>
                         </span>
                        <span class="u-buy-num">期间参与人次</span>
                        <span class="u-operation">操作</span>
                    </dt>
                    <dd class="has-announced">
                        <span class="u-commodity-pic">
                        <a href="http://www.1yyg.com/product/10332343.html" target="_blank">
                            <img src="http://img.1yyg.net/goodspic/pic-70-70/20170122161417912.jpg">
                            <i class="u-personal"></i>
                        </a>
                        </span>
                        <span class="u-commodity-name gray9">
                            <h3>
                                <a class="gray3" href="http://www.1yyg.com/product/10332343.html" target="_blank">(第26云)2016款 进口宝马（BMW）5系 528i 中东版 四门轿车</a>
                            </h3>
                            <em>价值：￥539888.00</em>
                            获得者：
                            <a class="z-winner-gray" target="_blank" href="http://u.1yyg.com/1005573731">2017翻身年</a>
                        </span>
                        <span class="u-select-con">
                            <a class="gray9" href="javascript:;">已揭晓</a>
                            <br>
                            <a href="http://www.1yyg.com/product/10332346.html" target="_blank">
                                第<em class="orange">29</em>云进行中
                                <i class="dotting"></i>
                            </a>
                            <br>
                            <a class="f-jia-car" newcodeid="10332346" href="javascript:;">加入购物车</a>
                        </span>
                        <span class="u-buy-num" buynum="1" codeid="10332343">
                            <a class="gray6" href="/UserBuyDetail-10332343.do">1人次</a>
                        </span>
                        <span class="u-operation">
                            <a class="z-see-details" href="/UserBuyDetail-10332343.do" target="_blank">查看所有云购码</a>
                        </span>
                    </dd>
                </dl>
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
