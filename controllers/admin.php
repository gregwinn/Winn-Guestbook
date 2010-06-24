<?php
include 'models/user.php';
class Admin extends C {
	
	function Admin(){
		$this->User = 'Greg';
		$this->UsersModel = new User();
	}
	
	public function index(){
		//echo $this->UsersModel->getAllUsers();
		//while($row = mysql_fetch_array($this->UsersModel->getAllUsers())){
		//	echo $row['username'];
		//}
		//$this->layout_tamplate = 'views/layouts/admin.php';
		//echo $this->render('views/admin/index.php');
	}
	
	public function login(){
		if($this->User == 'Greg'){
			$this->username = 'gregwinn';
		}
		echo $this->render('views/admin/login.php');
	}
	
	public function dologin(){
		echo $_POST['username'];
	}
}
?>