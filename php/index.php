<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Scraper</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

      html, body{
        height:100%;
        width:100%;
        background-image:url('../img/weather.jpg');
        background-size:cover;
        background-position:center;
        color:white;

      }

      #title{

        font-weight: bold;
      }


      

      .main{
        height:100%;
        width: 90%;
        margin: auto;
        position: relative;
        top:100px;
        text-align: center;
      }

      .center{
        text-align:center;
      }

      .alert{
        display:none;
        margin-top: 20px;
      }





    </style>
  </head>
  <body>
    <div class="container main">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class="center" id="title">Simple Weather</h1>

          <p class="lead" id="paragraph">
            Find the Weather of any city!
          </p>

          <form class="center" action="">
            <div class="form-group"><input type="text" class="form-control" name="city" id="city"></div>
            
            <input class="btn btn-success" type="submit" id="submit" value="Find Weather">

          </form>

          <div class="alert alert-success" id="success"></div>
          <div class="alert alert-danger" id="fail">City not found please try again</div>
          <div class="alert alert-warning" id="noCity">Please Enter a City</div>

        </div>
        
        


      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    <script>

      $("#submit").click(function(event){

        $(".alert").fadeOut();
        event.preventDefault();

          if ($("#city").val()!=""){

            $.get("scraper.php?city="+$("#city").val(), function(data){

              if (data==""){

                $("#fail").fadeIn();

              } else {
              
              $("#success").html(data).fadeIn();

            }
         

          })} else {

            $("#noCity").fadeIn();
          }

      });

     
    </script>
  </body>
</html>