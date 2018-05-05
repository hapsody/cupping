<?php session_start();?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>CUPPING</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-ae362vOLHy2F1EfJtpMbNW0i9pNM1TP2l5O4VGYYiLJKsaejqVWibbP6BSf0UU5i" crossorigin="anonymous">
  <style type="text/css">
  .marketing .col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
  }

  .taste-pics{
    height:140px;
    width:140px;
    margin:auto;
    background:#707070;
  }

  input[type=range] {
    -webkit-appearance: none;
    width: 50%;
    margin: 2.45px 0;
  }
  input[type=range]:focus {
    outline: none;
  }
  input[type=range]::-webkit-slider-runnable-track {
    width: 100%;
    height: 3.1px;
    cursor: pointer;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
    background: #A65700;
    border-radius: 22.9px;
    border: 0.5px solid #010101;
  }
  input[type=range]::-webkit-slider-thumb {
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.31), 0px 0px 1px rgba(13, 13, 13, 0.31);
    border: 0px solid #000000;
    height: 8px;
    width: 16px;
    border-radius: 3px;
    background: #ffffff;
    cursor: pointer;
    -webkit-appearance: none;
    margin-top: -2.95px;
  }
  input[type=range]:focus::-webkit-slider-runnable-track {
    background: #e37900;
  }
  input[type=range]::-moz-range-track {
    width: 100%;
    height: 3.1px;
    cursor: pointer;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
    background: #5e3200;
    border-radius: 22.9px;
    border: 0.5px solid #010101;
  }
  input[type=range]::-moz-range-thumb {
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.31), 0px 0px 1px rgba(13, 13, 13, 0.31);
    border: 0px solid #000000;
    height: 8px;
    width: 16px;
    border-radius: 3px;
    background: #ffffff;
    cursor: pointer;
  }
  input[type=range]::-ms-track {
    width: 100%;
    height: 3.1px;
    cursor: pointer;
    background: transparent;
    border-color: transparent;
    color: transparent;
  }
  input[type=range]::-ms-fill-lower {
    background: #000000;
    border: 0.5px solid #010101;
    border-radius: 45.8px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
  }
  input[type=range]::-ms-fill-upper {
    background: #5e3200;
    border: 0.5px solid #010101;
    border-radius: 45.8px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
  }
  input[type=range]::-ms-thumb {
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.31), 0px 0px 1px rgba(13, 13, 13, 0.31);
    border: 0px solid #000000;
    height: 8px;
    width: 16px;
    border-radius: 3px;
    background: #ffffff;
    cursor: pointer;
    height: 3.1px;
  }
  input[type=range]:focus::-ms-fill-lower {
    background: #5e3200;
  }
  input[type=range]:focus::-ms-fill-upper {
    background: #e37900;
  }

  </style>


  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/custom.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $("#flavor").on('input', function() {
    $("#flavor_value").html( $(this).val() );
  });
  $("#balance").on('input', function() {
    $("#balance_value").html( $(this).val() );
  });
  $("#roasting").on('input', function() {
    $("#roasting_value").html( $(this).val() );
  });
  $("#acidity").on('input', function() {
    $("#acidity_value").html( $(this).val() );
  });
  $("#sweetness").on('input', function() {
    $("#sweetness_value").html( $(this).val() );
  });
  $("#aroma").on('input', function() {
    $("#aroma_value").html( $(this).val() );
  });

  $("#aftertaste").on('input', function() {
    $("#aftertaste_value").html( $(this).val() );
  });
  $("#uniformity").on('input', function() {
    $("#uniformity_value").html( $(this).val() );
  });
  $("#cleanup").on('input', function() {
    $("#cleanup_value").html( $(this).val() );
  });
  $("#defect").on('input', function() {
    $("#defect_value").html( $(this).val() );
  });
  $("#body").on('input', function() {
    $("#body_value").html( $(this).val() );
  });




  </script>


  <script>
  $( function() {
    // run the currently selected effect
    function runEffect() {
      // Run the effect
      $( "#effect" ).show( 'blind', '', 500, callback );
    };

    //callback function to bring a hidden box back
    function callback() {
      setTimeout(function() {
        $( "#effect:visible" ).removeAttr( "style" ).fadeOut();
      }, 1000 );
    };

    // Set effect from select menu value
/*
    $( "#button" ).on( "click", function() {
      runEffect();
    });
*/

    $( "#effect" ).hide();


  });
</script>

