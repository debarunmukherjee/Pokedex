<!DOCTYPE html>
<html>
<head>
	<title>Pokedex</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script>
    
        $(document).ready(function() {

           $("#search").keyup(function() {
               var name = $('#search').val();
               if (name == "") {
                   $("#display").html("");
               }
               else {
                   $.ajax({
                       type: "POST",
                       url: "live-search.php",
                       data: {
                           search: name
                       },
                       success: function(res) {
                            $("#display").html(res);
                       }
                   });
               }
           });
        });
        
    </script>
	<link rel="stylesheet" href="index.css">
	
    
</head>
<body>
    <section class="search">
       <div style="text-align: right; margin-top:30px; padding: 0 30px;">
           <div class="but"><a href="register.php" style="color: brown;">Register new Pokemon!</a></div>
       </div>
        <div class="row search-container">
            <input id="search" type="text" placeholder="&#xF002;&nbsp;&nbsp; Search your favourite pokemon" style="font-family:'Lato', FontAwesome" >
        </div>
        
        <div id="display"></div>
    </section>
    
    
</body>
</html>