<?php


include 'db.php';

// $con = mysqli_connect("localhost", "root", "", "tech_in_tech_db");
// if($con===false){
//     die("ERROR: Couid not connect." . mysqli_connect_error());
// }





if (isset($_POST['submit'])) {

  $surname = $_POST['surname'];
  $firstname = $_POST['fname'];
 
  $lastname = $_POST['lastname'];
  $mail = $_POST['email'];
 
  $phoneno = $_POST['phone'];
  $class = $_POST['class'];


  $sql = "INSERT INTO applicants (`surname`, `first_name`, `last_name`, `email`, `phone_no`, `class`) VALUES ('$surname','$firstname', '$lastname',  '$mail', '$phoneno', '$class' )";
    
    
  if (mysqli_query($con, $sql)) {

    echo '<script>';
    echo 'alert("You have successfully applied");';
    echo 'window.location.href = "index.html";';
    echo '</script>';
  }
  }
?>