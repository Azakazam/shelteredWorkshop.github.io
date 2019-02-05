<?php
session_start();
include ("helpers/db_fncs.php");
include ("models/login-data.php");
try{
       $conn = new PDO(DB_DATA_SOURCE, DB_USERNAME, DB_PASSWORD);

}
catch (PDOException $exception) 
{
echo "Oh no, there was a problem" . $exception->getMessage();
}


//get the form data
$name=trim($_POST['name']);
$username=trim($_POST['username']);
$password=trim($_POST['password']);
$email=trim($_POST['email']);

//$validate the form data
$validForm=true;

if (isset($_POST['occupation'])) {
	$occupation = $_POST['occupation'];
	

}
if (empty($_POST["name"]))
			{
			$nameErr = "*name is required";
			$validForm=false;
			}
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
if (empty($_POST["email"]))	
			{
			$emailErr = "*email is required";
			$validForm=false;
			}
if (empty($_POST["occupation"]))	
			{
			$occupationErr = "*occupation is required";
			$validForm=false;
			}			


		
if (strlen($username) > 15)
			{
			$userErr = "*Your username must be under 15 characters";
			$validForm=false;
			}
if (strlen($password) > 15)
			{
			$passErr = "*Your password must be under 15 characters";
			$validForm=false;
			}			
//insert into the database

if (!$validForm) {

$error = "please ensure all fields are filled in";
include("views/register-user.php");
return false;

}	
else
{


$conn=getConn();
$successRegister=selectNew($conn,$name,$username,$password,$email,$occupation);
if ($successRegister) {
$error = "Congrats! You are now registered";
include("views/register-user.php");
}
$conn=NULL; //close the connection

}



?>