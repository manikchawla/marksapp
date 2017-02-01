<?php require_once "includes/layout/header.php"; ?>

<?php 

$arr = $_POST['arr'];

foreach ($arr[0] as $key => $value)
    $sub = $key;

foreach ($arr as $field) 
    $status = update_marks($sub, $field['rollno'], $field[$sub]);
 
$subject_marks = get_subject_marks($sub);
$print_subject = strtoupper($sub);
?>

<div class="container">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <div class="table-responsive">
	  <table class="table">
	    <thead>
	      <tr>
	        <th>Enrollment no.</th>
	        <th>Name</th>
	        <th><?php echo $print_subject ?></th>
	      </tr>
	    </thead>
	    <tbody>
        <?php foreach ($subject_marks as $student) { ?>
        <tr>
          <td><?php echo $student['rollno']; ?></td>
          <td><?php echo $student['name']; ?></td>
          <td><?php echo $student[$sub]; ?></td>
        </tr>
        <?php } ?>
	    </tbody>    
	  </table>
  </div>
  </div>
  <div class="col-md-3"></div>
</div>

<?php require_once "includes/layout/footer.php"; ?>