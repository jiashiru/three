YG=YG||{};var CBLFun=null;YG.SearchResult={skinDomain:"http://skin.1yyg.net",_SearchKey:$("#hidSearchKey").val(),_OrderFlag:parseInt($("#hidOrder").val()),_CurIndex:0,_PageSize:20,_PageMax:120,_PageIndex:parseInt($("#hidPageIndex").val()),_PageCount:0,_IsCount:1,_LoadCount:0,_TotalCount:0,_SortTabObj:$("div.list_sort"),_ListObj:$("#ulGoodsList"),_PageNavObj:$("#divPageNav"),_LoadingObj:$("#divLoadingLine"),_IsLoading:true,_IsLoadCommJs:false,_IsBindPageFun:false,_DataListCache:{},$onekeyToCart:$("#onekeyToCart"),$searchResultCount:$("#searchResultCount"),init:function(){var a=this;a._LoadCount=a._PageMax/a._PageSize;a.ie6Process();a.getDataList();a.scrollReg();a.txtSearch();a.multipleAddToCartReg()},ie6Process:function(){$("li[name='liPrice']").each(function(b,a){if(b==0){$(this).hover(function(){$(this).hide().next().show()},function(){})}else{$(this).hover(function(){},function(){$(this).hide().prev().show()})}})},txtSearch:function(){var a=this;$("#txtHSearch").css({color:"#333",padding:"9px 0px 9px 5px",width:"235px"}).val(a._SearchKey).next("span").css("zIndex","0").hide()},scrollReg:function(){var a=this;$(window).scroll(function(){if(a._CurIndex<a._LoadCount&&!a._IsLoading){var b=$(window).scrollTop()+$(window).height();var c=a._ListObj.offset().top+a._ListObj.height();if(b>=c){if(a._IsLoading){return}if(a._ListObj.children().length==0){return}a._IsLoading=true;a.showGoodsList()}}})},getParaStr:function(){var a=this;return"key="+encodeURIComponent(a._SearchKey.replace(/(\/)/g,""))+"&orderFlag="+a._OrderFlag+"&quantity="+a._PageMax},getPageUrl:function(a){var b=this;var c="/search/";c+="m"+a+"/";if(b._OrderFlag>10){c+="r"+b._OrderFlag+"/"}c+="?q="+b._SearchKey;return c},getDataList:function(){var a=this;a._LoadingObj.show();GetJPData("http://search.1yyg.com","getSearchList",a.getParaStr(),function(d){if(d.code==0){if(a._IsLoadCommJs){a.showListFun(d)}else{Base.getScript(a.skinDomain+"/JS/GoodsComm.js?date=160721",function(){a._IsLoadCommJs=true;a.showListFun(d)})}}else{a._LoadingObj.hide();if(a._CurIndex==0){if(a._SearchKey!=""){a.$searchResultCount.text(0);var b='<div class="announced-soon clrfix"><div class="kt-icon"><img src="http://skin.1yyg.net/images/kt-ll.jpg"><p class="gray">很抱歉，没有您想要的商品哦~</p></div></div>';a._ListObj.hide().after(b)}else{a.$searchResultCount.parent().hide();var c='<div class="announced-soon clrfix"><div class="kt-icon"><img src="http://skin.1yyg.net/images/kt-ll.jpg"><p class="gray">请输入您想搜索的关键词~</p></div></div>';a._ListObj.hide().after(c)}}else{if(a._PageIndex!=1&&a._TotalCount>a._PageMax){a._PageNavObj.html(getListPaging(a._TotalCount,a._PageMax,a._PageIndex,5,a.getPageUrl)).show()}}a._CurIndex=a._LoadCount}a._IsLoading=false})},showListFun:function(d){var c=this;var b=parseInt(d.count);if((b>0)){c.$onekeyToCart.show();b=b>120?120:b;c.$searchResultCount.text(b)}if(c._IsCount==1){c._TotalCount=d.count>c._PageMax?c._PageMax:d.count;c._PageCount=1;c._IsCount=0}c._LoadingObj.hide();var a=d.listItems;var f=a.length;if(f>0){c._DataListCache["page"+c._PageIndex]=a;c.showGoodsList()}else{c._CurIndex=c._LoadCount}},showGoodsList:function(){var k=this;k._CurIndex++;var f=k._DataListCache["page"+k._PageIndex];if(f!=null&&f!=undefined){var n=f.length;var a=(k._CurIndex-1)*k._PageSize;var s=a+k._PageSize;s=s>n?n:s;var m="";var j="";var o="";var b=0;var g=0;var c=0;var p=0;var A=0;var v=$(window).width()<1190?217:266;k._ListObj.show();for(var y=a;y<s;y++){m="";j=f[y].goodsSName;o=f[y].goodsKeyName;var x=f[y].isSale==1;if(x){j="(第"+f[y].codePeriod+"云)&nbsp;"+j;o="(第"+f[y].codePeriod+"云)&nbsp;"+o;var d="";var u=parseInt(f[y].goodsTag);switch(u){case 1:d+='<div class="f-callout"><span class="F_goods_xp transparent-png">新品</span></div>';break;case 2:d+='<div class="f-callout"><span class="F_goods_tj transparent-png">推荐</span></div>';break;case 3:d+='<div class="f-callout"><span class="F_goods_rq transparent-png">人气</span></div>';break;case 10:d+='<div class="f-callout"><span class="F_goods_xg transparent-png">限购</span></div>';break}b=parseInt(f[y].codeSales);g=parseInt(f[y].codeQuantity);c=parseInt(g-b);p=parseFloat(b)/g;A=parseInt(p*v);m+='<div goodsID="'+f[y].goodsID+'" idx='+(y+1)+' class="soon-list-con '+((y+1)%4==0?"soon-list4":"")+'" codeID="'+f[y].codeID+'" limitBuy="'+f[y].codeLimitBuy+'" goodsID="'+f[y].goodsID+'"><div class="soon-list"><ul><li class="g-soon-pic"><a href="/products/'+f[y].goodsID+'.html" target="_blank" title="'+j+'"><img name="goodsImg" src="http://img.1yyg.net/GoodsPic/pic-200-200/'+f[y].goodsPic+'" /></a></li><li class="soon-list-name"><a href="/products/'+f[y].goodsID+'.html" target="_blank" title="'+j+'">'+o+'</a></li><li class="gray6">价值：￥'+formatFloat(f[y].codePrice)+'</li><li class="g-progress"><dl class="m-progress"><dt title="已完成'+formatFloat(p*100)+'%"><b style="width:'+(b==0?0:(parseInt(A)==0?1:A))+'px;"></b></dt><dd><span class="orange fl"><em>'+b+'</em>已参与</span><span class="gray6 fl"><em>'+g+'</em>总需人次</span><span class="blue fr"><em>'+c+'</em>剩余</span></dd></dl></li><li name="buyBox"><a href="javascript:;" title="立即1元云购" class="u-now" id="btnYgOneBuy'+y+'">立即1元云购</a><a href="javascript:;" class="u-cart"><s></s></a></li></ul>'+d+'<div class="f-add-attention"></div></div><div class="u_buyCount"></div></div>'}else{m+="<div idx="+(y+1)+' class="soon-list-con '+((y+1)%4==0?"soon-list4":"")+'"><div class="soon-list m-list-shelves"><dl><dt><a href="/products/'+f[y].goodsID+'.html" target="_blank" title="'+j+'"><img src="http://img.1yyg.net/GoodsPic/pic-200-200/'+f[y].goodsPic+'" /></a></dt><dd><p><a href="/products/'+f[y].goodsID+'.html" target="_blank" title="'+j+'">'+o+"</a></p>价值：￥"+formatFloat(f[y].codePrice)+'</dd><dd class="f-shelves-btn"><a href="/products/'+f[y].goodsID+'.html" target="_blank" title="查看详情">查看详情</a></dd></dl><div class="f-shelves-yxj"><span class="transparent-png">已结束</span></div></div></div>'}var l=$(m);if((y+1)==n&&n%4!=0){l.addClass("f-add-borR")}k._ListObj.append(l).show();if(x){l.GoodsItemFun();var q="http://img.1yyg.net/GoodsPic/pic-70-70/"+f[y].goodsPic;var r=f[y].codeLimitBuy>0?true:false;var z=[{isLimitBuy:r,image:q,codeId:f[y].codeID,goodsId:f[y].goodsID,periods:f[y].codePeriod,surplus:c,callBackFunc:t}];$("#btnYgOneBuy"+y).OneBuy({extend:z})}else{l.hover(function(){if(parseInt($(this).attr("idx"))%4==0){$(this).removeClass("soon-list4").addClass("soon-list-hover2")}$(this).addClass("soon-list-hover")},function(){if(parseInt($(this).attr("idx"))%4==0){$(this).addClass("soon-list4").removeClass("soon-list-hover2")}$(this).removeClass("soon-list-hover")})}}if(n<k._PageSize||k._CurIndex*k._PageSize==k._TotalCount){k._CurIndex=k._LoadCount}if(k._CurIndex>=k._LoadCount){if(k._TotalCount>k._PageMax){k._PageNavObj.html(getListPaging(k._TotalCount,k._PageMax,k._PageIndex,5,k.getPageUrl)).parent().show();if(!k._IsBindPageFun){k._IsBindPageFun=true;var B=$("#btnGotoPage");var h=B.parent().prev().find("input");var C=function(){var i=parseInt(h.val());if(i>0){if(i>k._PageCount){i=k._PageCount}window.location.href=k.getPageUrl(i)}return false};var w=1;h.keyup(function(D){var E=D||window.event||arguments.callee.caller.arguments[0];if(E){if(E.keyCode==13){C()}else{var i=$(this).val();if(!(/^\d+$/.test(i))){$(this).val(w)}else{w=i;$(this).val(i)}}}}).mouseover(function(){$(this).focus().select()});B.click(function(){C();return false})}}else{k._PageNavObj.hide()}}k._IsLoading=false;k._ListObj.show()}k._LoadingObj.hide();function t(D){if(D!=null){e="goodsID="+D.goodsId;var H=$("div["+e+"]").find("div.soon-list").eq(0);var I=H.find("li.g-progress");if(D.alreadybuy==D.totalnum){D.ratio=100}var G=H.find("li[name=buyBox]");var E=G.parent().find("li.soon-list-name").find("a");G.attr("codeperiod",D.periods);var i=E.text().split(")")[1];i="(第"+D.periods+"云)"+i;E.text(i).attr("title",i);if(D.ratio==100){I.find("dt").attr("title","已完成0");I.find("b").attr("style","width:0%");I.find("span.orange").find("em").html(0);I.find("span.gray6").find("em").html(D.totalnum);I.find("span.blue").find("em").html(D.totalnum)}else{var F=D.alreadybuy/D.totalnum;doneRatio=(F*100).toFixed(0);I.find("dt").attr("title","已完成"+doneRatio+"%");I.find("b").attr("style","width:"+doneRatio+"%");I.find("span.orange").find("em").html(D.alreadybuy);I.find("span.gray6").find("em").html(D.totalnum);I.find("span.blue").find("em").html(D.surplus)}}}},multipleAddClicked:false,multipleAddToCartReg:function(){var a=this;$("#multipleAddToCartBtn").click(function(){var h=$(this);if(a.multipleAddClicked===true){return false}else{a.multipleAddClicked=true;var j=$("#ulGoodsList").children("div").filter(function(i){return(!!$(this).attr("codeid")===true)}).map(function(){var i=$(this).attr("codeid");var k=$(this).find(".g-progress").find("span.blue.fr").find("em").text();return{codeid:i,canbuyNum:k}}).get();var d=[];var c=[];for(var b=0;b<j.length;b++){d.push(j[b].codeid);c.push(j[b].canbuyNum)}var f=0;var g=0;$cartFun.getShopCartNum(function(i){f=parseInt(i.str);g=parseInt(i.num);$cartFun.addBatchShopCart(d.join(","),c.join(","),function(k){$cartFun.getShopCartNum(function(p){var o=$("#rightTool").find(".m-banner-list .f-shopping-cart em");var m=parseInt(p.str);var n=parseInt(p.num);o.text(n);$("#spHCart").text("("+n+")");if(m-f>0){var l='<div class="Pop-ups2016"><div class="gray3 pop-theme">'+(m-f)+'个商品成功添加到购物车</div><div class="pop-btn"><a href="http://cart.1yyg.com/CartList.do" title="去购物车" class="orange_btn">去购物车</a></div></div>';$.PageDialog(l,{W:320,H:155,ready:function(){}})}else{FailDialog("添加失败！")}a.multipleAddClicked=false})})})}})}};$(document).ready(function(){var a="http://www.1yyg.com";Base.getScript("http://skin.1yyg.net/JS/jquery.onebuy.js?date=17011702");YG.SearchResult.init()});