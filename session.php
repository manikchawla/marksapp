<?php require_once "includes/db_connection.php"; ?>
<?php require_once "includes/functions.php"; ?>

<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['user'];
echo "$user_check";
// SQL Query To Fetch Complete Information Of User
global $con;
$result  = mysqli_query($con, "select tuser from tlogin where tuser='$user_check'");
if ($result) {
  $row = mysqli_fetch_assoc($result);
  $login_session =$row['tuser'];
}
if(!isset($login_session)) {
  mysqli_close($con); // Closing Connection
  header('Location: index.php'); // Redirecting To Home Page
}
?>