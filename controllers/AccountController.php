<?php 
		include "models/AccountModel.php";
		class AccountController extends Controller{
			use AccountModel;
			public function register(){
				$this->loadView("RegisterView.php");
			}
			public function registerPost(){
				$this->modelRegister();
			}
			public function login(){
				$this->loadView("loginView.php");
			}

			public function loginPost(){
				$this->modelLogin();
			}
			public function logout(){
				$this->modelLogout();
			}
		}
?>