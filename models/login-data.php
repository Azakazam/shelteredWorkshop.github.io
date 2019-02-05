<?php



function selectUser($conn,$username,$password) {


$query="SELECT username, password FROM staff WHERE password = :password AND username = :username";

$stmt=$conn->prepare($query);		
$stmt->bindValue(':username', $username);
$stmt->bindValue(':password', $password);			
$stmt->execute();

	
if($row = $stmt->fetch()){
    $_SESSION['username']=$username;
    
	echo "Welcome, you are now logged in as ".$username;
	return true;
}
		
	else{
		//echo "Your details were not found";
		return false;
	}
	}
function selectNew($conn,$name,$username,$password,$email,$occupation) {


$query="INSERT INTO staff VALUES (NULL, :name, :username, :password, :email, :occupation)";

$stmt=$conn->prepare($query);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':username', $username);
$stmt->bindValue(':password', $password);
$stmt->bindValue(':email', $email );
$stmt->bindValue(':occupation', $occupation);
$affected_rows = $stmt->execute();

	if($affected_rows==1){
		
		return true;
	}else{
		return false;
	}
	}
?>