<?php
include('connection.php');
$fetch_query = "SELECT * FROM `tbl_user`";
$run_q = mysqli_query($conn,$fetch_query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
include('navbar.php');
    ?>

<a href="#ID_tab" download>download</a>
<table class="table" id="ID_tab">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>

      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
while ($data = mysqli_fetch_array($run_q)) {
    ?>
    <tr>
      <th scope="row"> <?php  echo $data['u_id']; ?></th>
      <td> <?php  echo $data['u_name']; ?></td>
      <td><?php  echo $data['u_email']; ?></td>
      <td><img src="<?php  echo $data['u_img']; ?>" alt=""> </td>

      <td><a href="update.php?id=<?php  echo $data['u_id']; ?>" class="btn btn-success">Update</a> </td>
      <td><a href="delete.php?id=<?php  echo $data['u_id']; ?>" class="btn btn-danger">delete</a> </td>

    </tr>
   
  <?php } ?>
   </tbody>
</table>
</body>
</html>