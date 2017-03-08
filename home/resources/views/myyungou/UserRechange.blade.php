

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>
        网银充值_1元云购
    </title><link rel="stylesheet" type="text/css" href="{{asset('style/css/header.css?v=170215')}}" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->
    <link href="{{asset('style/css/set/base.css?date=20150731')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('style/css/set/accounts.css?date=20150731')}}" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="{{asset('style/js/JQuery1.12.js')}}"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="{{asset('style/js/set/UserRecharge.js')}}"></script>
</head>
<body id="loadingPicBlock">
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

                <li><a href="myIndex" title="首页">首页</a><b></b></li>
                <li><a href="myGoods" title="云购记录">云购记录</a><b></b></li>
                <li><a href="myGoods" title="获得的商品">获得的商品</a><b></b></li>
                {{--<li><a href="/PostSingleList.do" title="晒单管理">晒单管理</a><b></b></li>--}}
                {{--<li><a href="/CollectList.do" title="我的关注">我的关注</a><b></b></li>--}}

                <li class="curr"><a href="myWallet" title="我的钱包">我的钱包</a><b></b></li>


            </ul>
        </div>

        <div class="sidebar_main clrfix fr">
            <div class="g-obtain-title clrfix">
                <ul>
                    <li class="curr"><a href="/UserRecharge.do">网银充值</a></li>
                    <li><a href="/CardRecharge.do">充值卡充值</a></li>
                </ul>
                <a href="/UserBalance.do" class="z-return blue u-personal">返回我的钱包</a>
            </div>

            <div class="g-please-select clrfix">
                <h3 class="gray6">请选择充值金额</h3>
                <ul id="ulMoneyList">
                    <li class="f-checked" money="50"><a href="javascript:;">￥50.00</a><s class="u-personal"></s></li>
                    <li money="100"><a href="javascript:;">￥100.00</a><s class="u-personal"></s></li>
                    <li money="200"><a href="javascript:;">￥200.00</a><s class="u-personal"></s></li>
                    <li money="500"><a href="javascript:;">￥500.00</a><s class="u-personal"></s></li>
                    <li money="0">
                        <input id="txtOtherMoney" type="text" placeholder="输入金额" class="gray9" maxlength="7" autocomplete="off" onpaste="return false;" onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;" />
                        <s class="u-personal"></s>
                    </li>
                </ul>
            </div>

            <div class="g-select-mode">
                <h3 class="gray6">请选择支付方式</h3>
                <div class="m-tab-menu">
                    <ul id="ul_menu">
                        <li class="curr"><a href="javascript:;">支付平台</a></li>
                        <li><a href="javascript:;">储蓄卡</a></li>
                        <li><a href="javascript:;">信用卡</a></li>
                    </ul>
                </div>
                <div class="f-pay-bank" id="div_platform">
                    <dl class="clrfix">
                        <dd style="display: none;">
                            <input type="radio" value="weixinpay" name="account" id="weixinpay"/><label for="weixinpay"><span class="u-bank-weixin"></span></label>
                        </dd>
                        <dd class="checked">
                            <input type="radio" value="alipay" name="account" id="alipay" checked="checked" /><label for="alipay"><span class="u-bank-zfb"> </span></label>
                        </dd>
                        <dd>
                            <input type="radio" value="jdpay" name="account" id="jdpay"  /><label for="jdpay"><span class="jd_bank"></span></label>
                        </dd>
                        <dd>
                            <input type="radio" value="Chinabank" name="account" id="Chinabank" /><label for="Chinabank"><span class="u-bank-wy"></span></label>
                        </dd>
                        <dd>
                            <input type="radio" value="QuickMoney" name="account" id="QuickMoney" /><label for="QuickMoney"><span class="u-bank-kq"></span></label>
                        </dd>

                        <dd style="display: none;">
                            <input type="radio" value="yeepaypc" name="account" id="yeepaypc"/><label for="yeepaypc"><span class="u-bank-ybzf"></span></label>
                        </dd>
                        <dd style="display: none;">
                            <input type="radio" value="quickpay" name="account" id="quickpay" /><label for="quickpay"><span class="u-quick-pay"></span></label>
                        </dd>
                        <dd style="display: none;">
                            <input type="radio" value="SwiftQ" name="account" id="SwiftQ" /><label for="SwiftQ"><span class="u-bank-qqmobile"></span></label>
                        </dd>
                        <dd style="display: none;">
                            <input type="radio" value="Unionpay" name="account" id="Unionpay" /><label for="Unionpay"><span class="u-bank-online"></span></label>
                        </dd>
                    </dl>
                </div>
                <div class="f-pay-bank" style="display: none;" id="div_savings">
                    <dl class="clrfix">
                        <!-- 1. 招商、工商、建行、农行 -->
                        <dd>
                            <input type="radio" value="3080" name="account" id="bankType3080" />
                            <label for="bankType3080"><span class="zh_bank"></span></label>
                        </dd>
                        <dd>
                            <input type="radio" value="1025" name="account" id="bankType1025" />
                            <label for="bankType1025"><span class="gh_bank"></span></label>
                        </dd>
                        <dd>
                            <input type="radio" value="105" name="account" id="bankType105" />
                            <label for="bankType105"><span class="jh_bank"></span></label>
                        </dd>
                        <dd>
                            <input type="radio" value="103" name="account" id="bankType103" />
                            <label for="bankType103"><span class="nh_bank"></span></label>
                        </dd>

                        <!-- 2. 中行、交通、华夏、兴业 -->
                        <dd>
                            <input type="radio" value="104" name="account" id="bankType104" /><label for="bankType104"><span class="zg_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="301" name="account" id="bankType301" /><label for="bankType301"><span class="jt_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="311" name="account" id="bankType311" /><label for="bankType311"><span class="hx_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="309" name="account" id="bankType309" /><label for="bankType309"><span class="xy_bank"></span></label></dd>

                        <!-- 3. 上海、民生、广发、平安 -->
                        <dd>
                            <input type="radio" value="326" name="account" id="bankType326" /><label for="bankType326"><span class="sh_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="305" name="account" id="bankType305" /><label for="bankType305"><span class="ms_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="3061" name="account" id="bankType3061" /><label for="bankType3061"><span class="gf_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="307" name="account" id="bankType307" /><label for="bankType307"><span class="pa_bank"></span></label></dd>

                        <!-- 4. 浦发、中信、光大、南京  -->
                        <dd>
                            <input type="radio" value="314" name="account" id="bankType314" /><label for="bankType314"><span class="pf_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="313" name="account" id="bankType313" /><label for="bankType313"><span class="zx_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="312" name="account" id="bankType312" /><label for="bankType312"><span class="gd_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="316" name="account" id="bankType316" /><label for="bankType316"><span class="nj_bank"></span></label></dd>

                        <!-- 5. 邮政、杭州、宁波、北京  -->
                        <dd>
                            <input type="radio" value="3230" name="account" id="bankType3230" /><label for="bankType3230"><span class="yz_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="324" name="account" id="bankType324" /><label for="bankType324"><span class="hz_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="302" name="account" id="bankType302" /><label for="bankType302"><span class="lb_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="310" name="account" id="bankType310" /><label for="bankType310"><span class="bj_bank"></span></label></dd>

                        <!-- 6. 重庆农商、北京农商、青岛、成都  -->
                        <dd>
                            <input type="radio" value="342" name="account" id="bankType342" /><label for="bankType342"><span class="cqls_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="335" name="account" id="bankType335" /><label for="bankType335"><span class="bj2_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="3341" name="account" id="bankType3341" /><label for="bankType3341"><span class="qd_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="336" name="account" id="bankType336" /><label for="bankType336"><span class="cd_bank"></span></label></dd>
                    </dl>
                </div>
                <div class="f-pay-bank" style="display: none;" id="div_credit">
                    <dl class="clrfix">
                        <!-- 1. 招商、工商、建行、农行、中行 -->
                        <dd>
                            <input type="radio" value="308" name="account" id="bankType308" /><label for="bankType308"><span class="zh_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="1027" name="account" id="bankType1027" /><label for="bankType1027"><span class="gh_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="1054" name="account" id="bankType1054" /><label for="bankType1054"><span class="jh_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="1033" name="account" id="bankType1033" /><label for="bankType1033"><span class="nh_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="106" name="account" id="bankType106" /><label for="bankType106"><span class="zg_bank"></span></label></dd>

                        <!-- 2. 华夏、民生、光大、邮政 -->
                        <dd>
                            <input type="radio" value="3112" name="account" id="bankType3112" /><label for="bankType3112"><span class="hx_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="3051" name="account" id="bankType3051" /><label for="bankType3051"><span class="ms_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="3121" name="account" id="bankType3121" /><label for="bankType3121"><span class="gd_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="3231" name="account" id="bankType3231" /><label for="bankType3231"><span class="yz_bank"></span></label></dd>

                        <!-- 3. 杭州、宁波、上海、兴业 -->
                        <dd>
                            <input type="radio" value="3241" name="account" id="bankType3241" /><label for="bankType3241"><span class="hz_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="303" name="account" id="bankType303" /><label for="bankType303"><span class="lb_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="3261" name="account" id="bankType3261" /><label for="bankType3261"><span class="sh_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="3091" name="account" id="bankType3091" /><label for="bankType3091"><span class="xy_bank"></span></label></dd>

                        <!-- 4. 广发、平安、浦发、青岛 -->
                        <dd>
                            <input type="radio" value="306" name="account" id="bankType306" /><label for="bankType306"><span class="gf_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="3071" name="account" id="bankType3071" /><label for="bankType3071"><span class="pa_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="3141" name="account" id="bankType3141" /><label for="bankType3141"><span class="pf_bank"></span></label></dd>
                        <dd>
                            <input type="radio" value="334" name="account" id="bankType334" /><label for="bankType334"><span class="qd_bank"></span></label></dd>
                    </dl>
                </div>
                <div class="amounts-payable clrfix">
                    <p>应付金额<b class="orange">￥<em id="b_money">50</em>.00</b></p>
                    <form id="toPayForm" name="toPayForm" action="rechange" method="post" target="_blank">
                        <input type="hidden" id="hidPayName" name="payName" value="Pingan" />
                        <input type="hidden" id="hidPayBank" name="payBank" value="0" />
                        <input type="hidden" id="hidMoney" name="money" value="0.01" />
                        <input id="submit_ok" type="submit" name="submit" value="确认充值" title="确认充值" />
                    </form>

                </div>
                <div id="payAltBox" style="display: none;">
                    <div class="g-remind-box clrfix">
                        <h2 class="gray3">充值提醒</h2>
                        <dl>
                            <dt class="orange"><s class="u-personal"></s>请您在新开的页面上完成支付！</dt>
                            <dd>付款完成之前，请不要关闭本窗口！<br>
                                完成付款后根据您的个人情况完成此操作！</dd>
                            <dd>
                                <a href="javascript:;" class="look" id="btnToRecharge" title="查看充值记录">查看充值记录 </a>
                                <a href="javascript:;" class="look" id="btnReSelect" title="重选支付方式">重选支付方式</a>
                            </dd>
                        </dl>
                    </div>
                </div>
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

<iframe id="iframeLayer" frameborder="0" name="iframeLayer" class="iframeLayer" allowtransparency="true" style="display: none; position: absolute; z-index: 999; width: 100%; height: 100%; top: 0px; left: 0px; right: 0; bottom: 0; background: url('http://skin.1yyg.net/mycart/images/jdloading.gif') center center no-repeat;" src="about:blank"></iframe>
</body>
</html>
