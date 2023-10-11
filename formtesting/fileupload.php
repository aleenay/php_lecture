<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_FILES['img'])){
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';

    $file_name = $_FILES['img']['name'];
    $file_type = $_FILES['img']['type'];
    $temp_name = $_FILES['img']['tmp_name'];
     $size = $_FILES['img']['size'];
     
     $image = 'imagess/'.$file_name;
    move_uploaded_file($temp_name,$image);
    echo $file_name;
}
    

?>
<!-- sending file or image on server  -->
    <form action="" method="post" enctype="multipart/form-data">
 
    <input type="file" name="img"><br><br>
    <input type="submit" value="submit">
    
    </form>
    <img src="<?php echo  $image ?>" alt="img" style="width:200px;"/>
</body>
</html>