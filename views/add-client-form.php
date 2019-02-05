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
	echo "Welcome, you are now logged in as <b>".$_SESSION['username']."</b> <img class='clientView' src='images/loginIcon.png' alt='client'>";
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

<h2><u>Register a client </u></h2>


<p> here you will be able to add new clients to the system and their details such as personal details and their goals in life, by doing so
you will be able to track all of your current clients. </p>
<p> to the side of the page is currently the list of courses available at the workshop and their ID. </p>

<table id ="courseList">
<caption> Courses Available </caption>
<th> course name </th> <th> course ID </th>
<tr><td> numeracy </td><td> 1</td></tr>
<tr><td>literacy </td><td> 2  </td></tr>
<tr><td>woodwork </td><td> 3 </td></tr>
<tr><td>metalwork </td><td> 4 </td></tr>
<tr><td>upholstery </td><td> 5 </td></tr>
<tr><td>gardening </td><td> 6 </td></tr>
<tr><td>IT </td><td> 7 </td> </tr>

</table>
<img id="computer" src="images/computer.gif" alt="computer">

<form id="formOne"  action="add-client.php" method="POST">
		<h3><u>Add a client </u></h3>
		<br />
		<br />
		<img id="clientAdd" src="images/user.png" alt="client">
		<label for ="name">Client name: </label><input type="text" value="" id="name" name="name"><span class="error"> <?php
if(isset($nameErr))
{
   echo $nameErr;
   $validForm=false;
} ?></span> 
	
<br />
<br />
		<label for="Course_ID"> Course ID: </label><select name="Course_ID">

<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>

</select>
		<span class="error">  <?php
if(isset($courseErr))
{
   echo $courseErr;
   $validForm=false;
} ?></span> 
<br /><br />


		<label for="email"> Email: </label><input type="text" value="" id="email" name="email"><span class="error">  <?php
if(isset($emailErr))
{
   echo $emailErr;
   $validForm=false;
} ?></span> 

<br />
<br />
<label for="phone number">Phone number: </label><input type="text" value="" id="number" name="number">
<span class="error">
<?php
if(isset($numberErr))
{
   echo $numberErr;
   $validForm=false;
} ?></span> 


<br />
<br />

<label>Gender: </label>
<br />
<label for="Male">Male: </label>
<input type="radio" name="gender" value="male" id="Male">
<label for="Female">Female: </label>
<input type="radio" name="gender" value="female" id="Female"> <span class="error">  <?php
if(isset($genderErr))
{
   echo $genderErr;
   $validForm=false;
} ?></span> 

<br />
<?php
if(isset($error))
{
   echo $error;
}

?>
		<input class = "buttonNav" type="submit" name="submit" value="Add client"/> 

</form>

	

</div>

<footer>
		<p>Address: Sheltered workshop, Huddersfield West Yorkshire HD1 3CY | Tel: 020 4444 2224</p>
</footer>

</body>
</html>
