

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>
        邮箱验证_1元云购
    </title><link rel="stylesheet" type="text/css" href="{{asset('style/css/header.css?v=170215')}}" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->
    <link href="{{asset('style/css/set/base.css?date=20150716')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('style/css/set/member_x.css?v=150728')}}" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="{{asset('style/js/JQuery1.12.js')}}"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="{{asset('style/js/set/EmailChecking.js')}}"></script>
</head>
<body>
<input name="hidAuth" type="hidden" id="hidAuth" value="dtlyMtfmeBl*tqTDX5jdr*ZWkI8NIaC0jU002dQMiWs=" />
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

    <div class="p-center-main clrfix" id="div1">
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
                <span class="gray3">新邮箱验证</span>
            </div>
            <div class="z-content">

                <!--输入新邮箱号-->
                <div class="person-wrap" id="div">
                    <ul class="person-list">
                        <li>
                            <span class="l-side">输入新邮箱号：</span>
                                <span class="r-side">
                                    <div class="inp-wrap ">
                                        <input id="email" maxlength="50" type="text" class="code-inner inp-long" value="" placeholder="请输入新邮箱号" />
                                    </div>
                                </span>
                            <div id="div_tips1"></div>
                        </li>
                        <li>
                            <span class="l-side"></span>
                                <span class="r-side">
                                    <a id="but" href="javascript:;" class="set-save-btn">确定</a>
                                </span>
                        </li>
                    </ul>
                </div>
                <script>
                    $(function(){
                     $('#div').delegate('#but','click', function () {
                         //获取邮箱号
                         var email = $('#email').val();
                         //验证邮箱格式
                         var reg_email = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
                         if(email==''){
                             alert('请输入邮箱');
                         }else if(!reg_email.test(email)){
                             alert('邮箱格式不正确');
                         }else{
                             $.post('sendEmailDo',{email:email}, function (res) {
                                if(res==0){
                                    alert('验证码发送失败')
                                }else{
                                    $('#Checking').attr('style','');
                                }
                             });
                         }
                     });
                    });
                </script>
                <!--发送状态-->
                <div class="person-wrap" id="Checking" style="display: none;">
                    <ul class="person-list">
                        <li>
                            <span class="l-side"></span>
                                <span class="r-side">验证码已发送至邮箱：<b class="blue" id="b_account"></b>
                                    <a href="/EmailChecking.do?str=dtlyMtfmeBl*tqTDX5jdr*ZWkI8NIaC0jU002dQMiWs=" class="change">更换</a>
                                </span>
                        </li>
                        <li>
                            <span class="l-side">验证码：</span>
                                <span class="r-side">
                                    <div class="inp-wrap ">
                                        <input id="txtEmail" maxlength="12" type="text" class="code-inner" value="" placeholder="请输入6位验证码" />
                                        <a id="sendAgain" href="javascript:;" class="get-code-btn">(120)重新发送</a>
                                    </div>
                                </span>
                            <div id="div_tips2"></div>
                        </li>
                        <li>
                            <span class="l-side"></span>
                                <span class="r-side">
                                    <a id="butSave" href="javascript:;" class="set-save-btn">确定</a>
                                </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
           $('#div1').delegate('#butSave','click', function () {
               //获取验证码
               var email_code = $('#txtEmail').val();
               var email = $('#email').val();
               if(email_code==''){
                   alert('请输入验证码');
               }else{
                   $.post('CheckEmailCode',{email_code:email_code,email:email},function(res){
                       if(res==1){
                           alert('绑定邮箱成功');
                           location.href='security'
                       }else{
                           alert('绑定邮箱失败');
                           history.go(0);
                       }
                   });
               }
           });
        });
    </script>
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