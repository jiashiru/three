<!DOCTYPE html><html><head>    <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title> - 基本表单</title>    <meta name="keywords" content="">    <meta name="description" content="">    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">    <link href="css/animate.css" rel="stylesheet">    <link href="css/style.css?v=4.1.0" rel="stylesheet"></head><body class="gray-bg"><div class="wrapper wrapper-content animated fadeInRight">    <div class="row">        <div class="col-sm-12">            <div class="btn" style="float:right">                <h3><a href="{{ url('categoryShow') }}">商品列表</a></h3>            </div>            <div class="ibox float-e-margins">                <div class="ibox-title">                    <h5>商品添加</h5>                </div>                <div class="ibox-content">                    <form method="post" class="form-horizontal" action="{{ url('goodsAdd') }}" enctype="multipart/form-data" id="addform" >                        <div class="form-group">                            <label class="col-sm-2 control-label">商品名称</label>                            <div class="col-sm-10">                                <input type="text" class="form-control" name="goods_name">                            </div>                        </div>                        <div class="hr-line-dashed"></div>                        <div class="form-group">                            <label class="col-sm-2 control-label">所属分类</label>                            <div class="col-sm-10">                                <select class="form-control m-b" name="type_id" id="types" style="height: 40px" >                                    <option value="0">**请选择**</option>                                    @foreach($typeList as $val)                                        <option value="{{ $val['type_id'] }}">{{ $val['type_name'] }}</option>                                    @endforeach                                </select>                            </div>                        </div>                        <div class="hr-line-dashed"></div>                        <div class="form-group">                            <label class="col-sm-2 control-label">所属类型</label>                            <div class="col-sm-10">                                <select class="form-control m-b" name="cate_id" id="cate" style="height: 40px" >                                    <option value="0">**请选择**</option>                                </select>                            </div>                        </div>                        <div class="form-group">                            <div class="hr-line-dashed"></div>                            <label class="col-sm-2 control-label">品牌</label>                            <div class="col-sm-10">                                <select class="form-control m-b" name="brand_id" id="types" style="height: 40px" >                                    <option value="0">**请选择**</option>                                    @foreach($BrandList as $val)                                        <option value="{{ $val['brand_id'] }}">{{ $val['brand_name'] }}</option>                                    @endforeach                                </select>                            </div>                        </div>                        <div class="hr-line-dashed"></div>                        <div class="form-group">                            <label class="col-sm-2 control-label">商品价格</label>                            <div class="col-sm-10">                                <input type="text" class="form-control" name="goods_price">                            </div>                        </div>                        <div class="hr-line-dashed"></div>                        <div class="form-group">                            <label class="col-sm-2 control-label">是否售卖</label>                            <div class="radio">                                <label>                                    <input type="radio" checked="" value="1" name="is_on_sale">是</label>                                <label>                                    <input type="radio" checked="" value="0" name="is_on_sale">否</label>                            </div>                        </div>                        <div class="hr-line-dashed"></div>                        <div class="form-group">                            <label class="col-sm-2 control-label">是否最热</label>                            <div class="radio">                                <label>                                    <input type="radio" checked="" value="1" name="is_hot">是</label>                                <label>                                    <input type="radio" checked="" value="0" name="is_hot">否</label>                            </div>                        </div>                        <div class="hr-line-dashed"></div>                        <div class="form-group">                            <label class="col-sm-2 control-label">是否最新</label>                            <div class="radio">                                <label>                                    <input type="radio" checked="" value="1" name="is_new">是</label>                                <label>                                    <input type="radio" checked="" value="0" name="is_new">否</label>                            </div>                        </div>                        <div class="form-group">                            <div class="hr-line-dashed"></div>                            <label class="col-sm-2 control-label">关键字</label>                            <div class="col-sm-10">                                <input type="text" class="form-control" name="keywords">                            </div>                        </div>                        <div class="hr-line-dashed"></div>                        <div class="form-group">                            <label class="col-sm-2 control-label">商品描述</label>                            <div class="col-sm-10">                                <textarea cols="20" rows="6" class="form-control" name="goods_desc"></textarea>                            </div>                        </div>                        <div class="hr-line-dashed"></div>                        <div class="form-group">                            <div class="col-sm-4 col-sm-offset-2">                                <button class="btn btn-primary" type="submit">保存</button>                                <button class="btn btn-white" type="reset">重置</button>                            </div>                        </div>                        {{ csrf_field() }}                    </form>                </div>            </div>        </div>    </div></div><!-- 全局js --><script src="js/jquery.min.js?v=2.1.4"></script><script src="js/bootstrap.min.js?v=3.3.6"></script><!-- 自定义js --><script src="js/content.js?v=1.0.0"></script><!-- iCheck --><script src="js/plugins/iCheck/icheck.min.js"></script><script>    $("#types").on("change",function(){        var cate = $("#cate");        var id = $(this).find(":selected").val();        var str = "";        $.getJSON("<?=asset('goodsAjax')?>", { id: id }, function(json){                for(var i in json){                    str += "<option class=''  value='"+json[i]['cate_id']+"'>"+json[i]['cate_name']+"</option>"                }            cate.html(str);        });    });</script><script src="jq/lib/jquery.js"></script><script src="jq/dist/jquery.validate.min.js"></script><script src="jq/dist/localization/messages_zh.js"></script><script>    $.validator.setDefaults({        submitHandler: function() {            return true;        }    });    $().ready(function() {        $("#commentForm").validate();        $("#addform").validate({            rules: {                goods_name: "required",                type_id: "required",                cate_id: "required",                brand_id: "required",                goods_price: "required",                is_on_sale: "required",                is_new: "required",                is_hot: "required",                goods_desc: "required",                keywords: "required"            },            messages: {                goods_name: "请输入你的商品名称",                type_id: "请选择你的类型",                cate_id: "请选择你的分类",                brand_id: "请选择你的品牌",                goods_price: "请输入你的商品价格",                is_on_sale: "请选择商品是否售卖",                is_new: "请选择商品是否最新",                is_hot: "请选择商品是否最热",                goods_desc: "请输入你的商品描述",                keywords: "请输入你的商品关键字"            }        });    });</script></body></html>