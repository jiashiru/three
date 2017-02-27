<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员注册_1元云购</title>
    <meta name="Description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="style/css/sslComm.css?date=150713" />
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
    <link rel="stylesheet" type="text/css" href="style/css/layout.css?date=160718" />
    <script language="javascript" type="text/javascript" src="style/js/JQuery1.12.js"></script>
    <script type="text/javascript" src="style/js/jquery-ui.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="style/js/Register.js"></script>
</head>
<body>


<div class="wrapper">
    <input name="hidRegisterForward" type="hidden" id="hidRegisterForward" value="http://www.1yyg.com/" />
    <div class="g-logo-top">
        <a href="http://www.1yyg.com" class="transparent-png fl">
            <img src="style/images/logo.png" alt="" />
        </a>
        <span class="fr">已有账号？<a id="hylinkLoginPage" class="blue" href="login">立即登录</a></span>
    </div>

    <div class="g-contentCon clrfix">


        <div class="m-main clrfix" id="div">
            <h2 class="gray3">新用户注册</h2>
            <div class="register-form-con clrfix">
                <ul>
                    <li>
                        <input id="txtUserName" type="text" maxlength="100"  value="" placeholder="手机号/邮箱地址"/>
                        <b class="passport-icon user-name transparent-png"></b>
                        <span id="name"></span>
                    </li>
                    <li>
                        <input id="txtPwd" type="password" maxlength="20" value="" placeholder="设置登录密码"/>
                        <b class="passport-icon login-password transparent-png"></b>
                        <span  id="pwd"></span>

                    </li>
                    <li>
                        <input id="txtConPwd" type="password" maxlength="20"  value="" placeholder="确认密码"/>
                        <b class="passport-icon login-password transparent-png"></b>

                        <span id="apwd"></span>

                    </li>
                    {{--<li id="regVcCodeLi">--}}
                        {{--<div class="vc-wrapper" style="display: block;">--}}
                            {{--<div class="vc-btn-container" id="dragBtnContainer" style="display: block;">--}}
                                {{--<div class="vc-slide-text"><span>请按住滑块，拖动到最右边</span></div>--}}
                                {{--<div class="vc-slideBtnLeft" id="dragBtnLeft">--}}
                                    {{--<span class="canvas-Title" style="display:none;">请点击图中的“<strong id="selectedChar"></strong>”字</span>--}}
                                    {{--<span class="canvas-Title" style="display: none;">验证通过！</span>--}}
                                    {{--<a href="javascript:;" id="refreshVcCode" class="passport-icon refresh" style="display: none; "></a>--}}
                                {{--</div>--}}
                                {{--<div class="vc-slideBtn" id="dragBtn"><i class="passport-icon ready-status"></i></div>--}}
                            {{--</div>--}}
                            {{--<div class="canvas-wrapper" style="display: none;">--}}
                                {{--<div class="canvas-container" id="canvasContainer" style="">--}}
                                    {{--<img id="vcCanvas" class="vc-canvas" src="" alt="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span class="orange"><i class="passport-icon transparent-png"></i></span>--}}
                    {{--</li>--}}
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
<script>
    $(function () {
        flag = 1;
        //失去焦点，验证手机号或者邮箱是否唯一
        $("#div").delegate("#txtUserName","blur",function () {

            var name = $("#txtUserName").val();
            //正则验证
            var reg_tel = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            var reg_email = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
            if(!reg_tel.test(name)){
                if(!reg_email.test(name)){
                    flag = 0;
                    $("#name").html("<font color='red'>请输入正确的手机号或邮箱</font>");
                }else {
                    flag = 1;
                    $("#name").html("<font color='green'>ok</font>");
                }
            }else{
                flag = 1;
            }

            //验证唯一
            if(flag==1){
                //ajax验证
                $.post('checkName',{name:name}, function (res) {
                    if(res==0){
                        flag = 0;
                        $("#name").html("<font color='red'>用户名已经存在</font>");
                    }else{
                        flag = 1;
                        $("#name").html("<font color='green'>ok</font>");

                    }
                });
            }
        });

        //失去焦点验证密码

        $("#div").delegate("#txtPwd","blur",function () {
            //获取密码
            var pwd = $(this).val();
            //密码正则
            var reg_pwd = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$/;
            if(!reg_pwd.test(pwd)){
                flag = 0;
                $("#pwd").html("<font color='red'>密码由8位以上字母和数字组成</font>");
            }else{
                flag = 1;
                $("#pwd").html("<font color='green'>ok</font>");
            }

        });

        //失去焦点验证确认密码

        $("#div").delegate("#txtConPwd","blur",function () {
            //获取域确认密码
            var apwd = $(this).val();
            //获取密码
            var pwd = $("#txtPwd").val();
            //判断是否相同
            if(pwd!=apwd){
                flag = 0;
                $("#apwd").html("<font color='red'>确认密码和密码不一致</font>");
            }else{
                flag = 1;
                $("#apwd").html("<font color='green'>ok</font>");
            }
        });

        //添加
        $("#div").delegate("#btnAgreeBtn","click", function () {
            //获取值
            var name = $("#txtUserName").val();
            //获取域确认密码
            var apwd = $("#txtConPwd").val();
            //获取密码
            var pwd = $("#txtPwd").val();
            if(name==""){
                flag = 0;
                $("#name").html("<font color='red'>请输入手机号或邮箱</font>");
            }else if(pwd==""){
                flag = 0;
                $("#pwd").html("<font color='red'>请输入密码</font>");
            }else if(apwd==""){
                flag = 0;
                $("#apwd").html("<font color='red'>请输入确认密码</font>");
            }else{
                //ajax验证手机号唯一
                $.post('checkName',{name:name}, function (res) {
                    if(res==0){
                        flag = 0;
                        $("#name").html("<font color='red'>用户名已经存在</font>");
                    }else{
                        flag = 1;
                        $("#name").html("<font color='green'>ok</font>");

                    }
                });
                if(flag==1){
                    //ajax添加
                    $.post("registerDo",{name:name,pwd:pwd}, function (res) {
                        if(res==1){
                            //注册成功,跳转
                            location.href="/";

                        }else{
                            //注册失败，提示，刷新页面
                            alert('注册失败');
                            history.go(0);

                        }
                    });
                }

            }
        });

    });
</script>
