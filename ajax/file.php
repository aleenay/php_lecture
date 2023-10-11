<?php
$conn = mysqli_connect("localhost","root","","db_batch2207f1") or die('connection fail'); 


//insert data in database
if(isset($_POST['save'])){
    $uname = $_POST['user_name']; //ali
    $uemail = $_POST['user_email']; 
    $uphone = $_POST['user_phoneno'];
    $insert_query = "INSERT INTO `tbl_user`( `user_name`, `user_email`, `user_phoneno`) VALUES ('$uname ','$uemail','$uphone')";
    $run_query = mysqli_query($conn,$insert_query);
    if($run_query){
    echo 1;
        
exit();
    }
    else{
        echo "data not inserted";
    }
}
if(isset($_POST['updated'])){
    echo 2;

    exit();
}

//fetch data from data base
$select_query = "SELECT * FROM `tbl_user`";
$run_query = mysqli_query($conn,$select_query);

?>
<table class="table">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th colspan="2">Action</th>

        </tr>
    </thead>
    <tbody>
        <?php while($data=mysqli_fetch_array($run_query)){ ?>
        <tr>
            <td> <?php echo $data['user_name'] ?> </td>
            <td> <?php echo $data['user_email'] ?> </td>
            <td> <?php echo $data['user_phoneno'] ?> </td>
           
            <td><button type="button"  onclick="btnEdit(<?php echo $data['user_id'] ?>)">Edit</button></td>

<td><button type="button"  onclick="btndelete(<?php echo $data['user_id'] ?>)">delete</button></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<script>

  

</script>


<!-- //         $data = array();
// $data['status'] = 'success';
// echo json_encode($data); -->