<div class="g-nav">
    <div class="w1190">
        <div id="divGoodsSort" class="g-view-con m-menu fl">
            <div class="m-menu-all">
                <h3><a href="http://www.1yyg.com/list/m1.html">全部商品分类</a><em class="icons-sort"></em></h3>
            </div>
            <div id="divSortList" class="m-all-sort">
                <!--menustart-->
                <ul class='m-all-menu'>

                    <?php foreach($goods_type as $k=>$v){ ?>

                        <li>
                            <div class='z-fg-line'>
                                <div class='z-margin-right'>
                                    <p class='lvl1'>
                                        <span class='lvl1'>
                                            <i>/</i>
                                            <a href='http://www.1yyg.com/list/n100.html' target='_blank' class='lvl1 none'>
                                                <?php echo $v['type_name'] ?><b class='icons-sort'></b>
                                            </a>
                                        </span>
                                    </p>
                                    <p class='lvl2'>
                                        <span class='lvl2'>
                                            <a href='http://www.1yyg.com/list/n101.html' target='_blank' class='lvl2 none'>手机<b class='icons-sort'></b></a>
                                        </span>
                                        <span class='lvl2'>
                                            <a href='http://www.1yyg.com/list/n102.html' target='_blank' class='lvl2 none'>数码<b class='icons-sort'></b></a>
                                        </span>
                                        <span class='lvl2'>
                                            <a href='http://www.1yyg.com/list/n103.html' target='_blank' class='lvl2 none'>影音<b class='icons-sort'></b></a>
                                        </span>
                                        <span class='lvl2'>
                                            <a href='http://www.1yyg.com/list/n104.html' target='_blank' class='lvl2 none'>耳机<b class='icons-sort'></b></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </li>


                    <?php } ?>

                    <li>
                        <div class='z-fg-line'><div class='z-margin-right'><p class='lvl1'><span class='lvl1'><i>/</i>
                                        <a href='http://www.1yyg.com/list/n105.html' target='_blank' class='lvl1 none'>电脑办公
                                            <b class='icons-sort'></b></a></span></p><p class='lvl2'><span class='lvl2'><a href='http://www.
                                            1yyg.com/list/n106.html' target='_blank' class='lvl2 none'>平板电脑<b class='icons-sort'>

                                            </b></a></span><span class='lvl2'><a href='http://www.1yyg.com/list/n107.html' target='_blank' cl
                                                                                 ass='lvl2 none'>笔记本<b class='icons-sort'></b></a></span>
                                    <span class='lvl2'><a href='http://www.1yyg.com/list/n108.html' target='_blank' class='lvl2 none'>
                                            配件<b class='icons-sort'></b></a></span></p></div></div></li>

                </ul>
                <!--menuend-->
            </div>
        </div>
        <div class="nav-main fl">
            <ul>
                <li class="f-nav-home"><a href="http://www.1yyg.com/">首页</a></li>
                <li class="f-nav-lottery"><a href="http://www.1yyg.com/lottery/m1.html">最新揭晓</a></li>
                <li class="f-nav-limit"><span class="nav-new transparent-png"></span><a href="http://www.1yyg.com/limitBuy/m1.html">限购专区</a></li>
                <li class="f-nav-share"><a href="http://post.1yyg.com/">晒单分享</a></li>
                <li class="f-nav-group"><a href="http://group.1yyg.com/">云购圈</a></li>
                <li class="f-nav-guide"><a href="http://help.1yyg.com/info/newbie/index.html">新手指南</a></li>
            </ul>
        </div>
        <div id="divHCart" class="nav-cart fr">
            <div class="nav-cart-btn">
                <a href="http://cart.1yyg.com/CartList.do" target="_blank"><i class="f-cart-icon"></i>购物车<span id="spHCart"></span></a>
            </div>
            <div class="nav-cart-con">
                <div class="m-loading-2014"><em></em></div>
                <div class="nav-car-cartEmpty"><i></i>您的购物车为空 !</div>
                <div class="nav-cart-select"></div>
                <div class="nav-cart-pay"></div>
            </div>
        </div>
    </div>
</div>