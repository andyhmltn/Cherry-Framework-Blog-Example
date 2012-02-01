<?php

class UsersController extends Controller {
	
	public $except = array('register', 'add', 'logout');
	
	function _before() {
		if(User::isLoggedIn()) {
			redirectTo('');
		}
	}
	
	function login($invalid = '') {
		if(isset($_SESSION['login_failed'])) {
			$this->set('errors', 'Invalid username/password');
			unset($_SESSION['login_failed']);
		}
	}
	
	function verify() {
		if(!isset($_POST['password']) || isset($_POST['username'])) {
			$_SESSION['register_failed'] = TRUE;
			$_SESSION['errors'] = array('You did not enter a username/password');
			redirectTo('admin', 'login');
		}

		extract($_POST);
		
		if($id = $this->User->verify($username, $password)) {
			$this->User->setLoggedIn($username, $id);
			redirectTo('');
		} else {
			$_SESSION['login_failed'] = TRUE;
			redirectTo('admin', 'login');
		}
	}

	function logout() {
		$this->User->logout();
		redirectTo('admin', 'login');
	}
	
	function register() {
		if(isset($_SESSION['register_failed'])) {
			$this->set('errors', $_SESSION['errors']);
			unset($_SESSION['register_failed'], $_SESSION['errors']);
		}
	}
	
	function add() {
		global $validate;
		if(!isset($_POST['password']) || isset($_POST['username'])) {
			$_SESSION['register_failed'] = TRUE;
			$_SESSION['errors'] = array('Error');
			redirectTo('admin', 'add');
		}
		extract($_POST);
		
		$validate->validate_length($password, 4, 'Your password needs to be at least 4 characters long.');
		$validate->validate_length($username, 3, 'Your username needs to be at least 3 characters long.');

		if($errors = $validate->returnErrors()) {
			$_SESSION['register_failed'] = TRUE;
			$_SESSION['errors'] = $errors;
			redirectTo('admin', 'add');
			return FALSE;
		}
		
		if($this->User->create(array('username' => $username, 'password' => $password), 'username')) {
			redirectTo('admin', 'login');
		} else {
			$_SESSION['register_failed'] = TRUE;
			$_SESSION['errors'] = array('User or email taken');
			redirectTo('admin', 'add');
		}
		
	}

}
