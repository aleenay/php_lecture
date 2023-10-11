<!-- // search data -->





<?php
$conn = mysqli_connect("localhost","root","","db_batch2207f1") or die('connection fail'); 

$search_value = "";
// if(isset($_POST['search_word'])){


$search_value = $_POST['data_search'];
$selected_data_fetch = "SELECT * FROM `tbl_user` WHERE user_name LIKE '%{$search_value}%'";
$run = mysqli_query($conn,$selected_data_fetch);

// $select_query = "SELECT * FROM `tbl_user`";
// $run_query = mysqli_query($conn,$select_query);
// }
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
        <?php while($row=mysqli_fetch_array($run)){ ?>
        <tr>
            <td> <?php echo $row['user_name'] ?> </td>
            <td> <?php echo $row['user_email'] ?> </td>
            <td> <?php echo $row['user_phoneno'] ?> </td>
        </tr>
        <?php } ?>
    </tbody>
</table>