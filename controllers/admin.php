<?php
include 'models/user.php';
class Admin extends C {
	
	function Admin(){
		$this->UsersModel = new User();
	}
	
	public function index(){
		var_dump($_SESSION);
		exit;
		//$this->layout_tamplate = 'views/layouts/admin.php';
		//echo $this->render('views/admin/index.php');
	}
	
	public function login(){
		echo $this->render('views/admin/login.php');
	}
	
	public function dologin(){
		if(isset($_POST)){
		    
		    // Validate
		    $error = TRUE;
		    if(empty($_POST['username']) || empty($_POST['password']) || $_POST['username'] == "Username" || $_POST['password'] == "Password"){
		        $error = FALSE;
		    }
		    
		    if($error){
		        $login = $this->UsersModel->loginUser($_POST);
		        return $login ? $this->loginFinish() : $this->loginError();
		    }else{
		        return $this->loginError();
		    }
		    
		}
	}
	
	function loginError(){
	    header("Location: guestbook.php?url=admin/login&error=login");
	}
	function loginFinish(){
	    header("Location: guestbook.php?url=admin");
	}
}
?>