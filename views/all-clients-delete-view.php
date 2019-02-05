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
		<h2><u>Delete Clients </u></h2>
			<p> Here you can see who is currently added to the database and who needs removing. this will help with keeping the system up to date
			to see whos still on a course and who has moved into real employment. </p>
			<p> To delete a client, just tick their checkbox and select delete. <b>NOTE:</b> once this action is done, it cannot be undone.</p>
			<img id="clean" src="images/clean.png" alt="clean">
			<form id="formOneA"  action="delete-clients.php" method="POST">
			<h3> remove client </h3>
<br />
 <img id="client" src="images/user.png" alt="client">

<?php

//connect to the db
require_once("config.inc.php");

try{
       $conn = new PDO(DB_DATA_SOURCE, DB_USERNAME, DB_PASSWORD);
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

foreach ($clients as $client)
{
        echo "<p>";
        echo "<input type='checkbox' name='client[]' id='client".$client->name."' value='".$client->client_ID."'>";
        echo "<label for='client".$client->client_ID."'>".$client->name."</label>";
        echo "</p>";
		$conn=NULL;
}



?>

<br />
<input class = "buttonNav" type="submit" value="delete" name="remove">

</form>


<br />
</div>


<footer>
		<p>Address: Sheltered workshop, Huddersfield West Yorkshire HD1 3CY | Tel: 020 4444 2224</p>
</footer>

</body>
</html>