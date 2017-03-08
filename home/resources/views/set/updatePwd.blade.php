

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>
        修改密码_1元云购
    </title><link rel="stylesheet" type="text/css" href="style/css/set/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]--><link href="style/css/set/base.css?date=20150716" rel="stylesheet" type="text/css" />
    <link href="style/css/set/member_x.css?v=150728" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="style/js/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="style/js/set/UpdatePassWord.js"></script>
</head>
<body>
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
                    <li><a href="http://member.1yyg.com/Index.do" title="我的1元云购">我的1元云购</a><em class="z-my-1yyg u-personal"></em></li>

                    <li class="curr" id="li_accset"><a href="http://member.1yyg.com/MemberModify.do" title="账号设置">账号设置<b><s></s></b></a><em class="z-account-settings u-personal"></em>
                        <div class="m-sub-menu">
                            <span><a href="/setInfo">个人资料</a></span>
                            <span><a href="/header">修改头像</a></span>
                            <span><a href="/address">收货地址</a></span>
                            <span><a href="security">账户安全</a></span>
                            <b><s></s></b>
                        </div>
                    </li>
                    <li><a target="_blank" href="http://u.1yyg.com/1016490277" title="个人主页">个人主页</a><em class="z-home-page u-personal"></em></li>
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

                <li><a href="setInfo" title="个人资料">个人资料</a><b></b></li>
                <li><a href="header" title="修改头像">修改头像</a><b></b></li>
                <li><a href="address" title="收货地址">收货地址</a><b></b></li>
                <li  class="curr"><a href="security" title="账户安全">账户安全</a><b></b></li>

            </ul>
        </div>

        <div class="sidebar_main clrfix fr">
            <div class="g-purchase-title bor-bot">
                <a href="javascript:history.go(-1);" class="return-btn safe">返回</a>
                <span class="gray3">修改密码</span>
            </div>
            <div class="z-content">
                <div class="person-wrap change-code">
                    <form id="form" method="post" action="pwdDo">
                    <ul class="person-list">
                        <li>
                            <span class="l-side">原始密码：</span>
                                <span class="r-side">
                                    <div class="inp-wrap">
                                        <input id="OldPass" maxlength="20" name="oldPass" type="password" class="code-inner" />
                                        <span class="get-code-btn" id="span_1"></span>
                                    </div>
                                </span>
                            <div id="div_tips1"></div>
                        </li>
                        <li>
                            <span class="l-side">新密码：</span>
                                <span class="r-side">
                                    <div class="inp-wrap">
                                        <input id="NewPass" maxlength="20" name="newPass" type="password" class="code-inner" />
                                        <span class="get-code-btn" id="span_2"></span>
                                    </div>
                                    <span id="pwdStrength" style="display: none;"></span>
                                </span>
                            <div id="div_tips2"></div>
                        </li>
                        <li>
                            <span class="l-side">再次输入密码：</span>
                                <span class="r-side">
                                    <div class="inp-wrap">
                                        <input id="newPassAgain" maxlength="20" name="newPassAgain" type="password" class="code-inner" />
                                        <span class="get-code-btn" id="sapn_3"></span>
                                    </div>
                                </span>
                            <div id="div_tips3"></div>
                        </li>
                        <li>
                            <span class="l-side"></span>
                                <span class="r-side">
                                    <input type="submit" value="保存" id="sub" class="set-save-btn"/>
                                    {{--<a id="btnSubmitSave" href="javascript:;" class="set-save-btn">保存</a>--}}
                                </span>
                        </li>
                    </ul>
                    </form>
                </div>
                <script>
                    $(function () {
                        $("#form").delegate("#sub",'click', function () {
                            //获取密码
                            var oldpwd = $("#OldPass").val();
                            var newpwd = $("#NewPass").val();
                            var newPassAgain = $("#newPassAgain").val();
                            var flag = 1;
                            if(oldpwd==""){
                                $("#span_1").html('请输入原始密码');

                                flag = 0;
                            }else if(newpwd==""){

                                $("#span_2").html('请输入新密码');
                                flag = 0;
                            }else if(newPassAgain==""){

                                $("#span_3").html('请输入确认密码');
                                flag = 0;
                            }else if(newpwd!=newPassAgain){

                                $("#span_3").html('确认密码和密码不相同');
                                flag = 0;
                            }else{

                                //查询原始密码
                                $.post("checkPwd",{oldpwd:oldpwd}, function (res) {
                                    if(res==0){
                                        $("#span_1").html('原始密码不正确');
                                        flag = 1;
                                    }else{
                                        flag = 0;
                                        $("#span_1").html('');
                                    }
                                });
                            }

                            if(flag==1){
                                return true;
                            }else{
                                return false;
                            }

                        });
                    });
                </script>

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
