<?php
session_start();

$conn = mysqli_connect("localhost", "root", "11182917", "cupping");
if (!$conn) die ('DB Error');
$check = "SELECT * from taste";
$result = $conn->query($check);

?>




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


  <div id="saving_effect" class="alert alert-dismissible alert-primary">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Data Saved</strong>
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
          <a class="nav-link" href="index.php">Evalutation <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php">History</a>
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
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">DateTime</th>
              <th scope="col">Flavor</th>
              <th scope="col">Balance</th>
              <th scope="col">Roasting</th>
              <th scope="col">Acidity</th>
              <th scope="col">Sweetness</th>
              <th scope="col">Aroma</th>
              <th scope="col">aftertaste</th>
              <th scope="col">Uniformity</th>
              <th scope="col">Cleanup</th>
              <th scope="col">Defect</th>
              <th scope="col">Body</th>
            </tr>
          </thead>
          <tbody>
            <?php

            //while($i < $result->num_rows)
            $i = 0;
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {

              if ($i % 2 == 0){
                echo '<tr class="table-active">';
              } else {
                echo '<tr>';
              }
              echo '<th scope="row">'.$row['created'].'</th>';
              echo '<th scope="col">'.$row['flavor'].'</th>';
              echo '<th scope="col">'.$row['balance'].'</th>';
              echo '<th scope="col">'.$row['roastlevel'].'</th>';
              echo '<th scope="col">'.$row['acidity'].'</th>';
              echo '<th scope="col">'.$row['sweetness'].'</th>';
              echo '<th scope="col">'.$row['aroma'].'</th>';
              echo '<th scope="col">'.$row['aftertaste'].'</th>';
              echo '<th scope="col">'.$row['uniformity'].'</th>';
              echo '<th scope="col">'.$row['cleanup'].'</th>';
              echo '<th scope="col">'.$row['defect'].'</th>';
              echo '<th scope="col">'.$row['body'].'</th>';
              echo '</tr>';
              $i = $i + 1;
            }
            ?>

          </tbody>
        </table>
      </div><!-- /.row 1 -->


    </form>
    <div class="footer" style="height:50px"> <div>

    </div> <!-- container marketing -->


  </body>

  </html>
