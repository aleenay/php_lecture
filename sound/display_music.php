<?php
include('connection.php');
$select_query = "SELECT * FROM `tbl_music`";
$select_query_run = mysqli_query($con , $select_query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
<tr>
    <?php  while($row = mysqli_fetch_array($select_query_run)) {?>
        <td><audio controls>
  <source src="<?php echo $row['music_file'] ?>" type="audio/ogg">
</audio>
</td> 
</tr>      
 
    <?php } ?>
    </table>
</html>