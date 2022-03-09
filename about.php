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
    
          <div class="aboutusheader">
            <div class="box">
          <h1>ABOUT US</h1>
          </div>
          <div class="small-container">
      <div class="row">
        <div class="col-6">
          <img src="images/headwear.jfif">
          <p>Hi! I’m Mia.  I’ve been in the Anti-Villain
             League for 30 years. I like fishing and
              playing cards.</p>
        </div>
          <div class="col-6">
            <img src="images/headwear.jfif">
            <p>Hey! I’m Laila.  I’ve been in the
               Anti-Villain League for 15 years.
                I like trampolines and socks</p>
          </div>
    </div>
    </div>
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


<!-- We are the Minions section-->

<div class="minionssec">
    <div class="small-container">
      <div class="row">
          <div class="col-12">
              <h1>We are the Minions</h1>
          </div>
      </div>
    </div>
</div>

<!---
<div class="wearetheminions">
    <div class="small-container">
      <div class="row">
          <div class="col-12">
              <h1>We are the Minions</h1>
          </div>
      </div>
    </div>
</div>

-->

<!--Who are We segment-->
<div class="offer">
  <div class="small-container">
    <div class="row">
        <div class="col-6">
          <p>We were born in 1895 and were adopted by a
             man named Gru.  He gave us our purpose
              and we appreciate him very much. Because
               of Gru, we can finally express our passion
                for crime.</p>
        </div>
        <div class="col-6">
            <h1>WHO ARE WE</h1>
        </div>
    </div>
  </div>
</div>
<!--end of Who are We segment-->

<!--Why We Do It segment-->
<div class="offer">
  <div class="small-container">
    <div class="row">
        <div class="col-6">
          <h1>WHY WE DO IT?</h1>
        </div>
        <div class="col-6">
            <p>We started Villains, Spies, and Beyond
               because we wanted to create a place where
                villains OR spies can come and shop for
                 items without worrying about the
                  government intervening.</p>
        </div>
    </div>
  </div>
</div>
<!--end of Why We Do It segment-->



       
<!--https://www.youtube.com/watch?v=lBfshkPlMW8  11:52
  https://www.youtube.com/watch?v=yQimoqo0-7g -->
    <!--Sign up-->

    





      <!--https://www.youtube.com/watch?v=oYRda7UtuhA  20:00 --> 









    

     

<a href="#" class="to-top">
  <i class="fas fa-cheveron-up"></i>
</a>
<script src="main.js"></script>
<!----https://www.youtube.com/watch?v=SJVCvnKM_lI-->

            <!--footer-->
      <div class="footer-container">
        <div class="footer">
          <div class="footer-heading footer-1">
            <h2> About us </h2>
            <a href="#">Blog</a>
            <a href="#">Demo</a>
            <a href="#">customers</a>
            <a href="#">investors</a>
            <a href="#">Terms of services</a>
          </div>
          <div class="footer-heading footer-2">
            <h2> Contact us</h2>
            <a href="#">Jobs</a>
            <a href="#">support</a>
            <a href="#">contact </a>
            <a href="#">sponsorship</a>
          </div>
          <div class="footer-heading footer-3">
            <h2> Social Media</h2>
            <a href="#">Instagram</a>
            <a href="#">Facebook</a>
            <a href="#">twitter</a>
            <a href="#">Youtube</a>
          </div>
          <div class="footer-email-form">
            <h2>Join our Newsletter</h2>
            <input type="email" placeholder="Enter your email address" id="footer-email">
            <input type="submit" value="Sign Up" id="footer-email-btn">
        </div>
      </div>
      
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