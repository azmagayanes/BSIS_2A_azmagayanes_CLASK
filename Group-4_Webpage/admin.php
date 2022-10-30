<?php

@include 'config.php';
session_start();

if(!isset($_SESSION['admin'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   
   <title>Admin Page</title>
   
</head>
<body>
   
<p class="text-center bg-secondary fs-2 fw-bold">ENROLLED STUDENTS</p>

<table class="table table-striped">
   
  <thead>
    <tr>
      <th scope="col">ID</th> <br>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Degree</th>
      <th scope="col">Year Level</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql = "SELECT * from tb_enrollment";
$result = mysqli_query($conn, $sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
   $id = $row['student_id'];
   $firstname = $row['first_name'];
   $middlename = $row['middle_name'];
   $lastname = $row['last_name'];
   $email = $row['email'];
   $pnumber = $row['phone_number'];
   $degree = $row['degree'];
   $yearlevel = $row['yearlevel'];
   $gender = $row['gender'];
   
   echo ' <tr> 
   <th scope="row">'.$id.'</th>
   <td>'.$firstname.'</td>
   <td>'.$middlename.'</td>
   <td>'.$lastname.'</td>
   <td>'.$email.'</td>
   <td>'.$pnumber.'</td>
   <td>'.$degree.'</td>
   <td>'.$yearlevel.'</td>
   <td>'.$gender.'</td>
  </tr>';
  }
}
?>

</tbody>
</table>

<a href="logout.php" class="btn btn-dark" role="button">Logout</a>

</body>
</html>