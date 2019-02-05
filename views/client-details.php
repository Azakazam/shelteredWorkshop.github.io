<?php 
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="description" content="My homepage.">
      <title> Search Engine </title>
       <link rel="stylesheet" type="text/css" href="css/style.css"/>
   </head>
<body>
<header>
<img id ="Logo"  src="images/logo2.png" alt="logo">
</header>
<?php
if(!isset($_SESSION["username"]))
{
	//user tried to access the page without logging in
	header( "Location: new-login-user.php" );
}
if(isset($_SESSION["username"]))
{
	echo "Welcome, you are now logged in as <b>".$_SESSION['username']."</b> <img id='clientView' src='images/loginIcon.png' alt='client'>";
}
else
{
	echo "You are currently not logged in";
};
?>
<div id ="TopArea">
 <nav>
            <ul>
		 <li><a href="index.php">Home Page</a></li>
         <li><a href="add-new-client.php">Add client</a></li>
         <li><a href="all-clients.php">View clients</a></li>
         <li><a href="all-clients-delete.php">delete client</a></li>
           <li><a href="new-login-user.php">Login</a></li> 
		 <li><a href="new-register-user.php">Register</a></li>
            
            </ul>
         </nav>
		 <br />
		 
<h3> providing support for mental and disabled people </h3>

<h2><u> client profile </u></h2>


<?php

	echo "<p>You are currently viewing the client profile of <b>".$client->name."</b></p>";

echo "<ul>";
echo "<img class='detailHead' src='images/clientLogo.png' alt='clientLogo'>";
echo "<img class='detailCourse' src='images/worker.png' alt='worker'>";
echo "<li><b>email:</b>".$client->email."</li>";

echo "<li><b>gender:</b>".$client->gender."</li>";
echo "<li><b>Phone number:</b>".$client->number."</li>";
echo "<li><b>client_ID:</b>".$client->client_ID."</li>";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<img class='detailHead' src='images/courseLogo.png' alt='courseLogo'>";
echo "<li><b>course_ID:</b>".$client->course_ID."</li>";
echo "<img class='detailCourse' src='images/study.jpg' alt='study'>";
echo "<li><b>course name:</b>".$client->course->course_name."</li>";
echo "<li><b>course desc:</b>".$client->course->course_description."</li>";





?>
</div>
</body>
</html>