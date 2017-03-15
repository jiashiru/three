

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>身份验证_1元云购</title>
    <link rel="stylesheet" type="text/css" href="http://skin.1yyg.net/css/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->
    <link href="http://skin.1yyg.net/Member/css/base.css?date=20150716" rel="stylesheet" type="text/css" />
    <link href="http://skin.1yyg.net/member/css/member_x.css?v=150728" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="http://skin.1yyg.net/JS/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="http://skin.1yyg.net/Member/JS/UserAuth.js"></script>
</head>
<body>
<input name="hidPage" type="hidden" id="hidPage" value="10" />
<input name="hidME" type="hidden" id="hidME" value="18840825602" />
<input name="hidForward" type="hidden" id="hidForward" />

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

                <li><a href="setInfo" title="个人资料">个人资料</a><b></b></li>
                <li><a href="header" title="修改头像">修改头像</a><b></b></li>
                <li><a href="address" title="收货地址">收货地址</a><b></b></li>
                <li  class="curr"><a href="security" title="账户安全">账户安全</a><b></b></li>

            </ul>
        </div>

        <div class="sidebar_main clrfix fr">
            <div class="g-purchase-title bor-bot">
                <a href="javascript:history.go(-1);" class="return-btn safe">返回</a>
                <span class="gray3">身份验证</span>
            </div>
            <div class="z-content" id="div">
                <div class="person-wrap">
                    <ul class="person-list">
                        <li>
                            <span class="l-side"></span>
                            <span class="r-side">您当前绑定的手机号：<b class="blue">{{isset($tel) ? $tel : $email }}</b></span>

                        </li>
                        <li class="m-orange-tips">
                            <span class="l-side">验证码：</span>
                                <span class="r-side">
                                    <div class="inp-wrap">
                                        <input type="hidden" id="tel" value="{{isset($tel_hide) ? $tel_hide : $email_hide }}"/>
                                        <input id="code" type="text" maxlength="6" class="code-inner" value="" placeholder="请输入6位验证码" />
                                        <a id="getCode" href="javascript:;" class="get-code-btn"><sapn id="msg">点击获取验证码</sapn></a>
                                    </div>
                                </span>
                            <div id="div_tips"></div>
                        </li>
                        <li>
                            <span class="l-side"></span>
                                <span class="r-side">
                                    <a id="btn" href="javascript:;" class="set-save-btn">确定</a>
                                </span>
                        </li>
                    </ul>
                </div>
            </div>
                <script>
                    $(function () {
                        $("#div").delegate('#getCode','click', function () {
                           //获取手机号
                            var tel = $("#tel").val();

                            $.post('telephone',{tel:tel}, function (res) {
                                    $('#msg').html('请输入验证码');
                            });
                        });
                        //验证
                        $("#div").delegate("#btn","click", function () {
                            var code = $('#code').val();
                            $.post('checkCode',{code:code}, function (res) {
                                if(res.status==0){
                                    $('#msg').html(res.msg);
                                }else if(res.status==1){
                                    $('#msg').html(res.mag);
                                }else{
                                    location.href='payPwd';
                                }
                            },'json');
                        });
                    });
                </script>
            <div id="mobileBindUserAuth" class="g-Tips-text clrfix" style="">原手机号丢失或无法接收短信？请拨打客服热线4000-588-688进行人工申诉，重新绑定新手机号。</div>

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
