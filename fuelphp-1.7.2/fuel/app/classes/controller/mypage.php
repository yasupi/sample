<?php
class Controller_Mypage extends Controller_Common {
	public function action_index() {
		$this->template->content = View::forge ( 'contents/mypage' );
		// echo DOCROOT;
	}

	// 画像アップロード//
	public function action_upload() {
		//header('Content-Type: image/jpeg');
		Config::load ( 'upload_images', true );

		// user情報の取得 根本君のログイン機能のセッションからIDをとってくる
		// //ここの処理は消すこと！とりあえずログイン機能ができるまで。ログイン後のセッションからとってくる。
		//$result = DB::query ( 'SELECT id FROM `users` where id = 2' )->execute ();
		//$userId = $result [0] ['id'];


		$save_image_path = Config::get ( 'upload_images.DIR' );

		$config = array (

				'path' => $save_image_path,
				'normalize' => true,
				'ext_whitelist' => array (
						'jpg',
						'jpeg',
						'gif',
						'png'
				),
				'ext_blacklist'=>array(
						'php',
						'js',
						'pdf',
						'exe',
						'java'
				)
		);

		// アップロード基本プロセス実行
		Upload::process ( $config );


		// todo 拡張子ごとにフォルダを分ける処理はここ
		foreach (Upload::get_files() as $file){
				switch($file['extension']){
					case "jpg":
						$extension= 'jpg';
						break;

					case "png":
						$extension= 'png';
						break;

					case "gif":
						$extension= 'gif';
						break;
					default:
				}


				// アップロードするディレクトリを指定する処理
				$make_dir_flg = 0;
				$from = 1;
				$to = 1000;
				while ( ! $make_dir_flg ) {
					$result = DB::query ( 'SELECT id FROM `u_account` where id = 1' )->execute ();

					$userId = $result [0] ['id'];
					if (($from <= $userId) && ($userId <= $to)) {

						$save_image_path = Config::get ( 'upload_images.DIR' )."/".$from."_" .$to."/".$userId."/".$extension."/original/";
						$save_thumbnail_image_path = Config::get ( 'upload_images.DIR' )."/".$from."_" .$to."/".$userId."/".$extension."/"."thumbnail/";
						$make_dir_flg = 1;
					} else {

						$from += 1000;
						$to += 1000;
						if (($from <= $userId) && ($userId <= $to)) {
							$save_image_path = Config::get ( 'upload_images.DIR' )."/".$from."_" .$to."/".$userId."/".$extension."/"."original/";

							$save_thumbnail_image_path = Config::get ( 'upload_images.DIR' )."/".$from."_" .$to."/".$userId."/".$extension."/"."thumbnail/";
							break;
						}
					}
				}
		};

		// 検証
		if (Upload::is_valid ()) {

			// 設定を元に保存
			Upload::save($save_image_path);

			// 情報をデータベースに保存する場合
			//Model_Uploads::add(Upload::get_files());

		}

		// 正常系
		  //サムネイル画像作成処理
		 foreach (Upload::get_files() as $data){
		 	Image::config(array(
		 			'persistence' => true,))
		 			->load($save_image_path."/".$data['name'])
		 			->resize(200,200)
		 			->save($save_thumbnail_image_path."/".$data['name']);
		 	//->output();表示する
		 }


		Response::redirect ( 'mypage/', 'refresh' );

		// 異常系
		foreach ( Upload::get_errors () as $file ) {
		}
	}
}