<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
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
if(isset($_SESSION["username"]))
{
	echo "Welcome, you are now logged in as <b>".$_SESSION['username']."</b> <img class='clientView' src='images/loginIcon.png' alt='client'>";
}
else
{
	echo "You are currently not logged in";
};
?>
<div id ="TopAreaR">
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
<h2><u>Register </u></h2>

<p> before you can login, you need to make an account by entering the requested details below. </p>
<form id="formThree"  action="register.php" method="POST">
		<h3><u>Register </u></h3>
		<br />
		<br />
		<img id="client" src="images/user.png" alt="client">
		<label for="name"> name: </label><input type="text" value="" id="name" name="name"> <span class="error"> <?php 
		if (isset($nameErr)) {
		echo $nameErr;
		} 
		?></span>
<br />
<br />		
		<label for="Username"> Username: </label><input type="text" value="" id="Username" name="username"> <span class="error"> <?php 
		if (isset($userErr)) {
		echo $userErr;
		} 
		?></span>

<br />
<br />
		<label for="Password">Password: </label><input type="password" value="" id="Password" name="password"> <span class="error"> <?php 
		if (isset($passErr)) {
		echo $passErr;
		} 
		?></span>

<br />
<br />
		<label for="email"> email: </label><input type="text" value="" id="email" name="email"> <span class="error"> <?php 
		if (isset($emailErr)) {
		echo $emailErr;
		} 
		?></span>
<br />
<br />
 <label for="pic">License picture:<input type="file" name="pic" accept="image/*">
 
<label>occupation: </label>
<br />
<label for="manager">Care manager: </label><input type="radio" name="occupation" value="manager" id="manager">
<label for="assistant">Staff assistant: </label><input type="radio" name="occupation" value="assistant" id="assistant"> <span class="error"> <?php 
		if (isset($occupationErr)) {
			echo $occupationErr;
		} 
		?></span>

<br />
<?php
if(isset($error))
{
   echo $error;
}
?>
<br />
		<input class = "buttonNav" type="submit" name="Register" value="register"/> 
	
</form>


<br />
</div>


<footer>
		<p>Address: Sheltered workshop, Huddersfield West Yorkshire HD1 3CY | Tel: 020 4444 2224</p>
</footer>

</body>
</html>