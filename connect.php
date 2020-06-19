<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "social_media";


$connection = mysqli_connect($host, $user, $password, $database);

if(!$connection) {
    die("connection failed" . mysqli_connect_error());


}

?>