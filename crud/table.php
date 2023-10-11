<?php
include("connection.php");
$fetch_query = "SELECT * from tbl_school";
$run_query= mysqli_query($conn,$fetch_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
<?php
include('header.php');
  ?>

<table class="table" >
  <thead>

    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>  
  <?php while ($row = mysqli_fetch_array($run_query)) {?>
    <tr>
    
      
      <td> <?php echo $row['name']?> </td>
      <td><?php echo $row['email']?></td>
      <td><img src="<?php echo $row['image']?>" alt="" style="width:100px;"></td>
     
      <td colspan="2">
      <a class="btn btn-success" href="update.php?id=<?php echo $row['id'] ?>">Edit</a>
      <a class="btn btn-danger" onclick="return confirm('are you sure? you want to delete')"
       href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>

      </td>

    </tr>
  <?php    } ?>
  </tbody>
</table>
</body>
</html>