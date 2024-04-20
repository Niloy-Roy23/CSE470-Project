<?php

function getReply($email) {
    $conn= mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT * FROM showreply WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

   return $result;
}


?>
