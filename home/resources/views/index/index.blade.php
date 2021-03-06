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
    <script type="text/javascript" src="style/js/JQuery1.12.js"></script>
    <script type="text/javascript" id="pageJS" data="style/js/Index.js"></script>
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
                                <li class="f-step6"><a href="/" target="_blank" title="继续了解详情"></a>
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

                    @foreach($remmend as $key=>$v)

                    <div class="commodity">
                        <ul>
                            <li class="comm-info fl">
                                <span><a href="indexShop?goods_id={{$v['goods_id']}}" target="_blank" title="{{$v['goods_name']}}{{$v['goods_desc']}}">
                                        {{$v['goods_name']}}{{$v['goods_desc']}}
                                    </a>
                                </span>
                                <p class="gray">已参与<em class="orange">{{$v['num_price']}}</em>人次</p>
                            </li>
                            <li class="comm-pic fr">
                                <a href="indexShop?goods_id={{$v['goods_id']}}" target="_blank" title="{{$v['goods_name']}}{{$v['goods_desc']}}" rel="nofollow">
                                    <cite>
                                        <img alt="{{$v['goods_name']}}{{$v['goods_desc']}}" src="{{$v['goods_picture']}}" border="0" width="100" height="100">
                                    </cite>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="home-event fr">
                <div class="what-1yyg">
                    <a id="what_1yyg" href="javascript:void(0);" title="什么是1元云购？30秒了解">
                        <img src="style/images/index-come.gif" alt="" /></a>
                </div>
                <div class="honesty">
                    <ul>
                        <li><a href="sincerity/index.html" target="_blank" title="诚信网站"><i class="i1"></i>诚信网站</a></li>
                        <li><a href="sincerity/index.html#rz2" target="_blank" rel="nofollow" title="可信网站"><i class="i2"></i>可信网站</a></li>
                        <li><a href="sincerity/index.html#rz3" target="_blank" rel="nofollow" title="电商诚信"><i class="i3"></i>电商诚信</a></li>
                        <li><a href="sincerity/index.html#rz5" target="_blank" rel="nofollow" title="监督管理局"><i class="i5"></i>监督管理局</a></li>
                        <li><a href="sincerity/index.html#rz4" target="_blank" rel="nofollow" title="服务保证"><i class="i4"></i>服务保证</a></li>
                        <li><a href="sincerity/index.html" target="_blank" rel="nofollow" title="更多"><i class="i6"></i>更多</a></li>
                    </ul>
                </div>
                <div class="index_news clrfix">
                    <dl>
                        <dt><a href="group-1.html" target="_blank" title="云购公告">云购公告</a></dt>
                        <dd class=""><b></b><a href="topic-18176.html" target="_blank" title="辞旧迎新，鸡年假到！">辞旧迎新，鸡年假到！</a></dd>
                        <dd class=""><b></b><a href="topic-16936.html" target="_blank" title="1元云购Galaxy Note7召回公告">1元云购Galaxy Note7召回公告</a></dd>
                        <dd class=""><b></b><a href="topic-16696.html" target="_blank" title="1元云购致社会公开信">1元云购致社会公开信</a></dd>
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
                <a href="map.html" target="_blank" title="看看附近都有谁获得了商品？"><em></em>看看附近都有谁获得了商品？</a>
            </div>
            <div class="fr z-total">
                <a href="/lottery/m1.html" target="_blank">共揭晓商品&nbsp;<em id="em_lotcount" class="orange">9137279</em>&nbsp;个&nbsp;<i class="f-tran">>></i></a>
            </div>
        </div>
        <div class="g-list clrfix">
            <ul id="ul_Lottery">
                <?php foreach($new_end as $k=>$v){ ?>
                <li >
                    <dl>
                        <dt><a href="indexShop?goods_id={{$v['goods_id']}}" target="_blank"
                               title="{{$v['keywords']}} {{$v['goods_name']}}" rel="nofollow">
                                <img alt="(第qwe云){{$v['keywords']}} {{$v['goods_name']}}"
                                     src="{{$v['goods_picture']}}" />
                            </a>
                        </dt>
                        <dd class="f-gx">
                            <div class="f-gx-user">
                                <span>恭喜</span>
                                <span class="blue">
                                    <a href="setMyself?u_id={{$v['u_id']}}" target="_blank" title="{{$v['nickname']}}" class="blue">
                                        {{$v['nickname']}}
                                    </a>
                                </span>
                                <span>获得</span>
                            </div>
                        </dd>
                        <dd class="u-name">
                            <a href="indexShop?goods_id={{$v['goods_id']}}" target="_blank"
                                title="(第{{$v['times']}}云){{$v['keywords']}} {{$v['goods_name']}}">
                                (第{{$v['times']}}云){{$v['keywords']}} {{$v['goods_name']}}
                            </a>
                        </dd>
                        <dd class="gray">{{$v['location']}}</dd>
                    </dl>
                    <cite></cite>
                </li>
                <?php } ?>

            </ul>
        </div>

        <!--热门推荐-->
        <div class="g-title">
            <h3 class="fl"><i></i>热门推荐</h3>
            <div class="m-other fr">
              <!--   <a href="http://www.1yyg.com/list/m1.html?r=20" target="_blank" title="更多" class="u-more">更多</a> -->
            </div>
        </div>
        <div class="g-hot clrfix">
            <div class="g-hotL fl" id="divHotGoodsList">

                <div class="g-hotL-list">
                    <div class="g-hotL-con">
                        <div class="u-loading"><em></em></div>
                    </div>
                </div>
                <div class="g-hotL-list">
                    <div class="g-hotL-con">
                        <div class="u-loading"><em></em></div>
                    </div>
                </div>
                <div class="g-hotL-list">
                    <div class="g-hotL-con">
                        <div class="u-loading"><em></em></div>
                    </div>
                </div>
                <div class="g-hotL-list">
                    <div class="g-hotL-con">
                        <div class="u-loading"><em></em></div>
                    </div>
                </div>
                <div class="g-hotL-list">
                    <div class="g-hotL-con">
                        <div class="u-loading"><em></em></div>
                    </div>
                </div>
                <div class="g-hotL-list">
                    <div class="g-hotL-con">
                        <div class="u-loading"><em></em></div>
                    </div>
                </div>
                <div class="g-hotL-list">
                    <div class="g-hotL-con">
                        <div class="u-loading"><em></em></div>
                    </div>
                </div>
                <div class="g-hotL-list">
                    <div class="g-hotL-con">
                        <div class="u-loading"><em></em></div>
                    </div>
                </div>


            </div>


            {{--正在云够--}}
            <div class="g-hotR fr">
                <div class="u-are">正在云购</div>
                <div class="g-zzyging">
                    <input name="hidBuyID" type="hidden" id="hidBuyID" value="923284212" />
                    <ul id="UserBuyNewList">


                        <?php foreach($goods_code as $k=>$v){ ?>

                            <li>
                                <span class="fl">
                                    <a href="setMyself?u_id={{$v['u_id']}}" target="_blank" rel="nofollow" title="{{$v['nickname']}}">
                                        <img alt="" src="{{$v['u_img']}}" />
                                        <i class="transparent-png"></i>
                                    </a>
                                </span>
                                <p>
                                    <a href="setMyself?u_id={{$v['u_id']}}" target="_blank"
                                       title="{{$v['nickname']}}" class="blue">
                                        {{$v['nickname']}}
                                    </a>
                                    <br />
                                    <a href="indexShop?goods_id={{$v['goods_id']}}" target="_blank"
                                       title="{{$v['keywords']}} {{$v['goods_name']}}" class="u-ongoing">
                                        {{$v['keywords']}} {{$v['goods_name']}}
                                    </a>
                                </p>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
               <!--  <div class="u-see100"><a href="http://www.1yyg.com/newestBuyRecords.html" target="_blank">查看最新100条记录</a></div> -->
            </div>
        </div>
        <script>
//            last   before
            setInterval(function() {
                var content = $("#UserBuyNewList").children().last().html();
                $("#UserBuyNewList").children().last().remove();
                var new_content = "<li style='display: none;'>"+content+"</li>";
                $("#UserBuyNewList").children().first().before(new_content);
                $("#UserBuyNewList").children().first().show(500);

            }, 2000);
        </script>

        <!--即将揭晓-->
        <div class="g-title m-sort">
            <h3 class="fl"><i></i>即将揭晓</h3>
            <div class="fr">
                <a href="indexClassify?type_id=1" target="_blank" title="手机数码">手机数码</a>
                <a href="indexClassify?type_id=2" target="_blank" title="电脑办公">电脑办公</a>
                <a href="indexClassify?type_id=3" target="_blank" title="家用电器">家用电器</a>
                <a href="indexClassify?type_id=6" target="_blank" title="化妆个护">化妆个护</a>
                <a href="indexClassify?type_id=4" target="_blank" title="钟表首饰">钟表首饰</a>
                <a href="indexClassify?type_id=10" target="_blank" title="其他商品">其他商品</a>
                <a href="indexClassify?type_id=" target="_blank" title="全部">全部</a>
            </div>
        </div>
        <div class="announced-soon clrfix" id="divSoonGoodsList">
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
        </div>
        <div class="check-out"><a href="http://www.1yyg.com/list/m1.html" target="_blank" title="查看所有商品">查看所有商品</a></div>

        <!--新品上架-->
        <div class="g-title">
            <h3 class="fl"><i></i>新品上架</h3>
            <div class="m-other fr">
             <!--    <a href="http://www.1yyg.com/list/m1.html?r=50" target="_blank" title="更多" class="u-more">更多</a> -->
            </div>
        </div>
        <div class="announced-soon clrfix announced-soon-new" id="divNewGoodsList">
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
            <div class="soon-list-con">
                <div class="soon-list">
                    <div class="u-loading"><em></em></div>
                </div>
            </div>
        </div>
        <input type="hidden" value="{{$u_id}}" id="u_id" />
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
                    //热门推荐
                    if (hot < 2 & scrollHeight > 400 & scrollHeight < 500 ) {
                        hot = hot+1;
                        all_fun('is_hot');
                    }
                    //即将揭晓
                    if (immediately < 2 & scrollHeight > 1000 & scrollHeight < 1200 ) {
                        immediately = immediately+1;
                       all_fun("state");
                    }
                    //新品上架
                    if (new_shop < 2 & scrollHeight > 1800 & scrollHeight < 1900 ) {
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
                                str+='<a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="indexShop?goods_id='+msg[i]['goods_id']+'">';
                                str+='<img src='+msg[i]['goods_picture']+' alt='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' name="goodsImg">';
                                str+='</a>';
                                str+='</li>';
                                str+='<li class="g-hot-name">';
                                str+='<a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="indexShop?goods_id='+msg[i]['goods_id']+'">'
                                        +'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;&nbsp;'+msg[i]['goods_name']+'</a></li>';
                                str+='<li class="gray">价值：￥'+msg[i]['goods_price']+'.00</li>';
                                str+='<li class="g-progress">';
                                str+='<dl class="m-progress">';
                                str+='<dd>';
                                str+='<span class="orange fl">';
                                str+='<em>'+msg[i]['participation']+'</em>';
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
                                str+='<a id="btnYgOneBuy" class="u-imm" title="立即1元云购" href="javascript:;">立即1元云购</a>';
                                str+='<a class="u-cart" href="javascript:;" title="加入到购物车" times_id="'+msg[i]['times']+'" goods_id="'+msg[i]['goods_id']+'" codeid="10822028">';
                                str+='<img src="style/images/buy.png" alt="" style="width: 50px;height: 30px;" />';
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
                                str+='<li class="g-soon-pic"><a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="indexShop?goods_id='+msg[i]['goods_id']+'">';
                                str+='<img src='+msg[i]['goods_picture']+' alt='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+'>';
                                str+='</a></li>';
                                str+='<li class="soon-list-name"><a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="indexShop?goods_id='+msg[i]['goods_id']+'">'+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+'</a>';                                str+='</li><li class="gray">';
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
                                str+= '<a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="indexShop?goods_id='+msg[i]['goods_id']+'">';
                                str+= '<img src='+msg[i]['goods_picture']+'  alt='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' name="goodsImg">';
                                str+= '</a></li><li class="soon-list-name">';

                                str+='<a title='+'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;('+msg[i]['brand_desc']+')&nbsp;'+msg[i]['goods_name']+' target="_blank" href="indexShop?goods_id='+msg[i]['goods_id']+'">'
                                        +'(第'+msg[i]['times']+'云)&nbsp;'+msg[i]['brand_name']+'&nbsp;&nbsp;'+msg[i]['goods_name']+'</a></li>';
                                str+='<li class="gray">价值：￥'+msg[i]['goods_price']+'.00</li>';

                                str+= '<li class="g-progress"><dl class="m-progress">';
                                str+= '<dd>';
                                str+= '<span class="orange fl">';
                                str+= '<em>'+msg[i]['participation']+'</em>已参与</span>';
                                str+= '<span class="gray6 fl">';
                                str+= '<em>'+msg[i]['goods_price']+'</em>';
                                str+= '总需人次</span>';
                                str+= '<span class="blue fr">';
                                str+= '<em>'+msg[i]['number']+'</em>剩余</span></dd></dl></li>';
                                str+= '<li><a id="btnYgOneBuy" class="u-now" title="立即1元云购" href="javascript:;">立即1元云购</a>';
                                str+='<a class="u-cart" href="javascript:;" title="加入到购物车" times_id="'+msg[i]['times']+'" goods_id="'+msg[i]['goods_id']+'" codeid="10822028">';
                                str+='<img src="style/images/buy.png" alt="" style="width: 50px;height: 30px;" />';
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
        <script>
            //加入购物车
            $("#loadingPicBlock").delegate(".u-cart","click",function(){
//            $(".u-cart").click(function(){
                var u_id = $("#u_id").val();
                if(u_id != 0){
                    var times_id = $(this).attr("times_id");
                    var goods_id = $(this).attr("goods_id");

                    $.ajax({
                        type: "POST",
                        url: "buycarAdd",
                        data: {times_id:times_id,goods_id:goods_id,u_id:u_id,code_number:1},
                        success: function(msg){
                            if(msg){
//                                alert( "添加购物车成功 ");
                                var res = confirm("添加购物车成功,是否前去购物车");
                                if(res){
                                    window.location="buycarIndex";
                                }
                            }
                        }
                    });
                }else{
                    alert("请先登陆！")
                }

            });

            //直接到结算页面
//            $(".u-now").click(function(){
            $("#loadingPicBlock").delegate(".u-imm","click",function(){
                var u_id = $("#u_id").val();
                if(u_id != 0) {
                    var times_id = $(this).next().attr("times_id");
                    var goods_id = $(this).next().attr("goods_id");
                    $.ajax({
                        type: "POST",
                        url: "buycarAdd",
                        data: {times_id:times_id,goods_id:goods_id,u_id:u_id,code_number:1},
                        success: function(msg){
//                            alert(msg)
                            if(msg){
                                window.location="buycaraccount?id_all="+msg;
                            }
                        }
                    });
                }else{
                    alert("请先登陆！")
                }
            });
            $("#loadingPicBlock").delegate(".u-now","click",function(){
                var u_id = $("#u_id").val();
                if(u_id != 0) {
                    var times_id = $(this).next().attr("times_id");
                    var goods_id = $(this).next().attr("goods_id");
                    $.ajax({
                        type: "POST",
                        url: "buycarAdd",
                        data: {times_id:times_id,goods_id:goods_id,u_id:u_id,code_number:1},
                        success: function(msg){
//                            alert(msg)
                            if(msg){
                                window.location="buycaraccount?id_all="+msg;
                            }
                        }
                    });
                }else{
                    alert("请先登陆！")
                }
            });
            $("#btnGoPay").click(function(){
                var id = $("#buy").val();
                if(id != ""){
                    $("#buycar").submit();
                }
            });
        </script>
    </div>

    <!--底部-->
    <!--底部-->
    @include('public.footer')
</div>
<script language="javascript" type="text/javascript">
    var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
    function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
    Base.getScript('style/js/Bottom.js?v=' + GetVerNum());
</script>
<div style="display: none;">
    <script type="text/javascript" language="JavaScript" src="http://s22.cnzz.com/stat.php?id=3362429&web_id=3362429"  async="async"></script>
</div>

<link type="text/css" rel="stylesheet" href="https://skin.1yyg.net/CSS/pageDialog.css?v=161208" />
<script language="javascript" type="text/javascript" src="https://skin.1yyg.net/js/pageDialog.js?v=161208"></script>
<div class="pageDialogBG" id="pageDialogBG"></div>
<div class="pageDialogBorder" id="pageDialogBorder"></div>
<div class="pageDialog" id="pageDialog">
    <div class="pageDialogClose" id="pageDialogClose" title="关闭"></div>
    <div class="pageDialogMain" id="pageDialogMain"> </div>
</div>

</div>
</body>
</html>
