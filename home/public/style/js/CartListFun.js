var PagePOPLoginOK=null;var $cartFun=null;$(function(){var a="http://skin.1yyg.net";var d="http://cart.1yyg.com";var c="http://www.1yyg.com";var b=function(){var l=function(S,Q,R,U){var T=function(){R.apply(U,arguments)};window.addEventListener?S.addEventListener(Q,T,false):S.attachEvent("on"+Q,T)},f=function(S,Q,R){window.removeEventListener?S.removeEventListener(Q,R,false):S.attachEvent("on"+Q,R)};var o=$("#div_cartlist");var B=$("#pageDialog");var s=parseInt($("#hidUserID").val());$cartFun=new $CartComm();var C=function(U,Q,T){var R="";switch(U){case"selGoodsUpdate":R='<div class="z-popUp z-pop-box"><span class="gray3">部分商品失效已更新到最新一云，继续云购？</span><a href="javascript:;" title="确定" class="z-btn-determine">确定</a></div>';var S=function(){B.find("a.z-btn-determine").click(function(){Q();return false});B.find("a.z-btn-cancel").click(function(){$.PageDialog.close();return false})};$.PageDialog(R,{W:410,H:170,close:true,autoClose:false,ready:S});break;case"selGoodsState":R='<div class="z-popUp z-pop-box"><span class="gray3">部分商品已失效，继续云购？</span><a href="javascript:;" title="确定" class="z-btn-determine">确定</a></div>';var S=function(){B.find("a.z-btn-determine").click(function(){Q();return false});B.find("a.z-btn-cancel").click(function(){$.PageDialog.close();return false})};$.PageDialog(R,{W:410,H:170,close:true,autoClose:false,ready:S});break;case"allOutDate":R='<div class="z-popUp z-pop-box"><span class="gray3">您的购物车中所有商品已失效！</span><a href="javascript:;" title="取消" class="z-btn-cancel">取消</a><a href="javascript:;" title="清空购物车并返回云购" class="z-btn-determine">清空购物车并返回云购</a></div>';var S=function(){B.find("a.z-btn-cancel").click(function(){$.PageDialog.close();return false});B.find("a.z-btn-determine").click(function(){Q();return false})};$.PageDialog(R,{W:512,H:197,close:true,autoClose:false,ready:S});break;case"delNone":R='<div class="z-popUp z-pop-box"><span class="gray3">请选择要删除的商品！</span><a href="javascript:;" title="确定" class="z-btn-determine">确定</a></div>';var S=function(){B.find("a.z-btn-determine").click(function(){$.PageDialog.close();return false})};$.PageDialog(R,{W:350,H:197,close:true,autoClose:false,ready:S});break;case"delCart":R='<div class="z-popUp z-pop-box"><span class="gray3">确定要删除所选的商品？</span><a href="javascript:;" title="取消" class="z-btn-cancel">取消</a><a href="javascript:;" title="确定" class="z-btn-determine">确定</a></div>';var S=function(){B.find("a.z-btn-determine").click(function(){Q();return false});B.find("a.z-btn-cancel").click(function(){$.PageDialog.close();return false})};$.PageDialog(R,{W:350,H:165,close:true,autoClose:false,ready:S});break;case"delCartOut":R='<div class="z-popUp z-pop-box"><span class="gray3">确定要删除所有失效商品？</span><a href="javascript:;" title="取消" class="z-btn-cancel">取消</a><a href="javascript:;" title="确定" class="z-btn-determine">确定</a></div>';var S=function(){B.find("a.z-btn-determine").click(function(){Q();return false});B.find("a.z-btn-cancel").click(function(){$.PageDialog.close();return false})};$.PageDialog(R,{W:398,H:197,close:true,autoClose:false,ready:S});break;case"delCartS":R='<div class="z-popUp z-add-success"><i class="z-arrows"></i>删除成功！</div>';$.PageDialog(R,{W:168,H:65,close:false,autoClose:true,autoTime:1000,submit:Q});break;case"delCartF":R='<div class="z-popUp z-sold-out"><i class="z-arrows"></i>抱歉，删除失败！</div>';$.PageDialog(R,{W:180,H:65,close:false,autoClose:true,autoTime:1000,submit:Q});break;case"buyNumErr":R='<div class="z-popUp z-sold-out"><i class="z-arrows"></i>对不起，购买人次输入有误！</div>';$.PageDialog(R,{W:258,H:65,close:false,autoClose:true});break;case"selEmpty":R='<div class="z-popUp z-sold-out"><i class="z-arrows"></i>对不起，购物车中没有选中的商品！</div>';$.PageDialog(R,{W:310,H:65,close:false,autoClose:true});break;case"goodsOff":R='<div class="z-popUp z-sold-out"><i class="z-arrows"></i>本云已满员！</div>';$.PageDialog(R,{W:160,H:65,close:false,autoClose:true,autoTime:1000,obj:T,oL:10,oT:-60,ready:function(){$("#pageDialogBG").hide()},submit:Q});break;case"goodsOver":R='<div class="z-popUp z-sold-out"><i class="z-arrows"></i>本云已结束！</div>';$.PageDialog(R,{W:160,H:65,close:false,autoClose:true,autoTime:1000,obj:T,oL:10,oT:-60,ready:function(){$("#pageDialogBG").hide()},submit:Q});break;case"addCartS":R='<div class="z-popUp z-add-success"><i class="z-arrows"></i>添加成功！</div>';$.PageDialog(R,{W:168,H:65,close:false,autoClose:true,autoTime:1000,obj:T,oL:5,oT:-60,animation:false,ready:function(){$("#pageDialogBG").hide()},submit:Q});break;case"addCartF":R='<div class="z-popUp z-sold-out"><i class="z-arrows"></i>抱歉，添加失败！</div>';$.PageDialog(R,{W:180,H:65,close:false,autoClose:true,autoTime:1000,obj:T,oL:5,oT:-60,animation:false,ready:function(){$("#pageDialogBG").hide()},submit:Q});break;case"addCartLimit":R='<div class="z-popUp z-sold-out"><i class="z-arrows"></i>您参与人次已达上限！</div>';$.PageDialog(R,{W:200,H:65,close:false,autoClose:true,autoTime:1000,obj:T,oL:-7,oT:-60,animation:false,ready:function(){$("#pageDialogBG").hide()},submit:Q});break;case"addCartFull":R='<div class="z-popUp z-sold-out"><i class="z-arrows"></i>哎呀！购物车满啦，删除一些吧！</div>';$.PageDialog(R,{W:300,H:65,close:false,autoClose:true,autoTime:1000,obj:T,oL:-60,oT:-60,animation:false,ready:function(){$("#pageDialogBG").hide()},submit:Q});break}};var I=0,L="",r="";var i=0;var w=true;var z=function(){$cartFun.getShopCart(function(ae){if(ae.code==0){var T=ae.listCart;var af=ae.listUpdate;var az=ae.listOutDate;i=af.length;I=ae.money;L="";r="";var am="";am+='<div class="g-list-title">';am+='<span class="f-cart-comm">商品</span>';am+='<span class="f-cart-price">剩余人次</span>';am+='<span class="f-cart-plusLess">云购人次</span>';am+='<span class="f-cart-subtotal">小计</span>';am+='<span class="f-cart-operate">操作</span>';am+="</div>";am+='<div id="div_overtips" class="g-list-tips clrfix" style="display:none;">';am+='<span class="fl orange">温馨提示：1元云购是一个“我为人人、人人为我”的新型互助购物平台。参与云购已经超过100人次，云购有一定风险，请谨慎参与！</span>';am+='<span class="fr gray6"><a id="a_tips" href="javascript:;" class="z-comms"><b></b></a></span>';am+="</div>";am+='<div id="div_normallist" class="g-list-con clrfix">';if(T.length>0){for(var aA=0;aA<T.length;aA++){var ah=T[aA];var ak=ah.codeQuantity-ah.codeSales;var U=ah.codeType==3;var ab=ak;var Y=0;if(U){Y=ah.codeLimitBuy-ah.myLimitSales;ab=Y>ak?ak:Y}L+=ah.codeID+",";r+=ah.shopNum+",";am+='<ul type="0">';am+='<li class="f-cart-comm m-pay-fail">';am+='<cite><a href="javascript:;" class="z-check"><b name="check" state="1" class="'+(ab>0?"z-comms":"")+'"></b></a></cite>';am+='<cite class="u-cart-pic"><a target="_blank" href="'+c+"/product/"+ah.codeID+'.html"><img src="http://skin.1yyg.net/images/loding.gif" src2="http://img.1yyg.net/GoodsPic/pic-70-70/'+ah.goodsPic+'" /></a>';if(U){am+='<i class="limitbuy-icon"></i>'}am+="</cite>";am+='<cite class="u-cart-name">';am+='<span><a target="_blank" href="'+c+"/product/"+ah.codeID+'.html">(第'+ah.codePeriod+"云)"+ah.goodsName+"</a></span>";am+="价值：￥"+ah.codePrice+".00";am+="</cite>";am+="</li>";am+='<li class="f-cart-price">'+ak+"</li>";am+='<li class="f-cart-plusLess">';if(ab>0){am+="<span>";am+='<a href="javascript:;" class="z-arrows z-less2"></a>';am+='<input name="num" state="1" maxlength="6" type="text" oldnum="'+ah.shopNum+'" value="'+ah.shopNum+'" codeID="'+ah.codeID+'" surplus="'+ak+'" limitbuy="'+ah.codeLimitBuy+'" mylimitsales="'+ah.myLimitSales+'">';am+='<a href="javascript:;" class="z-arrows z-plus2"></a>';am+="</span>"}if(U){if(ah.myLimitSales>0){am+='<p class="gray9">限购'+ah.codeLimitBuy+"人次，您已参与"+ah.myLimitSales+"人次</p>"}else{am+='<p class="gray9">限购'+ah.codeLimitBuy+"人次</p>"}}am+="</li>";am+='<li class="f-cart-subtotal orange">￥'+ah.shopNum+".00</li>";am+='<li class="f-cart-operate fr">';am+='<a href="javascript:;" class="z-comms" codeID="'+ah.codeID+'"></a>';am+="</li>";am+="</ul>"}}if(af.length>0){for(var aA=0;aA<af.length;aA++){var ah=af[aA];var ak=ah.codeQuantity-ah.codeSales;var U=ah.codeType==3;var ab=ak;var Y=0;if(U){Y=ah.codeLimitBuy-ah.myLimitSales;ab=Y>ak?ak:Y}L+=ah.codeID+",";r+=ah.shopNum+",";if(aA==0&&T.length>0){am+='<ul type="1" class="yigengxin">'}else{am+='<ul type="1">'}am+='<li class="f-cart-comm" type="'+ah.codeType+'">';am+='<cite><a href="javascript:;" class="z-check"><b name="check" state="2" class="'+(ab>0?"z-comms":"")+'"></b></a></cite>';am+='<cite class="u-cart-pic"><a target="_blank" href="'+c+"/product/"+ah.codeID+'.html"><img src="http://skin.1yyg.net/images/loding.gif" src2="http://img.1yyg.net/GoodsPic/pic-70-70/'+ah.goodsPic+'" /></a>';if(U){am+='<i class="limitbuy-icon"></i>'}am+="</cite>";am+='<cite class="u-cart-name u-cart-padding">';am+='<em class="orange">已更新至第'+ah.codePeriod+"云</em>";am+='<span><a target="_blank" href="'+c+"/product/"+ah.codeID+'.html">(第'+ah.codePeriod+"云)"+ah.goodsName+"</a></span>";am+="价值：￥"+ah.codePrice+".00";am+="</cite>";am+="</li>";am+='<li class="f-cart-price">'+ak+"</li>";am+='<li class="f-cart-plusLess">';if(ab>0){am+="<span>";am+='<a href="javascript:;" class="z-arrows z-less2"></a>';am+='<input name="num" maxlength="6" type="text" oldnum="'+ah.shopNum+'" value="'+ah.shopNum+'" codeID="'+ah.codeID+'" surplus="'+ak+'" limitbuy="'+ah.codeLimitBuy+'" mylimitsales="'+ah.myLimitSales+'">';am+='<a href="javascript:;" class="z-arrows z-plus2"></a>';am+="</span>"}if(U){if(ah.myLimitSales>0){am+='<p class="gray9">限购'+ah.codeLimitBuy+"人次,您已参与"+ah.myLimitSales+"人次</p>"}else{am+='<p class="gray9">限购'+ah.codeLimitBuy+"人次</p>"}}am+="</li>";am+='<li class="f-cart-subtotal orange">￥'+ah.shopNum+".00</li>";am+='<li class="f-cart-operate fr">';am+='<a href="javascript:;" class="z-comms"  codeID="'+ah.codeID+'"></a>';am+="</li>";if(aA==0&&T.length>0){am+='<div class="z-updated">';am+='<a href="javascript:;" class="ygx-box"><b class="z-check z-comms"></b>已更新</a>';am+="<s></s>";am+="</div>"}am+="</ul>"}}am+="</div>";if(az.length>0){am+='<div id="div_overlist" class="g-over-con clrfix">';am+='<div class="end-delete clrfix">';am+='<h3 class="fl">已结束</h3>';am+='<a id="a_delover" href="javascript:;" class="fr gray6">清除</a>';am+="</div>";am+='<ul type="2">';for(var aA=0;aA<az.length;aA++){am+="<li>";am+='<cite ><a target="_blank" href="'+c+"/product/"+az[aA].codeID+'.html"><img src="http://skin.1yyg.net/images/loding.gif" src2="http://img.1yyg.net/GoodsPic/pic-70-70/'+az[aA].goodsPic+'" /></a></cite>';am+='<cite class="u-cart-name u-cart-padding">';am+='<span><a target="_blank" href="'+c+"/product/"+az[aA].codeID+'.html" class="gray9">'+az[aA].goodsName+"</a></span>";am+="<em>已结束</em>";am+="</cite>";am+='<cite class="z-delete"><a href="javascript:;" class="z-comms"  codeID="'+az[aA].codeID+'"></a></cite>';am+="</li>"}am+="</ul>";am+="</div>"}am+='<div id="div_operate" class="m-list-operating clrfix">';if(T.length>0||af.length>0){am+='<p class="fl">';am+='<span><a id="sSelAll" href="javascript:;" class="z-check"><b class="z-comms"></b></a></span>';am+='<span><a id="btnSelAll" href="javascript:;" title="全选">全选</a></span>';am+='<span><a id="btnDelete" href="javascript:;" title="删除">删除</a></span>';am+="</p>";am+='<p class="fl" id="p_buynext"><span><span class="z-check"><b class="z-comms"></b></span></span><span class="def">如被抢光自动参与最新一云</span></p><p class="fl" id="ptipinfo"><span><a href="javascript:;" class="z-ques-icon"></a></span><strong class="tips-info" style="display:none;">热门商品可能会瞬间抢光哦，此处勾选后系统将会自动为您参与最新一云！<i class="s"><i class="s"></i></i></strong></p>'}am+='<div id="divCalCart" class="z-accounts fr">';am+='<cite>共<i class="orange">'+ae.count+"</i>件商品</cite>";am+='<cite>金额总计：<em class="orange">￥'+ae.money+".00</em></cite>";am+='<cite class="a-n-btn"><a id="btnGoPay" href="javascript:;" title="去结算">结算</a></cite>';am+="</div>";am+="</div>";var ac=$(am);o.removeAttr("style").html(ac);loadImgFun();var ai="_buyNextCheck",aw=$.cookie(ai),ad=$("#p_buynext"),an=IEBrowser().isIE?";expires=At the end of the Session":";expires=Session";if(aw!=undefined&&aw!=null){if(aw==1){ad.find("b").addClass("z-comms")}else{ad.find("b").removeClass("z-comms")}}else{ad.find("b").addClass("z-comms")}ac.on("click","#p_buynext",function(aC){var aB=$(this).find("b");if(aB.hasClass("z-comms")){aB.removeClass("z-comms");document.cookie=ai+"="+escape(0)+an+"; path=/;domain=.1yyg.com"}else{aB.addClass("z-comms");document.cookie=ai+"="+escape(1)+an+"; path=/;domain=.1yyg.com"}});ac.find("#ptipinfo").hover(function(){$(this).find("strong").show()},function(){$(this).find("strong").hide()});var ap=$("#divCalCart",ac);var ag=$("#btnGoPay",ac);var Z=$("#sSelAll",ac);var W=$("#div_overtips",o);W.find("#a_tips").click(function(){W.hide("500");w=false});var aa=$("#div_operate",o);var V=$("a.ygx-box",ac);var aj=$("#div_overlist");var ay=function(aC){var aB=aC;if(aB.find("b").hasClass("z-comms")){aB.find("b").removeClass("z-comms");aB.parent().parent().find("a.z-check").find("b").removeClass("z-comms");aB.parent().parent().nextAll().find("a.z-check").find("b").removeClass("z-comms")}else{aB.find("b").addClass("z-comms");aB.parent().parent().find("a.z-check").find("b").addClass("z-comms");aB.parent().parent().nextAll().find("a.z-check").find("b").addClass("z-comms")}X()};if(V.length>0){V.bind("click",function(){ay($(this))})}var X=function(){if($("#div_normallist").children("ul").length==0&&aj.find("li").length==0){var aE='<div class="z-cart-nothing"><b></b>'+(s<=0?'<span>如果您还未登录，可能导致购物车为空，请<a href="https://passport.1yyg.com/login.html?forward=rego">马上登录</a></span>':'<span>您的购物车为空！<a href="http://www.1yyg.com" title="立即去云购>>">立即去云购<em class="f-tran">>></em></a></span>')+"</div>";o.attr("style","border-top:1px solid #dddddd;").html(aE);return}if(aj.find("li").length==0){aj.find(".end-delete").remove()}I=0;L="";r="";var aD=0;var aH=0,aB=0;var aC=false;var aF=$("b[name='check']",ac);aF.each(function(){var aJ=$(this);var aL=aJ.hasClass("z-comms");if(aL){aH++;if(aJ.attr("state")=="2"){aB++}}var aI=aJ.parent().parent().parent().parent().find("input:text[name='num']");if(aI.length>0){if(aI.val().trim()==""){aI.val("1")}var aK=parseInt(aI.val());if(aL&&!isNaN(aK)){I+=aK;aD++;L+=aI.attr("codeID")+",";r+=aK+",";if(aK>100&&w){aC=true}}}});if(L!=""){L=L.substring(0,L.length-1)}if(r!=""){r=r.substring(0,r.length-1)}var aG=ap.children("cite");aG.eq(0).find("i").eq(0).html(aD);aG.eq(1).find("em").html("￥"+I+".00");if(I==0){ag.addClass("f-list-jiesuan")}else{ag.removeClass("f-list-jiesuan")}if(aH==aF.length){Z.find("b").addClass("z-comms");V.find("b").addClass("z-comms");if(aH==0){Z.parent().parent().hide()}else{Z.parent().parent().show()}}else{Z.find("b").removeClass("z-comms");if(aB==i){V.find("b").addClass("z-comms")}else{V.find("b").removeClass("z-comms")}}if(w){if(aC){W.show("500")}else{W.hide("500")}}};ac.find("a.z-comms").not("#a_tips").click(function(){var aH=$(this);var aB=aH.attr("codeID");var aG=aH.parent().parent();var aE=function(aI){$cartFun.delShopCart(aB,function(aJ){if(aJ.code==0){aG.hide(500,function(){if(aG.attr("type")=="1"){i--}if(aG.hasClass("yigengxin")&&aG.next().length>0){var aK='<div class="z-updated">';aK+='<a href="javascript:;" class="ygx-box"><b class="z-check z-comms"></b>已更新</a>';aK+="<s></s>";aK+="</div>";var aL=$(aK);V=aL.find("a.ygx-box");V.bind("click",function(){ay($(this))});aG.next().addClass("yigengxin").children("li:last").after(aL)}$(this).remove();X();if(aI){aI()}})}else{FailDialog("删除失败,请重试！")}})};if(aG.attr("type")=="2"){aE(function(){if(aj.find("li").length==0){aj.remove();at()}})}else{var aC='<div id="popUpDel" class="z-popUp f-box-prompt" style="display:none;"><p>确定要删除吗？</p><a href="javascript:;" title="取消" class="u-btn-cancel">取消</a><a href="javascript:;" title="确定" class="u-btn-determine">确定</a><b><s></s></b></div>';var aF=$("#popUpDel",o);if(aF.length==0){aF=$(aC);o.append(aF)}aF.unbind("click").click(function(aI){stopBubble(aI)});var aD=aH.offset().top-125;aF.css("top",aD+"px").show("fast",function(){aF.find("a.u-btn-determine").unbind("click").click(function(){aF.hide();aE(function(){at()})});aF.find("a.u-btn-cancel").unbind("click").click(function(){aF.hide()})})}});ac.find("a.z-check").not("#sSelAll").click(function(){var aB=$(this);if(aB.find("b").hasClass("z-comms")){aB.find("b").removeClass("z-comms")}else{aB.find("b").addClass("z-comms")}X()});ac.find("#sSelAll,#btnSelAll").click(function(){var aB=Z;if(aB.find("b").hasClass("z-comms")){ac.find("a.z-check").find("b").removeClass("z-comms");V.find("b").removeClass("z-comms")}else{ac.find("a.z-check").find("b").addClass("z-comms");V.find("b").addClass("z-comms")}X()});ac.find("#btnDelete").click(function(){var aB="";ac.find("a.z-comms").not("#a_tips").each(function(){if($(this).parent().parent().find("b.z-comms").length>0){aB+=$(this).attr("codeID")+","}});if(aB==""){FailDialog("请选择要删除的商品！");return}C("delCart",function(){aB=aB.substring(0,aB.length-1);$cartFun.delShopCart(aB,function(aC){if(aC.code==0){location.reload()}else{FailDialog("删除失败,请重试！")}})})});if(az.length>0){ac.find("#a_delover").click(function(){var aB="";aj.children("ul").children("li").each(function(){aB+=$(this).find("a.z-comms").attr("codeID")+","});if(aB!=""){aB=aB.substring(0,aB.length-1);$cartFun.delShopCart(aB,function(aC){if(aC.code==0){aj.hide(500,function(){if($("#div_normallist").children("ul").length==0){location.reload()}else{aj.remove();at()}})}else{FailDialog("清除失败,请重试！")}})}})}var S=function(aD,aB,aC,aE){if(aE>1){if(aC==1){aB.attr("class","z-arrows z-less2");aD.attr("class","z-arrows z-plus")}else{if(aC==aE){aB.attr("class","z-arrows z-less");aD.attr("class","z-arrows z-plus2")}else{if(aC<aE){aB.attr("class","z-arrows z-less");aD.attr("class","z-arrows z-plus")}}}}else{aB.attr("class","z-arrows z-less2");aD.attr("class","z-arrows z-plus2")}};var av=/^\d+$/;var au=null;$("input:text[name='num']",ac).each(function(){var aK=$(this);var aL=aK.attr("codeID");var aB=aK.next();var aH=aK.prev();var aE=parseInt(aK.attr("surplus"));var aI=parseInt(aK.attr("limitbuy"));var aC=parseInt(aK.attr("mylimitsales"));var aJ=aI>0?aI-aC:0;var aG=aI>0?aJ>aE?aE:aJ:aE;S(aB,aH,parseInt(aK.val()),aG);var aF=function(aM){if(aM==""){aK.parent().next("p").hide()}else{if(aK.parent().next("p").length==0){aK.parent().after("<p>"+aM+"</p>")}else{aK.parent().next("p").removeClass("gray9").html(aM).show()}setTimeout(function(){aD()},3000)}};var aD=function(){if(aI>0){var aM="";if(aJ>0&&aC>0){aM="限购"+aI+"人次，您已参与"+aC+"人次"}else{aM="限购"+aI+"人次"}if(aK.parent().next("p").length==0){aK.parent().after('<p class="gray9">'+aM+"</p>")}else{aK.parent().next("p").addClass("gray9").html(aM).show()}}else{aK.parent().next("p").hide()}};aK.keyup(function(){if(aK.val().trim()==""){return}if(!av.test(aK.val())){aK.val(aK.attr("oldnum"))}var aM=parseInt(aK.val().trim());if(aM>aG){aM=aG;aK.val(aM);var aN="";if(aG<aJ){aN="剩余"+aG+"人次，最多可云购"+aG+"人次"}else{if(aI>0&&aC>0){aN="您已参与"+aC+"人次,最多可云购"+aJ+"人次"}else{if(aI>0){aN="限购"+aI+"人次"}else{aN="不能大于"+aG+"人次"}}}aF(aN)}else{if(aM>100){aF("已超过100人次哦")}else{if(aM<1){aM=1;aK.val(aM);aF("不能小于1人次")}}}aK.parent().parent().next().html("￥"+aM+".00");$cartFun.updateShopCart(aL,aM,function(aO){if(aO.code==0){aK.attr("oldnum",aM);S(aB,aH,aM,aG);X()}else{aK.val(aK.attr("oldnum"));aK.parent().parent().next().html("￥"+aK.attr("oldnum")+".00")}})}).blur(function(){if(!av.test(aK.val())){aK.val(aK.attr("oldnum"))}var aM=parseInt(aK.val());if(aM>aG){aM=aG;aK.val(aM)}else{if(aM<1){aM=1;aK.val(aM)}}aK.parent().parent().next().html("￥"+aM+".00");$cartFun.updateShopCart(aL,aM,function(aN){if(aN.code==0){aK.attr("oldnum",aM);S(aB,aH,aM,aG);X()}else{aK.val(aK.attr("oldnum"));aK.parent().parent().next().html("￥"+aK.attr("oldnum")+".00")}})}).mouseover(function(){aK.focus().select();au=function(aM){aM=aM||window.event;if(aM&&aM.preventDefault){aM.preventDefault()}else{window.event.returnValue=false}stopBubble(aM);var aN=0;if(aM.wheelDelta){aN=aM.wheelDelta>0?1:-1}else{if(aM.detail){aN=aM.detail<0?1:-1}}if(aN){if(aN>0){aB.trigger("click")}else{aH.trigger("click")}}};l(aK.get(0),"mousewheel",au,aK.get(0));l(aK.get(0),"DOMMouseScroll",au,aK.get(0))}).mouseout(function(){aK.blur();f(aK.get(0),"mousewheel",au);f(aK.get(0),"DOMMouseScroll",au)});aB.click(function(){if($(this).hasClass("z-plus2")){return}if(!av.test(aK.val())){aK.val(aK.attr("oldnum"))}var aM=parseInt(aK.val());aM++;if(aM>aG){aM=aG;var aN="";if(aG<aJ){aN="剩余"+aG+"人次，最多可云购"+aG+"人次"}else{if(aI>0&&aC>0){aN="您已参与"+aC+"人次,最多可云购"+aJ+"人次"}else{if(aI>0){aN="限购"+aI+"人次"}else{aN="不能大于"+aG+"人次"}}}aF(aN)}else{if(aM>100){aF("已超过100人次哦")}}aK.parent().parent().next().html("￥"+aM+".00");$cartFun.updateShopCart(aL,aM,function(aO){if(aO.code==0){aK.val(aM);aK.attr("oldnum",aM);S(aB,aH,aM,aG);X()}else{aK.val(aK.attr("oldnum"));aK.parent().parent().next().html("￥"+aK.attr("oldnum")+".00")}})});aH.click(function(){if($(this).hasClass("z-less2")){return}if(aK.val().trim()==""){aK.val("1")}if(!av.test(aK.val())){aK.val(aK.attr("oldnum"))}var aM=parseInt(aK.val());aM--;if(aM<1){aM=1;aF("不能小于1人次")}aK.parent().parent().next().html("￥"+aM+".00");$cartFun.updateShopCart(aL,aM,function(aN){if(aN.code==0){aK.val(aM);aK.attr("oldnum",aM);S(aB,aH,aM,aG);X()}else{aK.val(aK.attr("oldnum"));aK.parent().parent().next().html("￥"+aK.attr("oldnum")+".00")}})})});var ax=aa.css("bottom");ag.bind("click",function(){if($(this).hasClass("f-list-jiesuan")){return}if(I==0||L==""||r==""){C("selEmpty");return}var aB=$("#p_buynext").find("b").hasClass("z-comms")?1:0;$cartFun.getShopCart(function(aE){if(aE.code==0){var aD=aE.listCart;var aG=aE.listUpdate;var aF=aE.listOutDate;if(aD.length==0&&aG.length==0){C("allOutDate",function(){$.cookie("_CartData_"+s,null,{domain:"1yyg.com",path:"/",expires:7});$.cookie("_CartDataSel",null,{domain:"1yyg.com",path:"/",expires:1});location.reload()})}else{if(aF.length>0&&aB==0){C("selGoodsState",function(){if(aG.length>0){C("selGoodsUpdate",function(){aC()})}else{aC()}})}else{if(aG.length>0&&aB==0){C("selGoodsUpdate",function(){aC()})}else{aC()}}}}});var aC=function(){$cartFun.setSelValue(L,r,function(){GetJPData(d,"checkLogin","",function(aD){if(aD.code==1){var aE=new popLogin();PagePOPLoginOK=function(){aE.hide();location.href=d+"/payment.do?bx="+aB};aE.show()}else{location.href=d+"/payment.do?bx="+aB}})})}});var at=function(){var aB=$(document).scrollTop();if(($(window).height()+aB)<($("#divRec").offset().top-aa.height())){aa.css({position:"fixed",bottom:"0px"})}else{aa.css({position:"relative",bottom:ax})}};$(window).scroll(at);X();at();var al=$("#p_buynext");if($.cookie("_autoBuyTipPc")!="1"&&al.length>0){var ao=$("#divAutoTip");var aq=function(){var aC=$(document).height(),aD=$(document).width();var aB=al.offset().top-108,aE=al.offset().left;if(ao.length==0){ao=$('<div id="divAutoTip"></div>')}ao.html('<div class="pageDialogBG" id="pageDialogBG" style="position:absolute;top:0;left:0;background:#000;opacity: 0.3; width: 100%; height: '+aC+'px; display: block;z-index:100;"></div><div class="auto-next-wrapper" style="top:'+aB+"px;left:"+aE+'px;display:block;"><a href="javascript:;" class="auto-next-close"></a></div>')};aq();ao.click(function(){$.cookie("_autoBuyTipPc","1",{expires:100});ao.remove()});$("body").append(ao);$(window).resize(aq).scroll(aq)}}else{var R='<div class="kt-icon"><img src="http://skin.1yyg.net/images/kt-car.jpg" /><p class="gray">如果您还未登录，可能导致购物车为空，请 <a href="https://passport.1yyg.com/login.html" class="blue">马上登录</a></p></div>';var Q='<div class="kt-icon kt-deviant"><img src="http://skin.1yyg.net/images/kt-car.jpg" /><p class="gray">主银，您购物车还是空的哦~ <a href="http://www.1yyg.com" class="blue">立即去云购<em class="f-tran">>></em></a></p></div>';var ar=s<=0?R:Q;o.attr("style","border-top:1px solid #dddddd;").html(ar)}})};z();var E=$("#divRecGoodsList");var y=$("#divJoinGoodsList");var k=$("#hdDataType");var M=$("#divRec");var D=$("#divRecList");var j=0,n=0,g=0;var h=0,G=0,A=0;var K=M.find("a.z-prev"),t=M.find("a.z-next");var F=0,p=1000,x=238,J=5;var O={FIdx:1,EIdx:15,state:-1,region:"3m",beginTime:"",endTime:"",keyWords:"",isCount:0};var q=function(Q){var R="";if(Q==0){R="sortID=0";R+="&brandID=0";R+="&orderFlag=20";R+="&FIdx=1";R+="&EIdx=15";R+="&isCount=0"}else{R="FIdx="+O.FIdx;R+="&EIdx="+O.EIdx;R+="&state="+O.state;R+="&region="+O.region;R+="&beginTime="+O.beginTime;R+="&endTime="+O.endTime;R+="&keyWords="+encodeURI(O.keyWords);R+="&isCount="+O.isCount}return R};var u={noLogin:'<div class="f-login-prompt clrfix"><div class="gth-icon transparent-png"></div><a href="https://passport.1yyg.com/login.html?forward=rego">登录</a>后查看您参与过的商品</div>',noBuyData:'<div class="f-login-prompt clrfix"><div class="gth-icon transparent-png"></div>您最近还没有参与云购哦！</div>',noRecData:'<div class="f-login-prompt clrfix"><div class="gth-icon transparent-png"></div>暂无推荐商品哦！</div>'};var e=function(Q){M.find(".g-loading").show();K.addClass("z-tran").hide();t.addClass("z-tran").hide();if(Q==0){GetJPData(d,"GetRecGoodList",q(0),function(aa){if(aa.code==0){var V=aa.listItems;j=V.length;if(j>10){n=3}else{if(j>5){n=2}else{if(j>0){n=1}}}if(n>=2){t.removeClass("z-tran")}if(j>0){K.show();t.show();var T="",Y="",Z="",S="";for(var W=0;W<j;W++){var R=parseInt(V[W].codeQuantity)-parseInt(V[W].codeSales);var U=R;if(V[W].codeType==3){U=V[W].codeLimitBuy>=R?R:V[W].codeLimitBuy}Y="http://img.1yyg.net/GoodsPic/pic-200-200/"+V[W].goodsPic;Z="http://www.1yyg.com/product/"+V[W].codeID+".html";S="";if((W+1)%5==0||W==j-1){S='class="z-tsd"'}var X=V[W].codeType==3?'<div class="f-callout"><span class="F_goods_xg transparent-png">限购</span></div>':"";T+="<ul "+S+" codeid="+V[W].codeID+" canbuy="+U+'>    <li>        <cite><a href="'+Z+'" target="_blank">            <img name="goodsImg" src="'+Y+'" /></a></cite>        <cite class="pro-name" title='+V[W].goodsSName+'><a href="'+Z+'" target="_blank" class="gray3">'+V[W].goodsSName+'</a></cite><cite class="gray9">价值：￥'+V[W].codePrice+".00</cite>"+v(V[W])+'        <cite class="pro-btn"><a codeid="'+V[W].codeID+'"  class="a-cut" >加入购物车</a></cite>'+X+"    </li></ul>"}E.html(T).width(j*x)}}else{if(aa.code==-1){E.html(u.noRecData)}else{E.html(u.noRecData)}}M.find(".g-loading").hide()})}else{if(s<=0){M.find(".g-loading").hide();y.html(u.noLogin);return}GetJPData("http://member.1yyg.com","getMemberCenterBuyMessage",q(1),function(S){if(S.code==0){var X=S.str.listItems;h=X.length;if(h>10){G=3}else{if(h>5){G=2}else{if(h>0){G=1}}}if(G>=2){t.removeClass("z-tran")}if(h>0){K.show();t.show();var U="",W="",R="",T="";for(var V=0;V<h;V++){W="http://img.1yyg.net/GoodsPic/pic-200-200/"+X[V].goodsPic;R="http://www.1yyg.com/product/"+X[V].codeID+".html";T="";if((V+1)%5==0||V==h-1){T='class="z-tsd"'}U+="<ul "+T+" codeid="+X[V].codeID+'>    <li>        <cite><a href="'+R+'" target="_blank">            <img name="goodsImg" src="'+W+'" /></a></cite>        <cite class="pro-name" title='+X[V].goodsName+'><a href="'+R+'" target="_blank" class="gray3">'+X[V].goodsName+"</a></cite>"+v(X[V])+'        <cite class="pro-btn"><a codeid="'+X[V].codeID+'" class="a-cut" >加入购物车</a></cite>    </li></ul>'}y.html(U).width(h*x).show()}}else{if(S.code==-1){y.html(u.noBuyData)}else{y.html(u.noBuyData)}}M.find(".g-loading").hide()})}};e(0);var v=function(T){var V=parseInt(T.codeSales);var U=parseInt(T.codeQuantity);var R=parseInt(U-V);var Q=formatFloat((V*100)/U);Q=V>0&&Q<1?1:Q;var S='        <cite class="g-progress">            <dl class="m-progress">                <dt title="已完成'+Q+'%"><b style="width:'+Q+'%;"></b></dt>            </dl>        </cite>';return S};var m=function(W,R,S,Q,Y){var T=350;var V=160;if(typeof(Q)!="undefined"){T=Q}if(typeof(Q)!="undefined"){V=Y}var X=null;var Z='<div class="z-popUp z-pop-box"><span class="gray3">'+W+'</span><a href="javascript:;" title="取消" class="z-btn-cancel">取消</a><a href="javascript:;" title="确定" class="z-btn-determine">确定</a></div>';var U=function(){var aa=$("#pageDialog");aa.find("a.z-btn-determine").click(function(){if(typeof(R)!="undefined"&&R!=null){R()}$.PageDialog.close()});aa.find("a.z-btn-cancel").click(function(){if(typeof(S)!="undefined"&&S!=null){S()}$.PageDialog.close()})};$.PageDialog(Z,{W:T,H:V,close:false,autoClose:false,ready:U})};var N=function(R){var Q=R.attr("codeid");$cartFun.addShopCart(Q,1,function(S){if(S.code==0){C("addCartS",function(){z()},R.find("img"))}else{if(S.code==2){C("addCartFull",null,R.find("img"))}else{C("addCartF",null,R.find("img"))}}},R.attr("canbuy"))};D.on("click","a.a-cut",function(Q){N($(this).parent().parent().parent())});D.on("mouseenter","ul",function(){$(this).addClass("hover")}).on("mouseleave","ul",function(){$(this).removeClass("hover")});var P=1190;if($(window).width()<1190){P=990;x=198}$(window).resize(function(){if(E.children("ul").length==0&&y.children("ul").length>0){return}if($(window).width()<1190){P=990;x=198}else{P=1190;x=238}K.addClass("z-tran");t.removeClass("z-tran");if(y.children("ul").length>0){A=0;y.css({width:y.children("ul").length*x+"px","margin-left":"0px"})}if(E.children("ul").length>0){g=0;E.css({width:E.children("ul").length*x+"px","margin-left":"0px"})}if(D.width()==1188||D.width()==988){D.css({width:(P-2)+"px"})}else{D.css({width:P+"px"})}});$(".f-submenu").on("click","a",function(){return;var Q=$(this);if(Q.hasClass("z-current")){return !1}Q.siblings("a").removeClass("z-current").end().addClass("z-current");if(Q.attr("id")=="a_divRecGoodsList"){k.val("0");E.show();y.hide();if(g<=0){K.addClass("z-tran")}else{K.removeClass("z-tran")}if(g>=n-1){t.addClass("z-tran")}else{t.removeClass("z-tran")}}else{k.val("1");E.hide();y.show();if(y.html()==""){e(1)}if(A<=0){K.addClass("z-tran")}else{K.removeClass("z-tran")}if(A>=G-1){t.addClass("z-tran")}else{t.removeClass("z-tran")}}});var H=function(){M.on("click",".z-next",function(R){if(k.val()=="0"){if(g<n-1){g++;F=-x*J*g;if(g==n-1){F+=2}else{F+=1}console.log(Q.recLeft);console.log(Q.recRight);D.css("border-left",Q.recLeft);D.css("border-right",Q.recRight);D.css({width:(P-2)+"px"});E.stop(!0,!1).animate({marginLeft:F},p,function(){D.css("border-left",Q.none);D.css("border-right",Q.none);D.css({width:(P+2)+"px"});if(g==n-1){t.addClass("z-tran")}})}}else{if(A<G-1){A++;F=-x*J*A;if(A==G-1){F+=2}else{F+=1}D.css("border-left",Q.joinLeft);D.css("border-right",Q.joinRight);D.css({width:(P-2)+"px"});y.stop(!0,!1).animate({marginLeft:F},p,function(){D.css("border-left",Q.none);D.css("border-right",Q.none);D.css({width:(P+2)+"px"});if(A==G-1){t.addClass("z-tran")}})}}K.removeClass("z-tran")});M.on("click",".z-prev",function(R){if(k.val()=="0"){if(g>0){g--;F=-x*J*g;if(g>0){F+=1}D.css("border-left",Q.recLeft);D.css("border-right",Q.recRight);D.css({width:(P-2)+"px"});E.stop(!0,!1).animate({marginLeft:F},p,function(){D.css("border-left",Q.none);D.css("border-right",Q.none);D.css({width:(P+0)+"px"});if(g==0){K.addClass("z-tran")}})}}else{if(A>0){A--;F=-x*J*A;if(A>0){F+=1}D.css("border-left",Q.joinLeft);D.css("border-right",Q.joinRight);D.css({width:(P-2)+"px"});y.stop(!0,!1).animate({marginLeft:F},p,function(){D.css("border-left",Q.none);D.css("border-right",Q.none);D.css({width:(P+0)+"px"});if(A==0){K.addClass("z-tran")}})}}t.removeClass("z-tran")});var Q={recLeft:E.children("ul:first").hasClass("z-tsd")?"1px solid #ff6600":"1px solid #e4e4e4",recRight:E.children("ul:last").hasClass("z-tsd")?"1px solid #ff6600":"1px solid #e4e4e4",joinLeft:y.children("ul:first").hasClass("z-tsd")?"1px solid #ff6600":"1px solid #e4e4e4",joinRight:y.children("ul:last").hasClass("z-tsd")?"1px solid #ff6600":"1px solid #e4e4e4",none:"none"}};H()};Base.getScript(a+"/JS/popLogin.js?date=160513",b)});