//input_text_focus.js
//JSsugiyama
//ログイン用入力テキストフォーカス
//jQuery必須動作

<!--
$(function(){
	$(window).load(function(){
		$('input[type=text],input[type=password],textarea').each(function(){
			var thisTitle = $(this).attr('title');
			if(!(thisTitle === '')){
				$(this).wrapAll('<span style="text-align:left;display:inline-block;position:relative;"></span>');
				$(this).parent('span').append('<span class="placeholder">' + thisTitle + '</span>');
				$('.placeholder').css({
					top:'8px',
					left:'6px',
					fontSize:'100%',
					lineHeight:'120%',
					textAlign:'left',
					color:'#999',
					overflow:'hidden',
					position:'absolute',
					zIndex:'99'
				}).click(function(){
					$(this).prev().focus();
				});

				$(this).focus(function(){
					$(this).next('span').css({display:'none'});
				});

				$(this).blur(function(){
					var thisVal = $(this).val();
					if(thisVal === ''){
						$(this).next('span').css({display:'inline-block'});
					} else {
						$(this).next('span').css({display:'none'});
					}
				});

				var thisVal = $(this).val();
				if(thisVal === ''){
					$(this).next('span').css({display:'inline-block'});
				} else {
					$(this).next('span').css({display:'none'});
				}
			}
		});
	});
});
//-->
