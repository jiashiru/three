

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员注册_1元云购</title>
    <meta name="Description" content="" />
    <meta name="keywords" content="" />
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
    <link rel="stylesheet" type="text/css" href="https://skin.1yyg.net/Passport/css/layout.css?date=160718" />
    <script language="javascript" type="text/javascript" src="https://skin.1yyg.net/JS/JQuery1.12.js"></script>
    <script type="text/javascript" src="https://skin.1yyg.net/Plugins/jquery-ui.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="https://skin.1yyg.net/Passport/JS/Register.js"></script>
</head>
<body>


<div class="wrapper">
    <input name="hidRegisterForward" type="hidden" id="hidRegisterForward" value="http://www.1yyg.com/" />
    <div class="g-logo-top">
        <a href="http://www.1yyg.com" class="transparent-png fl">
            <img src="https://skin.1yyg.net/Passport/images/logo.png" alt="" />
        </a>
        <span class="fr">已有账号？<a id="hylinkLoginPage" class="blue" href="login.html?forward=http%3a%2f%2fwww.1yyg.com%2f">立即登录</a></span>
    </div>

    <div class="g-contentCon clrfix">

        <div class="m-main clrfix">
            <h2 class="gray3">新用户注册</h2>
            <div class="register-form-con clrfix">
                <ul>
                    <li>
                        <input id="txtUserName" type="text" maxlength="100"  value=""/>
                        <b class="passport-icon user-name transparent-png"></b>
                        <em style="display: none;">手机号/邮箱地址</em>
                        <span class="orange" style="display: none;"></span>
                        <s class="passport-icon" style="display: none;"></s>
                    </li>
                    <li>
                        <input id="txtPwd" type="password" maxlength="20" value=""/>
                        <b class="passport-icon login-password transparent-png"></b>
                        <em style="display: none;">设置登录密码</em>
                        <span class="orange" style="display: none;"></span>
                        <s class="passport-icon" style="display: none;"></s>
                        <span id="pwdStrength" style="display: none;"></span>

                    </li>
                    <li>
                        <input id="txtConPwd" type="password" maxlength="20"  value=""/>
                        <b class="passport-icon login-password transparent-png"></b>
                        <em style="display: none;">确认密码</em>
                        <span class="orange" style="display: none;"></span>
                        <s class="passport-icon" style="display: none;"></s>
                    </li>
                    <li id="regVcCodeLi">
                        <div class="vc-wrapper" style="display: block;">
                            <div class="vc-btn-container" id="dragBtnContainer" style="display: block;">
                                <div class="vc-slide-text"><span>请按住滑块，拖动到最右边</span></div>
                                <div class="vc-slideBtnLeft" id="dragBtnLeft">
                                    <span class="canvas-Title" style="display:none;">请点击图中的“<strong id="selectedChar"></strong>”字</span>
                                    <span class="canvas-Title" style="display: none;">验证通过！</span>
                                    <a href="javascript:;" id="refreshVcCode" class="passport-icon refresh" style="display: none; "></a>
                                </div>
                                <div class="vc-slideBtn" id="dragBtn"><i class="passport-icon ready-status"></i></div>
                            </div>
                            <div class="canvas-wrapper" style="display: none;">
                                <div class="canvas-container" id="canvasContainer" style="">
                                    <img id="vcCanvas" class="vc-canvas" src="" alt="">
                                </div>
                            </div>
                        </div>
                        <span class="orange"><i class="passport-icon transparent-png"></i></span>
                    </li>
                </ul>
                <ul class="j-tips-wrap" id="j-tips-wrap"></ul>
            </div>
            <div class="link-con clrfix">
                <a id="btnAgreeBtn" href="javascript:;" class="z-agreeBtn">同意协议并注册</a>
                <a id="btnAgreement" href="http://help.1yyg.com/htm-agreement.html" target="_blank" class="z-agreement">《1元云购互助购物协议》</a>
            </div>
        </div>
    </div>

    <!--版权-->
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
