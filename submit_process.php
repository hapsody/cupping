<?php
/*
echo $_POST['flavor'];
echo $_POST['body'];
echo $_POST['acidity'];
echo $_POST['roastlevel'];
echo $_POST['aroma'];
echo $_POST['aftertaste'];
echo $_POST['balance'];
echo $_POST['uniformity'];
echo $_POST['sweetness'];
echo $_POST['cleanup'];
echo $_POST['defect'];
*/

$flavor = htmlspecialchars( $_POST['flavor'] );
$body = htmlspecialchars( $_POST['body'] );
$acidity = htmlspecialchars($_POST['acidity']);
$roastlevel = htmlspecialchars($_POST['roastlevel']);
$aroma = htmlspecialchars($_POST['aroma']);
$aftertaste = htmlspecialchars($_POST['aftertaste']);
$balance = htmlspecialchars($_POST['balance']);
$uniformity = htmlspecialchars( $_POST['uniformity'] );
$sweetness = htmlspecialchars( $_POST['sweetness'] );
$cleanup = htmlspecialchars( $_POST['cleanup'] );
$defect = htmlspecialchars( $_POST['defect'] );


$conn = mysqli_connect("localhost", "root", "11182917", "cupping");
$url = 'http://127.0.0.1:8080/cupping/index.php';

mysqli_query($conn, "
INSERT INTO taste (
  flavor,
  body,
  acidity,
  roastlevel,
  aroma,
  aftertaste,
  balance,
  uniformity,
  sweetness,
  cleanup,
  defect,
  created
  ) VALUES (
    $flavor,
    $body,
    $acidity,
    $roastlevel,
    $aroma,
    $aftertaste,
    $balance,
    $uniformity,
    $sweetness,
    $cleanup,
    $defect,
    NOW()
    )");

    header('Location: '.$url );

    ?>
