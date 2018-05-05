<?php
$username = htmlspecialchars( $_POST['username'] );
$password = htmlspecialchars( $_POST['password'] );


$conn = mysqli_connect("localhost", "root", "11182917", "cupping");
//$url = 'http://127.0.0.1:8080/cupping/docs/assets/index.html';


if($username==NULL || $password==NULL)
{
  echo $username;
  echo $password;
  echo "please fill up any empty boxes.";
  exit();
}

$conn = mysqli_connect("localhost", "root", "11182917", "cupping");

$check = "SELECT * from user_info WHERE username='$username'";
$result = $conn->query($check);
if($result->num_rows == 1)
{
  $row = $result->fetch_array(MYSQLI_ASSOC);
  if($row['password'] == $password){
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['firstlogin']='true';
    if(isset($_SESSION['username']))
    {
      header('Location: ./main.php');
    }
    else {
      echo "saving session is failed";
    }
  } else {
    echo "wrong id or pw";
  }

} else {
  echo "wrong id or pw";
}

?>
