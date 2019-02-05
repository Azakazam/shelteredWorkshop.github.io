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
<img id="Logo" src="images/logo2.png" alt="logo">
</header>
<?php
if(isset($_SESSION["username"]))
{
	echo "Welcome, you are now logged in as <b>".$_SESSION['username']."</b> <img class='clientView' src='images/loginIcon.png' alt='client'>"; }
	else{ 
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
	<h2><u>Home Page </u></h2>
	<p>
		 the purpose of this site is to allow you to manage the clients you currently have based at your sheltered workshop, this includes adding and removing clients from the system.
	</p>
	<img id="mainPicture" src="images/home.jpg" alt="Home">
	<h3> About us </h3>
	<ul>
		<li>We provides a supportive environment for those with mental health or learning disability problems in which to work.</li>
		<li>We provide five sections of a workshop which include: woodwork, metal work, upholstery, gardening and IT.</li>
		<li>A number of trips are also organised for our hardworking clients.</li>
		<li>Our main aim is to gradually get clients to move from the workshop into real employment.</li>
	</ul>
	<p>
		 Click here to logout of your account:<a id="logout" href="logout.php">Logout</a>
	</p>
	<br/>
</div>
<footer>
<p>
	Address: Sheltered workshop, Huddersfield West Yorkshire HD1 3CY | Tel: 020 4444 2224
</p>
</footer>
</body>
</html>