<?php require_once "includes/layout/header.php"; ?>

<?php 

$subject = $_POST['subject-select'];
$subject_marks = get_subject_marks($subject);
$print_subject = strtoupper($subject);
?>

<div class="container">
  <div class="table-responsive">
    <form action="marks_for_subject.php" method="POST">
      <table class="table">
        <thead>
          <tr>
            <th>Enrollment no.</th>
            <th>Name</th>
            <th><?php echo $print_subject ?></th>
          </tr>
        </thead>
        <tbody>
            <?php $n = 0; ?>
            <?php foreach ($subject_marks as $student) { ?>
            <tr>
              <td><?php echo $student['rollno']; ?><input type="hidden" name="arr[<?php echo $n; ?>][rollno]" value="<?php echo $student['rollno']; ?>" /></td>
              <td><?php echo $student['name']; ?></td>
              <td><input type="text" class="form-control" name="arr[<?php echo $n; ?>][<?php echo $subject; ?>]" value="<?php echo $student[$subject]; ?>" /></td>
            </tr>
            <?php $n++; ?>
            <?php } ?>
        </tbody>    
      </table>
      <button type="submit" class="btn btn-success submit">Save Changes</button>
    </form>
  </div>
</div>

<?php require_once "includes/layout/footer.php"; ?>