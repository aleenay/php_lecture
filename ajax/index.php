<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax in php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">


        <div class="row">
        <div class="col-lg-4">
                <h4>
                    CRUD with AJAX
                </h4>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" value="" name="username" class="form-control" id="username">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="emailuser" class="form-control" id="emailaddress">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone no</label>
                    <input type="number" name="phoneno" class="form-control" id="phoneno">
                </div>

                <button type="submit" id="btnSubmit" name="btnsubmit" class="btn btn-primary">Submit</button>


            </div>


            <div class="col-lg-8 ">


                <div id="ID_table"></div>
            </div>

        </div>
        <div id="ID_table"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
       
          LoadData();
        function LoadData() {
            $.ajax({
                url: 'ajax_data.php',
                type: 'POST',
                success: function(data) {
                    $('#ID_table').html(data);
                }
            })
        }

        $('#btnSubmit').click(function(){
          var uname = $('#username').val();
          var uemail = $('#emailaddress').val();
          var uphoneno = $('#phoneno').val();
          $.ajax({
                url: 'file.php',
                type: 'POST',
                data : {
                  save: 1,
                  user_name  : uname ,
                  user_email : uemail,
                  user_phoneno : uphoneno 
                },
                success: function(data) {
                  if (data == 1) {
                        alert("data inserted");
                        LoadData();
                    }
                }
            })
        })

       
    })

$.ajax({
    
})

    /// ajax(url , type :POST ,suceess )

    // $(document).ready(function(){
    //     $('#ID_btn').click(function(){
    //       $.ajax({
    //         url : 'ajax_data.php',
    //         type : 'POST',
    //         success : function(data){
    //             $('#ID_table').html(data);
    //         }
    //       })
    //     })
    // })




</script>
</body>

</html>