


<?php


//connect to the db
include ("helpers/db_fncs.php");
include ("models/client-models.php");


if(!isset($_POST["remove"]))
{
	header("Location:all-clients-delete.php");
}

if(!isset($_POST['client']))
{
	//echo "You need to select at least 1 client to delete, press back to return to the previous page";
	header( "Location: views/deleteMes.php" );
}else
{
	$clients=$_POST['client'];
	$conn=getConn();
	$count=0;
	foreach ($clients as $client_ID) 
{
		
		if(deleteClient($conn,$client_ID))
		{
			$count++;
		}
}
	$conn=NULL;
	$pass = "Successfully deleted $count clients, press back to return to the previous page";
	include( "views/deletePass.php" );

}



$conn=NULL;
?>