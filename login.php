<?php
session_start();
include ("helpers/db_fncs.php");
include ("models/login-data.php");
require_once("config.inc.php");

try{
       $conn = new PDO(DB_DATA_SOURCE, DB_USERNAME, DB_PASSWORD);
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

if(!isset($_POST["Login"]))
{
	header("Location:new-login-user.php");
}


$username=trim($_POST['username']);
$password=trim($_POST['password']);

$username= htmlspecialchars($username);
$password = htmlspecialchars($password);
$validForm = true;

if (empty($_POST["username"]))
			{
			$userErr = "*username is required";
			$validForm=false;
			}
if (empty($_POST["password"]))	
			{
			$passErr = "*password is required";
			$validForm=false;
			}
if (!$validForm) {

$error = "please ensure all fields are filled in";
include("views/login-user.php");
return false;

}			
		

$conn=getConn();
$successLogin=selectUser($conn,$username,$password);
if($successLogin)
{
       header( "Location: index.php" );
}else{
       $error = "wrong details";
      include("views/login-user.php"); 
}

$conn=NULL; //close the connection



?>