<?php
      include 'header3.php';
  ?>

        
      
        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f0d7a30a28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <title>VSAB | Sign Up</title>
  </head>
  <body>


    <div class="signupform">
    <form class="form-signup" action="includes/signup.inc.php" method="post">
    <div class="container">
          <div class="row">
            <div class="col-12">
        <fieldset active>
          <legend>
            <div class="legendtitle">Create New Account</div><br> 
          </legend>
            <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
            echo '<p class="signuperror"><b>Fill in all fields!</b></p>';
            }
            else if ($_GET['error'] == "invaliduidmail") {
              echo '<p class="signuperror"><b>Invalid username and e-mail!</b></p>';
            }
            else if ($_GET['error'] == "invaliduid") {
              echo '<p class="signuperror"><b>Invalid username!</b></p>';
            }
            else if ($_GET['error'] == "invalidmail") {
              echo '<p class="signuperror"><b>Invalid e-mail!<b></p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
              echo '<p class="signuperror"><b>Your passwords do not match!</b></p>';
            }
            else if ($_GET['error'] == "usertaken") {
              echo '<p class="signuperror"><b>Username is already taken!</b></p>';
            }
          }
          else if (isset($_GET['error'])) {
          if ($_GET['signup'] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
          }
        }
        ?>
        <br>
      <!--  <div class="container">
          <div class="row">
            <div class="col-12"> 
        <legend>
            <div class="legendtitle">Create New Account</div><br> 
          </legend> -->
          <div class="mb-3">
              <div class="inputboxforsignup">
            <!-- <label for="activeTextInput" class="form-label">Email:</label> -->
            <input type="text" name="mail" id="activeTextInput" class="form-control" placeholder="Enter e-mail">
            </div>
        </div>
        <br>
          <div class="mb-3">
            <div class="inputboxforsignup">
           <!-- <label for="activeTextInput" class="form-label">Create Username:</label> -->
            <input type="text" name="uid" id="activeTextInput" class="form-control" placeholder="Enter username">
          </div>
            </div>
            <br>
          <div class="mb-3">
            <div class="inputboxforsignup">
           <!-- <label for="activeTextInput" class="form-label">Create Password:</label> -->
            <input type="password" name="pwd" id="activeTextInput" class="form-control" placeholder="Enter password">
          </div>
        </div>
        <br>
        <div class="mb-3">
            <div class="inputboxforsignup">
         <!--   <label for="activeTextInput" class="form-label">Repeat Password:</label> -->
            <input type="password" name="pwd-repeat" id="activeTextInput" class="form-control" placeholder="Repeat Password">
          </div>
        </div>
        <br>
        <!--  <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="activeFieldsetCheck" active>
              <label class="form-check-label" for="activeFieldsetCheck">
                I agree that I am a certified freak, seven days a week.
              </label>
            </div>
          </div> -->
          <div class="text-center">
        <button type="submit" name="signup-submit" class="btn btn-primary " type="button">Create Account</button>
      </div>
        </fieldset>
        </form>
          <!-- <button type="submit" name="signup-submit" class="btn btn-primary legendtitle">Create Account</button>
        </fieldset>
      </form>
        </div>
      <div class="container row col-12">
      <button type="submit" name="signup-submit" class="btn btn-primary">Create Account</button>
      <div class="text-center">
        <button class="btn btn-primary " type="button">Button</button>
      </div> -->
        </div>
      </div>
        </div>
        </div>
      
      
      


            <!--footer-->
  <?php
      include 'footer.php';
  ?>
     <!---https://www.youtube.com/watch?v=5WoQm7tR6EA----> 




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>