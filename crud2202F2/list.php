<?php
include("connection.php");
$fetch_query = "SELECT * FROM tbl_school";
$run = mysqli_query($con,$fetch_query);
// if($run){
//     echo "sucessfully run";
// }
// else{
//     echo "not run";
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>List </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <div class="container">
        <table class="table">
        <tr>
        <th>Name</th>
        <th>Email </th>

        </tr>
    <?php while ($row = mysqli_fetch_array($run)) { ?>
        <tr>
        <td> <?php echo $row['name'] ?> </td>
        <td> <?php echo $row['email'] ?> </td>
        <td> 
        <a class="btn btn-success" href="update.php?id=<?php echo $row['id'] ?>">Edit</a>
        </td>
      <!-- <a class="btn btn-danger" onclick="return confirm('are you sure? you want to delete')" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a> -->
        </tr>
 <?php } ?>
        </table>

    </div>
</body>
</html>