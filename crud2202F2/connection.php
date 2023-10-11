<?php

$servername = "localhost";
$username ="root";
$password = "";
$database = "school";
$con = mysqli_connect($servername,$username,$password,$database);
if($con === false){
    echo "error";
}
else {
    echo "connected";
}



?>