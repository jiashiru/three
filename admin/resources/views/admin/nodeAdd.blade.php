<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>导航添加</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <?php
    use Illuminate\Support\Facades\URL;
    ?>
    <base href="<?php  echo  URl::asset("admin")?>/">
    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <center>
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>导航<small>添加</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.blade.php#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="form_basic.blade.php#">选项1</a>
                                </li>
                                <li><a href="form_basic.blade.php#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <form role="form" action="<?=asset('navDoAdd')?>" method="post" >
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>导航名称</label>
                                        <input type="text" placeholder="请输入导航名称" class="form-control" name="name" id="name" value="{{old('name')}}">
                                        <span>{{$errors->first('name')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <label>导航描述</label>
                                        <input type="text" placeholder="请输入导航描述" class="form-control" name="desc" id="desc" value="{{old('desc')}}">
                                        <span>{{$errors->first('name')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <label>导航地址</label>
                                        <input type="text" placeholder="请输入导航地址" class="form-control" name="url" id="url" {{old('url')}}>
                                        <span>{{$errors->first('name')}}</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" id="sub"><strong>添  加</strong>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>

<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>

<!-- 自定义js -->
<script src="js/content.js?v=1.0.0"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green'
        });
    });

    $("#name").on("blur",function(){
        var name = $(this).val();
        if(name == ""){
            alert("用户名不能为空")
        }
    });

    $("#url").on("blur",function(){
        var name = $(this).val();
        if(name == ""){
            alert("地址不能为空")
        }
    });

    $("#desc").on("blur",function(){
        var name = $(this).val();
        if(name == ""){
            alert("描述不能为空")
        }
    });




</script>




</body>

</html>
