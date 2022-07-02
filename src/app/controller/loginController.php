<?php

require("Controller.php");
include("app/config/db.php");
include('app/model/userModel.php');

$login = new Controller();

$action=filter_input(INPUT_POST,'action');
if(empty($action)){
	$action =filter_input(INPUT_GET,'action');
	if(empty($action)){
		$action='check_login';
	}
}
switch ($action) {
	case 'check_login':
		if(isset($_SESSION['user'])){
			$login->view("component/home/index");
		}
		else{
			$action='login';
			$login->view("component/login/index");
		}
		break;
	case 'login':
		$username =filter_input(INPUT_POST,'username');
		$password=md5(filter_input(INPUT_POST,'password'));
		$user=array('username'=>$username,'password'=>$password);
		if(userModel::user_login($user)){
			$_SESSION['user']['username']=$username;
			$_SESSION['user']['password']=$password;
			echo " login sussess";
			$login->view("component/home/index");
		}
		else{
			echo "user or pass invalid";
			$login->view("component/home/index");
		}
		break;
	case 'logout':
		unset($_SESSION['admin']);
		$login->view("component/home/index");
		break;
	default:
		break;
}
?>