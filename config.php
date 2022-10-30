<?php

$conn = mysqli_connect('localhost','root','','enroll_kana');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>
