<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>支付_1元云购</title>
    <meta name="Description" content="" />
    <link rel="stylesheet" type="text/css" href="http://skin.1yyg.net/css/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="http://skin.1yyg.net/MyCart/CSS/CartList.css?date=170209" />
    <script language="javascript" type="text/javascript" src="http://skin.1yyg.net/JS/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="http://skin.1yyg.net/MyCart/JS/Payment.js"></script>
</head>
<body id="loadingPicBlock">
<div class="wrapper">
    <!--顶部-->
    <div class="g-toolbar clrfix">
        <div class="w1190">
            <ul class="fl">
                <li id="liIndex" class="f-home" style="display:none;">
                    <div class="u-menu-hd">
                        <a href="http://www.1yyg.com/" title="1元云购首页" class="orange">1元云购首页</a>
                    </div>
                </li>
                <li class="f-gap" style="display:none;"><s></s></li>
                <li id="liCollect">
                    <div class="u-menu-hd">
                        <a id="btnTFavorite" href="javascript:;" title="收藏">收藏</a>
                    </div>
                </li>
                <li class="f-gap" style="display: none;"><s></s></li>
                <li class="f-gap" style="display: none;"><s></s></li>
                <li id="liCCTV" style="display: none;">
                    <a href="http://www.1yyg.com/url.html?t=8" target="_blank" class="cctv-icon" title="央视网">
                        <img src="http://skin.1yyg.net/images/cctv-icon.jpg" alt="央视网" width="80" height="35" class="cctv-icon-img">
                        <span class="cctv-icon-txt">广告合作伙伴</span>
                    </a>
                </li>
            </ul>
            <ul id="ulTopRight" class="fr">
                <li id="liMember" class="u-arr-1yyg" style="display: none;">
                    <div class="u-menu-hd">
                        <a href="http://member.1yyg.com/" title="我的1元云购">我的1元云购</a>
                        <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                    </div>
                    <div class="u-select">
                        <span><a href="http://member.1yyg.com/UserBuyList.do" title="云购记录">云购记录</a></span>
                        <span><a href="http://member.1yyg.com/OrderList.do" title="获得的商品">获得的商品</a></span>
                        <span><a href="http://member.1yyg.com/MemberModify.do" title="个人设置">个人设置</a></span>
                    </div>
                </li>
                <li class="f-gap" style="display: none;"><s></s></li>
                <li id="liHome" style="display: none;">
                    <div class="u-menu-hd">
                        <a href="http://member.1yyg.com/" title="我的1元云购">我的1元云购</a>
                    </div>
                </li>
                <li class="f-gap" style="display: none;"><s></s></li>
                <li id="liTopUMsg" class="u-arr-news" style="display: none;">
                    <div class="u-menu-hd">
                        <a href="http://member.1yyg.com/userMessage.do" title="消息">消息</a>
                        <h3 style="display: none;"></h3>
                        <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                    </div>
                    <div class="u-select">
                        <span><a href="http://member.1yyg.com/UserMessage.do" title="系统消息">系统消息</a></span>
                        <span><a href="http://member.1yyg.com/FriendsApply.do" title="好友请求">好友请求</a></span>
                        <span><a href="http://member.1yyg.com/ReplyCommentsMsg.do" title="好友请求">评论回复</a></span>
                        <span><a href="http://member.1yyg.com/UserPrivMsg.do" title="私信" class="f-msg">私信</a></span>
                    </div>
                </li>
                <li class="f-gap" style="display: none;"><s></s></li>
                <li id="liMobile" class="u-arr">
                    <div class="u-menu-hd">
                        <a target="_blank" href="http://info.1yyg.com/app/mobile.html" title="手机云购">手机云购</a>
                        <i></i>
                    </div>
                    <div class="u-select">
                        <p>下载1元云购App</p>
                        <a target="_blank" href="http://info.1yyg.com/app/mobile.html">
                            <img src="http://skin.1yyg.net/images/app-qrcode.jpg" alt="点击1元云购App">
                        </a>
                        <i class="white-sub"><i></i></i>
                    </div>
                </li>
                <li class="f-gap"><s></s></li>
                <li>
                    <div class="u-menu-hd">
                        <a href="http://member.1yyg.com/UserRecharge.do" title="充值">充值</a>
                    </div>
                </li>
                <li class="f-gap"><s></s></li>
                <li>
                    <div class="u-menu-hd">
                        <a href="http://help.1yyg.com/" title="帮助">帮助</a>
                    </div>
                </li>
                <li class="f-gap"><s></s></li>
                <li>
                    <div class="u-menu-hd">
                        <a href="http://help.1yyg.com/htm-contactus.html" title="投诉">投诉</a>
                    </div>
                </li>
                <li class="f-gap"><s></s></li>
                <li class="f-zxkf">
                    <div class="u-menu-hd">
                        <a id="btnTopQQ" href="javascript:;" title="在线客服" class="u-service-off u-service"><i></i>在线客服</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="w1190 clrfix">
        <!--头部-->
        <div class="g-special-head">
            <div class="fl logo-con">
                <a href="http://www.1yyg.com/" class="f-logo"></a>
                <span>结算</span>
            </div>
            <div class="fr step-con">
                <em class="color-white">提交支付</em>
                <em>等待揭晓</em>
                <em>公布获得者</em>
                <em class="w124">完善收货信息</em>
                <em class="w100">商品配送</em>
            </div>
        </div>
        <div class="g-main-con clrfix">

            <!--商品列表-->
            <div id="divCartList" class="m-pay-list gray9 clrfix">
                <dl>
                    <dt>
                        <span class="f-pay-comm">商品</span>
                        <span class="f-pay-price">剩余人次</span>
                        <span class="f-pay-plusLess">云购人次</span>
                        <span class="f-pay-subtotal">小计(元)</span>
                    </dt>

                    <?php foreach($data as $k=>$v){ ?>
            
                    <dd>
                        <ul>
                            <li class="f-pay-comm">
                                <cite class="u-pay-pic">
                                    <a href="http://www.1yyg.com/product/8629228.html" target="_blank"
                                       title="{{$v['goods_name']}}&nbsp;&nbsp;{{$v['goods_desc']}}">
                                        <img alt="" src="http://skin.1yyg.net/images/loding.gif"
                                             src2="{{$v['goods_picture']}}" />
                                    </a>
                                </cite>
                                <cite class="u-pay-name  ">
                                    <a href="http://www.1yyg.com/product/8629228.html" target="_blank"
                                       title="{{$v['goods_name']}}&nbsp;&nbsp;{{$v['goods_desc']}}">(
                                        第{{$v['times']}}云) &nbsp;&nbsp;{{$v['goods_name']}}&nbsp;&nbsp;{{$v['goods_desc']}}
                                    </a>
                                </cite>
                            </li>
                            <li class="f-pay-price">{{$v['number']}}</li>
                            <li class="f-pay-plusLess">{{$v['code_number']}}人次</li>
                            <li class="f-pay-subtotal orange">{{$v['code_number']}}</li>
                        </ul>
                    </dd>
                    <?php } ?>
                </dl>
            </div>

            <input name="hidTotalCount" type="hidden" id="hidTotalCount" value="0" />
            <!--展开按钮-->
            <!--福分与余额-->
            <div id="divPayWayBox" class="m-pay-Total clrfix">
                <dl>
                    <dt>
                        <span class="fl"><a href="CartList.do" title="返回修改">返回修改</a></span>
                        <span class="fr">支付总额：<i class="orange">￥3.00</i></span>
                    </dt>

                    <dd style="display: none">
                        <cite>
                            <span class="orange">-￥0.00</span>
                            <span class="u-pay-bixu"><em><b></b></em><i>必须为正整数</i></span>
                                <span>
                                    <input type="text" /></span>
                        </cite>
                        <span>您的佣金<i>¥0.00</i>，使用佣金支付</span>
                        <span><a href="javascript:;" class="z-check"></a></span>
                    </dd>

                    <dd id="ddPointBox" class="f-pay-grayBg">
                        <cite style="display: none;">
                            <span id="spPoint" class="orange">-￥0.00</span>
                            <span class="u-pay-bixu"><em><b></b></em><i>必须为100的整数倍</i></span>
                                <span>
                                    <input id="txtUsePoint" type="text" /></span>
                        </cite>
                        <span>您的福分<i>20</i>，使用福分支付</span>
                        <span><a id="checkPoint" href="javascript:;" class="z-check"></a></span>
                    </dd>
                    <dd id="ddBalanceBox" class="f-pay-grayBg">
                        <span id="spBalance" class="orange" style="display: none;"></span>
                        <span>使用账户余额支付，您的账户余额 ￥0.00</span>
                        <span><a id="checkBalance" href="javascript:;" class="z-check"></a></span>
                    </dd>
                </dl>
            </div>

            <!--网银-->
            <div id="divBankBox" class="m-pay-manner" style="display: none;">
                <div class="f-pay-select">
                    <span class="fl" id="spPayTitle">您可使用账户余额支付，也可选择以下方式完成支付</span>
                    <span class="fr">使用网银支付<i id="iBankPay" class="orange">￥0.00</i></span>
                </div>

                <div class="f-pay-defray clrfix">
                    <p id="pLeft" class="fl gray9">网银支付</p>
                    <div id="divBankList" class="fr f-pay-bank">
                        <cite>
                            <span class="current"><a id="btnPlat" href="javascript:;" title="支付平台支付">支付平台支付</a></span>
                            <span><a id="btnCXK" href="javascript:;" title="储蓄卡支付">储蓄卡支付</a></span>
                            <span><a id="btnXYK" href="javascript:;" title="信用卡支付">信用卡支付</a></span>
                        </cite>
                        <!-- 支付平台支付 -->
                        <dl id="dlPayForm" class="clrfix">
                            <dd style="display: none;">
                                <input type="radio" name="account" value="weixinpay" id="weixinpay" /><label for="weixinpay"><span class="u-bank-weixin"></span></label>
                            </dd>
                            <dd class="checked">
                                <input type="radio" name="account" value="alipay" id="alipay" checked="checked" /><label for="alipay"><span class="u-bank-zfb"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" name="account" value="jdpay" id="jdpay" /><label for="jdpay"><span class="jd_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" name="account" value="Chinabank" id="Chinabank" /><label for="Chinabank"><span class="u-bank-wy"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" name="account" value="QuickMoney" id="QuickMoney" /><label for="QuickMoney"><span class="u-bank-kq"></span></label>
                            </dd>

                            <dd style="display: none;">
                                <input type="radio" name="account" value="quickpay" id="quickpay" /><label for="quickpay"><span class="u-quick-pay"></span></label>
                            </dd>
                            <dd style="display: none;">
                                <input type="radio" name="account" value="yeepaypc" id="yeepaypc" /><label for="yeepaypc"><span class="u-bank-ybzf"></span></label>
                            </dd>
                            <dd style="display: none;">
                                <input type="radio" name="account" value="SwiftQ" id="SwiftQ" /><label for="SwiftQ"><span class="u-bank-qqmobile"></span></label>
                            </dd>
                            <dd style="display: none;">
                                <input type="radio" name="account" value="Unionpay" id="Unionpay" /><label for="Unionpay"><span class="u-bank-online"></span></label>
                            </dd>
                        </dl>

                        <!-- 储蓄卡 -->
                        <dl id="dlCXK" class="clrfix" style="display: none;">
                            <!-- 1. 招商、工商、建行、农行、 中行-->
                            <dd>
                                <input type="radio" value="3080" name="account" id="bankType3080" /><label for="bankType3080"><span class="zh_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="1025" name="account" id="bankType1025" /><label for="bankType1025"><span class="gh_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="105" name="account" id="bankType105" /><label for="bankType105"><span class="jh_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="103" name="account" id="bankType103" /><label for="bankType103"><span class="nh_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="104" name="account" id="bankType104" /><label for="bankType104"><span class="zg_bank"></span></label>
                            </dd>

                            <!-- 2. 交通、华夏、兴业、上海、民生 -->
                            <dd>
                                <input type="radio" value="301" name="account" id="bankType301" /><label for="bankType301"><span class="jt_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="311" name="account" id="bankType311" /><label for="bankType311"><span class="hx_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="309" name="account" id="bankType309" /><label for="bankType309"><span class="xy_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="326" name="account" id="bankType326" /><label for="bankType326"><span class="sh_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="305" name="account" id="bankType305" /><label for="bankType305"><span class="ms_bank"></span></label>
                            </dd>

                            <!-- 3. 广发、平安、浦发、中信、光大 -->
                            <dd>
                                <input type="radio" value="3061" name="account" id="bankType3061" /><label for="bankType3061"><span class="gf_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="307" name="account" id="bankType307" /><label for="bankType307"><span class="pa_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="314" name="account" id="bankType314" /><label for="bankType314"><span class="pf_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="313" name="account" id="bankType313" /><label for="bankType313"><span class="zx_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="312" name="account" id="bankType312" /><label for="bankType312"><span class="gd_bank"></span></label>
                            </dd>

                            <!-- 4. 南京、邮政、杭州、宁波、北京  -->
                            <dd>
                                <input type="radio" value="316" name="account" id="bankType316" /><label for="bankType316"><span class="nj_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="3230" name="account" id="bankType3230" /><label for="bankType3230"><span class="yz_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="324" name="account" id="bankType324" /><label for="bankType324"><span class="hz_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="302" name="account" id="bankType302" /><label for="bankType302"><span class="lb_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="310" name="account" id="bankType310" /><label for="bankType310"><span class="bj_bank"></span></label>
                            </dd>

                            <!-- 5. 重庆农商、北京农商、青岛、成都  -->
                            <dd>
                                <input type="radio" value="342" name="account" id="bankType342" /><label for="bankType342"><span class="cqls_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="335" name="account" id="bankType335" /><label for="bankType335"><span class="bj2_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="3341" name="account" id="bankType3341" /><label for="bankType3341"><span class="qd_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="336" name="account" id="bankType336" /><label for="bankType336"><span class="cd_bank"></span></label>
                            </dd>
                        </dl>

                        <!-- 信用卡 -->
                        <dl id="dlXYK" class="clrfix" style="display: none;">
                            <!-- 1. 招商、工商、建行、中行、农行、华夏 -->
                            <dd>
                                <input type="radio" value="308" name="account" id="bankType308" /><label for="bankType308"><span class="zh_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="1027" name="account" id="bankType1027" /><label for="bankType1027"><span class="gh_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="1054" name="account" id="bankType1054" /><label for="bankType1054"><span class="jh_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="1033" name="account" id="bankType1033" /><label for="bankType1033"><span class="nh_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="106" name="account" id="bankType106" /><label for="bankType106"><span class="zg_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="3112" name="account" id="bankType3112" /><label for="bankType3112"><span class="hx_bank"></span></label>
                            </dd>
                            <!-- 2. 民生、光大、邮政、杭州、宁波 -->
                            <dd>
                                <input type="radio" value="3051" name="account" id="bankType3051" /><label for="bankType3051"><span class="ms_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="3121" name="account" id="bankType3121" /><label for="bankType3121"><span class="gd_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="3231" name="account" id="bankType3231" /><label for="bankType3231"><span class="yz_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="3241" name="account" id="bankType3241" /><label for="bankType3241"><span class="hz_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="303" name="account" id="bankType303" /><label for="bankType303"><span class="lb_bank"></span></label>
                            </dd>
                            <!-- 3. 上海、兴业、广发、平安、浦发 -->
                            <dd>
                                <input type="radio" value="3261" name="account" id="bankType3261" /><label for="bankType3261"><span class="sh_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="3091" name="account" id="bankType3091" /><label for="bankType3091"><span class="xy_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="306" name="account" id="bankType306" /><label for="bankType306"><span class="gf_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="3071" name="account" id="bankType3071" /><label for="bankType3071"><span class="pa_bank"></span></label>
                            </dd>
                            <dd>
                                <input type="radio" value="3141" name="account" id="bankType3141" /><label for="bankType3141"><span class="pf_bank"></span></label>
                            </dd>
                            <!-- 4. 青岛 -->
                            <dd>
                                <input type="radio" value="334" name="account" id="bankType334" /><label for="bankType334"><span class="qd_bank"></span></label>
                            </dd>
                        </dl>
                    </div>
                </div>

            </div>

            <input type="hidden" id="hidPayBroker" value="0.00"/><input type="hidden" id="hidBalance" value="0.00"/><input type="hidden" id="hidCountMoney" value="3.00"/><input type="hidden" id="hidPoints" value="20.00"/><input type="hidden" id="hidAvailablePoints" value="0"/><input type="hidden" id="hidUsePaypwd" value="0"/><input type="hidden" id="hidSmallMoney" value="0"/>

            <!--使用网银支付提交表单-->
            <form id="toPayForm" name="toPayForm" action="GoPay.do" method="post" target="_blank">
                <input type="hidden" id="hidPayName" name="payName" value="" />
                <input type="hidden" id="hidPayBank" name="payBank" value="0" />
                <input type="hidden" id="hidUseBalance" name="useBalance" value="" />
                <input name="hidIsBuyNext" type="hidden" id="hidIsBuyNext" value="1" />
                <!-- 不使用福分时，值为0；使用福分时，值为使用福分值 2012.4.28-->
                <input type="hidden" id="hidIntegral" name="integral" value="0" />
                <input type="hidden" id="hidGoPayBroker" name="paybroker" value="0" />
                <!-- 支付SN -->
                <input type="hidden" id="hidCheckSN" name="checkSN" value="" />
                <!-- 支付paymentPage -->
                <input type="hidden" id="hidPayment" name="paymentPage" value="0" />
                <div class="m-pay-Total clrfix">
                    <div id="divPaypwd" class="f-payment-password clrfix" style="display: none;">
                        <p>
                            <input type="password" id="txtPaypwd" value=""  autocomplete="off" />
                            <s style="display: none;"></s>
                            <em id="emTip">请输入6位支付密码</em>
                        </p>
                        <span><a href="http://member.1yyg.com/UserAuth-10.do" target="_blank" class="gray6">忘记支付密码？</a></span>
                    </div>
                    <div class="f-list-accounts f-grayButton fr">
                        <input id="submitOK" type="button"  value="确认支付" />

                    </div>
                </div>
                <div id="divGetPoint" class="f-cgzf"></div>
            </form>
        </div>
    </div>

    <!--footer 开始-->
    <!--版权-->
    <div class="g-copyrightCon clrfix">
        <div class="w1190">
            <div class="g-links">
                <a href="http://www.1yyg.com/" target="_blank" title="首页">首页</a><s></s>
                <a href="http://help.1yyg.com/htm-about.html" target="_blank" title="关于云购">关于云购</a><s></s>
                <a href="http://help.1yyg.com/htm-privacy.html" target="_blank" title="隐私声明">隐私声明</a><s></s>
                <a href="http://help.1yyg.com/info/htm-business.html" target="_blank" title="合作专区">合作专区</a><s></s>
                <a href="http://www.1yyg.com/link.html" target="_blank" title="友情链接">友情链接</a><s></s>
                <a href="http://help.1yyg.com/htm-jobs.html" target="_blank" title="加入云购">加入云购</a><s></s>
                <a href="http://help.1yyg.com/htm-contactus.html" target="_blank" title="联系我们">联系我们</a>
            </div>
            <div class="g-copyright">Copyright &copy; 2011 - 2017, 版权所有 1yyg.com 粤ICP备09213115号-1</div>
            <div class="g-authentication">
                <a href="http://www.1yyg.com/url.html?t=7" target="_blank" class="fi_ectrustchina"></a>
                <a href="http://www.1yyg.com/url.html?t=1" target="_blank" class="fi_315online"></a>
                <a href="http://www.1yyg.com/url.html?t=2" target="_blank" class="fi_qh"></a>
                <a href="http://www.1yyg.com/url.html?t=3" target="_blank" class="fi_cnnic"></a>
                <a href="http://www.1yyg.com/url.html?t=6" target="_blank" class="fi_anxibao" style="display:none;"></a>
                <a href="http://www.1yyg.com/url.html?t=4" target="_blank" class="fi_pingan"></a>
                <a href="http://www.1yyg.com/url.html?t=8" target="_blank" class="fi_yangshi"></a>
            </div>
        </div>
    </div>
    <!--通栏购物车-->
    <div id="rightTool" class="g-outer">
        <div class="g-status-standard">
            <div class="m-banner-list">
                <div class="u-sentence">
                    <span></span>
                    <cite><a href="javascript:;"><!--<img src="../images/banner.jpg">--></a></cite>
                </div>
                <div class="u-shortcut u-gwc-ygjl">
                    <ul>
                        <li class="f-shopping-cart">
                            <div class="u-float-list">
                                <a href="http://cart.1yyg.com/CartList.do" target="_blank">
                                    <s class="z-clump-icon"></s>
                                    <em>0</em>
                                    <span>购物车</span>
                                </a>
                                <b class="curr-arrow"></b>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="u-shortcut u-icon-con">
                    <ul>
                        <li class="f-pur-records">
                            <div class="u-float-list">
                                <a href="http://member.1yyg.com/UserBuyList.do" target="_blank">
                                    <i class="z-clump-icon"></i>
                                    <cite>云购记录</cite>
                                </a>
                                <b class="curr-arrow"></b>
                            </div>
                        </li>
                        <li class="f-client">
                            <div class="u-float-list">
                                <a href="http://info.1yyg.com/app/mobile.html" target="_blank">
                                    <i class="z-clump-icon"></i>
                                </a>
                                <b class="curr-arrow"></b>
                            </div>
                            <div class="u-activate">
                                <a href="http://info.1yyg.com/app/mobile.html" target="_blank">
                                    <img src="http://skin.1yyg.net/images/andriod.jpg?v=20141105">
                                </a>
                            </div>
                        </li>
                        <li class="f-weixin">
                            <div class="u-float-list">
                                <a href="http://info.1yyg.com/app/microchannel.html" target="_blank">
                                    <i class="z-clump-icon"></i>
                                </a>
                                <b class="curr-arrow"></b>
                            </div>
                            <div class="u-activate">
                                <a href="http://info.1yyg.com/app/microchannel.html" target="_blank">
                                    <img src="http://skin.1yyg.net/images/1yyg-wx.png?v=20141105"/>
                                    关注官方微信
                                </a>
                            </div>
                        </li>
                        <li class="f-customer-service">
                            <div class="u-float-list">
                                <a id="btnRigQQ" href="javascript:;" class="z-customer-on">
                                    <i class="z-clump-icon"></i><cite>在线客服</cite>
                                </a>
                                <b class="curr-arrow"></b>
                            </div>
                        </li>
                        <li class="f-feedback">
                            <div class="u-float-list">
                                <a  href="http://help.1yyg.com/htm-suggestion.html" target="_blank">
                                    <i class="z-clump-icon"></i><cite>意见反馈</cite>
                                </a>
                                <b class="curr-arrow"></b>
                            </div>
                        </li>
                        <li class="f-back-to">
                            <div class="u-float-list">
                                <a href="javascript:;" style="display: none;" id="gototop" ><i class="z-clump-icon"></i><cite>返回顶部</cite></a>
                                <b class="curr-arrow"></b>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--购物车面板-->
            <div id="divRTCartMain" class="m-unfold-cart clrfix">
                <!--头部-->
                <div class="f-unfold-title" id="cartMainObjTitleDiv">
                    <span class="fl"><a href="javascript:;"><em class="z-comms"></em>全选</a></span>
                    <cite class="fr">
                        <a href="http://cart.1yyg.com/CartList.do" target="_blank" title="全屏查看">全屏查看</a>
                    </cite>
                </div>
                <!--列表-->
                <div id="cart_container" class="f-unfold-con clrfix">
                    <div id="cart_box" class="scrollcontent">
                        <div id="cart_shower" class="unfold-list"></div>
                    </div>
                </div>
                <!--加载-->
                <div class="loading-2015 clrfix" id="divCartMainLoadingDiv" style="display: none;">
                    <em></em>
                </div>
                <!--购物车为空-->
                <div class="cartEmpty clrfix">
                    <i></i>您的购物车为空 !
                </div>
                <!--支付-->
                <div class="f-unfold-pay clrfix"></div>
            </div>

            <!--登录-->
            <div id="divRTLogin" class="cartLogin-wrapper clrfix" style="display: none; height:230px;" >
                <div class="cartLogin-title" style="display: block;">
                    <a href="https://passport.1yyg.com/register.html" target="_blank" class="orange fr">免费注册<em class="f-tran">>></em></a>登录
                </div>
                <div class="cartLogin-con clrfix" style="display: block;">
                    <ul>
                        <li>
                            <p class="z-zhangh">
                                <label class="z-clump-icon"></label>
                                <input type="text" value="" placeholder="手机号/邮箱" id="username"/>
                            </p>
                        </li>
                        <li>
                            <p class="z-mim">
                                <label class="z-clump-icon"></label>
                                <input type="password" value="" placeholder="密码" id="password"/>
                            </p>
                        </li>
                        <li id="vcCodeContainerLi" style="display: none;">
                            <div class="vc-wrapper">
                                <div class="vc-btn-container" id="dragBtnContainer">
                                    <div class="vc-slide-text"><span>请按住滑块，拖动到最右边</span></div>
                                    <div class="vc-slideBtnLeft" id="dragBtnLeft">
                                        <span class="canvas-Title" style="display: none;">请点击图中的"<strong id="selectedChar"></strong>"字</span>
                                        <span class="canvas-Title" style="display: none;">验证通过！</span>
                                        <a href="javascript:;" class="passport-icon refresh" id="refreshVcCode" style="display: none;"></a>
                                    </div>
                                    <div class="vc-slideBtn" id="dragBtn"><i class="passport-icon ready-status"></i></div>
                                </div>
                                <div class="canvas-wrapper" style="display: none;">
                                    <div class="canvas-container" id="canvasContainer" style="">
                                        <img id="vcCanvas" class="vc-canvas" src="" alt="验证码">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="f-error-message orange" id="miniLoginErrorMsgLi"></li>
                        <li class="cart-login-btn"><input type="button"  name="vCode" value="登录" id="miniLoginBtn" /></li>
                        <li class="f-wjpwd">
                            <a class="gray9 fl" href="https://passport.1yyg.com/findpassword.html" target="_blank">忘记密码？</a>
                                     <span class="fr">快捷登录：
                                         <a href="javascript:;" id="btnQQLogin" class="z-clump-icon qq-login"></a>
                                         <a href="javascript:;" id="btnWXLogin" class="z-clump-icon wx-login"></a>
                                     </span>
                        </li>
                    </ul>
                </div>

                <div class="wxLogin-con clrfix" style="display: none;">
                    <h2>微信登录</h2>
                    <p id="wxLoginImgContainer"></p>
                    <a href="javascript:;"></a>
                </div>
                <a class="delete-close"></a>
            </div>
        </div>
    </div>
    <!--无购物车页面版-->
    <div id="divRTool"  class="g-narrow-con" style="display:none;">
        <div class="m-narrow-list">
            <ul>
                <li class="f-pur-records">
                    <div class="u-small-list">
                        <a href="http://member.1yyg.com/UserBuyList.do" target="_blank">
                            <i></i><cite>云购记录</cite>
                        </a>
                    </div>
                </li>
                <li class="f-client">
                    <div class="u-small-list">
                        <a  href="http://info.1yyg.com/app/mobile.html" target="_blank">
                            <i></i><cite>手机APP</cite>
                        </a>
                        <b class="curr-arrow"><s></s></b>
                    </div>
                    <div class="activateCon">
                        <div class="u-activate">
                            <a href="http://info.1yyg.com/app/mobile.html" target="_blank">
                                <img src="http://skin.1yyg.net/images/andriod.jpg?v=20141105"/>
                                下载客户端
                            </a>
                        </div>
                    </div>
                </li>
                <li class="f-weixin">
                    <div class="u-small-list">
                        <a href="http://info.1yyg.com/app/microchannel.html" target="_blank">
                            <i></i><cite>官方微信</cite>
                        </a>
                        <b class="curr-arrow"><s></s></b>
                    </div>
                    <div class="activateCon">
                        <div class="u-activate">
                            <a href="http://info.1yyg.com/app/microchannel.html" target="_blank">
                                <img src="http://skin.1yyg.net/images/1yyg-wx.png?v=20141105"/>
                                关注官方微信
                            </a>
                        </div>
                    </div>
                </li>
                <li class="f-customer-service">
                    <div class="u-small-list">
                        <a href="javascript:;" class="z-customer-on"  id="btnRigQQ2">
                            <i></i><cite>在线客服</cite>
                        </a><!-- z-customer-off 客服不在线时 -->
                    </div>
                </li>
                <li class="f-feedback">
                    <div class="u-small-list">
                        <a href="http://help.1yyg.com/htm-suggestion.html" target="_blank">
                            <i></i><cite>意见反馈</cite>
                        </a>
                    </div>
                </li>
                <li class="f-back-to" title="返回顶部">
                    <div class="u-small-list">
                        <a href="javascript:;"><i></i><cite>返回顶部</cite></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
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
<div id="payAltBox" style="display: none;">
    <div class="payment_ts">
        <h3><s class="z-arrows"></s>请在新开窗口完成支付！</h3>
        <ul>
            <li class="payment_ts_con">如您的浏览器不支持，请复制以下链接到IE浏览器打开，完成付款后跟据您的情况进行以下操作！</li>
            <li class="payment_ts_links">http://cart.1yyg.com/payment.do</li>
            <li class="payment_ts_but"><a id="btnBuyOk" href="javascript:gotoClick();" class="pay_tipsbut">完成支付</a><a id="btnReSelect" href="javascript:gotoClick();" class="blue">支付遇到问题？返回重新选择</a></li>
        </ul>
    </div>
</div>
<iframe id="iframeLayer" frameborder="0" name="iframeLayer" class="iframeLayer" allowtransparency="true" style="display: none; position: absolute; z-index: 999; width: 100%; height: 100%; top: 0px; left: 0px; right: 0; bottom: 0; background: url('http://skin.1yyg.net/mycart/images/jdloading.gif') center center no-repeat;" src="about:blank"></iframe>
</div>
</body>
</html>
