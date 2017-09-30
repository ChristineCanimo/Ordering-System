<?php
$servername = "xo4";
$username = "almalik2_service";
$password = "almalika";
$dbname = "almalik2_catering2";

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (&username&&$password)
{
$connect = new mysqli("xo4","almalik2_service","almalika") or die("Couldn't connect.");
mysql_select_db("alamalik2_catering2") or die ("Couldn't find DB.");
}

else
  die("Please enter a username and a password.");
?>