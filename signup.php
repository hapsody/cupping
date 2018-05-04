<?php
$username = htmlspecialchars( $_POST['username'] );
$password = htmlspecialchars( $_POST['password'] );
$passrepeat = htmlspecialchars( $_POST['passrepeat'] );
$email = htmlspecialchars( $_POST['email'] );


$conn = mysqli_connect("localhost", "root", "11182917", "cupping");
//$url = 'http://127.0.0.1:8080/cupping/docs/assets/index.html';

if($password!=$passrepeat)
{
  echo "password is not matched with repeat word.";
  exit();
}

if($username==NULL || $password==NULL || $passrepeat==NULL || $email==NULL)
{
  echo $username;
  echo $password;
  echo $passrepeat;
  echo $email;
  echo "please fill up any empty boxes.";
  exit();
}

$conn = mysqli_connect("localhost", "root", "11182917", "cupping");

$check = "SELECT * from user_info WHERE username='$username'";
$result = $conn->query($check);
if($result->num_rows == 1)
{
  echo "duplicated id.";
  exit();
}

$signup=mysqli_query($conn, "INSERT INTO user_info (username, password, email, created)
VALUES ( '$username', '$password', '$email', NOW())");
if($signup){
  echo "sign up success";
} else {
  echo "sign up failed";

}

?>
