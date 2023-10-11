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
    <div class="container-fluid p-5 mt-5">


        <div class="row">
            <div class="col-lg-4">
                <h4>
                    CRUD with AJAX
                </h4>


                <div class="mb-3">
                    <input type="text" value="" name="username" class="form-control" id="ID_user" disabled>
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
                <h4>
                    Search with AJAX
                </h4>
                <input type="text" class="form-control" id="ID_search" />


                <div id="ID_table"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
    // $(document).ajaxStop(function() {
    //     
    // });
    $(document).ready(function() {

        dataLoad();



        //insert data
        $('#btnSubmit').click(function() {
            var username = $('#username').val();
            var email = $('#emailaddress').val();
            var phoneno = $('#phoneno').val();
            var id = $('#ID_user').val();
            if (id == "") {


                $.ajax({
                    url: 'file.php',
                    type: 'POST',
                    data: {
                        save: 1,
                        user_name: username,
                        user_email: email,
                        user_phoneno: phoneno
                    },

                    success: function(data) {
                        debugger
                        if (data == 1) {
                            alert("data inserted");
                            dataLoad();
                        }
                    }
                })
            } else {
                debugger
                $.ajax({
                    url: 'file.php',
                    type: 'POST',
                    data: {
                        updated: 2,
                    

                    },

                    success: function(data) {
                        debugger
                        if (data == 2) {
                            alert("updating");

                        }


                    }
                })
                alert("update");
            }
        })

        $('#ID_search').keyup(function() {
            var search_word = $('#ID_search').val();
            $.ajax({
                url: 'livesearch.php',
                type: 'POST',
                data: {
                    data_search: search_word
                },
                success: function(data) {
                    $('#ID_table').html(data);
                }
            })


        })

        // window.location.reload();





    })

    function btnEdit(id) {

        var u_id = id;

        $.ajax({

            url: 'update.php',
            type: 'POST',
            data: {
                update: "update",
                uid: u_id
            },
            success: function(data) {
                var x = JSON.parse(data);
                var id = x[0]

                $('#ID_user').val(x[0]);
                $('#username').val(x[1]);
                $('#emailaddress').val(x[2]);


                console.log(x[1])

            }
        })



    }

    function btndelete(id) {
        debugger;
        var id = id;
        $.ajax({
            url: 'delete.php',
            type: 'POST',
            data: {
                u_id: id
            },
            success: function(data) {
                if (data == 1) {

                    dataLoad();
                }

            }
        })



    }

    function dataLoad() {

        $.ajax({
            url: 'file.php',
            type: 'POST',
            success: function(data) {
                $('#ID_table').html(data);
            }
        })
    }
    </script>
</body>

</html>