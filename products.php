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
    <title>VSAB|Products</title>
  </head>
  <body>
<!-- POP UP for Coupon
<div class="popup">
    <div class="contentBox">
      <div class="close"></div>
        <div class="imgBx">
          <img src="images/minions.jfif">
        </div>
        <div class="content">
          <div>
          <h3>Special Offer</h3>
          <h2>80<sup>%</sup><span> OFF</span></h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing
             elit.</p>
             <a href="#">Get The Deal</a>
             </div>
        </div>
    </div>
</div>
-->
<!-- Automatic show popup after 2seconds of page load-->
<!--
<script>
  const popup = document.querySelector('.popup');
  const close = document.querySelector('.close');
  window.onload = function(){
    setTimeout(function(){
      popup.style.display = "block"

      // Add some time delay to show popup
    }, 2000)
  }

  close.addEventListener('click', () => {
    popup.style.display = "none";
  })
</script>
-->
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


<!-- signup-->

<div class="offer">
    <div class="small-container">
      <div class="row">
          <div class="col-12">
              <h1>Products</h1>
          </div>
      </div>
    </div>
</div>








<!--Featured Products-->
    <div class="small-container">
      <h2 class="title">Showing All</h2>
      <div class="row">
        <div class="col-3">
          <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
            <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
              <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
              <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
              <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
              <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
              <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
              <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
              <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
              <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
              <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
              <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu">
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
    
<!--Pagination
<div class="pagination">
  <ul>
     <li class="btn prev"><span><i class="fas fa-angle-left"></i>Prev</span></li>
    <li class="numb active"><span>1</span></li>
    <li class="numb"><span>2</span></li>
    <li class="dots"><span>...</span></li>
    <li class="numb"><span>4</span></li>
    <li class="numb"><span>5</span></li>
    <li class="dots"><span>...</span></li>
    <li class="numb"><span>7</span></li>
    <li class="btn next"><span>Next<i class="fas fa-angle-right"></i></span></li>
  </ul>
</div>

JS for pagination-->

<!--End of Pagination-->



       
<!--https://www.youtube.com/watch?v=lBfshkPlMW8  11:52
  https://www.youtube.com/watch?v=yQimoqo0-7g -->
    <!--Sign up-->

    





      <!--https://www.youtube.com/watch?v=oYRda7UtuhA  20:00 --> 

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