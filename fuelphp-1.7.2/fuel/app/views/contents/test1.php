<?php




?>
<!DOCTYPE html>
<html>
<head>
	<!-- ページのタイトルを記述 -->
	<title>コンテンツボックス</title>
	<meta charset="utf-8">
	<meta name="description" content=""><!-- content属性にページの紹介文を記述 -->
	<meta name="author" content=""><!-- content属性にページの著者情報を記述 -->
	<!-- モバイル端末への対応、ページをビューポートの幅に合わせてレンダリング（Android, iOS6以降）ズームを許可しない設定「user-scalable=no」は加えない -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- スタイルシートはできるだけ早くレンダリングされるため、HTMLドキュメントの上の方に記述href属性にスタイルシートファイルのURIを記述 -->
	<link rel="icon" type="image/png" href="/img/favicon.png"><!-- href属性にファビコンファイルのURIを記述 -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<style type="text/css">
		/*■■■■■初期設定■■■■■*/
		* {
			margin: 0;
			padding: 0;
			text-decoration: none;
			font-size: 100%;
			font-style: normal;
			font-family: sans-serif;
			font-weight: normal;
			font-family: 'ＭＳ Ｐゴシック', 'メイリオ', sans-serif;
		}

		html, body, div, span, iframe,
		h1, h2, h3, h4, h5, h6, p, pre, a, em, strong,
		sub, sup, dl, dt, dd, ol, ul, li, fieldset, form,
		label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
			border: 0 none;
		}

		img, a img {
			vertical-align: bottom;
			border: none;
		}

		h1, h2, h3, h4, p, li, a, dt, dd {
			word-wrap: break-word;
		}
		/*■■■■■初期設定■■■■■*/
		#wrapper {
			overflow: hidden;
		}

		#headerArea {
			padding: 10px auto;
			width: 100%;
			height: 100px;
			background-color: #47A0ED;
		}

		#headerArea p {
			line-height: 100px;
			text-align: center;
		}

		#mainContent {
			margin: 0 auto;
			padding: 0 10px;
			width: 800px;
			height: 600px;
			overflow: scroll;
			border-left: solid 1px #CCCCCC;
			border-right: solid 1px #CCCCCC;
		}

		#mainContent h1 {
			padding: 10px 0;
			height: 40px;
			line-height: 40px;
			color: #808080;
			text-align: center;
			font-size: 20px;
			font-weight: bold;
		}

		#mainContent h2 {
			margin-bottom: 20px;
			padding-left: 20px;
			height: 40px;
			line-height: 44px;
			border: solid 1px #808080;
			background-color: #C0C0C0;
			text-align: left;
			font-size: 16px;
			font-weight: bold;
			color: #4D4D4D;
		}

		#mainContent .contentBox {
			margin-bottom: 20px;
			padding: 20px 10px;
			border: solid 2px #FF9966;
		}

		#mainContent .contentBox .timeBox {
			margin-bottom: 6px;
			padding: 0 10px;
			width: 340px;
			height: 30px;
			line-height: 30px;
			border: solid 2px #4D88FF;
			background-color: #FFFF7A;
			text-align: center;
			font-size: 12px;
		}

		#mainContent .contentBox .Box {
			margin-bottom: 6px;
			padding: 0 10px;
			width: 140px;
			height: 30px;
			line-height: 30px;
			border: solid 2px #4D88FF;
			background-color: #FFFF7A;
			text-align: center;
			font-size: 12px;
		}

		#mainContent .contentBox .fortuneBox {
			margin-bottom: 6px;
			padding: 0 10px;
			width: 200px;
			height: 30px;
			line-height: 30px;
			border: solid 2px #4D88FF;
			background-color: #FFFF7A;
			text-align: center;
			font-size: 12px;
		}

		#mainContent .contentBox table {
			width: 400px;
			border-spacing: 0;
			border-top: 1px solid #CCCCCC;
			border-left: 1px solid #CCCCCC;
			font-size: 12px;
		}

		#mainContent .contentBox table tr th {
			height: 30px;
			line-height: 30px;
			border-bottom: 1px solid #CCCCCC;
			border-right: 1px solid #CCCCCC;
			background-color: #E6EAFF;
			font-size: 14px;
			font-weight: bold;
			color: #4D4D4D;
		}

		#mainContent .contentBox table tr td {
			height: 30px;
			line-height: 30px;
			border-bottom: 1px solid #CCCCCC;
			border-right: 1px solid #CCCCCC;
			text-align: center;
		}

		#mainContent .contentBox #item6 {
			margin-bottom: 30px;
		}

		#mainContent .contentBox #item6 p {

		}

		#mainContent .contentBox #item6 input[type="text"] {
			padding: 3px 4px;
			width: 100px;
			border: 2px solid #1A85FF;
		}

		#mainContent .contentBox #item6 input[type="submit"] {
			width: 60px;
			height: 32px;
			border: 1px solid #CCCCCC;
		}

		#footerArea {
			padding: 10px auto;
			width: 100%;
			height: 100px;
			background-color: #B3B3B3;
		}

		#footerArea p {
			line-height: 100px;
			text-align: center;
		}
	</style>
