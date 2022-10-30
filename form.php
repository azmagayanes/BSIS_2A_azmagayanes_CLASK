<?php
@include 'config.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit']))
 {  
   $firstname = ($_POST['fname']);
   $middlename = ($_POST['mname']);
   $lastname = ($_POST['lname']);
   $email = ($_POST['email']);
   $pnumber = ($_POST['pnumber']);
   $degree = ($_POST['degree']);
   $yearlevel = ($_POST['yearlevel']);
   $gender = ($_POST['gender']);
 

   $query = "INSERT INTO tb_enrollment (first_name, middle_name, last_name, email, phone_number, degree, yearlevel, gender) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$pnumber', '$degree', '$yearlevel', '$gender')";
   $result = mysqli_query($conn, $query);

  if($result){
   header("Location: index.php?success=true");
  }else{
   echo "Form was not submitted successfully";
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Enrollment</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Enroll Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      };
      ?>
      <input class="form-control" type="text" name="fname" required placeholder="Enter your first name">
      <input class="form-control" type="text" name="mname"  placeholder="Enter your middle name">
      <input class="form-control" type="text" name="lname" required placeholder="Enter your last name">
      <input class="form-control" type="email" name="email" required placeholder="Enter your email">
      <input class="form-control" type="tel" name="pnumber" required placeholder="Enter your phone number">
      <select class ="form-select" name="degree">
        <option selected>Choose Degree</option>
        <option value="BSIS">BS in Information System</option>
        <option value="BSCS">BS in Computer Science</option>
        <option value="BSE">BS in Entrepreneurship</option>
        <option value="BSCE">BS in Computer Engineering</option>
    </select>
    <select class ="form-select" name ="yearlevel">
        <option selected>Choose Year</option>
        <option value="1st">1st Year</option>
        <option value="2nd">2nd Year</option>
        <option value="3rd">3rd Year</option>
        <option value="4th">4th Year</option>
    </select>

    <select class ="form-select" name="gender">
	<option selected>Choose Gender</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	<option value="Other">Other</option>
      <input  type="submit" name="submit" value="Enroll" class="form-btn">
   </form>

</div>

</body>
</html>



