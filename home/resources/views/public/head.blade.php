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
                    <a id="collect" href="javascript:;" title="收藏本网页">收藏本网页</a>
                </div>
                <script>
                    $("#collect").click(function(){
                        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl + D进行添加！");
                    });
                </script>
            </li>
            <li class="f-gap" style="display: none;"><s></s></li>
            <li class="f-gap" style="display: none;"><s></s></li>
            <li id="liCCTV" style="display: none;">
                <a href="http://search.cctv.com/search.php?qtext=1%E5%85%83%E4%BA%91%E8%B4%AD&type=web" target="_blank" class="cctv-icon" title="央视网">
                    <img src="style/images/cctv-icon.jpg" alt="央视网" width="80" height="35" class="cctv-icon-img">
                    <span class="cctv-icon-txt">广告合作伙伴</span>
                </a>
            </li>
        </ul>
        <ul id="ulTopRight" class="fr">

            @if(isset($_SESSION['u_id']))
            <li>
                <div class="u-menu-hd u-menu-login">
                    <a class="blue" title="{{$_SESSION['nickname']}}" href="setInfo">
                        <span class="fl">
                            @if(empty($_SESSION['picture']))
                            <img src="{{asset('style/images/00000000000000000.jpg')}}">
                            @else
                            <img src="{{asset('uploads/uploads_small/'.$_SESSION['picture'])}}">
                            @endif
                            <s class="transparent-png"></s>
                        </span>
                        {{$_SESSION['nickname']}}</a>
                    <a title="退出" href="{{url('quit')}}">[退出]</a>
                </div>
            </li>
            @else

            <li class="u-menu-hd"><div class="u-menu-hd"><a href="login">登录</a></div></li>
            <li class="u-menu-hd"><div class="u-menu-hd"><a href="register">注册</a></div></li>
            @endif

            <li id="liMember" class="u-arr-1yyg" style="">
                <div class="u-menu-hd">
                    <a href="myIndex" title="我的1元云购">我的1元云购</a>
                    <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                </div>
                <div class="u-select">
                    <span><a href="myGoods" title="云购记录">云购记录</a></span>
                    <span><a href="getGoods" title="获得的商品">获得的商品</a></span>
                    <span><a href="setInfo" title="个人设置">个人设置</a></span>
                </div>
            </li>
            <li class="f-gap" style="display: none;"><s></s></li>
            <li id="liHome" style="display: none;">
                <div class="u-menu-hd">
                    <a href="myIndex" title="我的1元云购">我的1元云购</a>
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
                        <img src="style/images/app-qrcode.jpg" alt="点击1元云购App">
                    </a>
                    <i class="white-sub"><i></i></i>
                </div>
            </li>
            <li class="f-gap"><s></s></li>
            <li>
                <div class="u-menu-hd">
                    <a href="userRechange" title="充值">充值</a>
                </div>
            </li>
            <li class="f-gap"><s></s></li>
            {{--<li>--}}
                {{--<div class="u-menu-hd">--}}
                    {{--<a href="http://help.1yyg.com/" title="帮助">帮助</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="f-gap"><s></s></li>--}}
            {{--<li>--}}
                {{--<div class="u-menu-hd">--}}
                    {{--<a href="http://help.1yyg.com/htm-contactus.html" title="投诉">投诉</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            <li class="f-gap"><s></s></li>
            <li class="f-zxkf">
                <div class="u-menu-hd">
                    <a id="" href="javascript:;" title="在线客服" class="u-service-off u-service"><i></i>在线客服</a>
                    {{--<a id="btnTopQQ" href="javascript:;" title="在线客服" class="u-service-off u-service"><i></i>在线客服</a>--}}
                </div>
            </li>
        </ul>
    </div>
</div>

