<?php
//connect to the databse
$server = "localhost";
$username = "root";
$password = "";
$database = "db_schoolmanagement";
$conn = mysqli_connect($server, $username,$password,$database);
// Check connection
if($conn === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
  echo "connectted !";
}
?>