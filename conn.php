<?PHP
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "LOUIEJHEE";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("connection failed:" . $conn->connect_errror);
}

echo "connected sucessfully";
?>
<?php
	function fetchUsers($conn){
		$sql = "SELECT ID, NAME, EMAIL FROM USERS";
		$result = $conn->query($sql);

		$users = array();
		if ($result->num_rows > 0){
			while($rows = $result->fetch_assoc()){

			}
		}
		return $users;

	}
?>

