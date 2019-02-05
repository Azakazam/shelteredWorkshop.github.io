<?php
include ("helpers/db_fncs.php");
include ("models/client-data-fncs.php");

$conn=getConn();


if(isset($_GET['client_ID']))
{
	$client_id = $_GET['client_ID'];
	$client=getClientById($conn,$client_id);
	$conn=NULL;
	if($client)
	{
		include("views/client-details.php");
	}else
 echo "There are no details to display for this user";
 }
?>