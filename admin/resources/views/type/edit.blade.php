<!DOCTYPE html><html><head>    <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title> - 基本表单</title>    <meta name="keywords" content="">    <meta name="description" content="">    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">    <link href="css/animate.css" rel="stylesheet">    <link href="css/style.css?v=4.1.0" rel="stylesheet"></head><body class="gray-bg"><div class="wrapper wrapper-content animated fadeInRight">    <div class="row">        <div class="col-sm-12">            <div class="btn" style="float:right">                <h3><a href="{{ url('typeShow') }}">分类列表</a></h3>            </div>            <div class="ibox float-e-margins">                <div class="ibox-title">                    <h5>分类修改</h5>                </div>                <div class="ibox-content">                    <form method="post" class="form-horizontal" action="{{ url('typeEdit') }}" enctype="multipart/form-data">                        <div class="form-group">                            <label class="col-sm-2 control-label">分类名称</label>                            <div class="col-sm-10">                                <input type="text" class="form-control" name="type_name" value="{{ $typeList['type_name'] }}">                            </div>                        </div>                        <div class="hr-line-dashed"></div>                        <div class="form-group">                            <div class="col-sm-4 col-sm-offset-2">                                <input type="hidden" name="type_id" value="{{ $typeList['type_id'] }}">                                <button class="btn btn-primary" type="submit">保存内容</button>                                <button class="btn btn-white" type="reset">重置</button>                            </div>                        </div>                        {{ csrf_field() }}                    </form>                </div>            </div>        </div>    </div></div><!-- 全局js --><script src="js/jquery.min.js?v=2.1.4"></script><script src="js/bootstrap.min.js?v=3.3.6"></script><!-- 自定义js --><script src="js/content.js?v=1.0.0"></script><!-- iCheck --><script src="js/plugins/iCheck/icheck.min.js"></script><script>    $(document).ready(function () {        $('.i-checks').iCheck({            checkboxClass: 'icheckbox_square-green',            radioClass: 'iradio_square-green',        });    });</script></body></html>