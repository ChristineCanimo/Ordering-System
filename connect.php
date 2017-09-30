<?php
$servername = "xo4";
$username = "almalik2_service";
$password = "almalika";
$dbname = "almalik2_catering2";
$a = $_POST['name'];
$b = $_POST['phone_no'];
$c = $_POST['address'];
$d = $_POST['zip_code'];
$e = $_POST['email'];
$f = $_POST['location_of_event'];
$g = $_POST['event_date'];
$h = $_POST['setup_date'];
$i = $_POST['event_start_time'];
$j = $_POST['event_end_time'];
$k = $_POST['load_out_time'];
$l = $_POST['event_theme'];
$m = $_POST['guest_no'];
$n = $_POST['description'];


echo $a."<br>".$b."<br>".$c."<br>".$d."<br>".$e."<br>".$f."<br>".$g."<br>".$h."<br>".$i."<br>".$j."<br>".$k."<br>".$l."<br>".$m."<br>".$n."<br>";




$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO order2 values (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";

if ($conn->query($sql) === TRUE) {
    header("Location: success.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>