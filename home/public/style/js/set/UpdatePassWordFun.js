$(function(){var a="http://skin.1yyg.net";var b=function(){var e=["原密码不能为空","密码不足6位","原密码错误,请重新输入"];var g=["新密码不能为空","密码由8-20位字母、数字或符号两种或以上组合","新密码错误,请重新输入","密码不能与支付密码相同"];var c=["确认密码不能为空","两次密码输入不一致,请重新输入"];var y="";var d="";var r="";var t=$("#OldPass");var z=$("#NewPass");var o=$("#NewPassAgain");var w=$("#btnSubmitSave");var j=false;var m=$("#div_tips1");var l=$("#div_tips2");var k=$("#div_tips3");var q="#bbbbbb",i="#666666";var f=null;var x=function(B,C){j=false;var A=null;if(B==1){A=m}else{if(B==2){A=l;$("#pwdStrength").hide()}else{if(B==3){A=k}}}if(f!=null){clearTimeout(f)}if(C==""){A.html("").hide()}else{A.html('<div class="form-orange-tips">'+C+"</div>").show();f=setTimeout(function(){A.html("")},3000)}};var h=function(B){var A=function(E,F,C){var D=new RegExp(F,"g");return E.replace(D,C)};var B=escape(B);B=A(B,"\\+","%2B");B=A(B,"/","%2F");return B};var n=function(B){var A=/^[\S]{6,20}$/;return A.test(B)};var s=function(B){var A=/^(?![A-z]+$)(?!\d+$)(?![\W_]+$)^.{8,20}$/;return A.test(B)};var u=function(){if(j){return}j=true;w.html("正在保存...").addClass("gray-btn");$.post("http://member.1yyg.com/JPData",{action:"updateUserPwd",userOldPwd:h(y),userNewPwd:h(d)},function(A){if(A!=null&&A.code==0){OKDialog("修改成功!",160,60,function(){location.replace("/UpdatePassWord.do")})}else{if(A!=null&&A.code==1){t.focus();x(1,e[2])}else{if(A!=null&&A.code==2){z.focus();x(2,e[3])}else{FailDialog("修改失败，请重试！["+A.code+"]");j=false}}}w.html("保存").removeClass("gray-btn")},"json")};var p=function(){if(j){return}y=t.val().trim();if(y==""){x(1,e[0]);return}else{if(!n(y)){x(1,e[1]);return}}d=z.val().trim();if(d==""){x(2,g[0]);return}else{if(!s(d)){x(2,g[1]);return}}r=o.val().trim();if(r==""){x(3,c[0]);return}else{if(r!=d){x(3,c[1]);return}}u()};var v=function(B){var C=$("#pwdStrength");var E=["",'<p class="orange" ><strong>安全强度：</strong><cite><dfn style="width:33.33%;"></dfn></cite>弱</p>','<p class="yellow" ><strong>安全强度：</strong><cite><dfn style="width:66.66%;"></dfn></cite>中</p>','<p class="green" ><strong>安全强度：</strong><cite><dfn style="width:100%;"></dfn></cite>强</p>'];var A=function(F){l.hide();C.html(E[F]).show()};var D=function(F){if(F.length>=8){if(/[a-zA-Z]+/.test(F)&&/[0-9]+/.test(F)&&/[^A-Za-z0-9]+/.test(F)){A(3)}else{if(/[a-zA-Z]+/.test(F)&&/[0-9]+/.test(F)){A(2)}else{if(/[a-zA-Z]+/.test(F)&&/[^A-Za-z0-9]+/.test(F)){A(2)}else{if(/[0-9]+/.test(F)&&/[^A-Za-z0-9]+/.test(F)){A(2)}else{A(1)}}}}}else{A(0)}};D(B)};w.bind("click",function(){p()});t.keydown(function(){$(this).css("color",i).next(".get-code-btn").hide()}).blur(function(){if($(this).val().trim()==""){$(this).css("color",q).next(".get-code-btn").show()}});z.keydown(function(){$(this).css("color",i).next(".get-code-btn").hide()}).blur(function(){if($(this).val().trim()==""){$(this).css("color",q).next(".get-code-btn").show()}}).bind("keyup",function(){v($(this).val().trim())});o.keydown(function(){$(this).css("color",i).next(".get-code-btn").hide()}).blur(function(){if($(this).val().trim()==""){$(this).css("color",q).next(".get-code-btn").show()}});$("ul.person-list").keydown(function(B){var A=(window.event)?event.keyCode:B.keyCode;if(A==32){return false}else{if(A==13){w.trigger("click")}}return true})};Base.getScript(a+"/JS/AjaxFun.js?date=20130123",b)});