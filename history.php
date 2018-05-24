<?php
session_start();

function write_arr_to_script($target_arr, $date_arr)
{
  $i = 0;
  $arr_length = count($target_arr);
  echo '[';
  foreach($target_arr as $item)
  {
    echo '["'.$date_arr[$i].'",';
    echo $item.']';
    $i++;
    if($i != $arr_length)
    {
      echo ',';
    }
  }
  echo ']';
  return;
}

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

  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/custom.js"></script>

  <script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css">
  <script type="text/javascript" src="js/jquery.jqplot.min.js"></script>
  <script type="text/javascript" src="js/jqplot.canvasTextRenderer.js"> </script>
  <script type="text/javascript" src="js/jqplot.canvasAxisTickRenderer.min.js"></script>
  <script type="text/javascript" src="js/jqplot.dateAxisRenderer.min.js"></script>



  <script>
  $(document).ready(function()
  {
    $("#historytable").tablesorter();

    //1번째 입력값 (그려진 영역의 id값)
    //2번째 입력값 (그래프내에 들어갈 데이터 값)


  });

</script>

</head>

<body>


  <!-- head -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">CUPPING</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Evalutation <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="history.php">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
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
    <div class="row"> <!-- row 1-->
      <table id="historytable" class="table table-hover" style="width:500px;height:500px">
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
            <th scope="col">Avg</th>
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
            $created_arr[$i] = $row['created'];
            echo '<th scope="col">'.$row['flavor'].'</th>';
            $flavor_arr[$i] = $row['flavor'];
            echo '<th scope="col">'.$row['balance'].'</th>';
            $balance_arr[$i] = $row['balance'];
            echo '<th scope="col">'.$row['roastlevel'].'</th>';
            $roastlevel_arr[$i] = $row['roastlevel'];
            echo '<th scope="col">'.$row['acidity'].'</th>';
            $acidity_arr[$i] = $row['acidity'];
            echo '<th scope="col">'.$row['sweetness'].'</th>';
            $sweetness_arr[$i] = $row['sweetness'];
            echo '<th scope="col">'.$row['aroma'].'</th>';
            $aroma_arr[$i] = $row['aroma'];
            echo '<th scope="col">'.$row['aftertaste'].'</th>';
            $aftertaste_arr[$i] = $row['aftertaste'];
            echo '<th scope="col">'.$row['uniformity'].'</th>';
            $uniformity_arr[$i] = $row['uniformity'];
            echo '<th scope="col">'.$row['cleanup'].'</th>';
            $cleanup_arr[$i] = $row['uniformity'];
            echo '<th scope="col">'.$row['defect'].'</th>';
            $defect_arr[$i] = $row['defect'];
            echo '<th scope="col">'.$row['body'].'</th>';
            $body_arr[$i] = $row['body'];


            $row_sum = $row['flavor'] + $row['balance'] + $row['roastlevel'] + $row['acidity'] + $row['sweetness'] + $row['aroma'] +
            $row['aftertaste'] + $row['uniformity'] + $row['cleanup'] + $row['defect'] + $row['body'];
            $row_avg = sprintf('%0.2f', $row_sum / 11);
            echo '<th scope="col">'.$row_avg.'</th>';
            echo '</tr>';
            $i = $i + 1;
          }

          ?>

        </tbody>
      </table>
    </div><!-- /.row 1 -->

    <div class="row"> <!-- row 2-->
      <div id="graph" style="width:90%;height:500px"></div>
    </div>

    <div class="footer" style="height:50px"> </div>

  </div> <!-- container marketing -->
  <script>

  var flavor = <?php write_arr_to_script($flavor_arr, $created_arr); ?>;
  var balance = <?php write_arr_to_script($balance_arr, $created_arr); ?>;
  var roastlevel = <?php write_arr_to_script($roastlevel_arr, $created_arr); ?>;
  var acidity = <?php write_arr_to_script($acidity_arr, $created_arr); ?>;
  var sweetness = <?php write_arr_to_script($sweetness_arr, $created_arr); ?>;
  var aroma = <?php write_arr_to_script($aroma_arr, $created_arr); ?>;
  var aftertaste = <?php write_arr_to_script($aftertaste_arr, $created_arr); ?>;
  var uniformity = <?php write_arr_to_script($uniformity_arr, $created_arr); ?>;
  var cleanup = <?php write_arr_to_script($cleanup_arr, $created_arr); ?>;
  var defect = <?php write_arr_to_script($defect_arr, $created_arr); ?>;
  var body = <?php write_arr_to_script($body_arr, $created_arr); ?>;


  var date = [['2018-04-25 22:55:53',1],['2017/12/12',2],['2017/12/13',2],['2017/12/14',4]];

  $.jqplot ('graph', [flavor, balance, roastlevel, acidity, sweetness, aroma, aftertaste, uniformity, cleanup, defect, body],

  //  [
  <?php

  /*
  write_arr_to_script($flavor_arr);
  write_arr_to_script($balance_arr);
  write_arr_to_script($roastlevel_arr);
  write_arr_to_script($acidity_arr);
  write_arr_to_script($sweetness_arr);
  write_arr_to_script($aroma_arr);
  write_arr_to_script($aftertaste_arr);
  write_arr_to_script($uniformity_arr);
  write_arr_to_script($cleanup_arr);
  write_arr_to_script($defect_arr);
  write_arr_to_script($body_arr);
  */
  ?>
  //]

  {
    title: 'Cupping History Graph',
    axesDefaults: {
      tickRenderer: $.jqplot.CanvasAxisTickRenderer,
      pad: 1.2
    },
    axes: {
      xaxis:{
        renderer: $.jqplot.DateAxisRenderer,

        tickOptions :{
          angle : 60,
          formatString:'%F'
        }
      },
      yaxis: {
      },
    },
    series:[ {label:'flavor'}, {label:'balance'}, {label:"roasting"}, {label:"acidity"}, {label:"sweetness"}, {label:"aroma"}, {label:"aftertaste"}, {label:"uniformity"}, {label:"cleanup"}, {label:"defect"}, {label:"body"}],
    legend: {
      renderer : $.jqplot.EnhancedLegendRenderer,
      show: true, //표시 유무
      location: 'e', // 위치 (e,w,s,n) 동서남북 조합가능 ne
      placement: 'outside', // 위치 (Default 값은 inside)
      textColor : 'black',
      rowSpacing : '0px',//범례 들간의 사이 공간
    }
  }
);
</script>
</body>

</html>
