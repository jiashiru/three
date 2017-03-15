<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>商品相册添加</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>
<style>
    #exec_target{display:none;width:0;height:0;}
    #feedback{width:1200px;margin:0 auto;}
    #feedback img{float:left;width:300px;height:300px;}
</style>
<body class="gray-bg">

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="btn" style="float:right">
                    <h3 ><a href="{{ url('goodsAdd') }}">商品添加</a></h3>
                </div>

                <div class="ibox-title">
                    <h5>商品列表</h5>
                </div>
                <div class="ibox-content">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                           <td>商品名称</td>
                           <td>{{$goods['goods_name']}}</td>
                        </tr>
                        <tr>
                            <td>商品描述</td>
                            <td>{{$goods['goods_desc']}}</td>
                        </tr>
                        <tr>
                            <td>商品价格</td>
                            <td>{{$goods['goods_price']}}</td>
                        </tr>
                    </table>
                    <tr>
                        <td>添加相册</td>
                        <td> <form id="submit_form" method="post" action="<?=asset('goodsUploads')?>" target="exec_target" enctype="multipart/form-data">
                                <input type="file" name="upload_file" id="upload_file">        <!-- 添加上传文件 -->
                                <input type="hidden" value="{{$goods['goods_id']}}" name="g_id">
                                {{csrf_field()}}
                            </form></td>
                        <iframe id="exec_target" name="exec_target"></iframe>    <!-- 提交表单处理iframe框架 -->
                        <div id="feedback"></div>    <!-- 响应返回数据容器 -->
                    </tr>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>



<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>

<!-- 自定义js -->
<script src="js/content.js?v=1.0.0"></script>


<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- Peity -->
{{--<script src="js/demo/peity-demo.js"></script>--}}

<script>
    $(document).ready(function(){
        //选择文件成功则提交表单
        $("#upload_file").change(function(){
            if($("#upload_file").val() != '') $("#submit_form").submit();
        });
        //iframe加载响应，初始页面时也有一次，此时data为null。
        $("#exec_target").load(function(){
            var data = $(window.frames['exec_target'].document.body).find("textarea").html();
            //若iframe携带返回数据，则显示在feedback中
            if(data != null){
                $("#feedback").append(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
                $("#upload_file").val('');
            }
        });
    });
</script>




</body>

</html>
