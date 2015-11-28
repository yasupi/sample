//header_pull_down.js
//JSsugiyama
//ヘッダーカテゴリプルダウンメニュー
//jQuery必須動作

$(function() {
	$('li[name*="pull-down"]').click(function(){
		if ($(this).attr("class") == "active") {
			$("#categoryNavi .category").slideUp();
			$('li[name*="pull-down"]').removeClass("active");
		} else {
			var Boxnum = $('li[name*="pull-down"]').index(this);
			$("#categoryNavi .category").css("display","none");
			$("#categoryNavi .category").eq(Boxnum).slideDown();
			$('li[name*="pull-down"]').removeClass("active");
			$(this).addClass("active");
		}
	});

	$("#headerBox").hover(
		function(){menu_hover = true;},
		function(){menu_hover = false;}
	);

	$(document).click(function() {
		if (menu_hover == false) {
			$("#categoryNavi .category").slideUp();
			$('li[name*="pull-down"]').removeClass("active");
		}
	});
});
