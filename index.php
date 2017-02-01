<?php require_once "includes/layout/header.php"; ?>

    <nav class="navbar navbar-default">
      <button class="btn btn-primary">marksapp</button>
      <ul id="lister"class="nav navbar-nav nav-list">
        <li><a href="get_all.php">HOD Area</a></li>
        <li><a href="choose_subject.php">Teacher's Area</a></li>
        <li><a href="import_from_excel.php">File Upload</a></li>
        <li class="modal_parent_li">
          <a data-toggle="modal" data-target=".bs-example-modal-sm" class="navitem" href="login_form.php"><span class="nav_glyph glyphicon glyphicon-user"></span>
          <span class="hidden-xs">My Account</span></a>
          <!--<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div id="modal_window" class="modal-dialog modal-sm">
              <div id="login_modal" class="modal-content">
                <div class="login_signup_div_container">
                  <abc id="sign_up_text_modal_11">Sign Up</abc>
                  <abc id="login_text_modal_11">Log In</abc>
                  <br>
                  <abc1 id="signup_arrow_modal_11"><img src="img_site/ic_navigation_arrow_drop_up.png"></abc1>
                  <abc1 id="login_arrow_modal_11"><img src="img_site/ic_navigation_arrow_drop_up.png"></abc1>
                </div>
                <div class="visible_for_login">
                  <div class="modal-body modal_login_body">
                    <div class="form-group">
                      <input type="email" class="myform form-control" id="email" placeholder="Email">
                      <input type="password" class="myform form-control" id="pwd" placeholder="Password">
                    </div>
                    <button type="button" id="login_button" class="btn btn-info btn-lg btn-block"><span class="modal_button_text">Log In</span></button>
                    <p class="modal_p">Forgot my password</p>
                  </div>
                </div>

                <div class="visible_for_signup">
                  <div class="modal-body modal_login_body">
                    <div class="form-group">
                      <input type="text" class="myform form-control" id="name" placeholder="Full Name">
                      <input type="email" class="myform form-control" id="email" placeholder="Email">
                      <input type="password" class="myform form-control" id="pwd" placeholder="Password">
                    </div>
                    <button type="button" id="login_button" class="btn btn-info btn-lg btn-block"><span class="modal_button_text">Sign Up</span></button>
                    <p class="modal_p">By creating an account, I accept Marksapp's <strong>Terms of Service</strong> and <strong>Honor Code</strong>.</p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </li>
      </ul>
    </nav>
    <div class="container">
      <div class="col-lg-4 col-md-1 col-sm-1"></div>
      <div class="col-lg-4 col-md-10 col-sm-10">
        <form action="student_marks.php" method="POST">
          <div class="input-group">
            <input type="text" class="form-control" name="rollno" placeholder="Enter Enrollment no.">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-default">Get marks</button>
            </span>
          </div>
        </form> 
      </div>
      <div class="col-lg-4 col-md-1 col-sm-1"></div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>