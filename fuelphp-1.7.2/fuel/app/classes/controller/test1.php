<?php
class Controller_Test1 extends Controller_Common {

	public function action_index() {
		 return Response::forge(View::forge('contents/test1'));
	}
}


