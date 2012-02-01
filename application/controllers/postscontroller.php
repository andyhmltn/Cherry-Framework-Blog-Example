<?php

class PostsController extends Controller {
	public $except = array('index','view');
	
	function _before() {
		if(!User::isLoggedIn()) {
			redirectTo('admin', 'login');
		}
	}

	function index() {
		if(!$posts = $this->Post->all(array('order' => 'id DESC', 'limit' => 5))) {
			$this->set('errors', 'No posts');
		}
		
		$this->set('featured', $this->Post->findRandom());
		$this->set('posts', $posts);
		$userObject = new User();
		$this->set('userObject', $userObject);
		#index
	}

	function add() {

		global $validate;

		if(isset($_POST['title'])) {
			extract($_POST);

			$validate->validate_length($title, 4, 'Please increase the title length');
			$validate->validate_length($content, 1, 'Please enter some content');

			$date = date('l jS \of F Y h:i:s A');
			$uid = $_SESSION['id'];

			if($errors = $validate->returnErrors()) {
				$_SESSION['failed'] = TRUE;
				$_SESSION['errors'] = $errors;
				redirectTo('admin/posts/add');
				return FALSE;
			}
		
			if($this->Post->create(array(
				'title' => $title, 
				'content' => $content, 
				'date' => $date,
				'user_id' => $uid,
				))) {

				$post_id = $this->Post->last()->id;
				redirectTo('view/' . $post_id);
			} else {
				$_SESSION['failed'] = TRUE;
				$_SESSION['errors'] = array('User or email taken');
				redirectTo('posts');
			}
		} else {
			if(isset($_SESSION['failed'])) {
				$this->set('errors', $_SESSION['errors']);
				unset($_SESSION['failed'], $_SESSION['errors']);
			}
		}
	}

	function remove($id = NULL) {
		$this->Post->remove($id);
		redirectTo('');
	}

	function edit() {
		#edit
	}

	function view($id = NULL) {
		$post = $this->Post->find($id);
		var_dump($post);
		if($post) {
			$this->set('post', $post);
			$this->set('tags', $this->Post->relationship('tags', $id));
			$userObject = new User();
			$this->set('userObject', $userObject);
		} else {
			$this->set('error', 'Post not found');
		}
	}

}
