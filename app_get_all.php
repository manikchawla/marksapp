<?php require_once "includes/db_connection.php"; ?>
<?php require_once "includes/functions.php"; ?>

<?php 

$all = get_all();
echo json_encode($all);

?>

<?php mysqli_close($con); ?>