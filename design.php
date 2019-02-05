  
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
<div id ="TopAreaD">
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
<h2><u>My data </u></h2>
<p> here you can view all the data that has been dumped into the databases which is being used for the whole site </p>

<?php
require_once ("config.inc.php");

try
	{
	$conn = new PDO(DB_DATA_SOURCE, DB_USERNAME, DB_PASSWORD);
	}

catch(PDOException $exception)
	{
	echo "Oh no, there was a problem" . $exception->getMessage();
	}

$query = "SELECT * FROM client";
$result = $conn->query($query, PDO::FETCH_OBJ);
echo "<h3> client Table </h3>";
echo "<p> Here is the client database table and its data: </p>";
echo "<br>";
echo "<table>";
echo "<th> client_ID </th>" . "<th> name </th>" . "<th> course_ID </th>" . "<th> email </th>" . "<th> number </th>" . "<th> gender </th>";

while ($row = $result->fetch())
	{ //Creates a loop to loop through results
	echo "<tr><td>" . $row->client_ID . "</td><td>" . $row->name . "</td><td>" . $row->course_ID . "</td><td>" . $row->email . "</td><td>" . $row->number."</td><td>" . $row->gender."</td></tr>"; //$row['index'] context for field name
	}

echo "</table>";


$query = "SELECT * FROM course";
$result = $conn->query($query, PDO::FETCH_OBJ);
echo "<h3> course Table </h3>";
echo "<p> Here is the course database table and its data: </p>";
echo "<br>";
echo "<table>";
echo "<th> course_ID </th>" . "<th> course_name </th>" . "<th> course_description </th>";

while ($row = $result->fetch())
	{ //Creates a loop to loop through results
	echo "<tr><td>" . $row->course_ID . "</td><td>" . $row->course_name . "</td><td>" . $row->course_description ."</td></tr>"; //$row['index'] context for field name
	}

echo "</table>";


$query = "SELECT * FROM staff";
$result = $conn->query($query, PDO::FETCH_OBJ);
echo "<h3> staff Table </h3>";
echo "<p> Here is the staff database table and its data: </p>";
echo "<br>";
echo "<table>";
echo "<th> staff_ID </th>" . "<th> name </th>" . "<th> username </th>" . "<th> password </th>" . "<th> email </th>" ."<th> occupation </th>";

while ($row = $result->fetch())
	{ //Creates a loop to loop through results
	echo "<tr><td>" . $row->staff_ID . "</td><td>" . $row->name . "</td><td>" . $row->username . "</td><td>" . $row->password . "</td><td>" . $row->email . "</td><td>" . $row->occupation ."</td></tr>"; //$row['index'] context for field name
	}

echo "</table>";


?>

</div>


<footer>
		<p>Address: Sheltered workshop, Huddersfield West Yorkshire HD1 3CY | Tel: 020 4444 2224</p>
</footer>

</body>
</html>