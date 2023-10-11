<?php

$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);



// filter_var(variable , filtername,options/flag)
// filtername (FILTER_VALIDATE_INT )(FILTER_VALIDATE_FLOAT ) (FILTER_VALIDATE_BOOLEAN)(FILTER_VALIDATE_EMAIL)(FILTER_VALIDATE_URL)
$numErro = $emailerror = "" ;
// if($_SERVER['REQUEST_METHOD']== 'POST'){
// if(isset($_POST['btn'])){
//     $num = $_POST['num'];
//     $email = $_POST['email'];

//     $filterdata = filter_var($num,FILTER_VALIDATE_INT);
//     $filterdataemail = filter_var($email,FILTER_VALIDATE_EMAIL);

//     if($filterdata == false){
//          $numErro  = "its not interger";
//     }
//     else{
//         echo "valid";
//     }
//     if($filterdataemail == false){
//         $emailerror  = "invalid email";

//     }
//     else{
//         echo "valid";
//     }
   

// }

       
    
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <br>
    <h2>Filter Form Validation</h2>

        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Number</label>
                <input type="text" class="form-control" name="num">
                <p> <?php echo $numErro; ?> </p>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
                <p> <?php echo $emailerror; ?> </p>

            </div>


            <button type="submit" name="btn" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>