<?php
include "./connect.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $emails = $_POST["email"];
    $psws = $_POST["psw"];
    $encrypted_pass = md5($psws);
    $cpsws = $_POST["cpsw"];
    $first_name = $_POST["first_name"];
    if($psws == $cpsws){
        $query = "INSERT INTO `users` (`id`, `first_name`, `email`, `password`) VALUES (NULL, '$first_name', '$emails', '$encrypted_pass') ";
        $query_exe = mysqli_query($connection, $query);
        echo "your data have been stored";
    } else {
        echo "Passwords are not matching";
    }


}
 else
 echo "we couldnt store the data ";

 ?>
