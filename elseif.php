<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php

    $percentage = 5;


    if($percentage >= 80 && $percentage <= 100){
        echo "Grade A";

    }
    else if($percentage >= 70 && $percentage < 80){
        echo "Grade B";
    }
    else if($percentage >= 50 && $percentage < 70)
    {
        echo "Grade C";
    }
    else if($percentage < 50){
        echo "fail";
    }

    else{
        echo "enter valid percentage";
    }
?>
    
</body>
</html>