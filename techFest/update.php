<?php
include('connection.php');
$id = $_GET['id'];
$select_query = "SELECT * FROM tbl_user WHERE id= '$id'";
$run_query = mysqli_query($con,$select_query);
$fetch_data = mysqli_fetch_array($run_query);
if(isset($_POST['update_form'])){
    $name = $_POST['fname'];
    $email = $_POST['email'];

    $update_query = "UPDATE `tbl_user` SET `name`='$name',`email`='$email' WHERE id = '$id'";
    $run = mysqli_query($con , $update_query);
    if($run){
        header('location:list.php');
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
    fname: <input type="text" value="<?php echo $fetch_data['name'] ?>" class="form-control" name="fname"> <br>
    
      lname  <input type="text" name="email"  value="<?php echo $fetch_data['email'] ?>" class="form-control">

        <input type="submit" name="update_form" value="submit" />
    
    </form>


   




</body>

</html>