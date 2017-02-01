<?php require_once "includes/layout/header.php"; ?>

<?php
if (isset($_POST)) {
  $marks = $_POST['rollno'];
  $sanitized = sanitize($marks);
	$marks = get_marks($sanitized);
}
?>

<div class="container">
  <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>Enrollment no.</th>
            <td><?php echo $marks['rollno']; ?></td>
          </tr>
          <tr>
            <th>Name</th>
            <td><?php echo $marks['name']; ?></td>
          </tr>
          <tr>
            <th>DS</th>
            <td><?php echo $marks['ds']; ?></td>
          </tr>
          <tr>
            <th>ADA</th>
            <td><?php echo $marks['ada']; ?></td>
          </tr>
          <tr>
            <th>JAVA</th>
            <td><?php echo $marks['java']; ?></td>
          </tr>
          <tr>
            <th>OOSE</th>
            <td><?php echo $marks['oose']; ?></td>
          </tr>
        </table>
      </div>
    <div class="col-md-4"></div>
  </div>
</div>  

<?php require_once "includes/layout/footer.php"; ?>		
	  