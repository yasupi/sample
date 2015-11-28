<?php
//以下のインクルードファイルを全ページbody領域内に共通部品としてテンプレートに読み込ませるためのクラス。
//
//http://qiita.com/kiimiiis/items/a015399455ef9c0f1659　←過去参考サイト。
//これまではこのサイトを参考にコントローラーの名前を「Base」としていたが、今後の事を考慮し名前変更しました。
//
//
class Controller_Common extends Controller_Template {
	public function before() {
	//「public function before()」はactionメソッド実行前に呼び出され、自動実行されるメソッド。
	//テンプレートの部品であるため、actionメソッドよりも先に実行させる。
	//
		//before()メソッドを使用する際この行の記述がないと、テンプレートが動作しないので注意！
		parent::before();

		//インクルードファイル「header_inc」をテンプレートの$headerとして読み込ませる
		$this->template->header = View::forge('include/header_inc');

		//インクルードファイル「footer_inc」をテンプレートの$footerとして読み込ませる
		$this->template->footer = View::forge('include/footer_inc');
	}
}
