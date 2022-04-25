<?php
$database_name = "mahs_minions";
$con = mysqli_connect("localhost:3306","mahs_minions","mustangs", $database_name);

?>

<?php
      include 'header.php';
  ?>

<!-- https://www.youtube.com/watch?v=eQNFff64Hy4 

  https://www.youtube.com/watch?v=xE-CZ379_eg

        ^ 30:56
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

<!-- Featured Categories -->
<div class="featCate">
<div class="small-container">
<h2 class="title">Featured Categories</h2>
  <div class="row">
        
        <?php
          $query = "SELECT * FROM category ORDER BY categoryId ASC ";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0) {

              while ($row = mysqli_fetch_array($result)) {
                
        ?>

<div class="col-3"> 
    <img src="<?php echo $row["categoryImage"]; ?>" class="img-responsive">
       <h4 class="text-info"><?php echo $row["categoryName"]; ?></h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
         </div>
              
</div>
              
<?php
   }
   }
 ?>
</div>
</div>
  </div>
<!--- end of featured Categories -->

<!--smAbout-->
<div class="offer">
  <div class="small-container">
    <div class="row">
        <div class="col-6">
          <img src ="https://drive.google.com/uc?export=view&id=13qM4mbOBcQw8hzqR_VjCTjtHVH4PKQ9F" class="offer-img">
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