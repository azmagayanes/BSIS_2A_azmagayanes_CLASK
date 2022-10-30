<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['student'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>Student</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['student'] ?></span></h1>
      <h1>to <span>University</span></h1>
      
      <a href="form.php" class="btn">Enroll Now</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>

</div>

</body>
</html>