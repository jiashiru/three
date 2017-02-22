<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员登录_1元云购</title>
    <meta name="Description" content="" />
    <link rel="stylesheet" type="text/css" href="https://skin.1yyg.net/passport/CSS/sslComm.css?date=150713" />
    <!--[if IE 6]>
    <script type="text/javascript" src="https://skin.1yyg.com/js/iepng.js"></script>
    <script type="text/javascript">
        try{
            if(EvPNG!=null&&EvPNG!=undefined){
                EvPNG.fix('.transparent-png');
            }
        }
        catch(e){}
    </script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="https://skin.1yyg.net/Passport/css/layout.css?date=160607" />
    <script language="javascript" type="text/javascript" src="https://skin.1yyg.net/JS/JQuery1.12.js"></script>
    <script type="text/javascript" src="https://skin.1yyg.net/Plugins/jquery-ui.js"></script>
    <script type="text/javascript" src="https://skin.1yyg.net/weixin/JS/jquery.ui.touch-punch.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="https://skin.1yyg.net/Passport/JS/Login.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="g-logo-top g-logo-width">
        <a rel="nofollow" href="http://www.1yyg.com" class="transparent-png fl"><img src="https://skin.1yyg.net/Passport/images/logo.png"></a>
        <span class="fr"><a href="http://www.1yyg.com">返回首页</a></span>
    </div>
    <input name="hidLoginForward" type="hidden" id="hidLoginForward" value="http://www.1yyg.com/" />
    <input name="hidQQAppID" type="hidden" id="hidQQAppID" value="100511748" />
    <input name="hidWxAppID" type="hidden" id="hidWxAppID" value="wxe61d43f2e02a5b10" />
    <input name="hidAccount" type="hidden" id="hidAccount" />

    <div class="g-login-con clrfix" id="g_login">
        <div class="m-login-screen clrfix">
            <div id="loadingPicBlock" class="screen-left fl"></div>
            <div id="div_screen-right" class="screen-right fr">
                <!-- addClass block-code -->
                <div class="login-panel" id="LoginForm">
                    <dl>
                        <dt>
                            <em class="fl">登录</em>
                            <a id="hylinkRegisterPage" tabindex="7" class="fr orange" href="register.html?forward=http%3a%2f%2fwww.1yyg.com%2f">免费注册<i class="passport-icon"></i></a>
                        </dt>
                        <dd>
                            <div class="register-form-con clrfix  ">
                                <ul id="loginContainerUl">
                                    <li>
                                        <input id="username" type="text" maxlength="100" tabindex="1" autocomplete="off" value=""/>
                                        <b class="passport-icon user-name transparent-png"></b>
                                        <em style="display: none;">手机号/邮箱地址</em>
                                        <a id="a_clear" href="javascript:;" class="passport-icon" style="display: none;"></a>
                                    </li>
                                    <li>
                                        <input id="pwd" type="password" maxlength="20" tabindex="2" value="" />
                                        <b class="passport-icon login-password transparent-png"></b>
                                        <em style="display: none;">密码</em>
                                        <div class="key-capital gray6" style="display: none;" id="key_capital"><i class="passport-icon"></i>键盘大写已锁定，请注意大小写！<b><s></s></b></div>
                                    </li>
                                    <li id="vcCodeContainerLi" style="display: none;">
                                        <div class="vc-wrapper" id="vcCodeTopContainer">
                                            <div class="vc-btn-container" id="dragBtnContainer">
                                                <div class="vc-slide-text"><span>请按住滑块，拖动到最右边</span></div>
                                                <div class="vc-slideBtnLeft" id="dragBtnLeft" >
                                                    <span class="canvas-Title" style="display: none;">请点击图中的"<strong id="selectedChar"></strong>"字</span>
                                                    <span class="canvas-Title" style="display: none;">验证通过！</span>
                                                    <a href="javascript:;" id="refreshVcCode" class="passport-icon refresh" style="display: none;"></a>
                                                </div>
                                                <div class="vc-slideBtn" id="dragBtn"><i class="passport-icon ready-status"></i></div>
                                            </div>
                                            <div class="canvas-wrapper" style="display: none;">
                                                <div class="canvas-container" id="canvasContainer" style="">
                                                    <img id="vcCanvas" class="vc-canvas" src="" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </dd>
                        <dd class="error-message orange" style="display: none;" id="dd_error_msg"></dd>
                    </dl>
                    <p><a id="btnSubmitLogin" href="javascript:;" class="z-agreeBtn" tabindex="3">登录</a></p>
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
            <a target="_blank" href="http://www.1yyg.com/" title="首页">首页</a><s></s>
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

    <script language="javascript" type="text/javascript">
        var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, B) { var B = function () { }; if (callBack != undefined) { B = callBack } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
        function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
        Base.getScript('https://skin.1yyg.net/JS/sslBottomFun.js?v=' + GetVerNum());
    </script>
    <div style="display: none;">
        <script type="text/javascript" language="JavaScript" src=" https://s22.cnzz.com/stat.php?id=3362429&web_id=3362429"></script>
    </div>
</div>
</body>
</html>
