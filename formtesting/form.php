<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="testform.php" method="get">

    Name : <input type="text" name="firstname"/>
     last Name : <input type="text" name="lname"/>
    <input type="submit" name="submit"/>
    
    
    </form>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <!-- <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Name : <input type="text" name="fname"/>
     last Name : <input type="text" name="lname"/>
    <input type="submit" name="submit"/>
    </form>-->
   
   
   
   
   
    <?php
    
    
    
    
    //if(isset($_POST['submit'])){
      //  echo $_POST['fname'] . '<br>';
       // echo $_POST['lname'];

   // }
    $cookie_name ="user";
    $cookie_value ="abcd";
    
    setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
    
    echo $_COOKIE[$cookie_name];
    
    
    ?> 
</body>
</html>