<?php

session_start();

$servername = "xo4";
$username = "almalik2_service";
$password = "almalika";
$dbname = "almalik2_catering2";

$sa = $_POST['username'];
$pa = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, password from user";
$result = $conn->query($sql);

if ($result->num_rows!=0) 
{
    // output data of each row
    while($row = $result->fetch_assoc())
     {
	$a = $row["username"];
	$b = $row["password"];
	if($sa == $a && $pa == $b) 
	  {
		header("Location: admin.php");
                $_SESSION['username']=$username;
                exit();
	  }
	  else{
	 	header("Location: loginerror.php");
		exit();
	      }
     }
}
 else 
    die ("That user doesn't exist!");

$conn->close();
?>