//header_navi_focus.js
//JSsugiyama
//ヘッダーナビゲーションボタンフォーカス
//jQuery必須動作

<!--
$(function() {
	$('#headerNavi li')
		.each(function(i){
			$(this).css('background', 'url("assets/img/common/botton'+(i+1)+'.gif") no-repeat');
		})
		.find('img').hover(
			function(){
				$(this).stop().animate({'opacity' : '1'}, 1000);
			},
			function(){
				$(this).stop().animate({'opacity' : '0'}, 500);
			}
		);
	}
);
//-->
