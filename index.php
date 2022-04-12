<?php
      include 'header.php';
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
        <nav>
          <a href="index.html"><img src="images/logo2.png" ></a>
          <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="cart.php">Cart</a></li>
            </ul>
          </div>
          <i class="fa fa-bars"  onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
          <h1>Villains, Spies, and Beyond</h1>
          <p>A Safe Place for You and Your Mischievousness</p>
          <a href="products.php" class="hero-btn">View Products</a>
        </div>

    </section>
    <!--End of Test Nav-->
    
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


<!-- https://www.youtube.com/watch?v=eQNFff64Hy4 -->







    
  <!--Featured category 

  <div class="categories">
      <div class="small-container">
      <div class="row">
        <div class="col-3">
            <img src="images/headwear.jfif">
        </div>
        <div class="col-3">
          <img src="images/shrinkray.jpg">
        </div>
        <div class="col-3">
          <img src="images/spybelt.jpg">
        </div>
        </div>
      </div>
    </div>
  -->

    <!-- css for featured cateagory
      .categories{
    margin: 70px 0;
}
.col-3{
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}
.col-3 img{
    width: 100%;
}
    -->


<!-- signup-->

<div class="offer">
    <div class="small-container">
      <div class="row">
          <div class="col-12">
              <h1><i>Sign Up </i>  or <i> Log In</i>  to Get Unlimited Offers on <br>all Our Products and Services!</h1>
                  <a href="signup.php" class="hero-btn">Sign Up or Log In</a>
          </div>
      </div>
    </div>
</div>








<!--Featured Products-->
    <div class="small-container">
      <h2 class="title">Featured Products</h2>
      <div class="row">
        <div class="col-3">
          <img src="images/headwear.jfif">
          <h4>Headwear</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$150.00</p>
        </div>
          <div class="col-3">
            <img src="images/headwear.jfif">
            <h4>Headwear</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <p>$150.00</p>
          </div>
            <div class="col-3">
              <img src="images/headwear.jfif">
              <h4>Headwear</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>$150.00</p>
            </div>
            <div class="col-3">
              <img src="images/headwear.jfif">
              <h4>Headwear</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>$150.00</p>
            </div>
    </div>
    </div>
    









<!--smAbout TEST-->
<div class="offer">
  <div class="small-container">
    <div class="row">
        <div class="col-6">
          <img src ="images/minions.jfif" class="offer-img">
        </div>
        <div class="col-6">
            <p>a little about us... </p>
            <h1>We're the Minions!</h1>
            <small>We started off as a small company
               with only one customer. Only getting
                paid 1 dollar per hour, wasn’t enough 
                for us. Now, we sell and provide more 
                products and services nationwide.</small>
                <br>
                <a href="about.php" class="hero-btn">Read More</a>
        </div>
    </div>
  </div>
</div>






       









    

     

<a href="#" class="to-top">
  <i class="fas fa-cheveron-up"></i>
</a>
<script src="main.js"></script>
<!----https://www.youtube.com/watch?v=SJVCvnKM_lI-->

<?php
      include 'footer.php';
  ?>




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