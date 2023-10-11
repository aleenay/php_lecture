<?php

$conn = mysqli_connect("localhost","root","","db_batch2207f1");
$select_query = "SELECT * FROM `tbl_user`";
$run_query = mysqli_query($conn,$select_query);


?>

<table class="table">
    <thead>          
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php while($data=mysqli_fetch_array($run_query)){ ?>
        <tr>
            <td> <?php echo $data['user_name'] ?> </td>
            <td> <?php echo $data['user_email'] ?> </td>
            <td> <?php echo $data['user_phoneno'] ?> </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
