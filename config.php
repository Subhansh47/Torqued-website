<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "company";

$conn = new mysqli($servername , $username, $password, $database);

//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
?>
