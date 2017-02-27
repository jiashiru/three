<!DOCTYPE html><html><head>    <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title> - 基础表格</title>    <meta name="keywords" content="">    <meta name="description" content="">    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">    <link href="css/animate.css" rel="stylesheet">    <link href="css/style.css?v=4.1.0" rel="stylesheet"></head><body class="gray-bg"><div class="wrapper wrapper-content animated fadeInRight">    <div class="row">        <div class="col-sm-12">            <div class="ibox float-e-margins">                <div class="btn">                    <h3><a href="{{ url('adminAdd') }}">管理员添加</a></h3>                </div>                <div class="ibox-title">                    <h5>管理员列表</h5>                </div>                <div class="ibox-content">                    <table class="table table-striped">                        <thead>                        <tr>                            <th>用户名</th>                            <th>角色</th>                            <th>头像</th>                            <th>操作</th>                        </tr>                        </thead>                        <tbody>                        @foreach($adminList as $val)                        <tr>                            <td>{{ $val['admin_name'] }}</td>                            <td>                                @foreach($val['roles'] as $v)                                    {{ $v['role_name'] }}                                @endforeach                            </td>                            <td>张三</td>                            <td > <span class="text-navy"><i class="glyphicon glyphicon-edit"></i> <a href="{{ url('adminEdit').'?id='.$val['admin_id']}}">编辑</a></span>                             <i class="glyphicon glyphicon-trash"></i> <a href="{{ url('adminDelete').'?id='.$val['admin_id']}}" onclick="if (confirm('确实要删除吗？') == false) return false">删除</a></td>                        </tr>                            @endforeach                        </tbody>                    </table>                </div>            </div>        </div>    </div></div><!-- 全局js --><script src="js/jquery.min.js?v=2.1.4"></script><script src="js/bootstrap.min.js?v=3.3.6"></script><!-- Peity --><script src="js/plugins/peity/jquery.peity.min.js"></script><!-- 自定义js --><script src="js/content.js?v=1.0.0"></script><!-- iCheck --><script src="js/plugins/iCheck/icheck.min.js"></script><!-- Peity --><script src="js/demo/peity-demo.js"></script><script>    $(document).ready(function () {        $('.i-checks').iCheck({            checkboxClass: 'icheckbox_square-green',            radioClass: 'iradio_square-green',        });    });</script></body></html>