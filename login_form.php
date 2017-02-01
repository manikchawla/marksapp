<?php require_once "includes/layout/header.php"; ?>

<?php
include "login.php"; // Includes Login Script

if(isset($_SESSION['user'])){
header("location: choose_subject.php");
}
?>
  
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <form action="login.php" method="POST">
            <!--<button type="button" id="fb_login_button" class="btn btn-primary btn-lg btn-block"><span class="modal_button_text"><img src="img_site/fblogo.png" alt="FB logo"> Log In With Facebook</span></button>
            <p class="modal_p">or</p>-->
            <div class="form-group">
              <input type="email" class="myform form-control" id="email" name="username" placeholder="Email">
              <input type="password" class="myform form-control" id="pwd" name="password" placeholder="Password">
            </div>
            <button type="submit" name="submit" id="login_button" class="btn btn-info btn-lg btn-block"><span class="modal_button_text">Log In</span></button>
            <p class="modal_p">Forgot my password</p>
          </form>
        </div>
        <div class="col-md-4"></div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>