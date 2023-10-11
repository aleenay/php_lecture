<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "db_2202f2";
$con = mysqli_connect($server ,$username ,$password ,$database);
if($con){
    echo "connected";
}
else{
    echo "not connected";
}

?>













