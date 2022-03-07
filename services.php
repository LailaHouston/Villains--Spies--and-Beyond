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
    <title>VSAB|Services</title>
  </head>
  <body>

<!---Test-->
    <section class="header">
        <nav>
          <a href="index.html"><img src="images/logo2.png" ></a>
          <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="products.html">Products</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="cart.html">Cart</a></li>
            </ul>
          </div>
          <i class="fa fa-bars"  onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
          <h1>Villains, Spies, and Beyond</h1>
          <p>A Safe Place for You and Your Mischievousness</p>
          <a href="products.html" class="hero-btn">View Products</a>
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


<!-- Therapy section -->

<div class="therapy">
    <div class="small-container">
      <div class="row">
          <div class="col-6">
              <h1>Therapy</h1>
              <p>Have you considered Therapy? Therapy is a new and improved
                 way to  find out what is wrong with an indiviual’s mentality.</p>
          </div>
          <div class="col-6">
            <h1>If you are experiencing any of the following:
            </h1>
              <br>
              <p>
                *Guilt
                <br>
                *Agony
                <br>
                *Crippling Depression
                <br>
                *impulsive behavior
              </p>
              <h2>
              Then You Need to See a Therapist
             </h2>
          </div>
      </div>
    </div>
</div>

<!-- end of Therapy section -->



<!-- Dr. Nefario-->
<div class="nefario">
<h2 class="title">Meet Dr. Nefario</h2>
  <div class="small-container">
    <div class="row">
        <div class="col-6">
          <!-- needs to be Dr. Nefario pic here-->
          <img src ="images/minions.jfif" class="offer-img">
        </div>
        <div class="col-6">
            <h3>Dr. Neferio is a certified freak, 7 days a week. 
               He operates the biggest therapy clinic in the nation.
                Neferio has a degree in psychology and criminal
                 injustice. </h3>
        </div>
    </div>
  </div>
</div>
<!-- end of Dr. Nefario-->


<!--sm appointment-->
<div class="professional">
    <div class="small-container">
      <div class="row">
          <div class="col-6">
              <h1>Are You Ready to Talk to a Professional?</h1>
              <p>It’s simple and easy.
                <br>
                 Just pick a date and
                 time and 
                 <br>
                 you’re done!</p>
          </div>
          <div class="col-6">
            <!--change link of the button to appointment link-->
          <a href="about.php" class="hero-btn">Schedule Appointment</a>
          </div>
      </div>
    </div>
</div>
    <!--end of sm appointment-->




    

     

        



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