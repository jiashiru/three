<div class="g-header">
    <div class="w1190">
        <div id="" class="logo_1yyg fl">
            <a href="/" class="" style="padding-left: 50px; margin-top: 20px;display: block;">
                <img src="style/images/logo.png" alt="logo">
            </a>
        </div>
        <div class="search_cart_wrap fr">
            <div class="number">
                <a href="/" target="_blank">
                    <ul id="ulHTotalBuy">
                        <li class="nobor gray6">累计参与</li>
                        <li class="num"><cite><em>0</em></cite><i></i></li>
                        <li class="nobor">,</li>
                        <li class="num"><cite><em>0</em></cite><i></i></li>
                        <li class="num"><cite><em>0</em></cite><i></i></li>
                        <li class="num"><cite><em>0</em></cite><i></i></li>
                        <li class="nobor">,</li>
                        <li class="num"><cite><em>0</em></cite><i></i></li>
                        <li class="num"><cite><em>0</em></cite><i></i></li>
                        <li class="num"><cite><em>0</em></cite><i></i></li>
                        <li class="nobor">,</li>
                        <li class="num"><cite><em>0</em></cite><i></i></li>
                        <li class="num"><cite><em>1</em></cite><i></i></li>
                        <li class="num"><cite><em>0</em></cite><i></i></li>
                        <li class="nobor gray6 u-secondary">人次<b><s></s></b></li>
                    </ul>
                </a>
            </div>
            <div class="search">
                <div class="form">
                    <input id="txtHSearch" type="text" value="" placeholder="输入‘汽车’试试"  />
                     <span>
                         <a href="indexClassify?type_id=1" target="_blank" title="手机">手机</a>
                         <a href="indexClassify?type_id=2" target="_blank" title="电脑">电脑</a>
                         <a href="indexClassify?type_id=4" target="_blank" title="首饰">首饰</a>
                     </span>
                </div>
                <a id="sele" href="javascript:;" class="seaIcon"><i></i></a>
            </div>
        </div>
    </div>
</div>

<script>
    $("#sele").click(function(){
        var content = $("#txtHSearch").val();
        if(content == "输入“汽车”试试"){
            alert("请输入要查询的字");
        }else{
            $.ajax({
                type: "POST",
                url: "indexHeader_sel",
                data: {content:content},
                success: function(msg){
                    window.location='indexClassify/?type_id='+msg;
                }
            });
        }
    });
</script>



