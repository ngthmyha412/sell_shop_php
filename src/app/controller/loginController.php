<?php

require("Controller.php");
include dirname(__DIR__)."/config/db.php";
include(dirname(__DIR__)."/model/userModel.php");

$login = new Controller();

if(isset($_GET["login"])){
	$username =$_POST["username"];
	$password=md5($_POST["password"]);
	if(userModel::user_login($username, $password)){
		$_SESSION['user']['username']=$username;
		$_SESSION['user']['password']=$password;
		header("location:http://localhost/");
		echo "<script> alert('login success'); </script>";
	}
	else{
		header("http://localhost/login");
		echo "<script> alert('user or pass invalid'); </script>";
		// $login->view("component/login/index");
	}
}
else if(isset($_GET["register"])){
	$newuser =[
		'',
		$_POST["fullname"],
		$_POST["username"], 
		md5($_POST["password"]),
		$_POST["role"],
		$_POST["email"],
		$_POST["phone"],
		$_POST["address"],
		$_POST["img"]
	];
	if(userModel::user_register($newuser)){
		header("location:http://localhost/login");
		echo "<script> alert('register success'); </script>";
	}
	else{
		header("http://localhost/login");
		echo "<script> alert('false'); </script>";
		// $login->view("component/login/index");
	}
}
else{
	echo "<script> alert('user or pass invalid'); </script>";
	// $login->view("component/login/index");
}

?>