<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>
        修改头像_1元云购
    </title><link rel="stylesheet" type="text/css" href="style/css/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->
    <link href="style/css/set/base.css?date=20150716" rel="stylesheet" type="text/css" />
    <link href="style/css/set/member_x.css?v=150728" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="style/js/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="style/js/set/UserPhoto.js"></script>
</head>
<body id="loadingPicBlock">
<input type="hidden" id="imgFileUrl" value="http://file.1yyg.net" />
<input name="hidUserPhotoName" type="hidden" id="hidUserPhotoName" value="00000000000000000.jpg" />
<input name="hidUserGrade" type="hidden" id="hidUserGrade" value="0" />
<input name="hidForward" type="hidden" id="hidForward" value="/MemberModify.do" />
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

                <li><a href="setInfo" title="个人资料">个人资料</a><b></b></li>
                <li  class="curr"><a href="header" title="修改头像">修改头像</a><b></b></li>
                <li><a href="address" title="收货地址">收货地址</a><b></b></li>
                <li><a href="security" title="账户安全">账户安全</a><b></b></li>

            </ul>
        </div>

        <div class="sidebar_main clrfix fr">
            <div class="g-obtain-title clrfix">
                <ul>
                    <li class="curr"><a href="/UserPhoto.do?forward=%2fMemberModify.do">上传头像</a></li>

                </ul>
            </div>
            <div class="z-content">
                <div class="con">
                    <div class="pic-side">
                        <div class="pic-style-wrap">
                                <span class="pic-style01">
                                    <img src="{{ isset($img['picture']) ? 'uploads/uploads_big/'.$img['picture'] : 'style/images/set/00000000000000000_002.jpg' }}" /></span>
                            <p class="gray9">160X160</p>
                        </div>
                        <div class="pic-style-wrap">
                                <span class="pic-style02">
                                    <img src="{{ isset($img['picture']) ? 'uploads/uploads_mid/'.$img['picture'] : 'style/images/set/00000000000000000_002.jpg' }}" id="img80" width="80" height="80" border="0" /></span>
                            <p class="gray9">80X80</p>
                        </div>
                        <div class="pic-style-wrap">
                                <span class="pic-style03">
                                    <img src="{{ isset($img['picture']) ? 'uploads/uploads_small/'.$img['picture'] : 'style/images/set/00000000000000000.jpg' }}" id="img30" width="30" height="30" border="0" /></span>
                            <p class="gray9">30X30</p>
                        </div>
                    </div>
                    <div class="check-img-side">
                        <div class="inner">
                            <form method="post" action="uploadHead" enctype="multipart/form-data">


                                <input id="" name="upload" type="file" />
                                <p class="op-pic-txt">选择上传图片</p>

                                <input type="submit" value="保存头像" class="save-btn"/>

                                    {{--<a id="btnResetUpFile" href="javascript:;" class="reset-btn" title="重新上传">重新上传</a>--}}
                                    {{--<a id="btnSavePhoto" href="javascript:;" class="save-btn" title="保存头像">保存头像</a>--}}

                            </form>


                        </div>
                        <div style="display: none;">
                            <iframe name="upFrame" scrolling="no" src="about:blank"></iframe>
                        </div>
                    </div>
                    <div class="clear"></div>
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
    Base.getScript('style/js/Bottom.js?v=' + GetVerNum());
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
