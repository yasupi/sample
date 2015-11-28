
			<div id="header">
				<h1><?php echo Html::anchor("top", Asset::img("common/site_logo.png", array('width'=> '174', 'height'=>'60', 'alt'=> 'バクハツタロー イラスト投稿コミュニティサイト'))); ?></h1>
				<div id="header_subArea"><!-- 広告やお知らせ情報など記載するための領域 --></div>
				<div id="userAccount">
					<form action="index.php" method="post">
						<div class="sign_upBox"><input type="submit" value="新規登録"></div>
						<div class="loginBox"><input type="submit" value="ログイン"></div>
					</form>
				</div><!-- //#userAccount -->
			</div><!-- //#header -->

			<!-- ↓↓スライダーインクルードファイル読込START↓↓ -->
<!-- 			@niwaすべてのページに使うヘッダーに読み込みこませてしまうのでここでのインクルードは誤り -->
			<?php // include("slider_inc.php"); ?>
			<!-- ↑↑スライダーインクルードファイル読込END  ↑↑ -->


			<div id="headerBox">
				<div id="headerBar">
					<div id="barLeft"></div>
					<ul id="headerNavi">
						<li><?php echo Html::anchor("top", "ホーム"); ?></li>
						<li><a href="#">新規登録</a></li>
						<li><a href="#">作品投稿</a></li>
						<li name="pull-down">ジャンル</li>
						<!-- <li name="pull-down"><img style="opacity: 0;" src="img/common/botton01.gif" alt=""></li> -->
						<li name="pull-down"><?php  echo Asset::img('common/botton01.gif');?></li>

						<li name="pull-down"><div class="actives">イベント</div></li>
					</ul>
					<div  id="barRight"></div>
				</div>
				<div id="categoryNavi">
					<div class="category hide">
						<ul>
							<li><a href="#">サブメニュー1</a></li>
							<li><a href="#">サブメニュー1</a></li>
							<li><a href="#">サブメニュー1</a></li>
							<li><a href="#">サブメニュー1</a></li>
						</ul>
					</div>
					<div class="category hide">
						<ul>
							<li><a href="#">サブメニュー2</a></li>
							<li><a href="#">サブメニュー2</a></li>
							<li><a href="#">サブメニュー2</a></li>
							<li><a href="#">サブメニュー2</a></li>
						</ul>
					</div>
					<div class="category hide">
						<ul>
							<li><a href="#">サブメニュー3</a></li>
							<li><a href="#">サブメニュー3</a></li>
							<li><a href="#">サブメニュー3</a></li>
							<li><a href="#">サブメニュー3</a></li>
						</ul>
					</div>
				</div>
			</div><!-- //#headerBox -->
		</div><!-- //#headerArea -->
