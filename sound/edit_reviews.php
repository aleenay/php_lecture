<?php
session_start();
include('connection.php');
// if(isset($_POST['ratings'])){
$rating_value = $_POST['hidden_id']; 
$music_name = $_SESSION['music_names'];
$select_query = "SELECT * FROM `tbl_video` WHERE `music_name` = '$music_name'";
$select_query_run = mysqli_query($con,$select_query);
$fetch_query_run = mysqli_fetch_array($select_query_run);
$selectquery = "SELECT * FROM `tbl_reviews` WHERE `id` = '$rating_value'";
$run_q = mysqli_query($con,$selectquery);
$fetch_data = mysqli_fetch_array($run_q);
$_SESSION['rating'] = $rating_value;
// echo $_SESSION['rating'];
// }
//  $_POST['edit'] = 1; 

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Reviews</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
    .rating {
      display: inline-flex;
      font-size: 0;
      cursor: pointer;
      flex-direction: row-reverse;
    }

    .rating>input {
      display: none;
    }

    .rating>label:before {
      content: "\2605";
      font-size: 30px;
      color: #ccc;
    }

    .rating>input:checked~label:before,
    .rating>input:hover~label:before {
      color: #f90;
      cursor: pointer;
    }

    .rating>label {
      display: inline-block;
      margin-right: 5px;
      line-height: 30px;
      text-align: center;
      width: 30px;
    }
  </style>

</head>

<body>

  </button>
  <div class="contact-form mt-5">
    <h5 class="mb-30">Edit Your Review</h5>


    <form action="rating.php" method="POST">
      <input type="hidden" value="<?php echo $fetch_query_run['music_name']?>" name="music_names">
      <input type="hidden" value="<?php echo $rating_value; ?>" id="hidden_id" name="hidden_id">
      <div class="row">
        <div class="col-12">
          <textarea name="message" id='ID_message_input' class="form-control mb-20" placeholder="Comment">
    <?php echo $fetch_data['message']; ?>
    </textarea>
        </div>
        <div class="col-12 mt-5 ">
          <h5 class="mb-30">Edit Your Rating</h5>

          <div class="rating ">
            <input type="radio" name="star" onclick="starFunctionn('5')" value="5" id="star5"><label
              for="star5"></label>
            <input type="radio" name="star" onclick="starFunctionn('4')" value="4" id="star4"><label
              for="star4"></label>
            <input type="radio" name="star" onclick="starFunctionn('3')" value="3" id="star3"><label
              for="star3"></label>
            <input type="radio" name="star" onclick="starFunctionn('2')" value="2" id="star2"><label
              for="star2"></label>
            <input type="radio" name="star" onclick="starFunctionn('1')" value="1" id="star1"><label
              for="star1"></label>
          </div>

        </div>
        <div class="col-12">
          <!-- <button type="button" onclick="btnEdit1()"> Edit</button> -->
          <!-- <input type="button" id='editbtn' onclick="btnEdit1()" name="btnEdit" class="btn poca-btn mt-40"
            value="Edit Comment"> -->
          <button type="submit" id='editbtn' name="edit" class="btn poca-btn mt-40">Edit Comment</button>
        </div>


      </div>
    </form>
  </div>

  <!-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bd7b19b6ffc4d87","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- <script>
    var star = 0;
    function starFunctionn(rating) {
      debugger
      star = rating
      return star;
    }



    function btnEdit1() {
      alert("working")
           var hidden_id = $('#hidden_id').val();
          var message = $('#ID_message_input').val();
debugger
             $.ajax({
          url:'rating.php',
          type:'POST',
          data:{
              update:1,
              message: message,
              hidden_id: hidden_id,
              star : '2'
            },
            success : function(data){
              if(data == 1){

              alert("done");
            }

            }
       })
    }


  </script> -->
</body>

</html>