

<?php


/*controller */

include ("helpers/db_fncs.php");
include("models/client-models.php");
try{
    $conn = new PDO(DB_DATA_SOURCE, DB_USERNAME, DB_PASSWORD);

}
catch (PDOException $exception) 
{
    echo "Oh no, there was a problem" . $exception->getMessage();
}

$clients=getAllClients($conn); //call getAllClients
$conn=NULL;
include("views/all-clients-view.php");

?>


