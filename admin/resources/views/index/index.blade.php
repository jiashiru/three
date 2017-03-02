<!DOCTYPE html><html><head>    <meta name="csrf-token" content="{{ csrf_token() }}">    <base href="{{ asset('./')}}">    <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="renderer" content="webkit">    <title> hAdmin- 主页</title>    <meta name="keywords" content="">    <meta name="description" content="">    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">    <link href="css/font-awesome.min.css?v=4.4.0" rel="stylesheet">    <link href="css/animate.css" rel="stylesheet">    <link href="css/style.css?v=4.1.0" rel="stylesheet">    <style>        #tgBigox{            position: relative;            width:300px; margin:0 auto; height:30px; line-height:30px; padding-right:2px; overflow:hidden;        }        #tgGoox{            position: absolute;            height:30px; line-height:30px;            top: 0px;            left:0;        }    </style></head><body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden"><div id="wrapper">    <!--左侧导航开始-->    <nav class="navbar-default navbar-static-side" role="navigation">        <div class="nav-close"><i class="fa fa-times-circle"></i>        </div>        <div class="sidebar-collapse">            <ul class="nav" id="side-menu">                <li class="nav-header">                    <div class="dropdown profile-element">                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">                                <span class="clear">                                    <span class="block m-t-xs" style="font-size:20px;">                                        <i class="fa fa-area-chart"></i>                                        <strong class="font-bold">hAdmin</strong>                                    </span>                                </span>                        </a>                    </div>                    <div class="logo-element">hAdmin                    </div>                </li>                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">                    <span class="ng-scope">分类</span>                </li>                <li>                    <a class="J_menuItem" href="{{ url('indexV1') }}">                        <i class="fa fa-home"></i>                        <span class="nav-label">主页</span>                    </a>                </li>                <li>                    <a href="#">                        <i class="fa fa fa-bar-chart-o"></i>                        <span class="nav-label">商品管理</span>                        <span class="fa arrow"></span>                    </a>                    <ul class="nav nav-second-level">                        <li>                            <a class="J_menuItem" href="{{ url('goodsShow') }}">商品列表</a>                        </li>                        <li>                            <a class="J_menuItem" href="{{ url('goodsAdd') }}">添加新商品</a>                        </li>                        <li>                            <a class="J_menuItem" href="{{ url('typeShow') }}">商品分类</a>                        </li>                        <li>                            <a class="J_menuItem" href="{{ url('categoryShow') }}">商品类型</a>                        </li>                        <li>                            <a class="J_menuItem" href="{{ url('brandShow') }}">商品品牌</a>                        </li>                    </ul>                </li>                <li class="line dk"></li>                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">                    <span class="ng-scope">分类</span>                </li>                <li>                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">信箱 </span><span class="label label-warning pull-right">16</span></a>                    <ul class="nav nav-second-level">                        <li><a class="J_menuItem" href="mailbox.html">收件箱</a>                        </li>                        <li><a class="J_menuItem" href="mail_detail.html">查看邮件</a>                        </li>                        <li><a class="J_menuItem" href="mail_compose.html">写信</a>                        </li>                    </ul>                </li>                <li>                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">RBAC</span><span class="fa arrow"></span></a>                    <ul class="nav nav-second-level">                        <li><a class="J_menuItem" href="{{ url('adminShow') }}">管理员列表</a>                        </li>                        <li><a class="J_menuItem" href="{{ url('adminAdd') }}">管理员添加</a>                        </li>                        <li><a class="J_menuItem" href="{{ url('roleShow') }}">角色列表</a>                        </li>                        <li><a class="J_menuItem" href="{{ url('roleAdd') }}">角色添加</a>                        </li>                        <li><a class="J_menuItem" href="{{ url('nodeShow') }}">节点列表</a>                        </li>                        <li><a class="J_menuItem" href="{{ url('nodeAdd') }}">节点添加</a>                        </li>                    </ul>                </li>                <li>                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">系统设置</span><span class="fa arrow"></span></a>                    <ul class="nav nav-second-level">                        <li><a class="J_menuItem" href="{{ url('carouselCarousel') }}">前台轮播管理</a>                        </li>                        <li><a class="J_menuItem" href="profile.html">个人资料</a>                        </li>                    </ul>                </li>                <li class="line dk"></li>                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">                    <span class="ng-scope">分类</span>                </li>                <li>                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI元素</span><span class="fa arrow"></span></a>                    <ul class="nav nav-second-level">                        <li><a class="J_menuItem" href="typography.html">排版</a>                        </li>                        <li>                            <a href="#">字体图标 <span class="fa arrow"></span></a>                            <ul class="nav nav-third-level">                                <li>                                    <a class="J_menuItem" href="fontawesome.html">Font Awesome</a>                                </li>                                <li>                                    <a class="J_menuItem" href="glyphicons.html">Glyphicon</a>                                </li>                                <li>                                    <a class="J_menuItem" href="iconfont.html">阿里巴巴矢量图标库</a>                                </li>                            </ul>                        </li>                        <li>                            <a href="#">拖动排序 <span class="fa arrow"></span></a>                            <ul class="nav nav-third-level">                                <li><a class="J_menuItem" href="draggable_panels.html">拖动面板</a>                                </li>                                <li><a class="J_menuItem" href="agile_board.html">任务清单</a>                                </li>                            </ul>                        </li>                        <li><a class="J_menuItem" href="buttons.html">按钮</a>                        </li>                        <li><a class="J_menuItem" href="tabs_panels.html">选项卡 &amp; 面板</a>                        </li>                        <li><a class="J_menuItem" href="notifications.html">通知 &amp; 提示</a>                        </li>                        <li><a class="J_menuItem" href="badges_labels.html">徽章，标签，进度条</a>                        </li>                        <li>                            <a class="J_menuItem" href="grid_options.html">栅格</a>                        </li>                        <li><a class="J_menuItem" href="plyr.html">视频、音频</a>                        </li>                        <li>                            <a href="#">弹框插件 <span class="fa arrow"></span></a>                            <ul class="nav nav-third-level">                                <li><a class="J_menuItem" href="layer.html">Web弹层组件layer</a>                                </li>                                <li><a class="J_menuItem" href="modal_window.html">模态窗口</a>                                </li>                                <li><a class="J_menuItem" href="sweetalert.html">SweetAlert</a>                                </li>                            </ul>                        </li>                        <li>                            <a href="#">树形视图 <span class="fa arrow"></span></a>                            <ul class="nav nav-third-level">                                <li><a class="J_menuItem" href="jstree.html">jsTree</a>                                </li>                                <li><a class="J_menuItem" href="tree_view.html">Bootstrap Tree View</a>                                </li>                                <li><a class="J_menuItem" href="nestable_list.html">nestable</a>                                </li>                            </ul>                        </li>                        <li><a class="J_menuItem" href="toastr_notifications.html">Toastr通知</a>                        </li>                        <li><a class="J_menuItem" href="diff.html">文本对比</a>                        </li>                        <li><a class="J_menuItem" href="spinners.html">加载动画</a>                        </li>                        <li><a class="J_menuItem" href="widgets.html">小部件</a>                        </li>                    </ul>                </li>                <li>                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">导航管理</span><span class="fa arrow"></span></a>                    <ul class="nav nav-second-level">                        <li><a class="J_menuItem" href="<?=asset('navShow')?>">导航列表</a>                        </li>                        <li><a class="J_menuItem" href="<?=asset('navAdd')?>">导航添加</a>                        </li>                        <li><a class="J_menuItem" href="table_bootstrap.html">Bootstrap Table                                <span class="label label-danger pull-right">推荐</span></a>                        </li>                    </ul>                </li>                <li class="line dk"></li>                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">                    <span class="ng-scope">分类</span>                </li>                <li>                    <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">相册</span><span class="fa arrow"></span></a>                    <ul class="nav nav-second-level">                        <li><a class="J_menuItem" href="basic_gallery.html">基本图库</a>                        </li>                        <li><a class="J_menuItem" href="carousel.html">图片切换</a>                        </li>                        <li><a class="J_menuItem" href="blueimp.html">Blueimp相册</a>                        </li>                    </ul>                </li>                <li>                    <a class="J_menuItem" href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS动画</span></a>                </li>                <li>                    <a href="#"><i class="fa fa-cutlery"></i> <span class="nav-label">工具 </span><span class="fa arrow"></span></a>                    <ul class="nav nav-second-level">                        <li><a class="J_menuItem" href="form_builder.html">表单构建器</a>                        </li>                    </ul>                </li>            </ul>        </div>    </nav>    <!--左侧导航结束-->    <!--右侧部分开始-->    <div id="page-wrapper" class="gray-bg dashbard-1">        <div class="row border-bottom">            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>                    <form role="search" class="navbar-form-custom" method="post" action="search_results.html">                        <div class="form-group">                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">                        </div>                    </form>                </div>                <ul class="nav navbar-top-links navbar-right">                    <li class="dropdown">                        <div id="tgBigox">                            <div id="tgGoox">                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="javascript:void(0)" style="line-height:48px">欢迎管理员<font color="red">{{ $admin_name }}</font></a>                            </div>                        </div>                    </li>                    <li class="">                        <a class="dropdown-toggle count-info" href="{{ url('loginLogout') }}">                            退出                        </a>                    </li>                </ul>            </nav>        </div>        <div class="row J_mainContent" id="content-main">            <iframe id="J_iframe" width="100%" height="100%" src="{{url('indexV1')}}?v=4.0" frameborder="0" data-id="{{url('indexV1')}}" seamless></iframe>        </div>    </div>    <!--右侧部分结束--></div><!-- 全局js --><script src="js/jquery.min.js?v=2.1.4"></script><script src="js/bootstrap.min.js?v=3.3.6"></script><script src="js/plugins/metisMenu/jquery.metisMenu.js"></script><script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script><script src="js/plugins/layer/layer.min.js"></script><script>    $.ajaxSetup({        headers: {            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')        }    });</script><script type="text/javascript">    var cars = $("#tgGoox").width();    var i =0;    function start(){        i--;        if(i<=-cars){            i=2*cars;            document.getElementById('tgGoox').style.right =-cars+'px';        }else{            document.getElementById('tgGoox').style.left =i+'px';        }        setTimeout(start,10);    }    onload=function(){setTimeout(start,1000)};</script><!-- 自定义js --><script src="js/hAdmin.js?v=4.1.0"></script><script type="text/javascript" src="js/index.js"></script><!-- 第三方插件 --><script src="js/plugins/pace/pace.min.js"></script><div style="text-align:center;">    <p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p></div></body></html>