<?php
include('connection.php');
if(isset($_POST['submit_form'])){
    $name = $_POST['fname'];
    $email = $_POST['lname'];
    $query = "INSERT INTO `tbl_user`( `name`, `email`) VALUES ('$name','$email')";
    $run = mysqli_query($con,$query);
    echo $run;
    if($run){
        // echo "<script> alert('successfully run') </script>";
        header("location:list.php");
    }
    else{
        echo "<script> alert('unsuccessfully') </script>";

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>

<body>
    <form class="container" action="" method="post">
    fname: <input type="text" class="form-control" name="fname"> <br>
    
      lname  <input type="text" name="lname" class="form-control">

        <input type="submit" name="submit_form" value="submit" />
    
    </form>


   




</body>

</html>