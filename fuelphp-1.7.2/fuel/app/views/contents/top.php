

		<!-- ↓↓ヘッダーインクルードファイル読込START↓↓ -->
		<?php //include("include/header_inc.php"); ?>
		<!-- ↑↑ヘッダーインクルードファイル読込END  ↑↑ -->


			<div id="text_searchArea">
				<p style="margin-bottom: 20px; text-align: center;">みんなで目指そう！バクハツタロー　＆　バクハツハナコ！！</p>
				<form action="#" method="post">
					<div class="search_textBox"><input class="searchText" type="text" name="mail" title="検索したいキーワードを入力してね"></div>
					<div class="search_submitBox"><input type="submit" value="検索"></div>
				</form>
			</div>

			<div id="mainArea">
				<div id="main_leftArea">
					<div id="new_imageArea">
						<h2>みんなの新着作品</h2>
						<div id="new_imageList">
							<ul>
								<li><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_01.jpg');?></div></a><p>作品タイトル</p></li>
								<li><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_02.jpg');?></div></a><p>作品タイトル</p></li>
								<li><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_03.jpg');?></div></a><p>作品タイトル</p></li>
								<li><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_04.png');?></div></a><p>作品タイトル</p></li>
								<li><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_05.jpg');?></div></a><p>作品タイトル</p></li>
								<li><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_06.jpg');?></div></a><p>作品タイトル</p></li>
								<li><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_07.jpg');?></div></a><p>作品タイトル</p></li>
								<li><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_08.jpg');?></div></a><p>作品タイトル</p></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="main_rightArea">
					<div id="rankingArea">
						<div style="margin-bottom: 20px; border: 1px solid #CCCCCC;"><?php  echo Asset::img('abc.png');?></div>
						<h3>総合ランキング</h3>
						<div id="allRanking" class="rankingBox">
							<h4>1</h4>
							<div class="ranking_imageBox">
								<div class="ranking_border"><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_04.png');?></div></a></div>
								<div class="userInfo">
									<p class="imageTitle">作品名</p>
									<p class="user">niwa</p>
								</div>
							</div>
						</div>
						<h3 style="margin-top: 20px;">デイリーランキング</h3>
						<div class="rankingBox">
							<h4>1</h4>
							<div class="ranking_imageBox">
								<div class="ranking_border"><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_07.jpg');?></div></a></div>
								<div class="userInfo">
									<p class="imageTitle">作品名</p>
									<p class="user">otera</p>
								</div>
							</div>
						</div>
						<h3 style="margin-top: 20px;">○○ランキング</h3>
						<div class="rankingBox">
							<h4>1</h4>
							<div class="ranking_imageBox">
								<div class="ranking_border"><a href="#"><div class="list_border"><?php  echo Asset::img('sample/new_02.jpg');?></div></a></div>
								<div class="userInfo">
									<p class="imageTitle">作品名</p>
									<p class="user">oresama</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- //mainArea -->


		<!-- ↓↓フッターインクルードファイル読込START↓↓ -->
		<?php //include("include/footer_inc.php"); ?>
		<!-- ↑↑フッターインクルードファイル読込END  ↑↑ -->

