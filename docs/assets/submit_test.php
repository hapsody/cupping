<?php

$amount = htmlspecialchars( $_POST['amount'] );
$conn = mysqli_connect("localhost", "root", "11182917", "mysqltest");
$url = 'http://127.0.0.1:8080/cupping/docs/assets/index.html';

mysqli_query($conn, "
    INSERT INTO bedamount (
        amount,
        created
    ) VALUES (
        $amount,
        NOW()
    )");

header('Location: '.$url );

?>
