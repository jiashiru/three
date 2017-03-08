

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>编辑个人资料_1元云购</title>
    <link rel="stylesheet" type="text/css" href="style/css/set/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="style/js/set/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->
    <link href="style/css/set/base.css?date=20150716" rel="stylesheet" type="text/css" />
    <link href="style/css/set/member_x.css?v=150728" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="style/js/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="style/js/set/Modify.js"></script>
</head>
<body>
<input name="hidOldName" type="hidden" id="hidOldName" value="USER.1016650713" />
<input name="hidBirthday" type="hidden" id="hidBirthday" />
<input name="hidUpdateTime" type="hidden" id="hidUpdateTime" />
<input name="hideCons" type="hidden" id="hideCons" value="0" />
<input name="hidLiveA" type="hidden" id="hidLiveA" value="0" />
<input name="hidLiveB" type="hidden" id="hidLiveB" value="0" />
<input name="hidHomeA" type="hidden" id="hidHomeA" value="0" />
<input name="hidHomeB" type="hidden" id="hidHomeB" value="0" />
<input name="hidMonthIncome" type="hidden" id="hidMonthIncome" />
<input name="hidSex" type="hidden" id="hidSex" value="0" />
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
            };
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

                <li  class="curr"><a href="setInfo" title="个人资料">个人资料</a><b></b></li>
                <li><a href="header" title="修改头像">修改头像</a><b></b></li>
                <li><a href="address" title="收货地址">收货地址</a><b></b></li>
                <li><a href="security" title="账户安全">账户安全</a><b></b></li>

            </ul>
        </div>

        <div class="sidebar_main clrfix fr">
            <div class="g-purchase-title bor-bot">
                <span class="gray3">个人资料</span>
            </div>
            <div class="z-content">
                <div class="con">
                    <div class="pic-side">
                        <div class="pic-wrap">
                            <a href="header" class="h-pic"><img src="style/images/set/00000000000000000_002.jpg" width="120" height="120" /></a><a href="header" class="h-txt">修改头像</a>
                        </div>
                        <div class="pic-wrap">
                            <a href="/security/index.do"><span class="p-icon"><i class="tel"></i></span><p class="gray9">已绑定</p>
                                <p class="gray6">15373****63</p></a>
                        </div>
                        <div class="pic-wrap">
                            <a href="/UserAuth-50.do?forward=%2fMemberModify.do"><span class="p-icon"><i class="mail"></i></span><p class="gray9">未绑定</p></a>
                        </div>
                    </div>
                    <div class="info-side">
                        <div class="info-sign"><i></i>温馨提示：完善以下资料即可获得50福分，1元云购不会以任何形式公开您的个人隐私！</div>


                        <form method="post" action="infoDo" id="form">
                        <ul class="info-list">
                            <li>
                                <span class="label">昵　　称：</span>
                                <input name="nickname" type="text" id="nickname" class="inp-long" maxlength="20" value="{{$info['nickname']}}" />
                                <em class="orange">*</em>
                                <span class="orange" id="nick"></span>
                            </li>
                            <li>
                                <span class="label">备用电话：</span>
                                <input name="phone" type="text" id="txtPhone" class="inp-long" value="{{$info['phone']}}" placeholder="手机号/座机" />
                                <span class="orange" id="phone"></span>
                            </li>
                            <li>
                                <span class="label">性　　别：</span>
                                <input type="hidden" name="sex" id="sex" value="{{$info['sex']}}" />
                                <div class="sex-list">
                                    <div class="box">
                                        <div class="box-check" id="check1" value="1">
                                            <i></i>
                                        </div>
                                        <span class="blank1">男</span>
                                    </div>
                                    <div class="box" >
                                        <div class="box-check" id="check2" value="2">
                                            <i></i>
                                        </div>
                                        <span class="blank2">女</span>
                                    </div>
                                    <div class="box" >
                                        <div class="box-check" id="check3" value="3">
                                            <i></i>
                                        </div>
                                        <span class="blank3">保密</span>
                                    </div>
                                </div>
                                <span class="orange"></span>
                            </li>

                            <script>
                                $(function(){
                                   //获取性别值
                                    var sex = $("#sex").val();
                                    if(sex==1){
                                        $("#check1").attr("class","box-check current");
                                    }else if(sex==2){
                                        $("#check2").attr("class","box-check current");
                                    }else if(sex==3){
                                        $("#check3").attr("class","box-check current");
                                    }

                                    //点击修改性别
                                    $(".box-check").click(function () {
                                        var value = $(this).attr('value');
                                        $(this).attr('class',"box-check current");
                                        $("#sex").val(value);
                                    });
                                });
                            </script>

                            <li>
                                <span class="label">生　　日：</span>

                                <div id="main" >
                                    <div class="demo" >

                                        <p>
                                            <select class="sel_year" name="year" rel="{{$info['year'] or ''}}"></select>年
                                            <select class="sel_month" name="month" rel="{{$info['month'] or ''}}"></select>月
                                            <select class="sel_day" name="day" rel="{{$info['day'] or ''}}"></select>日
                                        </p>

                                    </div>

                                </div>

                                <script type="text/javascript" src="style/js/birthday.js"></script>
                                <script>
                                    $(function () {
                                        $.ms_DatePicker({
                                            YearSelector: ".sel_year",
                                            MonthSelector: ".sel_month",
                                            DaySelector: ".sel_day"
                                        });
                                        $.ms_DatePicker();
                                    });
                                </script>


                            </li>

                            <li>
                                <span class="label">所<em class="blank2">在</em>地：</span>
                                <div class="control-group fl clrfix" >
                                    <div class="controls">
                                        <select name="location_p" id=""></select>
                                        <select name="location_c" id=""></select>
                                        <select name="location_a" id=""></select>
                                        <script src="style/js/region_select.js"></script>
                                        <script type="text/javascript">

                                            new PCAS('location_p', 'location_c', 'location_a', "{{ $info['location_p'] or '' }}",
                                                    "{{$info['location_c'] or ''}}", "{{$info['location_a'] or ''}}");

                                        </script>
                                    </div>
                                </div>
                                <span class="orange"></span>
                            </li>

                            <li>
                                <span class="label">QQ&nbsp;号码：</span>
                                <input name="txtQQ" type="text" id="qq" class="inp-long" value="{{$info['qq']}}" placeholder="您的QQ号码" />
                                <span class="orange" id="QQ"></span>
                                <div class="clear"></div>
                            </li>

                            <li>
                                <span class="label">签　　名：</span>
                                <textarea name="txtSignature" id="txtSignature" name="signature" rows="5" cols="10" class="u-sign" placeholder="让别人看到不一样的你">{{$info['signature']}}</textarea>
                                <span class="orange" id="txt"></span>
                            </li>
                            <li>
                                {{--<a id="btnSave" href="javascript:;" class="save-btn">保存</a>--}}
                                <input type="submit" value="保存" id="save" class="save-btn"/>
                            </li>
                        </ul>
                        </form>

                        <script>



                            $(function () {

                                var flag = 1;
                                //失去焦点验证昵称
                                $("#form").delegate("#nickname","blur", function () {
                                    //验证昵称
                                    var nickname = $("#nickname").val();
                                    //正则
                                    var reg_name = /^.{2,20}$/;
                                    if(nickname==''){
                                        $("#nick").html('昵称不能为空');
                                        flag = 0;
                                    }else if(!reg_name.test(nickname)){
                                        $("#nick").html('昵称为2-20个字符');
                                        flag = 0;
                                    }else{
                                        //验证唯一
                                        $.post("checkNick",{nickname:nickname}, function (res) {
                                            if(res==1){
                                            $("#nick").html(' ');
                                            flag = 1;
                                        }else{
                                            $("#nick").html('该昵称已经存在');
                                            flag = 0;
                                        }
                                        });
                                    }
                                });

                                //失去焦点验证电话
                                $("#form").delegate("#txtPhone","blur", function () {
                                    //获取
                                    var phone = $(this).val();
                                    //电话正则
                                    var reg_tel = /^1[3|4|5|7|8][0-9]{9}$/;
                                    //座机正则  区号+号码，区号以0开头，3位或4位
                                    var reg_phone = /^0\d{2,3}-?\d{7,8}$/;
                                    if(phone!=""){
                                        if(!reg_tel.test(phone)){
                                            if(!reg_phone.test(phone)){
                                                $("#phone").html("请输入正确的电话号");
                                                flag = 0;
                                            }else{
                                                $("#phone").html(" ");
                                                flag = 1;
                                            }
                                        }else{
                                            $("#phone").html(" ");
                                            flag = 1;
                                        }
                                    }else{
                                        $("#phone").html(" ");
                                        flag = 1;
                                    }
                                });

                                //失去焦点验证qq
                                $("#form").delegate("#qq","blur", function () {
                                    //获取qq
                                    var qq = $(this).val();
                                    //qq正则
                                    var reg_qq = /^[1-9]\d{4,10}$/;
                                    if(qq!=""){
                                        if(!reg_qq.test(qq)){
                                            $("#QQ").html("请输入正确的qq");
                                            flag = 0;
                                        }else{
                                            $("#QQ").html(" ");
                                            flag = 1;
                                        }
                                    }else{
                                        $("#QQ").html(" ");
                                        flag = 1;
                                    }
                                });

                                //验证签名
                                $("#form").delegate("#txtSignature","blur", function () {
                                    //获取内容
                                    var signature = $(this).val();
                                    var reg_sign = /^.{0,100}$/;
                                    if(signature!=""){
                                        if(!reg_sign.test(signature)){
                                            $("#txt").html("请输入0-100个字符");
                                            flag = 0;
                                        }else{
                                            $("#txt").html(" ");
                                            flag = 1;
                                        }
                                    }else{
                                        $("#txt").html(" ");
                                        flag = 1;
                                    }
                                });

                                //提交
                                if(flag==1){

                                $("#form").delegate("#save","click", function () {
                                    //验证昵称
                                    var nickname = $("#nickname").val();
                                    //正则
                                    var reg_name = /^.{2,20}$/;
                                    if(nickname==""){
                                        $("#nick").html('昵称不能为空');
                                        return false;
                                    }else if(!reg_name.test(nickname)){
                                        $("#nick").html('昵称为2-20个字符');
                                        return false;
                                    }else{
                                        var res = checknick(nickname);
                                        if(res==1){
                                            return true;
                                        }else{
                                            $("#nick").html('该昵称已经存在');
                                            return false;
                                        }
                                    }
                                });

                                }

                            });
                        </script>


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
