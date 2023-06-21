<?php
$servername = "sql202.ezyro.com";
$username = "ezyro_33804068";
$password = "fcbs31yg";
$db = "ezyro_33804068_threaderz_store";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>