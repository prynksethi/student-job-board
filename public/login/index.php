<?php
session_start();
include('../models/dbconnection.php');
include('../models/login.php');




if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$userLogIn=new logIn();
	$logInStatus=$userLogIn->is_validUser($email,$password);
	if($logInStatus==FALSE)
	{
		$InvalidUser="Email Password dont match";
		include 'form.html.php';
		exit();
	}
	else
	{
		header ('Location: ../user/');
		exit();
	}
}
include 'form.html.php';
?>