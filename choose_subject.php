<?php include "session.php"; ?>
<?php require_once "includes/layout/header.php"; ?>

<div class="container">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form action="enter_marks.php" method="POST">
      <div class="form-group">
        <label class="subject-label" for="subject">Select Subject</label>
        <select name="subject-select" class="form-control subject-select">
          <option value="ds" type="text">DS</option>
          <option value="ada" type="text">ADA</option>
          <option value="java" type="text">JAVA</option>
          <option value="oose" type="text">OOSE</option>
        </select>
        <button type="submit" class="btn btn-success submit">Next</button>
      </div>
    </form>
    <form action="logout.php" method="POST">
      <button type="submit">Logout</button>
    </form>
  </div>
  <div class="col-md-4"></div>
</div>

<?php require_once "includes/layout/footer.php"; ?>