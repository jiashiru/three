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
                                            <a href='indexClassify?type_id={{$v['type_id']}}' target='_blank' class='lvl1 none'>
                                                <?php echo $v['type_name'] ?><b class='icons-sort'></b>
                                            </a>
                                        </span>
                                    </p>
                                    <p class='lvl2'>
                                        <?php foreach($v['category'] as $key=>$val){?>
                                                
                                            <span class='lvl2'>
                                                <a href="indexClassify?type_id={{$v['type_id']}}" cate_id="<?php echo $val['cate_id'] ?>" target='_blank' class='lvl2 none'>
                                                    <?php echo $val['cate_name'] ?><b class='icons-sort'></b>
                                                </a>
                                            </span>
                                        <?php } ?>

                                    </p>
                                </div>
                            </div>
                        </li>


                    <?php } ?>

                </ul>
                <!--menuend-->
            </div>
        </div>
        <div class="nav-main fl">
            <ul>
                <li class="f-nav-home"><a href="">首页</a></li>
                <li class="f-nav-lottery"><a href="indexNews">最新揭晓</a></li>
                <li class="f-nav-limit"><span class="nav-new transparent-png"></span><a href="indexLimit">限购专区</a></li>
         
                <li class="f-nav-group"><a href="http://group.1yyg.com/">云购圈</a></li>
                <li class="f-nav-guide"><a href="http://help.1yyg.com/info/newbie/index.html">新手指南</a></li>
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