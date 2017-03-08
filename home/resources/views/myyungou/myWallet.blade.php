<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我的钱包_1元云购</title>
    <link rel="stylesheet" type="text/css" href="http://skin.1yyg.net/css/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->
    <link href="http://skin.1yyg.net/Member/css/base.css?date=161226" rel="stylesheet" type="text/css" />
    <link href="http://skin.1yyg.net/Member/css/accounts.css?date=161226" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="http://skin.1yyg.net/JS/JQuery1.12.js"></script>
    <script type="text/javascript" src="http://skin.1yyg.net/Plugins/jquery.tmpl.min.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="http://skin.1yyg.net/Member/JS/UserBalance.js"></script>
</head>
<body id="loadingPicBlock">

<input name="hidUserID" type="hidden" id="hidUserID" value="15519195" />
<input name="hidAmount" type="hidden" id="hidAmount" value="0.00" />
<input name="hidIsOpenPwd" type="hidden" id="hidIsOpenPwd" value="0" />
<input name="hidIsBindMobile" type="hidden" id="hidIsBindMobile" value="1" />
<input name="hidUserMobile" type="hidden" id="hidUserMobile" value="15373036163" />
<input name="hidHUserMobile" type="hidden" id="hidHUserMobile" value="15373****63" />
<input name="hidForbid" type="hidden" id="hidForbid" value="0" />
<input name="hidTimeInterval" type="hidden" id="hidTimeInterval" value="1m" />
<input name="hisSrouce" type="hidden" id="hisSrouce" />
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
    <script>
        var _MemberUpdateCartNum = function () { };
        function GetJPData(domain, action, para, callfun) {
            $.getJSON(domain + "/JPData?action=" + action + (para != "" ? "&" : "") + para + "&fun=?", callfun);
        }
        $(document).ready(function () {
            var _MemberRTool = $("#divMemberRTool");
            var _DivObj = _MemberRTool.children("div.m-narrow-list");
            var _UlObj=_MemberRTool.find("ul");
            var _LiObj=_UlObj.children("li");
            var _CustomerObj = _LiObj.eq(0);
            var _CartObj = _LiObj.eq(1);
            var _FeedBackObj = _LiObj.eq(2);
            var _BackTopObj = _LiObj.eq(3);
            var _ServiceObj = $("#a_service");
            /*------在线客服------*/
            var _NowTime = new Date();
            var _Hours = _NowTime.getHours();
            var _Minute = _NowTime.getMinutes();
            if (_Hours >= 9 && _Hours < 21) {
                //上班时间
                _CustomerObj.find("a").attr('class', 'z-customer-on').find("em").html("在<br>线<br>客<br>服");
                _ServiceObj.removeClass('z-gray-msg').html("<b class=\"u-personal\"></b>在线客服");
            } else {
                _CustomerObj.find("a").attr('class', 'z-customer-off').find("em").html("离<br>线<br>留<br>言");
                _ServiceObj.addClass('z-gray-msg').html("<b class=\"u-personal\"></b>离线留言");
            }
            //var isInitQQEvent = false;
            var initQQEvent = function () {
                //if (isInitQQEvent)
                //    return false;
                //isInitQQEvent = true;
                Base.getScript("http://wpa.b.qq.com/cgi/wpa.php", function () {
                    BizQQWPA.addCustom([{
                        aty: "0",
                        nameAccount: "4006859800",
                        selector: "li_customer_service"
                    }, {
                        aty: "0",
                        nameAccount: "4006859800",
                        selector: "a_service"
                    }]);
                });
            }
            initQQEvent();
            /*------购物车------*/
            _CartObj.hover(function () {
                $(this).addClass("cart-hover");
                if ($(this).hasClass("f-member-cart2")) {
                    $(this).find("em").attr("style", "display:none;");
                }
                $(this).find("cite").attr("style", "display:block;");
            }, function () {
                $(this).removeClass("cart-hover");
                if ($(this).hasClass("f-member-cart2")) {
                    $(this).find("em").attr("style", "display:block;");
                }
                $(this).find("cite").attr("style", "display:none;");
            });
            _MemberUpdateCartNum = function () { _InsertIntoCart(); }
            /*------意见反馈------*/
            _FeedBackObj.hover(function () { $(this).addClass("cart-hover"); }, function () { $(this).removeClass("cart-hover"); });
            /*------回到顶部------*/
            _BackTopObj.hover(function () { $(this).addClass("cart-hover"); }, function () { $(this).removeClass("cart-hover"); });
            _BackTopObj.click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 0);
            });
            var scrollFun = function () {
                if ($(window).scrollTop() > 50) { //我的云购记录
                    //_MemberRTool.height("289px");
                    _DivObj.removeAttr("style");
                    _BackTopObj.show();
                } else {
                    //_MemberRTool.height("232px");
                    _DivObj.attr("style", "height:232px;");
                    _BackTopObj.hide();
                }
            }
            $(window).scroll(function () {
                scrollFun();
            });
            if ($(window).scrollTop() > 0) {
                scrollFun();
            }
            //账号设置快捷菜单
            $("#li_accset").hover(function () { $(this).addClass("hover"); }, function () { $(this).removeClass("hover"); });
        });
    </script>

    <div class="p-center-main clrfix">
        <!--左边导航-->

        <div class="sidebar_l clrfix fl">
            <ul>

                <li><a href="myIndex" title="首页">首页</a><b></b></li>
                <li><a href="myGoods" title="云购记录">云购记录</a><b></b></li>
                <li><a href="myGoods" title="获得的商品">获得的商品</a><b></b></li>
                {{--<li><a href="/PostSingleList.do" title="晒单管理">晒单管理</a><b></b></li>--}}
                {{--<li><a href="/CollectList.do" title="我的关注">我的关注</a><b></b></li>--}}


                <li class="curr"><a href="myWallet" title="我的钱包">我的钱包</a><b></b></li>

                {{--<li><a href="/MyFriends.do" title="我的好友">我的好友</a><b></b></li>--}}
                {{--<li><a href="/JoinGroup.do" title="云购圈">云购圈</a><b></b></li>--}}
                {{--<li><a href="/UserMessage.do" title="消息管理">消息管理</a><b></b></li>--}}

            </ul>
        </div>

        <div class="sidebar_main clrfix fr">
            <div class="g-purchase-title">
                <span class="gray3">账户概况</span>
            </div>

            <div class="g-account-wrapper">
                <div class="g-account-inner">
                    <ul class="g-account">
                        <li>
                            <p class="title">账户余额</p>
                            <p class="source">
                                <em class="orange">￥0.00</em>
                            </p>
                            <div class="g-options">
                                <span><a href="{{url('userRechange')}}">充值</a></span>
                                <i class="line"></i>
                                <span><a id="a_transfer" href="javascript:;">转账</a></span>
                            </div>
                        </li>
                        <li>
                            <p class="title">福分</p>
                            <p class="source">
                                75
                            </p>
                            <div class="g-options">
                                <span class="gray9">100福分=1元<a href="http://help.1yyg.com/htm-userExperience.html" target="_blank" title="如何获得福分?" class="question u-personal"></a></span>
                            </div>
                        </li>
                        <li>
                            <p class="title">佣金余额</p>
                            <p class="source">
                                ￥0.00
                            </p>
                            <div class="g-options">
                                <span><a href="javascript:;" id="withdrawToCash">提现</a></span>
                                <i class="line"></i>
                                <span><a href="http://member.1yyg.com/ReferAuth.do" target="_blank">邀请好友</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="g-account-tab">
                <ul class="g-account-list">
                    <li><a href="javascript:;">我的账户</a></li>
                    <li><a href="javascript:;">我的福分</a></li>
                    <li><a href="javascript:;">我的佣金</a></li>
                </ul>
                <div class="line" style="left: 131px;"></div>
            </div>

            <div class="g-account-info">
                <!--我的账户详细数据-->
                <div id="myAccountContainer" class="g-account-datainner">
                    <div class="g-account-menu">
                        <ul class="list">
                            <li class="current"><span>全部</span></li>
                            <li><span>充值记录</span></li>
                            <li><span>消费记录</span></li>
                            <li><span>转账记录</span></li>
                        </ul>
                        <!--时间筛选-->
                        <div class="g-screen-datewrapper">
                            <div class="g-screen-date clrfix">
                                <ul class="m-select long fr">
                                    <li class="gray9">
                                        <label>筛选：</label></li>
                                    <li>
                                        <span id="span_menu1" class="u-select-con"></span>
                                    </li>
                                    <li class="b-date" style="display: none;">
                                        <input id="txtBeginTime1" type="text" maxlength="10" value="" /><b class="u-personal"></b>
                                    </li>
                                    <li style="display: none;"><em>-</em></li>
                                    <li class="u-click" style="display: none;">
                                        <input id="txtEndTime1" type="text" maxlength="10" value="" /><b class="u-personal"></b>
                                    </li>
                                    <li style="display: none;"><a id="a_serach1" href="javascript:;">确定</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--全部-->
                    <div class="g-account-data" id="myAccountContainerD1">
                        <div class="g-purchase-records my-account-con">
                            <dl>
                                <dt>
                                    <span class="u-commodity-pic">时间</span>
                                    <span class="u-select-con type">类型</span>
                                    <span class="u-commodity-name">金额</span>
                                    <span class="u-operation">备注</span>
                                </dt>
                            </dl>
                        </div>
                    </div>
                    <!--充值记录-->
                    <div class="g-account-data" id="myAccountContainerD2" style="display: none;">
                        <div class="g-purchase-records my-account-con">
                            <dl>
                                <dt>
                                    <span class="u-commodity-pic">时间</span>
                                    <span class="u-select-con type">类型</span>
                                    <span class="u-commodity-name">金额</span>
                                    <span class="u-operation">备注</span>
                                </dt>
                            </dl>
                        </div>
                    </div>
                    <!--消费记录-->
                    <div class="g-account-data" id="myAccountContainerD3" style="display: none;">
                        <div class="g-purchase-records my-account-con">
                            <dl>
                                <dt>
                                    <span class="u-commodity-pic">时间</span>
                                    <span class="u-select-con type">类型</span>
                                    <span class="u-commodity-name">金额</span>
                                    <span class="u-operation">备注</span>
                                </dt>
                            </dl>
                        </div>
                    </div>
                    <!--转账记录-->
                    <div class="g-account-data" id="myAccountContainerD4" style="display: none;">
                        <div class="g-purchase-records my-account-con">
                            <dl>
                                <dt>
                                    <span class="u-commodity-pic">时间</span>
                                    <span class="u-select-con type">类型</span>
                                    <span class="u-commodity-name">金额</span>
                                    <span class="u-operation">备注</span>
                                </dt>
                            </dl>
                        </div>
                        <!--翻页-->
                        <div class="g-pagination"></div>
                    </div>
                </div>

                <!--我的福分详细数据-->
                <div id="myPointsContainer" class="g-account-datainner" style="display: none;">
                    <div class="g-account-menu">
                        <ul class="list only-child">
                            <li class="current"><span>福分记录</span></li>
                        </ul>
                        <!--时间筛选-->
                        <div class="g-screen-datewrapper">
                            <div class="g-screen-date clrfix">
                                <ul class="m-select long fr">
                                    <li class="gray9">
                                        <label>筛选：</label></li>
                                    <li>
                                        <span id="span_menu2" class="u-select-con"></span>
                                    </li>
                                    <li class="b-date" style="display: none;">
                                        <input id="txtBeginTime2" type="text" maxlength="10" value="" /><b class="u-personal"></b>
                                    </li>
                                    <li style="display: none;"><em>-</em></li>
                                    <li class="u-click" style="display: none;">
                                        <input id="txtEndTime2" type="text" maxlength="10" value="" /><b class="u-personal"></b>
                                    </li>
                                    <li style="display: none;"><a id="a_serach2" href="javascript:;">确定</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="g-source-data" id="myPointContainerD1">
                        <div class="g-purchase-records my-account-con">
                            <dl>
                                <dt>
                                    <span class="u-source-time">时间</span>
                                    <span class="u-source-order">获得/支出</span>
                                    <span class="u-source-protail">详情</span>
                                </dt>
                            </dl>
                        </div>
                    </div>
                </div>

                <!--我的佣金详细数据-->
                <div id="myBrokerageContainer" class="g-account-datainner" style="display: none">
                    <div class="g-account-menu">
                        <ul class="list">
                            <li class="current"><span>佣金收入</span></li>
                            <li><span>佣金消费</span></li>
                            <li><span>佣金提现</span></li>
                            <li><span>邀请记录</span></li>
                        </ul>
                        <!--时间筛选-->
                        <div class="g-screen-datewrapper">
                            <div class="g-screen-date clrfix">
                                <ul class="m-select long fr">
                                    <li class="gray9">
                                        <label>筛选：</label></li>
                                    <li>
                                        <span id="span_menu3" class="u-select-con"></span>
                                    </li>
                                    <li class="b-date" style="display: none;">
                                        <input id="txtBeginTime3" type="text" maxlength="10" value="" /><b class="u-personal"></b>
                                    </li>
                                    <li style="display: none;"><em>-</em></li>
                                    <li class="u-click" style="display: none;">
                                        <input id="txtEndTime3" type="text" maxlength="10" value="" /><b class="u-personal"></b>
                                    </li>
                                    <li style="display: none;"><a id="a_serach3" href="javascript:;">确定</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--佣金明细-->
                    <div id="myBrokerageContainerD1" class="g-comm-data">
                        <div class="g-comm-list">
                            <p class="total">
                                累计获得佣金：
                                    <span class="orange">￥0.00
                                    </span>
                            </p>
                            <div class="g-purchase-records my-account-con">
                                <dl>
                                    <dt>
                                        <span class="u-comm-time">时间</span>
                                        <span class="u-comm-name">用户</span>
                                        <span class="u-comm-type">类型</span>
                                        <span class="u-comm-info">描述</span>
                                        <span class="u-comm-much">消费金额</span>
                                        <span class="u-comm-money">佣金</span>
                                    </dt>
                                </dl>
                            </div>
                        </div>

                    </div>
                    <!--邀请记录-->
                    <div id="myBrokerageContainerD2" class="g-comm-data" style="display: none;">
                        <div class="g-comm-list">
                            <p class="total" id="p_stat">
                                累计成功邀请 <span class="orange">0</span> 位会员注册，已有 <span class="orange">0</span> 位会员参与云购，您通过邀请获得奖励 <span class="orange">0</span> 福分
                            </p>
                            <div class="g-purchase-records my-account-con">
                                <dl>
                                    <dt>
                                        <span class="u-request-time">时间</span>
                                        <span class="u-request-name">用户</span>
                                        <span class="u-request-number">邀请编号</span>
                                        <span class="u-request-state">消费状态</span>
                                    </dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
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
</div>
</body>
</html>
