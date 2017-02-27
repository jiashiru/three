
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        购物车_1元云购
    </title>
    <meta name="description" content="1元云购是一种全新的购物方式，是时尚、潮流的风向标，能满足个性、年轻消费者的购物需求。" /><meta name="keywords" content="1元云购,1元购手机,1元购电脑,1元购笔记本电脑,1元购物,云购" /><link rel="stylesheet" type="text/css" href="style/css/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="style/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]--><link rel="stylesheet" type="text/css" href="style/CSS/CartList.css?date=170209" />
    <script language="javascript" type="text/javascript" src="style/JS/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="style/MyCart/JS/CartList.js"></script>
</head>
<body id="loadingPicBlock">
<div class="wrapper">
    <!--顶部-->

    @include("public.head")
    <input name="hidUserID" type="hidden" id="hidUserID" value="15519195" />
    <!--头部-->
    <div class="w1190 clrfix">


        <div class="g-special-head">
            <div class="fl logo-con">
                <a href="http://www.1yyg.com/" class="f-logo"></a>
                <span>购物1车</span>
            </div>
            <div class="fr refresh-con">
                <a href="http://www.1yyg.com/" title="继续云购" class="f-carryOn">继续云购</a>
                <s></s>
                <a href="javascript:location.reload();"><b class="z-arrows"></b>刷新</a>
            </div>
        </div>



        <div class="g-main-con clrfix">

            <div id="div_cartlist" class="m-cart-list gray9 clrfix">

                <div class="g-list-title">
                    <span class="f-cart-comm">商品</span>
                    <span class="f-cart-price">剩余人次</span>
                    <span class="f-cart-plusLess">云购人次</span>
                    <span class="f-cart-subtotal">小计</span>
                    <span class="f-cart-operate">操作</span>
                </div>


                {{--商品--}}
                <input type="hidden" value="3" id="shop_num">
                <div id="div_normallist" class="g-list-con clrfix">
                    <ul type="0">
                        <li class="f-cart-comm m-pay-fail">
                            <cite>
                                <a class="z-check" href="javascript:;">
                                    <input type="checkbox"  value="1" class="che" >
                                </a>
                            </cite>
                            <cite class="u-cart-pic">
                                <a href="http://www.1yyg.com/product/8629245.html" target="_blank">
                                    <img src="http://img.1yyg.net/GoodsPic/pic-70-70/20160511140647469.jpg">
                                </a>
                            </cite>
                            <cite class="u-cart-name">
                                <span>
                                <a href="http://www.1yyg.com/product/8629245.html" target="_blank">(第1669云)苹果（Apple）iMac MK462CH/A 27英寸一体电脑</a>
                                </span>
                                价值：￥12788.00
                            </cite>
                        </li>
                        <li class="f-cart-price" id="over">8739</li>
                        <li class="f-cart-plusLess" style="margin-left: 50px; margin-right: -50px;">
                            <input type="button" value="-" style="width: 30px;" class="jian" >
                            <span>
                            <input type="text" mylimitsales="0" limitbuy="0" surplus="8739" id="num"
                                   codeid="8629245" value="1" oldnum="1" maxlength="6" state="1"  name="num">
                            <input type="button" value="+" style="width: 30px;" class="jia" >
                            </span>
                        </li>
                        <li class="f-cart-subtotal orange">￥<span class="price">1</span>.00</li>
                        <li class="f-cart-operate fr">
                            <input type="button" value="删除" style="margin-top: -20px;" goods_id="1" class="del" >
                        </li>
                    </ul>
                </div>
                <div id="div_normallist" class="g-list-con clrfix">
                    <ul type="0">
                        <li class="f-cart-comm m-pay-fail">
                            <cite>
                                <a class="z-check" href="javascript:;">
                                    <input type="checkbox"  value="2" class="che" >
                                </a>
                            </cite>
                            <cite class="u-cart-pic">
                                <a href="http://www.1yyg.com/product/8629245.html" target="_blank">
                                    <img src="http://img.1yyg.net/GoodsPic/pic-70-70/20160511140647469.jpg">
                                </a>
                            </cite>
                            <cite class="u-cart-name">
                                <span>
                                <a href="http://www.1yyg.com/product/8629245.html" target="_blank">(第1669云)苹果（Apple）iMac MK462CH/A 27英寸一体电脑</a>
                                </span>
                                价值：￥12788.00
                            </cite>
                        </li>
                        <li class="f-cart-price" id="over">8739</li>
                        <li class="f-cart-plusLess" style="margin-left: 50px; margin-right: -50px;">
                            <input type="button" value="-" style="width: 30px;" class="jian" >
                            <span>
                            <input type="text" mylimitsales="0" limitbuy="0" surplus="8739" id="num"
                                   codeid="8629245" value="1" oldnum="1" maxlength="6" state="1"  name="num">
                            <input type="button" value="+" style="width: 30px;" class="jia" >
                            </span>
                        </li>
                        <li class="f-cart-subtotal orange">￥<span class="price">1</span>.00</li>
                        <li class="f-cart-operate fr">
                            <input type="button" value="删除" style="margin-top: -20px;" goods_id="2" class="del" >
                        </li>
                    </ul>
                </div>
                <div id="div_normallist" class="g-list-con clrfix">
                    <ul type="0">
                        <li class="f-cart-comm m-pay-fail">
                            <cite>
                                <a class="z-check" href="javascript:;" >
                                    <input type="checkbox"  value="3" class="che" >
                                </a>
                            </cite>
                            <cite class="u-cart-pic">
                                <a href="http://www.1yyg.com/product/8629245.html" target="_blank">
                                    <img src="http://img.1yyg.net/GoodsPic/pic-70-70/20160511140647469.jpg">
                                </a>
                            </cite>
                            <cite class="u-cart-name">
                                <span>
                                <a href="http://www.1yyg.com/product/8629245.html" target="_blank">(第1669云)苹果（Apple）iMac MK462CH/A 27英寸一体电脑</a>
                                </span>
                                价值：￥12788.00
                            </cite>
                        </li>
                        <li class="f-cart-price" id="over">87393</li>
                        <li class="f-cart-plusLess" style="margin-left: 50px; margin-right: -50px;">
                            <input type="button" value="-" style="width: 30px;" class="jian" >
                            <span>
                                <input type="text" mylimitsales="0" limitbuy="0" surplus="8739" class="num"
                                       codeid="8629245" value="2" oldnum="1" maxlength="6" state="1"  name="num">
                                <input type="button" value="+" style="width: 30px;" class="jia" >
                            </span>
                        </li>
                        <li class="f-cart-subtotal orange">￥<span class="price">2</span>.00</li>
                        <li class="f-cart-operate fr">
                            <input type="button" value="删除" style="margin-top: -20px;" goods_id="3" class="del" >
                        </li>
                    </ul>
                </div>

                <script>
                    //删除
                    $(".del").click(function(){
                        var res = confirm("确认要删除改商品？");
                        if(res){
                            var goods_id = $(this).attr("goods_id");
                            alert("删除了goods_id是"+goods_id+"的商品，这里应该是ajax删除");
                            $(this).parent().parent().parent().remove();
                        }
                    });
                    //数量减
                    $(".jian").click(function(){
                        var num = $(this).next().children().first().val();
                        if(num>1){
                            var new_num = num-1;
                            $(this).next().children().first().val(new_num);
                            $(this).parent().next().children().html(new_num);//小计
                        }
                    });
                    //数量加
                    $(".jia").click(function(){
                        var num = $(this).prev().val();
                        var over = $(this).parent().parent().prev().html();//剩余人数
                        if(num<over){
                            var new_num = num*1+1;
                            $(this).prev().val(new_num);//人次
                            $(this).parent().parent().next().children().html(new_num);//小计
                        }
                    });

                </script>

                <div id="div_overlist" class="g-over-con clrfix">
                    <div class="end-delete clrfix">
                        <h3 class="fl">已结束</h3>
                        <a id="a_delover1" class="fr gray6" href="javascript:;">清除</a>
                    </div>
                    <ul type="2">
                        <li>
                            <cite>
                                <a href="http://www.1yyg.com/product/10333233.html" target="_blank">
                                    <img src="http://img.1yyg.net/GoodsPic/pic-70-70/20170122144823912.jpg">
                                </a>
                            </cite>
                            <cite class="u-cart-name u-cart-padding">
                                <span>
                                <a class="gray9" href="http://www.1yyg.com/product/10333233.html" target="_blank">苹果（Apple）iPhone 7 Plus 32G版 4G手机 套装版（含Apple Watch MJ352CH/A）</a>
                                </span>
                                <em>已结束</em>
                            </cite>
                            <cite class="z-delete">
                                <a class="z-comms" codeid="10333233" href="javascript:;"></a>
                            </cite>
                        </li>
                    </ul>
                </div>
                <script>
                    //删除已经结束的商品
                    $(".gray6").click(function(){
                        var res = confirm("确认清除结束商品？");
                        if(res){
                            $("#div_overlist").remove();
                        }
                    });
                </script>



                <div id="div_operate" class="m-list-operating clrfix" style="position: relative; bottom: 0px;">
                    <p class="fl">

                        <span>
                            <a id="btnSelAll" title="全选" href="javascript:;">全选</a>
                        </span>
                        <span>
                            <a id="btnDelete" title="删除" href="javascript:;">删除</a>
                        </span>
                    </p>

                    <div id="divCalCart" class="z-accounts fr">
                        <cite>
                            共
                            <i class="orange" id="orange_num">1</i>
                            件商品
                        </cite>
                        <cite>
                            金额总计：
                            <em class="orange">￥<span id="price_all">1</span>.00</em>
                        </cite>
                        <cite class="a-n-btn">
                            <a id="btnGoPay" title="去结算" href="javascript:;">结算</a>
                        </cite>
                    </div>
                </div>

                <div class="g-loading">
                    <i></i>
                </div>
            </div>
            <script>
//                页面加载
                $(function(){
                    var shop_num = $("#shop_num").val();//商品的数量
                    var price_all = 0;
                    $(".price").each(function(i){
                        var priceOne = $(this).html();
                        price_all += parseInt(priceOne);
                    });
                    $("#price_all").html(price_all);//商品的价钱
                    $("#orange_num").html(shop_num);//商品的数量
                });
                //全选
                $("#btnSelAll").click(function(){
                    $(":checkbox").attr("checked",true);

                });
                //删除
                $("#btnDelete").click(function(){
                    var a = "";
                    $("input:checked").each(function(i){
                        a += ","+$(this).val();
                        $(this).parent().parent().parent().parent().remove();
                    });
                    alert(a);
                });
                //结算
                $("#btnGoPay").click(function(){
                    alert(1)
                });
            </script>

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

</div>
<script language="javascript" type="text/javascript">
    var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
    function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
    Base.getScript('style/JS/Bottom.js?v=' + GetVerNum());
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
