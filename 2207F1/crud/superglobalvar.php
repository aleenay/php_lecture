<?php
if(isset($_POST['btnsubmit'])){
   $username = $_POST['fullname'];
   echo $username;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

    <form action="" class="container mt-5" method="post">
    <label for="">Name</label>
    <input type="text" class="form-control" name="fullname"> <br>
    <input type="submit" name="btnsubmit" value="save" >
    </form>
</body>
</html>