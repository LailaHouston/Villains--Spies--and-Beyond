<?php
$database_name = "mahs_minions";
$con = mysqli_connect("localhost:3306","mahs_minions","mustangs", $database_name);

?>
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



<div class="offer">
    <div class="small-container">
      <div class="row">
          <div class="col-12">
              <h1>Products</h1>
          </div>
      </div>
    </div>
</div>




<!-- testing something -->

<div class="small-container">
<h2 class="title">Showing All</h2>
  <div class="row">
        <?php
          $query = "SELECT * FROM product ORDER BY pname ASC ";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0) {

              while ($row = mysqli_fetch_array($result)) {
                
        ?>

       <!-- <div class="col-md-3">
          <form method="post" action="cart.php?action=add&id=< ?php echo $row["id"]; ?>">
            <div class="product">
                <img src="< ?php echo $row["image"]; ?>" class="img-responsive">
                <h5 class="text-info">< ?php echo $row["pname"]; ?></h5>
                <h5 class="text-danger">< ?php echo $row["price"]; ?></h5>
                <input type="text" name="quantity" class="form-control" value="1">
                <input type="hidden" name="hidden_name" value="< ?php echo $row["pname"]; ?>">
                <input type="hidden" name="hidden_price" value="< ?php echo $row["price"]; ?>">
                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
            </div>
          </form>
        </div>
              -->
<!-- test -->
<div class="col-3"> 
        <img src="<?php echo $row["image"]; ?>" class="img-responsive" height="280px">
          <h4 class="text-muted"><?php echo $row["pname"]; ?></h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p class="text-muted"><?php echo $row["price"]; ?></p>
              </form>
          </div>
              
<?php
              }
            }
        ?>
</div>
          </div>
<!--- end of testing something -->

    

<hr>


       
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