<?php
$database_name = "mahs_minions";
$con = mysqli_connect("localhost:3306","mahs_minions","mustangs", $database_name);

?>
<?php
      include 'header3.php';
  ?>

<!--- testing something --->
<!-- testing something -->
<div class="aboutusheader">
            <div class="box">
          <h1>ABOUT US</h1>
          </div>
          <br>
          <div class="small-container">
      <div class="row">
        
        <?php
          $query = "SELECT * FROM about ORDER BY aboutId ASC ";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0) {

              while ($row = mysqli_fetch_array($result)) {
                
        ?>
<!-- test -->

<div class="col-6"> 
        <img src="<?php echo $row["aboutImage"]; ?>" class="img-responsive" height="300px">
        <br>
        <br>
          <p><?php echo $row["aboutDescription"]; ?></p>
          </div>
              
<?php
              }
            }
        ?>
</div>
</div>
</div>
</div>
</div>
<!--- end of testing something -->

<!--- end of testing something-->




    <!-- 
          <div class="aboutusheader">
            <div class="box">
          <h1>ABOUT US</h1>
          </div>
          <br>
          <div class="small-container">
      <div class="row">
        <div class="col-6">
          
          <img src="https://drive.google.com/uc?export=view&id=1AYscdbcsWuLG5Vjb6H4wD7sbpUt-4uVu" height="300px">
          <p>Hi! I’m Mia.  I’ve been in the Anti-Villain
             League for 30 years. I like fishing and
              playing cards.</p>
        </div>
          <div class="col-6">
            <img src="https://drive.google.com/uc?export=view&id=">
            <p>Hey! I’m Laila.  I’ve been in the
               Anti-Villain League for 15 years.
                I like trampolines and socks</p>
          </div>
    </div>
    </div>
          </div>
          -->

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
<div class="whoarewe">
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
<div class="whywedoit">
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