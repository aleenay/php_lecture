<?php
  session_start();
//   print_r($_SESSION['cart_pro']);
  $total = 0;
  $totalsum = 0;
  if(isset($_POST['update_cart'])){
      $update_item_with_id = $_POST['p_id'];
      $update_qty = $_POST['update_qty'];
      echo $update_qty . '<br>';
      echo $update_item_with_id . '<br>';

      foreach ($_SESSION['cart_pro'] as $key => $stored_product) {
        if($update_item_with_id == $stored_product['p_id']){
           $_SESSION['cart_pro'][$key]['p_qty'] = $update_qty;
        }
     }
  }
  if(isset($_POST['delete_cart'])){
    foreach ($_SESSION['cart_pro'] as $key => $stored_product) {
        $update_item_with_id = $_POST['p_id'];
        if($update_item_with_id == $stored_product['p_id']){
          unset( $_SESSION['cart_pro'][$key]);
        }
     }
  }

 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include('header.php');
   ?>
    <div class="container">
        <h2>My Cart </h2>
        <table class="table table-bordered">
            <thead>


                <tr>
                    <td>Product Id</td>
                    <td>Product Name</td>
                    <td>Product Price</td>
                    <td>Product Quantity</td>
                    <td>Total Price</td>
                    <td>Update</td>
                    <td>Delete</td>

                </tr>
            </thead>
            <tbody>
                <?php
$value1 = isset($_POST['update_qty']) ? $_POST['update_qty'] :1; //to be displayed
if(isset($_POST['incqty'])){
   
    $value1 += 1;                                            
      
    
}

if(isset($_POST['decqty'])){
    $value1 -= 1;                                            
}
                        ?>

                <?php

   if(isset($_SESSION['cart_pro'])){
       foreach($_SESSION['cart_pro']  as $value){
     $total = $value['p_price'] * $value['p_qty'];
     $totalsum += $total;
           ?>

                <tr>
                    <form action="" method="post">

                        <td><?php echo $value['p_id']; ?></td>
                        <td><?php echo $value['p_name']; ?></td>
                        <td><?php echo  $value['p_price']; ?></td>
                        <td>
                            <button class="btn btn-danger" onclick="btndec(<?php echo $value['p_id']; ?>)"
                                type="button">-</button>

                            <input id="Id_qty<?php echo $value['p_id'];?>" type="number"
                                value="<?php echo $value['p_qty']; ?>" name="update_qty">
                                
                            <button class="btn btn-success" onclick="btnAdd(<?php echo $value['p_id']; ?>)"
                                type="button"> +</button>
                        </td>
                        <td><?php echo $total; ?></td>
                        <input type="hidden" name="p_id" value="<?php echo $value['p_id']; ?>">
                        <td><input class="btn btn-success" type="submit" name="update_cart" value="update"></td>
                        <td><input type="submit" class="btn btn-danger" name="delete_cart" value="delete"> </td>
                    </form>
                </tr>

                <?php 
       }
   }
   ?>
                <script>
                function btnAdd(param) {
                    console.log(param);
                    var Id_qty = document.getElementById('Id_qty' + param);

                    Id_qty.value++;

                }

                function btndec(param) {
                    console.log(param);

                    var Id_qty = document.getElementById('Id_qty' + param);
                    Id_qty.value--;
                }
                </script>

                <tr>
                    <td>


                        Total AMount : <?php echo  $GLOBALS['totalsum']; ?> </td>
                </tr>
            </tbody>
        </table>
        <form action="" method="post">
            <a type="button" href="shop.php" class="btn btn-success"> Continue shopping </a>
            <a type="button" href="order.php" class="btn btn-link"> Order Now</a>
            <input type="hidden" name="totalprice" value="<?php echo  $GLOBALS['totalsum']; ?>">
        </form>


    </div>


    <script src="js/jquery/jquery-2.2.4.min.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>

    <script src="js/classy-nav.min.js"></script>

    <script src="js/active.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"799c2eb45e3a9e4a","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>