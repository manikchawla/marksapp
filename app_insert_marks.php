<?php require_once "includes/db_connection.php"; ?>
<?php require_once "includes/functions.php"; ?>

<?php 

if(!$_POST)
    echo "Nothing here";

else {
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $ds = $_POST['ds'];
    $ada = $_POST['ada'];
    $java = $_POST['java'];
    $oose = $_POST['oose'];

    app_insert_record($rollno, $name, $ds, $ada, $java, $oose);
}

?>

<?php mysqli_close($con); ?>