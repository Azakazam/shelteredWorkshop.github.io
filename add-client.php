<?php

include ("helpers/db_fncs.php");

include ("models/client-models.php");



//they shouldn't have got to this page
if(!isset($_POST["submit"]))
{
	header("Location:add-new-client.php");
}


$name=trim($_POST['name']);
$email=trim($_POST['email']);
$number=trim($_POST['number']);
$validForm=true;

if(isset($_POST['gender'])) {

        $gender=$_POST['gender'];
    

        }
if(isset($_POST['Course_ID'])) {

        $course_ID=$_POST['Course_ID'];
    

        }

if (empty($_POST["name"]))
			{
			$nameErr="*Client name is required";
			
			$validForm=false;
			}	
		
		if (empty($_POST["email"]))	
			{
			$emailErr = "*Email is required";
			$validForm=false;
			}
		if (empty($_POST["gender"]))	
			{
			$genderErr = "*gender is required";
			$validForm=false;
			}
		if (empty($_POST["number"]))	
			{
			$numberErr = "*number is required";
			$validForm=false;
			}
		

			
if(!$validForm)
{
	$error = "you need to ensure all fields are filled";
	include("views/add-client-form.php");
}
else
//insert into the database
{
$conn=getConn();
$success=insertClient($conn,$name,$course_ID,$email,$number,$gender);
if (isset($success)) {
	$error = "The client <b>".$name. "</b> has now been added to the system";
	include("views/add-client-form.php");

}
$conn=NULL; //close the connection
}



?>