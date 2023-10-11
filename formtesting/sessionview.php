<?php
//step 1 session start
session_start();

print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <h2>
    <?php
    if(isset($_SESSION['user'])){

    echo $_SESSION['user'];
}

    ?>
    </h2>
</body>
</html>