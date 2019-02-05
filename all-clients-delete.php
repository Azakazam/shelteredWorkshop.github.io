
<?php
include ("helpers/db_fncs.php");
$conn=getConn();

include("models/client-models.php");

$clients=getAllClients($conn); //call getAllClients
$conn=NULL;
include("views/all-clients-delete-view.php")
?>
