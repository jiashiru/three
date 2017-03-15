<div class="g-nav">
    <div class="w1190">
        <div id="divGoodsSort" class="g-view-con m-menu fl">
            <div class="m-menu-all">
                <h3><a href="http://www.1yyg.com/list/m1.html">全部商品分类</a><em class="icons-sort"></em></h3>
            </div>
            <div id="divSortList" class="m-all-sort">
                <!--menustart-->

                <ul class='m-all-menu'>
                    <?php foreach($goods_type as $k=>$v) {?>

                    <li>
                        <div class='z-fg-line'>
                            <div class='z-margin-right'>
                                <p class='lvl1'>
                                    <span class='lvl1'><i>/</i>
                                        <a href='indexClassify?type_id={{$v['type_id']}}' target='_blank' class='lvl1 none'>
                                            {{$v['type_name']}}<b class='icons-sort'></b>
                                        </a>
                                    </span>
                                </p>
                                <p class='lvl2'>

                                    <?php foreach($v['category'] as $key=>$val){ ?>

                                        <span class='lvl2'>
                                            <a href='indexClassify?type_id={{$v['type_id']}}' target='_blank' class='lvl2 none'>
                                                {{$val['cate_name']}}<b class='icons-sort'></b>
                                            </a>
                                        </span>
                                    <?php } ?>

                                </p>
                            </div>
                        </div>
                    </li>
                        <?php } ?>


                </ul><!--menuend-->
            </div>
        </div>
        <div class="nav-main fl">
            <ul>
                <?php foreach($nav as $k=>$v) { ?>
                <li class="f-nav-home"><a href="{{$v['nav_url']}}">{{$v['nav_name']}}</a></li>
                <?php } ?>
            </ul>
        </div>
        <div id="divHCart" class="nav-cart fr">
            <div class="nav-cart-btn">
                <a href="buycarIndex" target="_blank"><i class="f-cart-icon"></i>购物车<span id="spHCart"></span></a>
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