<script>

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-23019901-1']);
_gaq.push(['_setDomainName', "bootswatch.com"]);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
</head>

<body>

  <div class="toggler">
    <div id="effect" class="ui-widget-content ui-corner-all">
      <h3 class="ui-widget-header ui-corner-all">Saved</h3>
      <p> saving success.</p>
    </div>
  </div>


  <!-- head -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">CUPPING</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <?php

      if(isset($_SESSION['username']))
      {
        echo '<a class="btn btn-primary btn-lg" href="" role="button" >'.$_SESSION['username'].'</a>';
        echo '<a class="btn btn-primary btn-lg" href="signout.php" role="button" >'.'Log out'.'</a>';

      } else {
        echo '<a class="btn btn-primary btn-lg" href="signin.html" role="button" >Sign in</a>';
      }
      ?>


    </div>
  </nav>

  <div class="jumbotron">
    <h1 class="display-3"></h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>

  <!-- Three columns of text below the carousel -->
  <div class="container marketing">
    <form action="submit_process.php" method="post">


      <div class="row"> <!-- row 1-->
        <div class="col-lg-4">
          <div class="rounded-circle taste-pics" > <img class="rounded-circle" src="img/flavor.png" alt="Generic placeholder image" width="140" height="140"> </div>
          <h2>Flavor</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

          <font id="flavor_value">5</font>
          <p><input type="range" class="slider" name="flavor" id="flavor" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img class="rounded-circle" src="img/balance.png" alt="Generic placeholder image" width="140" height="140"> </div>
          <h2>Balance</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <font id="balance_value">5</font>
          <p><input type="range" class="slider" name="balance" id="balance" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img class="rounded-circle" src="img/coffee_beans_roast.png" alt="Generic placeholder image" width="140" height="140"> </div>
          <h2>Roasting</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <font id="roasting_value">5</font>
          <p><input type="range" class="slider" name="roastlevel" id="roasting" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row 1 -->

      <div class="row"> <!-- /.row 2 -->
        <div class="col-lg-4">
          <div class="rounded-circle taste-pics" > <img class="rounded-circle" src="img/acidity.png" alt="Generic placeholder image" width="140" height="140"> </div>
          <h2>Acidity</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <font id="acidity_value">5</font>
          <p><input type="range" class="slider" name="acidity" id="acidity" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img class="rounded-circle" src="img/donut-no-sprinkles-512.png" alt="Generic placeholder image" width="140" height="140"> </div>
          <h2>Sweetness</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <font id="sweetness_value">5</font>
          <p><input type="range" class="slider" name="sweetness" id="sweetness" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img class="rounded-circle" src="img/smell-512.png" alt="Generic placeholder image" width="140" height="140"> </div>
          <h2>Aroma</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <font id="aroma_value">5</font>
          <p><input type="range" class="slider" name="aroma" id="aroma" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row 2 -->
      <div class="row"> <!-- /.row 3 -->
        <div class="col-lg-4">
          <div class="rounded-circle taste-pics" >  </div>
          <h2>Aftertaste</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <font id="aftertaste_value">5</font>
          <p><input type="range" class="slider" name="aftertaste" id="aftertaste" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics">  </div>
          <h2>Uniformity</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <font id="uniformity_value">5</font>
          <p><input type="range" class="slider" name="uniformity" id="uniformity" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> </div>
          <h2>Clean up</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <font id="cleanup_value">5</font>
          <p><input type="range" class="slider" name="cleanup" id="cleanup" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row 3 -->
      <div class="row"> <!-- /.row 4 -->
        <div class="col-lg-4">
          <div class="rounded-circle taste-pics" >  </div>
          <h2>Defect</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <font id="defect_value">5</font>
          <p><input type="range" class="slider" name="defect" id="defect" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics">  </div>
          <h2>Body</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <font id="body_value">5</font>
          <p><input type="range" class="slider" name="body" id="body" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row 4 -->
      <div class="row"> <!-- /.row 5 -->
        <button type="submit" class="btn btn-primary btn-lg btn-block" style="width:70%; margin:auto;">Save</button>
      </div><!-- /.row 4 -->
    </form>
  </div> <!-- container marketing -->

  <div class="alert alert-dismissible alert-primary">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
  </div>

  <?php
  echo '<script>';
  if ( isset($_SESSION['username']) )
  {

    echo 'runEffect();';

    $_SESSION['firstlogin'] = false;
  }
  echo '</script>';
  ?>

</body>

</html>
