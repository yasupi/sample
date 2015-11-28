<?php
use \Model\Test2;

class Controller_Test2 extends Controller_Common {



	public function action_index(){

		$viewdata = new stdClass();//オブジェクトとして初期化（初期化必須）→stdClass();を使う。


		$viewdata->category_name_A = Test2::model_u_images_a_category();
		$viewdata->category_name_B = Test2::model_u_images_b_category();

		//$this->template->content = View::forge('contents/test2', $viewdata);
		return View::forge('contents/test2', $viewdata);




//$this->template->content = View::forge ( 'contents/test2' );



//      $viewdata = View::forge('contents/test2');
//      $viewdata->title = 'テスト';
//      $viewdata->username = '太郎';
//      return $viewdata;

//        $viewdata = DB::select()->from('test')->execute();
//        foreach($viewdata as $value) {
//            $value->title;
//        }
//    $viewdata = null;
//    $query = DB::select()->from('u_images_a_category');
//    $query = DB::query('SELECT id, name FROM `u_images_a_category`');
   // $viewdata = $query->execute()->as_array();
//   $viewdata = $query->execute()->as_array();
//    var_dump($viewdata);
//    die();
    //$query = DB::select()->from('test');

//    $viewdata = View::forge('top');
//$query = DB::query('SELECT id, name FROM u_images_a_category隠す');
//$result = $query->execute()->as_array();
//foreach($query as $value) {
//    $viewdata->title = $query;
//    return $viewdata;

//}

//return Response::forge(View::forge('contents/test2'));

}








}


