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
<img id="Logo" src="images/logo2.png" alt="logo">
</header>
<?php
if(isset($_SESSION["username"]))
{
	echo "Welcome, you are now logged in as <b>".$_SESSION['username']."</b> <img class='clientView' src='images/loginIcon.png' alt='client'>"; }
	else { 
	echo "You are currently not logged in";
	};
	?>
<div id="TopAreaA">
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
	<br/>
	<h3> providing support for mental and disabled people </h3>
	<h2><u>Login </u></h2>
	<p>
		 Please enter your username and password to be able to use the site's features, if you havent made an account yet you can do so by going to the register page
	</p>
	<form id="formTwo" action="login.php" method="POST">
		<h3><u>login details </u></h3>
		<br/>
		<br/>
		<img id="client" src="images/user.png" alt="client">
		<label for="Username"> Username: </label><input type="text" value="" id="Username" name="username"><span class="error"><?php
if(isset($userErr))
{
   echo $userErr;
   $validForm=false;
} ?>
		</span>
		<br/>
		<br/>
		<label for="Password">Password: </label><input type="password" value="" id="Uassword" name="password"><span class="error"><?php
if(isset($passErr))
{
   echo $passErr;
   $validForm=false;
} ?>
		</span>
		<br/>
		<br/>
		<?php
if(isset($error))
{
   echo $error;
}
?>
		<br/>
		<input class="buttonNav" type="submit" name="Login" value="Login"/>
	</form>
	<b> You MUST login to be able to add, view and delete clients! </b>
	<br/>
</div>
<footer>
<p>
	Address: Sheltered workshop, Huddersfield West Yorkshire HD1 3CY | Tel: 020 4444 2224
</p>
</footer>
</body>
</html>