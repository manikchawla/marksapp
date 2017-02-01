<?php require_once "includes/layout/header.php"; ?>

<?php 
$all = get_all();
//echo json_encode($all);
?>

<div class="container">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Enrollment no.</th>
          <th>Name</th>
          <th>DS</th>
          <th>ADA</th>
          <th>JAVA</th>
          <th>OOSE</th>
        </tr>
      </thead>
      <tbody>
      	<?php foreach ($all as $student) { ?>
        <tr>
          <?php foreach ($student as $item) { ?>
          <td><?php echo $item; ?></td>
          <?php } ?>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
  <div class="col-md-1"></div>
</div>  
		
<?php require_once "includes/layout/footer.php"; ?>