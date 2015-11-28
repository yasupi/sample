<?php
class Controller_Top extends Controller_Common {


	public function action_index() {
		 $this->template->content = View::forge('contents/top');
	}
}