</head>



<body>
	<div id="wrapper">
		<div id="headerArea"><p>ヘッダー領域</p></div><!-- //headerArea -->
		<div id="mainContent">
			<h1>テスト出力項目</h1>
			<div class="contentBox">
				<h2>項目１</h2>
				<script type="text/javascript">
				<!--



				function submitDisabled() {
					$('#js_submit_display').fadeIn("slow");
				}

				$(document).ready(function () {
					$('#js_submit_display').hide();
					$("input[name='display']").click(function () {
						submitDisabled();
					});
				});

				function clear_radio(){
					for(var i=0; i<document.form1.display.length;i++){
						document.form1.display[i].checked=false;
					}
				}
				// -->
				</script>

<script type="text/javascript">
<!--

// -->
</script>

				<form id="item6" name="form1" action="test1.php" method="post">
					<p style="margin-bottom: 20px;">サーバーサイド式で要素を表示非表示！！<br>「表示する」または「表示しない」を選択し、「実行」ボタンを押して下さい。</p>
					<input type="radio" name="display" value="1"> 「表示する」
					<input type="radio" name="display" value="0"> 「表示しない」
					<input type="button" onclick="clear_radio()" value="選択クリア">
					<input id="js_submit_display" type="submit" name="run" value="実行">
				</form>
<?php
//俺様式　td＆thタグ専用スタイル埋め込み変数
$th_style = ' style="padding: 2px; width: 188px; border: 1px solid; #666666;"';
$td_style = ' style="padding: 2px; width: 188px; border: 1px solid; #666666; line-height: normal;"';

//空の変数準備
$content_category ='';
$content_description ='';


if(isset($_POST['display'])) {//displayに値が入っているかをチェック
	$display_flag = $_POST['display'];


	if($display_flag == 1) {
		$content_category = array('イラスト', 'マンガ', 'アニメ', 'ゲーム');
		$content_description = array(
										'「イラストレーション」の略。広告・書籍などに入れる挿絵や図解画。',
										'こま割りのある絵を主体とし、せりふ・擬音語などを補助手段として、出来事や物語を娯楽的（時には風刺的）に表したもの。その絵。例、児童まんが、政治漫画、まんがアニメ、コミック。',
										'「anima（アニマ）」に由来するためで、止まっている絵に命を与え活動させるところから、このような動画も意味するようになった。 日本では当初、「アニメーション」は映像関係の業界用語として用いられるだけで、一般では「漫画映画」や「動画」、テレビで放映されるものは「テレビ漫画」と呼ばれた。',
										'主に一般消費者向けのコンピュータゲーム（家庭用ゲーム）に対する一般名称である。 テレビ受像機をディスプレイとして使うことから日本ではこう呼ばれており和製英語である。'
									);
	}

	if(!empty($content_category) && !empty($content_description)) {
?>
			<table style="width: 759px; border-collapse: collapse;">
				<tr style="border-collapse: collapse;">
					<th<?php echo $th_style ?>><?php echo $content_category[0] ?></th>
					<th<?php echo $th_style ?>><?php echo $content_category[1] ?></th>
					<th<?php echo $th_style ?>><?php echo $content_category[2] ?></th>
					<th<?php echo $th_style ?>><?php echo $content_category[3] ?></th>
				</tr>
				<tr style="border-collapse: collapse;">
					<td<?php echo $td_style ?>><?php echo $content_description[0] ?></td>
					<td<?php echo $td_style ?>><?php echo $content_description[1] ?></td>
					<td<?php echo $td_style ?>><?php echo $content_description[2] ?></td>
					<td<?php echo $td_style ?>><?php echo $content_description[3] ?></td>
				</tr>
			</table>
<?php
	}
}
?>

			</div>
			<div class="contentBox">
				<h2>項目２</h2>
<?php
//
//DB読込
//$db_result = DB::query('SELECT id,name FROM u_images_a_category');
//$db_result->execute();

//	var_dump($db_result);



?>
			</div>
			<div class="contentBox">
				<h2>項目３</h2>
			</div>
			<div class="contentBox">
				<h2>項目４</h2>
			</div>
			<div class="contentBox">
				<h2>項目５</h2>
			</div>
			<div class="contentBox">
				<h2>項目６</h2>
			</div>
			<div class="contentBox">
				<h2>項目７</h2>
			</div>
		</div><!-- //mainContent -->
		<div id="footerArea"><p>フッター領域</p></div><!-- //footerArea -->
	</div>
</body>
</html>


