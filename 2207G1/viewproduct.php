<?php
include('connection.php');
$fetch_query = "SELECT * FROM `tbl_product`";
$run_query = mysqli_query($conn, $fetch_query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
include('header.php');
?>
<div class="container mt-5">
<table class="table table-bordered">
  <thead>
    <tr>
      <th >ID</th>
      <th >Product Name</th>
      <th >Product Price</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while ($row = mysqli_fetch_array($run_query)) { ?>
    <tr>
      <th > <?php echo $row['p_id']; ?> </th>
      <td> <?php echo $row['p_name']; ?></td>
      <td><?php echo $row['p_price']; ?></td>
      <td>
      <a href="" class="btn btn-success"> update</a>
      <a href="" class="btn btn-danger"> delete</a>
      </td>
    </tr>
   <?php
}
?>
  </tbody>
</table>


</div>
</body>
</html>