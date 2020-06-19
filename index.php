<?php 
session_start();
require('connect.php');
if(empty($_SESSION["is_logged_in"]) || !$_SESSION["is_logged_in"]){
  header("Location: login.php");
}
$email = $_SESSION["user_email"];
$query = "SELECT * FROM users WHERE email='$email'";
$query_exec = mysqli_query($connection, $query);
$data = mysqli_fetch_array($query_exec, MYSQLI_ASSOC);
$first_name = $data["first_name"];
?>
<h1>Welcome <?php echo $first_name; ?>
</h1>

<a href="logout.php">Logout from the site</a>