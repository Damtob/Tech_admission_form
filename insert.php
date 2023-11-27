<?php


include 'db.php';



if (isset($_POST['submit'])) {

  $surname = $_POST['surname'];
  $firstname = $_POST['fname'];
 
  $lastname = $_POST['lastname'];
  $mail = $_POST['email'];
 
  $phoneno = $_POST['phone'];
  $class = $_POST['class'];


  $sql = "INSERT INTO applicants (surname, first_name, last_name, email, phone_no, class ) VALUES ('$surname', '$firtname', '$lastname', '$mail', '$phoneno', '$class)";
  
    if (mysqli_query($con, $sql)) {
       // echo "Image uploaded successfully.";
       echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
       echo "You have Applied successfully";
       echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
       echo "</div>";
       echo "<script>window.setTimeout(function() {window.location.href = 'index.html';}, 4000);</script>";
       exit();

    }

}
?>