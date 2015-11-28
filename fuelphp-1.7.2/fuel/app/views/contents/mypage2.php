

<script>
/********画像アップロード関連ここから***********/
    $(function() {
       var init = function() {
          // 選択後イベント
          $('input[name="upfile[]"]').change(function(evt) {
               $('div#file_list').text('');

               jQuery.each(evt.target.files, function(i) {
                    // サムネイル画像生成
                     var reader = new FileReader();
                      reader.readAsDataURL($(this)[0]);
                   // ファイル名表示

                      reader.onloadend=function(i){
                       $('div#file_list')
                       .append($('<img width="150px" height="100px" style="margin: 2px"/>').attr('src', this.result),file_name+'<button onClick ="deleteThumbnail()">削除');
                      };
                     var file_name = ($(this)[0].name);


                     var files = document.getElementById("files").files[i];
                     console.log(files);

               });
           });
        }
       init();
     });

        function deleteThumbnail(){
            //サムネイル非表示
        	$('div#file_list').remove();

        	//TODO input[]に上がったのを削除
        	$("input[type='file']").val(null);
        	console.log($("input[type='file']"));
        }
/********画像アップロード関連ここまで***********/

/*****モーダル関連ここから***********/
$(function(){
    // 「.modal-open」をクリック
    $('.modal-open').click(function(){
        // オーバーレイ用の要素を追加
        $('body').append('<div class="modal-overlay"></div>');
        // オーバーレイをフェードイン
        $('.modal-overlay').fadeIn('slow');

        // モーダルコンテンツのIDを取得
        var modal = '#' + $(this).attr('data-target');
       　// console.log(modal);例 「#con1」表示
        // モーダルコンテンツの表示位置を設定
        modalResize();
         // モーダルコンテンツフェードイン
        $(modal).fadeIn('slow');

        // 「.modal-overlay」あるいは「.modal-close」をクリック
        $('.modal-overlay, .modal-close').off().click(function(){
            // モーダルコンテンツとオーバーレイをフェードアウト
            $(modal).fadeOut('slow');
            $('.modal-overlay').fadeOut('slow',function(){
                // オーバーレイを削除
                $('.modal-overlay').remove();
            });
        });

        // リサイズしたら表示位置を再取得
        $(window).on('resize', function(){
            modalResize();
        });

        // モーダルコンテンツの表示位置を設定する関数
        function modalResize(){
            // ウィンドウの横幅、高さを取得
            var w = $(window).width();
            var h = $(window).height();

            // モーダルコンテンツの表示位置を取得
            var x = (w - $(modal).outerWidth(true)) / 2;
            var y = (h - $(modal).outerHeight(true)) / 2;

            // モーダルコンテンツの表示位置を設定
            $(modal).css({'left': x + 'px','top': y + 'px'});
        }

    });
});
/******モーダルここまで*********************/

 /*タブコンテンツ切り替えここから*/
$(function(){
	var tab_id = $("ul.tab li a.active").attr("href");
	console.log(tab_id);
	$("ul.panel li:not("+ tab_id +")").hide();

	$("ul.tab li a").click(function(){
			$("ul.tab li a.active").removeClass("active");
			$(this).addClass("active");
			$("ul.panel li").hide();
			$($(this).attr("href")).show();

			return false;
		});


});



 /*タブコンテンツ切り替えここまで*/

</script>





<!-- ============HTMLスタート============= -->


<!-- <form action="mypage/upload" method="post" enctype="multipart/form-data"> -->
<!-- 	 <input id="files" type="file" name="upfile[]" size="30" multiple accept="image/jpeg,image/png" /><br ><br > -->
<!-- 	<input  type="submit"value="アップロード" /> -->
<!-- </form> -->
<!-- <div id="file_list"></div> -->


<div id="menu">
	<ul class="tab">
		<li><a href="#tab1" class="active">タブ１</a></li>
		<li><a href="#tab2">タブ2</a></li>
		<li><a href="#tab3">タブ3</a></li>
	</ul>

	<ul class="panel">
		<li id="tab1">コンテンツ１</li>
		<li id="tab2">コンテンツ２</li>
		<li id="tab3">コンテンツ３</li>
	</ul>

</div>


<!-- <ul class="tabs">
  <li id="tab1" class="tab active"><a href="#cont1">タブ１</a></li>
  <li id="tab2" class="tab"><a href="#cont2">タブ２</a></li>
  <li id="tab3" class="tab"><a href="#cont3">タブ３</a></li>
</ul>
<div class="panels">
    <div id="cont1" class="panel active">コンテンツ１</div>
    <div id="cont2" class="panel">コンテンツ２</div>
    <div id="cont3" class="panel">コンテンツ３</div>
</div> -->

<a data-target="con1" class="modal-open">投稿する</a>

<div id="con1" class="modal-content">
    <form action="mypage/upload" method="post" enctype="multipart/form-data">
	 <input id="files" type="file" name="upfile[]" size="30" multiple accept="image/jpeg,image/png" /><br ><br >
	<input  type="submit"value="アップロード" />
</form>
<div id="file_list"></div>
    <p><a class="modal-close">閉じる</a></p>
</div>


