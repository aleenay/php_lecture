<?php
include('connection.php');
$query = "SELECT * FROM `tbl_user`";
$query_run = mysqli_query($con , $query);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">DELETE USER</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_array($query_run)) { ?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['uname'];?></td>
      <td><?php echo $row['lastname'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['password'];?></td>
      <td><a href="" class="btn btn-danger">Delete Account</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>