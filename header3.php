<?php
    include 'functions/user-functions.php';
?>

<?php
    session_start();
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
    <script src="https://kit.fontawesome.com/4c8f9500cf.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

    <title>VSAB</title>
  </head>
  <body>

<!---Test-->
    <section class="header">
      <div class="header3">
        <nav>
          <a href="index.php"><img src="https://drive.google.com/uc?export=view&id=1rZT736wElNq2oJkbbNUwQYkclU7woV50" ></a>
          <div class="nav-links" id="navLinks">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="products.php">Products</a></li> 
              <li><a href="about.php">About</a></li>
              
            </ul>
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
          </div>
     