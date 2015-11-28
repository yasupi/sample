<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ビューのテスト</title>
	<style type="text/css">
*{
	margin:0;
	padding:0;
	border:0;
}
body {
	background: #EAEAEA;
	font-family: sans-serif;
}

h1 {
	margin-bottom: 30px;
	padding: 16px;
	background-color: #999999;
	color: #FFFFFF;
	font-size: 100%;
}

#main {
	margin: 0 auto;
	width: 800px;
	overflow: hidden;
	background-color: #FFFFFF;
}

#naviArea {
	margin-bottom: 60px;
	padding: 16px 16px 6px;
	border: 1px solid #999999;
}

#naviArea #category_breadCrumb {
	margin-bottom: 20px;
	padding: 4px 10px;
	overflow: hidden;
	border: 1px solid #CCCCCC;
	list-style-type: none;
	font-size: 14px;
}

#naviArea #category_breadCrumb li { float: left; }

#naviArea #category_breadCrumb li span {
	margin: 0 6px;
	display: inline-block;
	color: #9fb6cc;
}

ul#navi_A, ul#navi_B {
	margin: 0 auto;
	padding: 2px 4px;
	width: 696px;
	overflow: hidden;
	list-style-type: none;
	text-align: center;
}

ul#navi_A li, ul#navi_B li {
	margin-bottom: 10px;
	width: 160px;
	height: 30px;
	line-height: 34px;
	float: left;
	border: 1px solid #CCCCCC;
	cursor: pointer;
}

ul#navi_A li:hover, ul#navi_A li:hover, { background-color: #CCE6FF; }

.mr10 { margin-right: 16px; }

.no_margin { margin: 0; }

div.section {
	margin-top: 20px;
	clear: both;
}



div#navi2 p:first-child {
	padding: 2px 4px;
	height: 80px;
	line-height:80px;
	border: 1px solid #CCCCCC;
	text-align: center;
}

div#navi2 p:last-child {
	margin: 20px auto;
	width: 140px;
	height: 30px;
	line-height: 30px;
	border: 1px solid #CCCCCC;
	font-size: 12px;
	text-align: center;
	background-color: #ACCBFD;
}

div#navi2 p:last-child:hover {
	background-color: #caddfc;
	border: 1px solid #E6E6E6
}

div#navi2 p:last-child a {
	display: block;
	text-decoration: none;
	color: #FFFFFF;
}
	</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
	$('.js_category_A01').click(function(){
		$('.js_category_A').hide();
		$('.js_breadCrumb').show();
		$('.js_category_B').show();
		var a = 1;


		$('.output').text("<?php echo $category_name_A[0]['name']; ?>");
	});

	$('.js_category_A02').click(function(){
		$('.js_category_A').hide();
		$('.js_breadCrumb').show();
		$('.js_category_B').show();
		var a = 2;


		$('.output').text("<?php echo $category_name_A[1]['name']; ?>");
	});


	$('.category').click(function(){
		$('.js_category_B').hide();
		$('#navi2').show();
	});
});


</script>

<script type="text/javascript">




</script>
</head>


<body>
	<div id="main">
		<h1>カテゴリ検索</h1>
		<div id="naviArea">
			<ul id="category_breadCrumb" class="js_breadCrumb" style="display: none;">
				<li>カテゴリ検索<span>＞</span></li>
				<li class="output"></li>
			</ul>
			<ul id="navi_A" class="js_category_A">
<?php
$flag = 0;
$i = 0;

foreach ($category_name_A as $value_A) {
	$flag = $flag + 1;
	$i = $i+1;

	if($flag == 4) {
		echo '<li class="no_margin js_category_A0', $i, '">', $value_A['name'], '</li>', "\n";
	} else {
		echo '<li class="mr10 js_category_A0', $i, '">', $value_A['name'], '</li>', "\n";
	}
}
?>
			</ul>

			<ul id="navi_B" class="js_category_B" style="display: none;">
<?php
$flag = 0;

foreach ($category_name_B as $value_B) {
	$flag = $flag + 1;

	if($flag == 4) {
		echo '<li class="category no_margin">', $value_B['name'], '</li>', "\n";
	} else {
		echo '<li class="category mr10">', $value_B['name'], '</li>', "\n";
	}
}
?>
			</ul>


			<div id="navi2" style="display: none;">
				<p>ここから先はAjaxで出力させる項目</p>
				<p><a href="">カテゴリトップに戻る</a></p>
			</div>
		</div><!--#naviArea-->
	</div><!--#main-->



<?php //echo $category_name_A[0]['name'] ?>



</body>

</html>
