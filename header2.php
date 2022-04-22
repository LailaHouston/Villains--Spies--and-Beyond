<?php
    include 'functions/user-functions.php';
?>

<?php
    session_start();
?>
<!--maybe put session_start(); twice @ 1:36:38-->

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
    <script src="https://kit.fontawesome.com/4c8f9500cf.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

    <title>VSAB</title>
  </head>
  <body>

<!---Test-->
<section class="otherpagesnav">
        <nav>
          <a href="index.html"><img src="https://drive.google.com/uc?export=view&id=1rZT736wElNq2oJkbbNUwQYkclU7woV50" ></a>
          <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
              <div class="navtextpages">
              <li><a href="index.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="cart.php">Cart</a></li>
              </div>
            </ul>
          </div>
          <div class="navbarspages">
          <i class="fa fa-bars"  onclick="showMenu()"></i>
          </div>
          <div class="header-login">
          <?php 
            if (isset($_SESSION['userId'])) {
              echo ' <form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit" class="btn btn-primary">Logout</button>
            </form>';
            }
            else {
              echo '<form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Username/E-mail..">
              <input type="text" name="pwd" placeholder="password">
              <button type="submit" name="login-submit" class="btn btn-primary">Login</button>
              <a href="signup.php" class="btn btn-primary">Signup</a>
            </form>';
            }
          ?>
         
        </div>
        </nav>
    </section>
    
     <!--Javascript for toggle menu-->
     <script>

var navLinks = document.getElementById("navLinks");

function showMenu(){
  navLinks.style.right = "0";
}
function hideMenu(){
  navLinks.style.right = "-200px";
}

</script>
<!-- End of Javascript for toggle menu-->

<!--
        < ?php
  $_SESSION['username'] = "LailaHouston";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
  echo "\nYou are not logged in!";
}   else{
      echo "\nYou are logged in!";
}
  ?>

-->