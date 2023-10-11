<?php

$con = mysqli_connect("localhost","root","","db_webdev");
if($con === false){
    echo "not connected";
}
else{
    echo "connected";
}


?>