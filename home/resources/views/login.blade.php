<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员登录_1元云购</title>
    <meta name="Description" content="" />
    <link rel="stylesheet" type="text/css" href="style/css/sslComm.css?date=150713" />
    <!--[if IE 6]>
    <script type="text/javascript" src="STYLE/js/iepng.js"></script>
    <script type="text/javascript">
        try{
            if(EvPNG!=null&&EvPNG!=undefined){
                EvPNG.fix('.transparent-png');
            }
        }
        catch(e){}
    </script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="style/css/layout.css?date=160607" />
    <script language="javascript" type="text/javascript" src="style/js/JQuery1.12.js"></script>
    <script type="text/javascript" src="style/js/jquery-ui.js"></script>
    {{--<script type="text/javascript" src="style/js/jquery.ui.touch-punch.js"></script>--}}
    <script id="pageJS" language="javascript" type="text/javascript" data="style/js/Login.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="g-logo-top g-logo-width">
        <a rel="nofollow" href="/" class="transparent-png fl"><img src="style/images/logo.png"></a>
        <span class="fr"><a href="/">返回首页</a></span>
    </div>
    <input name="hidLoginForward" type="hidden" id="hidLoginForward" value="http://www.1yyg.com/" />
    <input name="hidQQAppID" type="hidden" id="hidQQAppID" value="100511748" />
    <input name="hidWxAppID" type="hidden" id="hidWxAppID" value="wxe61d43f2e02a5b10" />
    <input name="hidAccount" type="hidden" id="hidAccount" />

    <div class="g-login-con clrfix" id="g_login" style="background:#b390f4 url(style/images/20170204155949567.jpg) top center no-repeat;">
        <div class="m-login-screen clrfix">
            <div id="loadingPicBlock" class="screen-left fl"></div>
            <div id="div_screen-right" class="screen-right fr">
                <!-- addClass block-code -->
                <div class="login-panel" id="LoginForm">

                    <form method="post" action="loginDo">
                    <dl>
                        <dt>
                            <em class="fl">登录</em>
                            <a id="hylinkRegisterPage" tabindex="7" class="fr orange" href="register">免费注册<i class="passport-icon"></i></a>
                        </dt>
                        <dd>
                            <div class="register-form-con clrfix  ">
                                <div> <font color="red">{{ isset($msg) ? $msg : '' }}</font></div>
                                <ul id="loginContainerUl">
                                    <li>
                                        <input id="username" name="name" type="text" maxlength="100" placeholder="请输入手机号/邮箱" value=""/>
                                        <b class="passport-icon user-name transparent-png"></b>
                                        <span id="name"></span>

                                    </li>
                                    <li>
                                        <input id="pwd" type="password" name="pwd" maxlength="20" placeholder="请输入密码" value="" />
                                        <b class="passport-icon login-password transparent-png"></b>
                                        <span id="pwd"></span>
                                    </li>

                                </ul>
                            </div>
                        </dd>
                        <dd class="error-message orange" style="display: none;" id="dd_error_msg"></dd>
                    </dl>

                    <p>

                        <input type="submit" id="btnSubmitLogin" value="登  录"  style="background-color: orangered; width: 300px; height: 40px; font-size: 20px; color: #ffffff" />
                    </p>
                    <div class="other-login">
                        <a id="hylinkGetPassPage" tabindex="4" class="gray9 forget" href="findpassword.html?forward=http%3a%2f%2fwww.1yyg.com%2f">忘记密码？</a>
                        <em class="line"></em>
                        <div class="fr">
                            <span>快捷登录：</span>
                            <a id="qq_login_btn" href="javascript:;" class="qq-icon" tabindex="5"><b class="passport-icon transparent-png"></b></a>
                            <a id="wx_login_btn" href="javascript:;" class="wx-icon" tabindex="6"><b class="passport-icon transparent-png"></b></a>
                        </div>
                    </div>
                    <ul id="j-tips-wrap" class="j-tips-wrap j-login-page">
                    </ul>
                    </form>
                </div>
                <div class="wx-login clrfix" id="wxLogin" style="display: none;">
                    <h2 class="gray3">微信登录</h2>
                    <p id="p_code"></p>
                    <a id="a_return" href="javascript:;"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- 底部版权 -->
    <div class="g-copyrightCon clrfix">
        <div class="g-links">
            <a target="_blank" href="/" title="首页">首页</a><s></s>
            <a target="_blank" href="http://help.1yyg.com/htm-about.html" title="关于云购">关于云购</a><s></s>
            <a target="_blank" href="http://help.1yyg.com/htm-privacy.html" title="隐私声明">隐私声明</a><s></s>
            <a target="_blank" href="http://help.1yyg.com/info/htm-business.html">合作专区</a><s></s>
            <a target="_blank" href="http://www.1yyg.com/link.html">友情链接</a><s></s>
            <a target="_blank" href="http://help.1yyg.com/htm-jobs.html" title="加入云购">加入云购</a><s></s>
            <a target="_blank" href="http://help.1yyg.com/htm-contactus.html" title="联系我们">联系我们</a>
        </div>
        <div class="g-copyright">
            Copyright &copy; 2011 - 2017, 版权所有 1yyg.com 粤ICP备09213115号-1
        </div>
    </div>


</div>
</body>
</html>
<script>
    $(function () {
       $("#g_login").delegate("#btnSubmitLogin","click", function () {
           //获取用户名和密码
           var username = $("#username").val();
           var pwd = $("#pwd").val();
           var flag = 1;
           if(username==""){
               flag = 0;
               $("#name").html("<font color='red'>请输入手机号或邮箱</font>");
           }else if(pwd==""){
               flag = 0;
               $("#pwd").html("<font color='red'>请输入密码</font>");
           }else{
                //正则验证
               var reg_tel = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
               var reg_email = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
               var reg_pwd = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$/;
               if(!reg_email.test(username)){
                   if(!reg_tel.test(username)){
                       flag = 0;
                       $("#name").html("<font color='red'>请输入正确的手机号或邮箱</font>");
                   }else{
                       if(!reg_pwd.test(pwd)){
                           flag = 0;
                           $("#pwd").html("<font color='red'>请输入正确格式的密码</font>");
                       }else{
                           flag = 1;
                       }
                   }
               }else{
                   if(!reg_pwd.test(pwd)){
                       flag = 0;
                       $("#pwd").html("<font color='red'>请输入正确格式的密码</font>");
                   }else{
                       flag = 1;
                   }
               }
           }
           if(flag==1){
               return true;
           }else{
               return false;
           }
       });
    });
</script>
