<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>导航列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?php
    use Illuminate\Support\Facades\URL;
    ?>
    <base href="<?php  echo  URl::asset("admin")?>/">
    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>基本 <small>分类，查找</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_data_tables.html#">选项1</a>
                            </li>
                            <li><a href="table_data_tables.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <a href="<?=URL::asset('navAdd')?>"><input type="button" value="添加导航"/></a>
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                          <th>导航id</th>
                          <th>导航名称</th>
                          <th>导航描述</th>
                          <th>导航地址</th>
                          <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($list as $k=>$v){  ?>
                        <tr class=‘gradeX'>
                            <td class="spss"><a href=""><?=$v["nav_id"]?></a></td>
                            <td class="spss"><a href=""><?=$v["nav_name"]?></a></td>
                            <td class="spss"><a href=""><?=$v["nav_desc"]?></a></td>
                            <td class="spss"><a href=""><?=$v["nav_url"]?></a></td>
                            <td class="spss"><a class="dels" alt="<?=$v['nav_id']?>" >删除</a></td>
                        </tr>
                        <?php  }
                        ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>



<script src="js/plugins/jeditable/jquery.jeditable.js"></script>

<!-- Data Tables -->
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- 自定义js -->
<script src="js/content.js?v=1.0.0"></script>


<!-- Page-Level Scripts -->
<script>
    $(".dels").on("click",function(){
        var a = $(this);
        var tr =  a.parent().parent();
        var id = $(this).attr("alt");
        $.get("<?=asset('navDel')?>",{ id: id },
        function(data){
            if(data){
                alert("删除成功");
                tr.remove();
            }else{
                alert("删除失败");
            }
        });
    })
</script>



</body>

</html>
