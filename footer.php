<?php
    include 'functions/user-functions.php';
?>
<!--footer-->
<div class="footer-container">
        <div class="footer">
          <div class="footer-heading footer-1">
            <h2> About us </h2>
            <a href="about.php">Bio</a>
            <a href="#">Terms of services</a>
          </div>
          <div class="footer-heading footer-2">
            <h2> Contact us</h2>
            <a href="#">Jobs</a>
            <a href="#">888-222-1234</a>
            <a href="#">minions@fake.com</a>
          </div>
          <div class="footer-heading footer-3">
            <h2> Social Media</h2>
            <a href="#">Instagram</a>
            <a href="#">Facebook</a>
            <a href="#">twitter</a>
            <a href="https://www.youtube.com/watch?v=iRcNU6tZ65E">Youtube</a>
          </div>
          <div class="footer-email-form">
            <h2>Join our Newsletter</h2>
            <!-- "php" -->
            <div class="emailsform">
    <form class="form-signup" action="includes/userdetails.inc.php" method="post">
        <fieldset active>
            <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
            echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET['error'] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
          }
          else if (isset($_GET['error'])) {
          if ($_GET['signup'] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
          }
        }
        ?>
            <!-- "end of php" --->
            <input type="email" name="mail" id="footer-email" class="form-control" placeholder="Enter e-mail if you dare">
            <button type="submit" name="emails-submit" class="btn btn-primary" value="Sign Up" id="footer-email-btn">Sign Up</button>
            </fieldset>
      </form>
      </div>
      </div>
        </div>
      </div>

      

     
