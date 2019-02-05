<?php
include("client.php");
include("course-data-fncs.php");
function getClientById($conn,$client_ID)
{
    $query = "SELECT * FROM client WHERE client_ID=:client_ID";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':client_ID',$client_ID);
    $stmt->setFetchMode(PDO::FETCH_CLASS,'client');
    $stmt->execute();
    $client=$stmt->fetch();
	$client->course=getCourseById($conn,$client->course_ID);
    return $client;
}
?>