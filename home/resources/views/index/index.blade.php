<!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="favicon.ico" />
    <title>1元云购 - 惊喜无限!</title>
    <meta name="keywords" content="1元云购,一元云购,1元夺宝,一元夺宝,1元云购官网,一元云购官网,云购网,云购" />
    <meta name="description" content="1元云购是一种全新的购物方式，是时尚、潮流的风向标，能满足个性、年轻消费者的购物需求，由深圳市一元云购网络科技有限公司注入巨资打造的新型购物网。" />
    <link rel="stylesheet" type="text/css" href="style/css/header.css?v=170215" />
    <link href="style/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if IE 6]>
    <script type="text/javascript" src="style/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="style/css/index.css?date=170119" />
    <script type="text/javascript" src="style/JS/JQuery1.12.js"></script>
    <script type="text/javascript" id="pageJS" data="style/JS/Index.js"></script>
</head>
<body id="loadingPicBlock" class="home" rf="1">
<!--div class="newyear clrfix"></div-->
<div class="wrapper">
    <!--头部-->
    <!--顶部-->
    @include("public.head")
    <!--头部-->
    @include("public.header")

    <!--导航-->
    @include("public.nav")
    <!--内容-->
    <div class="g-content clrfix">
        <div class="w1190">
            <div class="home-banner fl">
                {{--轮播图，一大堆--}}
                <div id="div_slide" class="slide-scroll">
                    <div id="div_guide" class="m-guide-con" style="display: none;">
                        <div class="m-guideBg"></div>
                        <div class="m-guide">
                            <ul id="ul_guide">
                                <li class="f-step1"><a href="javascript:;" title="30秒了解"></a>
                                    <img src="style/images/step_01.gif?v=141113" /></li>
                                <li class="f-step2"><a href="javascript:;" title="下一步"></a>
                                    <img src="style/images/step_02.gif?v=141113" /></li>
                                <li class="f-step3"><a href="javascript:;" title="下一步"></a>
                                    <img src="style/images/step_03.gif?v=141113" /></li>
                                <li class="f-step4"><a href="javascript:;" title="下一步"></a>
                                    <img src="style/images/step_04.gif?v=141113" /></li>
                                <li class="f-step5"><a href="javascript:;" title="下一步"></a>
                                    <img src="style/images/step_05.gif?v=141113" /></li>
                                <li class="f-step6"><a href="http://help.1yyg.com/info/newbie/index.html" target="_blank" title="继续了解详情"></a>
                                    <img src="style/images/step_06.gif?v=141113" /></li>
                            </ul>
                            <a id="guide_close" href="javascript:;" class="m-guide-close" title="关闭"></a>
                        </div>
                        <div class="u-guide-arrow">
                            <a id="guide_pre" href="javascript:;" class="u-guide-prev"><s></s></a>
                            <a id="guide_next" href="javascript:;" class="u-guide-next"><s></s></a>
                        </div>
                    </div>
                    {{--轮播图--}}
                    <div style="width:700px;height:50px;padding-left: 5px;" align="center">

                        <ul id="flexiselDemo1">


                        </ul>
                        <div class="nbs-flexisel-nav-left" style="top: 111px;"></div>
                        <div class="nbs-flexisel-nav-right" style="top: 111px;"></div>
                    </div>

                </div>
                <script type="text/javascript">
                    $(window).load(function() {
                        $("#flexiselDemo1").flexisel({
                            visibleItems: 1,
                            animationSpeed: 500,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover:true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint:480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint:640,
                                    visibleItems: 2
                                },
                                tablet: {
                                    changePoint:768,
                                    visibleItems: 3
                                }
                            }
                        });
                    });
                </script>
                <script type="text/javascript"  src="style/js/jquery.flexisel.js"></script>



                <!--广告位下方推荐-->
                <div class="slide-comd">


                    <div class="commodity">
                        <ul>
                            <li class="comm-info fl">
                                <span><a href="http://www.1yyg.com/products/22592.html" target="_blank" title="苹果（Apple）iMac MK462CH/A 27英寸一体电脑">苹果（Apple）iMac MK462CH/A 27英寸一体电脑</a></span>
                                <p class="gray">已参与<em class="orange">858</em>人次</p>
                            </li>
                            <li class="comm-pic fr">
                                <a href="http://www.1yyg.com/products/22592.html" target="_blank" title="苹果（Apple）iMac MK462CH/A 27英寸一体电脑" rel="nofollow">
                                    <cite>
                                        <img alt="苹果（Apple）iMac MK462CH/A 27英寸一体电脑" src="http://img.1yyg.net/GoodsPic/pic-200-200/20160511140647469.jpg" border="0" width="100" height="100">
                                    </cite>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="commodity">
                        <ul>
                            <li class="comm-info fl">
                                <span><a href="http://www.1yyg.com/products/23499.html" target="_blank" title="苹果（Apple）iPhone 6s 32G版 4G手机">苹果（Apple）iPhone 6s 32G版 4G手机</a></span>
                                <p class="gray">已参与<em class="orange">15</em>人次</p>
                            </li>
                            <li class="comm-pic fr"><a href="http://www.1yyg.com/products/23499.html" target="_blank" title="苹果（Apple）iPhone 6s 32G版 4G手机" rel="nofollow">
                                    <cite>
                                        <img alt="苹果（Apple）iPhone 6s 32G版 4G手机" src="http://img.1yyg.net/GoodsPic/pic-200-200/20160926172337982.jpg" border="0" width="100" height="100"></cite>

                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="home-event fr">
                <div class="what-1yyg">
                    <a id="what_1yyg" href="javascript:void(0);" title="什么是1元云购？30秒了解">
                        <img src="style/images/index-come.gif" alt="" /></a>
                </div>
                <div class="honesty">
                    <ul>
                        <li><a href="http://info.1yyg.com/sincerity/index.html" target="_blank" title="诚信网站"><i class="i1"></i>诚信网站</a></li>
                        <li><a href="http://info.1yyg.com/sincerity/index.html#rz2" target="_blank" rel="nofollow" title="可信网站"><i class="i2"></i>可信网站</a></li>
                        <li><a href="http://info.1yyg.com/sincerity/index.html#rz3" target="_blank" rel="nofollow" title="电商诚信"><i class="i3"></i>电商诚信</a></li>
                        <li><a href="http://info.1yyg.com/sincerity/index.html#rz5" target="_blank" rel="nofollow" title="监督管理局"><i class="i5"></i>监督管理局</a></li>
                        <li><a href="http://info.1yyg.com/sincerity/index.html#rz4" target="_blank" rel="nofollow" title="服务保证"><i class="i4"></i>服务保证</a></li>
                        <li><a href="http://info.1yyg.com/sincerity/index.html" target="_blank" rel="nofollow" title="更多"><i class="i6"></i>更多</a></li>
                    </ul>
                </div>
                <div class="index_news clrfix">
                    <dl>
                        <dt><a href="http://group.1yyg.com/group-1.html" target="_blank" title="云购公告">云购公告</a></dt>


                        <dd class=""><b></b><a href="http://group.1yyg.com/topic-18176.html" target="_blank" title="辞旧迎新，鸡年假到！">辞旧迎新，鸡年假到！</a></dd>

                        <dd class=""><b></b><a href="http://group.1yyg.com/topic-16936.html" target="_blank" title="1元云购Galaxy Note7召回公告">1元云购Galaxy Note7召回公告</a></dd>

                        <dd class=""><b></b><a href="http://group.1yyg.com/topic-16696.html" target="_blank" title="1元云购致社会公开信">1元云购致社会公开信</a></dd>

                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="g-wrap w1190">
        <!--最新揭晓-->
        <div class="g-title">
            <h3 class="fl"><i></i>最新揭晓</h3>
            <div class="m-other fl">
                <a href="http://www.1yyg.com/map.html" target="_blank" title="看看附近都有谁获得了商品？"><em></em>看看附近都有谁获得了商品？</a>
            </div>
            <div class="fr z-total">
                <a href="/lottery/m1.html" target="_blank">共揭晓商品&nbsp;<em id="em_lotcount" class="orange">9137279</em>&nbsp;个&nbsp;<i class="f-tran">>></i></a>
            </div>
        </div>
        <div class="g-list clrfix">

            <ul id="ul_Lottery">

                <li >
                    <dl>
                        <dt><a href="http://www.1yyg.com/lottery/10159769.html" target="_blank" title="加多宝 凉茶 310mlx12罐 整箱装" rel="nofollow">
                                <img alt="加多宝 凉茶 310mlx12罐 整箱装" src="http://img.1yyg.net/GoodsPic/pic-200-200/20160418162459140.jpg" /></a></dt>
                        <dd class="f-gx">
                            <div class="f-gx-user">
                                <span>恭喜</span>
                                <span class="blue"><a href="http://u.1yyg.com/1015197922" target="_blank" title="恭喜-本云获得者" class="blue">恭喜-本云获得者</a></span>
                                <span>获得</span>
                            </div>
                        </dd>
                        <dd class="u-name"><a href="http://www.1yyg.com/lottery/10159769.html" target="_blank" title="(第80018云)加多宝 凉茶 310mlx12罐 整箱装">(第80018云)加多宝 凉茶 310mlx12罐 整箱装</a></dd>
                        <dd class="gray">广东省深圳市</dd>
                    </dl>
                    <cite></cite>
                </li>

                <li >
                    <dl>
                        <dt><a href="http://www.1yyg.com/lottery/10597250.html" target="_blank" title="苹果（Apple）iPhone 7 Plus 128G版 4G手机" rel="nofollow">
                                <img alt="苹果（Apple）iPhone 7 Plus 128G版 4G手机" src="http://img.1yyg.net/GoodsPic/pic-200-200/20160908092215288.jpg" /></a></dt>
                        <dd class="f-gx">
                            <div class="f-gx-user">
                                <span>恭喜</span>
                                <span class="blue"><a href="http://u.1yyg.com/1016474878" target="_blank" title="座看云起水中中中" class="blue">座看云起水中中中</a></span>
                                <span>获得</span>
                            </div>
                        </dd>
                        <dd class="u-name"><a href="http://www.1yyg.com/lottery/10597250.html" target="_blank" title="(第131348云)苹果（Apple）iPhone 7 Plus 128G版 4G手机">(第131348云)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a></dd>
                        <dd class="gray">福建省南平市</dd>
                    </dl>
                    <cite></cite>
                </li>

                <li >
                    <dl>
                        <dt><a href="http://www.1yyg.com/lottery/10582257.html" target="_blank" title="金龙鱼 优质东北大米 5kg" rel="nofollow">
                                <img alt="金龙鱼 优质东北大米 5kg" src="http://img.1yyg.net/GoodsPic/pic-200-200/20150708112557251.jpg" /></a></dt>
                        <dd class="f-gx">
                            <div class="f-gx-user">
                                <span>恭喜</span>
                                <span class="blue"><a href="http://u.1yyg.com/1008292755" target="_blank" title="为老婆赢宝马" class="blue">为老婆赢宝马</a></span>
                                <span>获得</span>
                            </div>
                        </dd>
                        <dd class="u-name"><a href="http://www.1yyg.com/lottery/10582257.html" target="_blank" title="(第268690云)金龙鱼 优质东北大米 5kg">(第268690云)金龙鱼 优质东北大米 5kg</a></dd>
                        <dd class="gray">广东省汕头市</dd>
                    </dl>
                    <cite></cite>
                </li>

                <li >
                    <dl>
                        <dt><a href="http://www.1yyg.com/lottery/10232478.html" target="_blank" title="湄南河（menam rlver）泰国豚谷拉隆海茉莉香米 3kg 泰国进口" rel="nofollow">
                                <img alt="湄南河（menam rlver）泰国豚谷拉隆海茉莉香米 3kg 泰国进口" src="http://img.1yyg.net/GoodsPic/pic-200-200/20160518173845632.jpg" /></a></dt>
                        <dd class="f-gx">
                            <div class="f-gx-user">
                                <span>恭喜</span>
                                <span class="blue"><a href="http://u.1yyg.com/1009753741" target="_blank" title="希望在购" class="blue">希望在购</a></span>
                                <span>获得</span>
                            </div>
                        </dd>
                        <dd class="u-name"><a href="http://www.1yyg.com/lottery/10232478.html" target="_blank" title="(第19171云)湄南河（menam rlver）泰国豚谷拉隆海茉莉香米 3kg 泰国进口">(第19171云)湄南河（menam rlver）泰国豚谷拉隆海茉莉香米 3kg 泰国进口</a></dd>
                        <dd class="gray">广东省广州市</dd>
                    </dl>
                    <cite></cite>
                </li>

                <li class="col5">
                    <dl>
                        <dt><a href="http://www.1yyg.com/lottery/10594574.html" target="_blank" title="苹果（Apple）iPhone 6s 32G版 4G手机" rel="nofollow">
                                <img alt="苹果（Apple）iPhone 6s 32G版 4G手机" src="http://img.1yyg.net/GoodsPic/pic-200-200/20160926172337982.jpg" /></a></dt>
                        <dd class="f-gx">
                            <div class="f-gx-user">
                                <span>恭喜</span>
                                <span class="blue"><a href="http://u.1yyg.com/1012193428" target="_blank" title="这期不中再也不买Y" class="blue">这期不中再也不买Y</a></span>
                                <span>获得</span>
                            </div>
                        </dd>
                        <dd class="u-name"><a href="http://www.1yyg.com/lottery/10594574.html" target="_blank" title="(第196885云)苹果（Apple）iPhone 6s 32G版 4G手机">(第196885云)苹果（Apple）iPhone 6s 32G版 4G手机</a></dd>
                        <dd class="gray">中国</dd>
                    </dl>
                    <cite></cite>
                </li>

            </ul>
        </div>

        <!--热门推荐-->
        <div class="g-title">
            <h3 class="fl"><i></i>热门推荐</h3>
            <div class="m-other fr">
                <a href="http://www.1yyg.com/list/m1.html?r=20" target="_blank" title="更多" class="u-more">更多</a>
            </div>
        </div>
        <div class="g-hot clrfix">
            <div class="g-hotL fl" id="divHotGoodsList">
         



            </div>


            {{--正在云够--}}
            <div class="g-hotR fr">
                <div class="u-are">正在云购</div>
                <div class="g-zzyging">
                    <input name="hidBuyID" type="hidden" id="hidBuyID" value="923284212" />
                    <ul id="UserBuyNewList">
                        <li>
                                        <span class="fl"><a href="http://u.1yyg.com/1014327156" target="_blank" rel="nofollow" title="将军来领取大奖了">
                                                <img alt="" src="http://img.1yyg.net/UserFace/20170218211739482.jpg" /><i class="transparent-png"></i></a></span>
                            <p>
                                <a href="http://u.1yyg.com/1014327156" target="_blank" title="将军来领取大奖了" class="blue">将军来领取大奖了</a><br />
                                <a href="http://www.1yyg.com/product/10598403.html" target="_blank" title="平安银行 平安金福金条 Au9999 2g" class="u-ongoing">平安银行 平安金福金条 Au9999 2g</a>
                            </p>
                        </li>

                        <li>
                                        <span class="fl"><a href="http://u.1yyg.com/1001693040" target="_blank" rel="nofollow" title="最后一搏凯迪拉克">
                                                <img alt="" src="http://img.1yyg.net/UserFace/20160629000326622.jpg" /><i class="transparent-png"></i></a></span>
                            <p>
                                <a href="http://u.1yyg.com/1001693040" target="_blank" title="最后一搏凯迪拉克" class="blue">最后一搏凯迪拉克</a><br />
                                <a href="http://www.1yyg.com/product/10333404.html" target="_blank" title="凯迪拉克 ATS-L 2016款 28T 技术型轿车" class="u-ongoing">凯迪拉克 ATS-L 2016款 28T 技术型轿车</a>
                            </p>
                        </li>

                        <li>
                                        <span class="fl"><a href="http://u.1yyg.com/1001693040" target="_blank" rel="nofollow" title="最后一搏凯迪拉克">
                                                <img alt="" src="http://img.1yyg.net/UserFace/20160629000326622.jpg" /><i class="transparent-png"></i></a></span>
                            <p>
                                <a href="http://u.1yyg.com/1001693040" target="_blank" title="最后一搏凯迪拉克" class="blue">最后一搏凯迪拉克</a><br />
                                <a href="http://www.1yyg.com/product/9443418.html" target="_blank" title="平安银行 平安金元宝 Au9999 200g" class="u-ongoing">平安银行 平安金元宝 Au9999 200g</a>
                            </p>
                        </li>

                        <li>
                                        <span class="fl"><a href="http://u.1yyg.com/1008216608" target="_blank" rel="nofollow" title="我中过可乐">
                                                <img alt="" src="http://img.1yyg.net/UserFace/20160616203205358.jpg" /><i class="transparent-png"></i></a></span>
                            <p>
                                <a href="http://u.1yyg.com/1008216608" target="_blank" title="我中过可乐" class="blue">我中过可乐</a><br />
                                <a href="http://www.1yyg.com/product/10581839.html" target="_blank" title="苹果（Apple）iPhone 7 Plus 128G版 4G手机" class="u-ongoing">苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                            </p>
                        </li>

                        <li>
                                        <span class="fl"><a href="http://u.1yyg.com/1008216608" target="_blank" rel="nofollow" title="我中过可乐">
                                                <img alt="" src="http://img.1yyg.net/UserFace/20160616203205358.jpg" /><i class="transparent-png"></i></a></span>
                            <p>
                                <a href="http://u.1yyg.com/1008216608" target="_blank" title="我中过可乐" class="blue">我中过可乐</a><br />
                                <a href="http://www.1yyg.com/product/10566619.html" target="_blank" title="伊利 原味优酸乳 250mlx24盒 整箱装" class="u-ongoing">伊利 原味优酸乳 250mlx24盒 整箱装</a>
                            </p>
                        </li>

                        <li>
                                        <span class="fl"><a href="http://u.1yyg.com/1008216608" target="_blank" rel="nofollow" title="我中过可乐">
                                                <img alt="" src="http://img.1yyg.net/UserFace/20160616203205358.jpg" /><i class="transparent-png"></i></a></span>
                            <p>
                                <a href="http://u.1yyg.com/1008216608" target="_blank" title="我中过可乐" class="blue">我中过可乐</a><br />
                                <a href="http://www.1yyg.com/product/10499493.html" target="_blank" title="创维（Skyworth）G7 55英寸 4K超高清智能网络液晶平板电视" class="u-ongoing">创维（Skyworth）G7 55英寸 4K超高清智能网络液晶平板电视</a>
                            </p>
                        </li>

                        <li>
                                        <span class="fl"><a href="http://u.1yyg.com/1008216608" target="_blank" rel="nofollow" title="我中过可乐">
                                                <img alt="" src="http://img.1yyg.net/UserFace/20160616203205358.jpg" /><i class="transparent-png"></i></a></span>
                            <p>
                                <a href="http://u.1yyg.com/1008216608" target="_blank" title="我中过可乐" class="blue">我中过可乐</a><br />
                                <a href="http://www.1yyg.com/product/10488720.html" target="_blank" title="华为（HUAWEI）P9 Plus 64GB 全网通 4G手机" class="u-ongoing">华为（HUAWEI）P9 Plus 64GB 全网通 4G手机</a>
                            </p>
                        </li>

                        <li>
                                        <span class="fl"><a href="http://u.1yyg.com/1008216608" target="_blank" rel="nofollow" title="我中过可乐">
                                                <img alt="" src="http://img.1yyg.net/UserFace/20160616203205358.jpg" /><i class="transparent-png"></i></a></span>
                            <p>
                                <a href="http://u.1yyg.com/1008216608" target="_blank" title="我中过可乐" class="blue">我中过可乐</a><br />
                                <a href="http://www.1yyg.com/product/10311816.html" target="_blank" title="新大洲 本田（HONDA）电喷摩托车 CBF190R" class="u-ongoing">新大洲 本田（HONDA）电喷摩托车 CBF190R</a>
                            </p>
                        </li>

                        <li>
                                        <span class="fl"><a href="http://u.1yyg.com/1008216608" target="_blank" rel="nofollow" title="我中过可乐">
                                                <img alt="" src="http://img.1yyg.net/UserFace/20160616203205358.jpg" /><i class="transparent-png"></i></a></span>
                            <p>
                                <a href="http://u.1yyg.com/1008216608" target="_blank" title="我中过可乐" class="blue">我中过可乐</a><br />
                                <a href="http://www.1yyg.com/product/10303747.html" target="_blank" title="斯柯达 明锐 2017款 1.6L 自动创行版轿车" class="u-ongoing">斯柯达 明锐 2017款 1.6L 自动创行版轿车</a>
                            </p>
                        </li>

                        <li>
                                        <span class="fl"><a href="http://u.1yyg.com/1008216608" target="_blank" rel="nofollow" title="我中过可乐">
                                                <img alt="" src="http://img.1yyg.net/UserFace/20160616203205358.jpg" /><i class="transparent-png"></i></a></span>
                            <p>
                                <a href="http://u.1yyg.com/1008216608" target="_blank" title="我中过可乐" class="blue">我中过可乐</a><br />
                                <a href="http://www.1yyg.com/product/10182093.html" target="_blank" title="康佳（KONKA）LED40M3000A 40英寸 高清智能网络LED液晶电视（标配底座）" class="u-ongoing">康佳（KONKA）LED40M3000A 40英寸 高清智能网络LED液晶电视（标配底座）</a>
                            </p>
                        </li>

                    </ul>
                </div>
                <div class="u-see100"><a href="http://www.1yyg.com/newestBuyRecords.html" target="_blank">查看最新100条记录</a></div>
            </div>
        </div>

        <!--即将揭晓-->
        <div class="g-title m-sort">
            <h3 class="fl"><i></i>即将揭晓</h3>
            <div class="fr">
                <a href="http://www.1yyg.com/list/i100.html" target="_blank" title="手机数码">手机数码</a>
                <a href="http://www.1yyg.com/list/i106.html" target="_blank" title="电脑办公">电脑办公</a>
                <a href="http://www.1yyg.com/list/i104.html" target="_blank" title="家用电器">家用电器</a>
                <a href="http://www.1yyg.com/list/i2.html" target="_blank" title="化妆个护">化妆个护</a>
                <a href="http://www.1yyg.com/list/i222.html" target="_blank" title="钟表首饰">钟表首饰</a>
                <a href="http://www.1yyg.com/list/i312.html" target="_blank" title="其他商品">其他商品</a>
                <a href="http://www.1yyg.com/list/m1.html" target="_blank" title="全部">全部</a>
            </div>
        </div>
        <div class="announced-soon clrfix" id="divSoonGoodsList">

        </div>
        <div class="check-out"><a href="http://www.1yyg.com/list/m1.html" target="_blank" title="查看所有商品">查看所有商品</a></div>

        <!--新品上架-->
        <div class="g-title">
            <h3 class="fl"><i></i>新品上架</h3>
            <div class="m-other fr">
                <a href="http://www.1yyg.com/list/m1.html?r=50" target="_blank" title="更多" class="u-more">更多</a>
            </div>
        </div>
        <div class="announced-soon clrfix announced-soon-new" id="divNewGoodsList">

        </div>

        <script>

            $(function() {
                $.ajax({
                    type: "POST",
                    url: "indexCarousel",
                    data: {},
                    dataType: "json",
                    success: function(msg){
                        car(msg);
                    }
                });
                function car(msg){
                    var str = "";
                    $.each(msg,function(k,v){
                        str += '<li>';
                        str += '<a href="">';
                        str += '<img src="'+v.carousel_path+'" alt="'+v.carousel_name+'" width="5" height="100%" />';
                        str += '</a>';
                        str += '</li>';
                    })
                    $("#flexiselDemo1").html(str);

                }
                var hot = 1;//热门推荐
                var immediately = 1;//即将揭晓
                var new_shop = 1;//新品上架

                $(window).scroll(function() {
                    var scrollHeight = $(document).scrollTop();

                    if (hot < 2 & scrollHeight > 400 & scrollHeight < 500 ) {
                        hot = hot+1;
                        all_fun('is_hot');

                    }
                    if (immediately < 2 & scrollHeight > 800 & scrollHeight < 1200 ) {
                        immediately = immediately+1;
                       all_fun("state");
                    }
                    if (new_shop < 2 & scrollHeight > 1300 & scrollHeight < 1900 ) {
                        new_shop = new_shop+1;
                        all_fun("is_new");
                    }

                });
            })
        </script>
        <script>
            function all_fun(field)
            {
                $.ajax({
                    type: "POST",
     
                    url: "indexHot",
                    data: {field:field},
                    success: function(data)
                    {
                       var  msg = JSON.parse(data);
                       var str = '';
                        if (field == 'is_hot') 
                        {
                            for (var i = 0; i < msg.length; i++) 
                            {
                                str+='<div class="g-hotL-list" goodsid="23458">';
                                str+='<div class="g-hotL-con">';
                                str+='<ul>';
                                str+='<li class="g-hot-pic">';
                                str+='<a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="products/23458.html">';
                                str+='<img src='+msg[i]['goods_picture']+' alt='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' name="goodsImg">';
                                str+='</a>';
                                str+='</li>';
                                str+='<li class="g-hot-name">';
                                str+='<a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="products/23458.html">'+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+'</a></li>';
                                str+='<li class="gray">价值：￥'+msg[i]['goods_price']+'.00</li>';
                                str+='<li class="g-progress">';
                                str+='<dl class="m-progress">';
                                str+='<dt title="已完成1%">';
                                str+='<b style="width:1%;"></b>';
                                str+='</dt>';
                                str+='<dd>';
                                str+='<span class="orange fl">';
                                str+='<em>'+msg[i]['num']+'</em>';
                                str+='已参与';
                                str+='</span>';
                                str+='<span class="gray6 fl">';
                                str+='<em>'+msg[i]['goods_price']+'</em>';
                                str+='总需人次';
                                str+='</span>';
                                str+='<span class="blue fr">';
                                str+='<em>'+msg[i]['number']+'</em>';
                                str+='剩余';
                                str+='</span>';
                                str+='</dd>';
                                str+='</dl>';
                                str+='</li>';
                                str+='<li>';
                                str+='<a id="btnHotYgOnePay0" class="u-imm" title="立即1元云购" href="javascript:;">立即1元云购</a>';
                                str+='<a class="u-cart" codeid="10607190" title="加入到购物车" href="javascript:;">';
                                str+='<s></s>';
                                str+='</a>';
                                str+='</li>';
                                str+='</ul>';
                                str+='</div>';
                                str+='<div class="u_buyCount" codeid="10607190" style="top:169px;"></div>';
                                str+='</div>';
                            };
                            $('#divHotGoodsList').html(str);
                        };
                        if (field == 'is_new') 
                        {
                             for (var i = 0; i < msg.length; i++) 
                             {
                                  str+='<div idx="1" class="soon-list-con">';
                                    str+='<div class="soon-list">';
                                        str+='<ul>';
                                            str+='<li class="g-soon-pic"><a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="products/23778.html">';
                                            str+='<img src='+msg[i]['goods_picture']+' alt='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+'>';
                                            str+='</a></li>';
                                            str+='<li class="soon-list-name"><a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="products/23778.html">'+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+'</a>';
                                            str+='</li><li class="gray">';
                                               str+='价值：￥'+msg[i]['goods_price']+'.00';
                                            str+='</li>';
                                       str+=' </ul>';
                                    str+='</div>';
                                    str+='<div codeid="10568778" style="top:210px;" class="u_buyCount"></div>';
                                str+='</div>';
                             };
                             $('#divNewGoodsList').html(str); 
                        };
                        if (field == 'state') 
                        {
                    
                            for (var i = 0; i < msg.length; i++) 
                            {
                                str+='<div idx="1" goodsid="23172" class="soon-list-con">';
                                    str+='<div class="soon-list">';
                                       str+= '<ul>';
                                            str+='<li class="g-soon-pic">';
                                                str+= '<a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="products/23172.html">';
                                                 str+= '<img src='+msg[i]['goods_picture']+'  alt='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' name="goodsImg">';
                                                  str+= '</a></li><li class="soon-list-name">';
                                                  str+= '<a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="products/23172.html">';
                                                   str+= ''+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+'';
                                                    str+= '价值：￥'+msg[i]['goods_price']+'.00</li>';
                                                    str+= '<li class="g-progress"><dl class="m-progress">';
                                                     str+= '<dt title="已完成96.20%">';
                                                     str+= '<b style="width:96.20%;"></b></dt><dd>';
                                                      str+= '<span class="orange fl">';
                                                      str+= '<em>'+msg[i]['num']+'</em>已参与</span>';
                                                       str+= '<span class="gray6 fl">';
                                                       str+= '<em>'+msg[i]['goods_price']+'</em>';
                                                       str+= '总需人次</span>';
                                                        str+= '<span class="blue fr">';
                                                        str+= '<em>'+msg[i]['number']+'</em>剩余</span></dd></dl></li>';
                                                         str+= '<li><a id="btnLimitYgOnePay0" class="u-now" title="立即1元云购" href="javascript:;">立即1元云购</a>';
                                                          str+= '<a class="u-cart" surplus="3" codeid="10563443" title="加入到购物车" href="javascript:;">';
                                                    str+='<s></s>';
                                                str+='</a>';
                                            str+='</li>';
                                        str+='</ul>';
                                     str+= '</div>';
                                    str+='<div codeid="10563443" style="top:200px;" class="u_buyCount"></div>';
                                str+='</div>';
                            };
                            $('#divSoonGoodsList').html(str)
                        };
            
                    }
                });
            }
        </script>
    </div>

    <!--底部-->
    <!--底部-->
    <div class="g-footer">
        <div class="w1190">
            <div class="g-guide clrfix">
                <dl>
                    <dt>新手指南</dt>
                    <dd><a target="_blank" href="http://help.1yyg.com/" title="了解1元云购">了解1元云购</a></dd>
                    <dd><a target="_blank" href="http://help.1yyg.com/htm-questiondetail.html" title="常见问题">常见问题</a></dd>
                    <dd><a target="_blank" href="http://help.1yyg.com/htm-userExperience.html" title="福分等级介绍">福分等级介绍</a></dd>
                </dl>
                <dl>
                    <dt>云购保障</dt>
                    <dd><a target="_blank" href="http://help.1yyg.com/htm-genuinetwo.html" title="1元云购保障体系">1元云购保障体系</a></dd>
                    <dd><a target="_blank" href="http://help.1yyg.com/htm-securepayment.html" title="安全支付">安全支付</a></dd>
                    <dd><a target="_blank" href="http://help.1yyg.com/htm-suggestion.html" title="投诉建议">投诉建议</a></dd>
                </dl>
                <dl>
                    <dt>商品配送</dt>
                    <dd><a target="_blank" href="http://help.1yyg.com/htm-deliveryfees.html" title="配送费用">配送费用</a></dd>
                    <dd><a target="_blank" href="http://help.1yyg.com/htm-prodcheck.html" title="商品验货与签收">商品验货与签收</a></dd>
                    <dd><a target="_blank" href="http://help.1yyg.com/htm-shiptwo.html" title="长时间未收到商品">长时间未收到商品</a></dd>
                </dl>
                <dl>
                    <dt>关于1元云购</dt>
                    <dd><a target="_blank" href="http://help.1yyg.com/htm-about.html" title="1元云购介绍">1元云购介绍</a></dd>
                    <dd><a target="_blank" href="http://info.1yyg.com/fund/" title="云购公益">云购公益</a></dd>
                    <dd><a target="_blank" href="http://help.1yyg.com/htm-contactus.html" title="联系我们">联系我们</a></dd>
                </dl>
                <dl>
                    <dt>携手1元云购</dt>
                    <dd><a target="_blank" href="http://help.1yyg.com/info/htm-business.html" title="商务合作">商务合作</a></dd>
                    <dd><a target="_blank" href="http://member.1yyg.com/ReferAuth.do" title="邀请">邀请</a></dd>
                    <dd><a target="_blank" href="http://help.1yyg.com/info/htm-qqgroup.html" title="官方QQ群交流">官方QQ群交流</a></dd>
                </dl>
            </div>

            <div class="g-service">
                <div class="m-ser u-ser1">
                    <ul>
                        <li><s class="u-icons"></s></li>
                        <li>
                            <dl>
                                <dt>下载手机客户端</dt>
                                <dd><b class="u-icons"></b></dd>
                                <dd><a target="_blank" href="http://info.1yyg.com/app/mobile.html" title="立即下载">立即下载</a></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="m-ser u-ser2">
                    <ul>
                        <li><a href="javascript:;">
                                <img src="style/images/1yyg-wx.png?v=20141105" /></a></li>
                        <li>
                            <dl>
                                <dt><a target="_blank" href="http://info.1yyg.com/app/microchannel.html"><i class="u-icons"></i>关注官方微信</a></dt>
                                <dd><a target="_blank" href="http://info.1yyg.com/app/microchannel.html"><b class="u-icons"></b></a></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="m-ser u-ser3">
                    <ul>
                        <li><s class="u-icons"></s></li>
                        <li>
                            <dl>
                                <dt>服务器时间</dt>
                                <dd id="pServerTime">
                                    <span>00</span>
                                    <em>:</em>
                                    <span>00</span>
                                    <em>:</em>
                                    <span>00</span>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="m-ser u-ser4">
                    <ul>
                        <li><s class="u-icons"></s></li>
                        <li>
                            <dl>
                                <dt>云购公益基金</dt>
                                <dd><a target="_blank" href="http://info.1yyg.com/fund/" id="spFundTotal">￥0000000.00</a></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="m-ser u-ser5">
                    <ul>
                        <li><s class="u-icons"></s></li>
                        <li>
                            <dl>
                                <dt>服务热线</dt>
                                <dd class="orange u-tel">4000-588-688</dd>
                                <dd><a id="btnBtmQQ" href="javascript:;" class="u-service-off u-service"><i></i>在线客服</a></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="g-special clrfix">
                <ul>
                    <li>
                        <a href="http://help.1yyg.com/htm-genuinetwo.html" target="_blank" title="100%公平公正">
                            <em class="u-spc-icon1"></em>
                            <span>100%公平公正</span>
                            参与过程公开透明，用户可随时查看
                        </a>
                    </li>
                    <li>
                        <a href="http://help.1yyg.com/htm-genuine.html" target="_blank" title="100%正品保证">
                            <em class="u-spc-icon2"></em>
                            <span>100%正品保证</span>
                            精心挑选优质商家，100%品牌正品
                        </a>
                    </li>
                    <li>
                        <a href="http://help.1yyg.com/htm-deliveryfees.html" target="_blank" title="全国免运费">
                            <em class="u-spc-icon3"></em>
                            <span>全国免运费</span>
                            全国包邮（港澳台及特殊商品除外）
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--版权-->
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
                                    <img src="style/images/andriod.jpg?v=20141105">
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
                                    <img src="style/images/1yyg-wx.png?v=20141105"/>
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
                                <img src="style/images/andriod.jpg?v=20141105"/>
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
                                <img src="style/images/1yyg-wx.png?v=20141105"/>
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
