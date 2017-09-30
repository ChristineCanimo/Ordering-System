<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catering2";

$username = $_POST['username'];
$password = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, password from user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$a = $row["username"];
		$b = $row["password"];
		if($username == $a){
			if($password == $b) {
				echo "You may proceed!";
				
			}
			
		}
    }
} else {
    echo "0 results";
}
$conn->close();
?>