var seltion;var userUploadFun=null;var userSaveFun=null;function UploadPhotoScriptAPI(b,a){$.PageDialog.close();if(b!=""){userUploadFun.ShowUploadErr(b)}else{userUploadFun.ShowUploadPic(a)}}$(function(){var a="http://skin.1yyg.net";var c=function(){var i=$(".inner");var e=$("#pageForm");var h=$("#fuploadFace");var f=$("#div_upfile");var g=$("#btnResetUpFile");var d=function(){var k=function(m,o){if(!o.width||!o.height){return}var n=160/o.width;var l=160/o.height;$("#img160").css({width:Math.round(n*400),height:Math.round(l*400),marginLeft:-Math.round(n*o.x1),marginTop:-Math.round(l*o.y1)});n=80/o.width;l=80/o.height;$("#img80").css({width:Math.round(n*400),height:Math.round(l*400),marginLeft:-Math.round(n*o.x1),marginTop:-Math.round(l*o.y1)});n=30/o.width;l=30/o.height;$("#img30").css({width:Math.round(n*400),height:Math.round(l*400),marginLeft:-Math.round(n*o.x1),marginTop:-Math.round(l*o.y1)});$("#cutX").val(o.x1);$("#cutY").val(o.y1);$("#cutW").val(o.width);$("#cutH").val(o.height)};this.ShowUploadPic=function(n){var l=$("#imgFileUrl").val();var m=l+"/Temp/"+n;e.get(0).reset();f.hide();if(!h.parent().hasClass("reset-wrap")){h.wrap("<div class='reset-wrap'></div>")}$("#div_operate").show();$("#imgPhoto").attr("src",m).show();$("#img160").attr("src",m);$("#img80").attr("src",m);$("#img30").attr("src",m);$("#hidPicUrl").val(n);$("#imgPhoto").imgAreaSelect({aspectRatio:"1:1",handles:true,fadeSpeed:200,persistent:true,parent:i,x1:120,y1:75,x2:285,y2:240,onSelectChange:k,onInit:k})};this.ShowUploadErr=function(l){FailDialog(l,250)}};var j=function(){this.btnSaveUserUploadPhoto_click=function(){var o=$("#hidPicUrl").val();if(o==""){FailDialog("请先上传头像！",150);return false}var m=$("#cutX").val();var r=$("#cutY").val();var p=$("#cutW").val();var l=$("#cutH").val();if(m==""||r==""||p==""||l==""){FailDialog("请先选择裁剪区域!",170);return false}var q=$("#hidUserPhotoName").val();var n={action:"SaveUserPhoto",src:o,oldSrc:q,x:m,y:r,width:p,height:l,t:Math.random()};k(n)};var k=function(l){$.ajax({url:"JPData/UploadPhoto.ashx",dataType:"json",data:l,error:function(m){FailDialog("提交失败，请联系客服!",170)},beforeSend:function(m){$("#btnSavePhoto").unbind("click").html("请稍候...")},complete:function(m,n){},success:function(m){$("#btnSavePhoto").bind("click",userSaveFun.btnSaveUserUploadPhoto_click).html("保存头像");if(m.msg=="success"){OKDialog("保存成功！",160,60,function(){var n=$("#hidForward").val();if(n!=""){window.location.href=n}else{window.location.reload()}})}else{if(m.msg=="UnLogin"){location.reload()}else{FailDialog("保存失败,请稍候再试！")}}}})}};userUploadFun=new d();userSaveFun=new j();$("#btnSavePhoto").bind("click",userSaveFun.btnSaveUserUploadPhoto_click);h.bind("change",function(){var m=$(this).val();if(m!=""){var l=(m.substr(m.length-5)).substr((m.substr(m.length-5)).indexOf(".")+1).toLowerCase();if(l!="gif"&&l!="jpg"&&l!="jpeg"&&l!="bmp"&&l!="png"){$(this).val("");FailDialog("只能上传JPG、GIF、PNG或BMP图片!",250);return false}else{var k="";k+='<div class="z-popUp z-pop-box">';k+='<span class="box-loading">上传中，请稍等...</span>';k+="</div>";$.PageDialog(k,{W:180,H:70,close:false,autoClose:false,ready:function(){}});e.submit()}}else{FailDialog("请先选择需要上传的文件!",210);return false}});i.on("mouseenter mouseleave",".reset-wrap",function(){g.toggleClass("hover")})};var b=function(){Base.getScript(a+"/Member/JS/jquery.imgareaselect.pack.js?date=201204011",c)};$.loadcss(a+"/Member/CSS/imgareaselect-animated.css?date=20120411",b)});