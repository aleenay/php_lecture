<?php
//step 1
session_start();
//step 2 remove all value against key 
session_unset();
//step 3 remove all data 
session_destroy();
echo "session destroy now";


?>