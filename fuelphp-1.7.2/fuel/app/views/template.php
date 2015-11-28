<!-- テンプレート内の<?php?>タグは左にタブや半角スペースを入れないこと。ブラウザソース表示で崩れるため -->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>バクハツタロー</title>
	<!-- CSS -->
<?php echo Asset::css('default.css'); //<link href="css/default.css" type="text/css" rel="stylesheet">?>
<?php echo Asset::css('common.css'); //<link href="css/common.css" type="text/css" rel="stylesheet">?>
<?php echo Asset::css('header_layout.css'); //<link href="css/header_layout.css" type="text/css" rel="stylesheet">?>
<?php echo Asset::css('top_contents_layout.css'); //<link href="css/top_contents_layout.css" type="text/css" rel="stylesheet">?>
<?php echo Asset::css('footer_layout.css'); //<link href="css/footer_layout.css" type="text/css" rel="stylesheet">?>
	<!-- 画面固有のCSS -->
<?php echo Asset::render('exclusive_css'); //専用ページで読み込むためのCSSインクルード?>
	<!-- //CSS -->
	<!-- JS -->
<?php echo Asset::js('jquery-1.11.1.min.js'); //<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script> jQuery本体?>
<?php echo Asset::js('input_text_focus.js'); //<script type="text/javascript" src="js/input_text_focus.js"></script>?>
<?php echo Asset::js('header_pull_down.js'); //<script type="text/javascript" src="js/header_pull_down.js"></script>?>
<?php echo Asset::js('jquery.easing.1.3.js'); //<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> slider用?>
<?php echo Asset::js('slider.js'); //<script type="text/javascript" src="js/slider.js"></script> slider用?>
<?php echo Asset::js('slider_speed_Control.js'); //<script type="text/javascript" src="js/slider_speed_Control.js"></script> slider用?>
<?php echo Asset::js('header_navi_focus.js'); //<script type="text/javascript" src="js/header_navi_focus.js"></script> header_navi用?>
	<!-- //JS -->
	<style type="text/css">
	.slideCell a img {
		max-height: 200px;
		max-width: 200px;
	}

	.slideCell a {
		height: 200px;
		display: table-cell; /* p要素でテーブルの構造を表現 */
		vertical-align: middle; /* 画像を垂直に */
		text-align: center; /* 画像を中央に */
		line-height: 0; /* ボックス内でのp要素の余分な下スペースを消去 */
	}

	#headerNavi li:after {
		content:"｜▼";
		padding-left: 30px;
		font-weight: normal;
	}

	#headerNavi li.active:after {
		content:"｜▲";
		ppadding-left: 30px;
		font-weight: normal;
	}
	</style>
</head>


<body>
	<div id="wrapper">
		<div id="headerArea">
		<!-- header.phpファイルを読み込む-->
		<?php echo $header; ?>

		<div id="content">
		<!-- 各action（アクション）の内容を読み込む-->
		<?php echo $content; ?>
		</div><!-- //content -->

		<div id="footerArea">
		<!-- footer.phpファイルを読み込む-->
		<?php echo $footer; ?>
		</div><!-- //footerArea -->
	</div><!-- //wrapper -->
</body>
</html>
