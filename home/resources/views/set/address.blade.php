

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理收货地址_1元云购</title>
    <link rel="stylesheet" type="text/css" href="style/css/set/header.css?v=170215" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://skin.1yyg.net/js/iepng.js"></script>
    <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
    </script>
    <![endif]-->
    <link href="style/css/set/base.css?date=20150716" rel="stylesheet" type="text/css" />
    <link href="style/css/set/member_x.css?v=161209" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="style/js/JQuery1.12.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="style/js/address/Address.js"></script>
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

                <li><a href="setInfo" title="个人资料">个人资料</a><b></b></li>
                <li><a href="header" title="修改头像">修改头像</a><b></b></li>
                <li class="curr"><a href="address" title="收货地址">收货地址</a><b></b></li>
                <li><a href="security" title="账户安全">账户安全</a><b></b></li>

            </ul>
        </div>

        <div class="sidebar_main clrfix fr">
            <div class="g-purchase-title">
                <span class="gray3">收货地址</span>
            </div>
            <div class="z-content">
                <div class="add-wrap">
                    <div class="data-menu">
                        <span class="u-name">收货人</span>
                        <span class="u-tel">手机/电话号码</span>
                        <span class="u-address">详细地址</span>
                        <span class="u-code">邮政编码</span>
                        <span class="u-option">操作</span>
                    </div>
                    <ul id="ul_addresslist" class="add-list">
                        @foreach($address as $data)
                        <li>
                            <span class="u-name">{{$data['consignee']}}</span>
                            <span class="u-tel">{{$data['tel']}}</span>
                            <span class="u-address">{{$data['address']}} {{$data['detail_address']}}</span>
                            <span class="u-code">{{$data['postcode']}}</span>
                            <span class="u-option">
                            <a id="4079597" class="op-tail" name="update" href="javascript:;">修改</a>
                            </span>
                            <span class="u-set">
                                @if($data['status']==1)
                            <b class="is-normal">默认地址</b>
                                @endif
                            </span>
                        </li>
                        @endforeach
                        <p class="add-tips">最多可添加4条收货地址</p>
                    </ul>
                </div>

                <form id="form" method="post" action="addressAdd">

                    <div id="div_form" class="new-add-wrap" style="">
                    <div class="shi-address-box">
                    <h2 class="gray3">添加收货地址</h2>
                    <ul>
                    <li>
                    <label>
                    收<i>货</i>人：
                    </label>
                    <input id="consignee" type="text" name="consignee" maxlength="5">
                    <em class="f-tran">*<span id="span_con"></span></em>
                    <p class="orange"></p>
                    <cite class="gray9"></cite>
                    </li>
                    <li>
                    <label>手机号码：</label>
                    <input id="mobile" type="text" name="tel" maxlength="11">
                    <em class="f-tran">*<span id="span_mobile"></span></em>
                    <p class="orange">
                    <b class="u-personal"></b>
                    </p>
                    </li>
                        <li>
                            <label>所在地区：</label>
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
                    <li class="z-address">
                    <label>详细地址：</label>
                    <input id="address" type="text" name="detail_address" maxlength="30">
                    <em class="f-tran">*<span id=span_add></span></em>
                    <p class="orange"></p>
                    <cite class="gray9">无需重复填写所在地区</cite>
                    </li>
                    <li>
                    <label>邮政编码：</label>
                    <input id="postCode" type="text" name="postcode" maxlength="6">
                    <p class="orange"></p>
                    </li>
                    <li>
                    <label>固定电话：</label>
                    <input id="phone" type="text" name="phone" maxlength="20">
                    <p class="orange"></p>
                    </li>
                    <li class="set-default z-click">
                    <a id="a_default" class="gray9" href="javascript:;">
                    <i>
                    <s class="u-personal"></s>
                    </i>
                    设为默认地址
                    </a>
                    </li>
                    <li class="z-save-btn">
                        <input  type="submit"  value="保存" id="sub" style="background-color: #0d8ddb;width: 100px; height: 20px; color: white;" />
                        <input  type="submit"  value="取消" id="reset" style="background-color: white;width: 100px; height: 20px; color: #000000;" />

                    {{--<a id="btnCancel" class="close" href="javascript:;">取消</a>--}}
                    </li>
                    </ul>
                    </div>
                    </div>

                </form>



            </div>
        </div>
    </div>
    <script>
        $(function () {
           $("#form").delegate("#sub","click", function () {
                var flag = 1;
               //获取收货地址，手机号，详细地址
               var consignee = $("#consignee").val();
               var mobile = $("#mobile").val();
               var address = $("#address").val();

               if(consignee==""){
                   $('#span_con').html('收货人不能为空');
                   flag = 0;
               }else{
                   $('#span_con').html('');
                   flag = 1;
               }
               if(mobile==""){
                   $("#span_mobile").html('手机号不能为空');
                   flag = 0;
               }else {
                   $("#span_mobile").html('');
                   flag = 1;
               }
               if(address==""){
                   $("#sapn_add").html('详细地址不能为空');
                   flag = 0;
               }else{
                   $("#sapn_add").html('');
                   flag = 1;
               }

               if(flag==1){
                   return true;
               }else{
                   return false;
               }


           });
        });
    </script>
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










