<?php

class TagsController extends Controller {
	function view($id = NULL) {
		$this->set('posts', $this->Tag->relationship('posts', $id));
		$this->set('tag', $this->Tag->find($id)->name);
	}

	function add() {

		global $validate;

		if(isset($_POST['name'])) {
			extract($_POST);
			
			if($this->Tag->exists("name = '$name'")) {
				$exists = $this->Tag->find("name = '$name'");
				$id = $exists->id;

				if($this->Tag->HABTexists('posts', $id, $post_id)) {
					redirectTo('view', $post_id);
					return FALSE;
				}
			}	 else {
				$this->Tag->create(array('name' => $name));
				$id = $this->Tag->last()->id;
			}
			
			$this->Tag->HABTMadd('posts', $id, $post_id);

			redirectTo('view', $post_id);

		}
	}
}
