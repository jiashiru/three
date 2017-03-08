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
    <div class="p-center-nav clrfix">
        <div class="banner-left"></div>
        <div class="banner-middle clrfix">
            <div class="nav-new">
                <ul class="nav-menu">
                    <li class="curr"><a href="http://member.1yyg.com/Index.do" title="我的1元云购">我的1元云购</a><em class="z-my-1yyg u-personal"></em></li>

                    <li id="li_accset"><a href="http://member.1yyg.com/MemberModify.do" title="账号设置">账号设置<b><s></s></b></a><em class="z-account-settings u-personal"></em>
                        <div class="m-sub-menu">
                            <span><a href="/MemberModify.do">个人资料</a></span>
                            <span><a href="/UserPhoto.do">修改头像</a></span>
                            <span><a href="/Address.do">收货地址</a></span>
                            <span><a href="/Security/index.do">账户安全</a></span>
                            <span><a href="/PrivacySettings.do">隐私设置</a></span>
                            <span><a href="/NoticeSettings.do">其它设置</a></span>
                            <b><s></s></b>
                        </div>
                    </li>
                    <li><a target="_blank" href="http://u.1yyg.com/1016650713" title="个人主页">个人主页</a><em class="z-home-page u-personal"></em></li>
                </ul>
            </div>
            <a href="http://www.1yyg.com" class="member-logo"></a>
        </div>
    </div>
    <!--右侧工具栏-->
    <div id="divMemberRTool" class="g-narrow-con member-narrow" style="display:block">
        <div class="m-narrow-list" style="height:232px;">
            <ul>
                <li class="f-customer-service" id="li_customer_service"><!--客服-->
                    <div class="u-small-list">
                        <a href="javascript:;" class="z-customer-off"><s></s><em class="orange">离<br>线<br>留<br>言</em></a><!-- z-customer-off 客服不在线时 -->
                    </div>
                </li>
                <li class="f-member-cart"><!--购物车-->
                    <div class="u-small-list">
                        <a href="http://cart.1yyg.com/CartList.do" target="_blank">
                            <em style="display:none;"></em>
                            <s class="u-personal"></s>
                            <cite style="display:none;">购<br>物<br>车</cite>
                        </a>
                    </div>
                </li>
                <li class="f-feedback"><!--意见反馈-->
                    <div class="u-small-list">
                        <a href="http://help.1yyg.com/htm-suggestion.html" target="_blank"><i></i><cite>意见反馈</cite></a>
                    </div>
                </li>
                <li class="f-back-to" style="display:none;"><!--Top-->
                    <div class="u-small-list">
                        <a href="javascript:;"><i></i><cite>置顶</cite></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

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
