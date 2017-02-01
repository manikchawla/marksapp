<?php require_once "includes/db_connection.php"; ?>
<?php require_once "includes/functions.php"; ?>

<?php

session_start();
$errors = [];

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$_SESSION['errors'] = "Username or Password cannot be blank";
		header("Location: login_form.php");
	}
	else
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$username = sanitize($username);
		$password = sanitize($password);
		$try_login = login($username, $password);

		if ($try_login == 1) {
			$_SESSION['user'] = $username;
			header("Location: choose_subject.php");
		}
		else {
			$_SESSION['errors'] = "Username or password is invalid.";
			header("Location: login_form.php");

		}
	}
}
else {
 echo $_SESSION['errors'];
}

?>

<?php mysqli_close($con); ?>