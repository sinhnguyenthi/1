<?php 
	// load loginModel.php
	include "models/LoginModel.php";
	class LoginController extends Controller{
		// ke thua class loginModel
		use loginModel;
		public function index(){
			$this->loadView("LoginView.php");
		}
		public function login(){
			// goi ham modelLogin trong class LoginModel
			$this->modelLogin();
		}
		//dang xuat
		public function logout(){
			//huy bien session
			unset($_SESSION['email']);
			//di chuyen den url khac
			header("location:index.php");
		}

	}
?>