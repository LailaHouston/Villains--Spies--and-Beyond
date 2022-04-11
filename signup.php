<?php
      include 'header.php';
  ?>

        <main>
        <div class="wrapper-main">
          <section class="section-default">
        <h1>Signup</h1>
        <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
            echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET['error'] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET['error'] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET['error'] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET['error'] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }
          }
          else if ($_GET['signup'] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
          }
        ?>
        <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
          </section>
        </div>
      </main>
      
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

<!---Test-->
    <div class="signuppg">
    <div class="signuppage">
        <div class="supfakenav">
    <h1>Villains, Spies, and<br> Beyond</h1>
    </div>
    </div>
    
    
    <div class="signupform">
    <form>
        <fieldset active>
          <legend><div class="legendtitle">Create New Account</div><br> 
            <div class="existingaccountbtn">already have an account? <a href="login.php">Log in</a></div></legend>
          <div class="mb-3">
              <div class="inputboxforsignup">
            <label for="activeTextInput" class="form-label">Email:</label>
            <input type="text" id="activeTextInput" class="form-control" placeholder="Enter Email">
            </div>
        </div>
          <div class="mb-3">
            <div class="inputboxforsignup">
            <label for="activeTextInput" class="form-label">Create Username:</label>
            <input type="text" id="activeTextInput" class="form-control" placeholder="Enter Username">
          </div>
            </div>
          <div class="mb-3">
            <div class="inputboxforsignup">
            <label for="activeTextInput" class="form-label">Create Password:</label>
            <input type="text" id="activeTextInput" class="form-control" placeholder="Enter Password">
          </div>
        </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="activeFieldsetCheck" active>
              <label class="form-check-label" for="activeFieldsetCheck">
                I agree that I am a certified freak, seven days a week.
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Create an Account</button>
        </fieldset>
      </form>
      </div>
      </div>
     

        



            <!--footer-->
      
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