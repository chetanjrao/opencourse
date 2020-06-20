<?php
include "./connect.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $emails = $_POST["email"];
    $psws = $_POST["psw"];
    $encrypted_pass = md5($psws);
    $cpsws = $_POST["cpsw"];
    $first_name = $_POST["first_name"];
    $email_check_query = "SELECT * FROM users WHERE email='$emails'";
    $email_check_query_exec = mysqli_query($connection, $email_check_query);
    $num_of_rows_matching = mysqli_num_rows($email_check_query_exec);
    if($num_of_rows_matching > 0){
        echo "<div class=\"alert alert-danger\" role=\"alert\">
        Email already in use
      </div>";
    } else {

    if($psws == $cpsws){
        $query = "INSERT INTO `users` (`id`, `first_name`, `email`, `password`) VALUES (NULL, '$first_name', '$emails', '$encrypted_pass') ";
        $query_exe = mysqli_query($connection, $query);
        echo "<div class=\"alert alert-success\" role=\"alert\">
        Registration successful
      </div>";
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">
        Passwords do not match
      </div>";
    }
    }


}

 ?>

<!DOCTYPE html>
<html>
    <head>
<title>registration form</title>  
 </head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>
<form id="form" action="" method = 'post' >
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <div class="form-group">
            <label for="exampleFormControlInput1">Name / First Name</label>
            <input type="text" class="form-control" name="first_name" id="exampleFormControlInput1" placeholder="Your name" required>
          </div>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" class="form-control" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" class="form-control" id="psw" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="cpsw" class="form-control" id="psw-repeat" required>
          <hr>
          
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button id="submit_button" type="submit" class="btn btn-success">Register</button>
         
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
        
      </form>
    </body>
    <script src="./script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </html>