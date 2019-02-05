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

<h2><u> View clients </u></h2>

<p> here you will be able to view the clients currently added to the system,
each of their profiles hold their information including their email address and what course they are studying. </p>

<img id="happy" src="images/happy2.png" alt="happyFace">

<form id="formOne">
   <h3>Current clients</h3>
   <br />
   <img id="client" src="images/user.png" alt="client">
      
<?php
foreach($clients as $client)
{
    echo "<p>";
    echo "<a href='client-test.php?client_ID=".$client->client_ID."'>";
    echo $client->name;
    echo "<br />";
    echo "<br />";
    echo "<img class='clientView' src='images/client.png' alt='client'>";
    echo "</a>";
    echo "</p>";
}
?>
</form>
</div>

<footer>
		<p>Address: Sheltered workshop, Huddersfield West Yorkshire HD1 3CY | Tel: 020 4444 2224</p>
</footer>

</body>
</html>
