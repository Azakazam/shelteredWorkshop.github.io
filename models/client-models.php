<?php
function getAllClients($conn)
{
    $query = "SELECT * FROM client";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $clients=array();
    while($client=$stmt->fetch(PDO::FETCH_OBJ))
    {
        $clients[]=$client;
    }
    return $clients;
}
 function insertClient($conn,$name,$course_ID,$email,$number,$gender)
 {
 $query="INSERT INTO client VALUES (NULL, :name, :Course_ID, :email, :number, :gender)";

$stmt=$conn->prepare($query);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':Course_ID', $course_ID);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':number', $number );
$stmt->bindValue(':gender', $gender);
$affected_rows = $stmt->execute();

	if($affected_rows==1){
		return true;
	}else{
	     
		return false;
	}
 
 }
 
 function deleteClient($conn,$client_ID) 
 {
 $query = "DELETE FROM client WHERE client_ID=:client_ID";
		$stmt = $conn->prepare($query);
		$stmt->bindValue(':client_ID',$client_ID);
		$affected_rows=$stmt->execute();

 
 if($affected_rows==1){
		return true;
	}
	else{
		return false;
	}
 
 }
 
?>