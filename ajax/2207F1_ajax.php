<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">

   
    <h2>AJAX IN PHP <button type="button" id="btnFetchData" class="btn btn-success">Fetch Data</button> </h2>
   <br>
   
    <input type="search" list="searchOptions" class="form-control" id="ID_search" />
    <datalist id="searchOptions"></datalist>
    <div id="ID_table"></div>

 </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#btnFetchData').click(function() {
            $.ajax({
                url: 'ajax_data.php',
                type: 'GET',
                success: function(data) {
                    $('#ID_table').html(data);

                }

            })

        })
        $('#ID_search').keyup(function(){
            var search_word = $('#ID_search').val();
         var options = {};
         options.url = "livesearch.php";
         options.type = "POST";
         options.data = {
            data_search: search_word,
            "load": 5
         };
         options.dataType = "json";
         options.success = function(data) {
            $("#searchOptions").empty();
            for (var i = 0; i < data.length; i++) {
               $("#searchOptions").append("<option data-value=\"."+ data[i].id +"\" value='" + data[i].user_name + "'></option>");
            }
         };
         $.ajax(options);
      });




        // keyboard press
        // $('#ID_search').keyup(function(){
        //     var search_word = $('#ID_search').val();
        //     $.ajax({
        //         url : 'livesearch.php',
        //         type : 'POST',
        //         data : {
        //             data_search : search_word
        //         },
        //         success: function(data){
        //             $('#ID_table').html(data);
        //         }
        //     })
        // })



        // $('#ID_search').keyup(function() {
        //     var search_word = $('#ID_search').val();
        //     $.ajax({
        //         url: 'livesearch.php',
        //         type: 'POST',
        //         data: {
        //             data_search: search_word
        //         },
        //         success: function(data) {
        //             $('#ID_table').html(data);
        //         }
        //     })


        // })







    })
    </script>
</body>

</html>