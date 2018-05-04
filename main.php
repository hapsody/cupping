<?php
session_start();

if(isset($_SESSION['username']))
{
  echo "login success";
  header('Location: ./index.php');
  //echo "<a href=logout.php> logout </a>";
} else {
header('Location: ./login.html');

}
?>
