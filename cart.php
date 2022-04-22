<?php
    session_start();
    $database_name = "mahs_minions";
    $con = mysqli_connect("localhost:3306","mahs_minions","mustangs", $database_name);

    if (isset($POST["add"])){
      if (isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"],"product_id");
        if (!in_array($_GET["id"],$item_array_id)){
          $count = count($_SESSION["cart"]);
          $item_array = array(
              'product_id' => $_GET["id"],
              'item_name' => $_POST["hidden_name"],
              'product_price' => $_POST["hidden_price"],
              'item_quantity' => $_POST["quantity"],
          );
          $_SESSION["cart"][$count] = $item_array;
          echo '<script>window.location="cart.php"</script>';
        }else{
          echo '<script>alert("Product is already Added to Cart")</script>';
          echo '<script>window.location="cart.php"</script>';
        }
      }else{
        $item_array = array(
          'product_id' => $_GET["id"],
          'item_name' => $_POST["hidden_name"],
          'product_price' => $_POST["hidden_price"],
          'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
      }
    }
    if(isset($_GET["action"])){
      if ($_GET["action"] == "delete"){
        foreach ($_SESSION["cart"] as $keys => $value){
            if ($value["product_id"] == $_GET["id"]){
              unset($_SESSION["cart"][$keys]);
              echo '<script>alert("Product has been Removed...!")</script>';
              echo '<script>window.location="cart.php"</script>';
            }
        }
      }
    }
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

<!--- video for cart
https://www.youtube.com/watch?v=IO5ezsURqyg
19:47
---->


<!--- testing for cart and products ---->
   <div class="container" style="width: 65%">
        <h2> Shopping Cart<h2>
        <?php
          $query = "SELECT * FROM product ORDER BY id ASC ";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0) {

              while ($row = mysqli_fetch_array($result)) {
                
        ?>

        <div class="col-md-3">
          <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
            <div class="product">
                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                <input type="text" name="quantity" class="form-control" value="1">
                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
            </div>
          </form>
        </div>
        <?php
              }
            }
        ?>
        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
          <table class="table table-bordered">
          <tr>
            <th width="30%">Product Name</th>
            <th width="10%">Quantity</th>
            <th width="13%">Price Details</th>
            <th width="10%">Total Price</th>
            <th width="17%">Remove Item</th>
          </tr>
          <?php
            if(!empty($_SESSION["cart"])){
              $total = 0;
              foreach ($_SESSION["cart"] as $key => $value){
                ?>
                <tr>
                  <td><?php echo $value["item_name"]; ?></td>
                  <td><?php echo $value["item_quantity"]; ?></td>
                  <td>$ <?php echo $value["product_price"]; ?></td>
                  <td>$ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                  <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>

              </tr>
              <?php 
                $total = $total + ($value["item_quantity"] * $value["product_price"]);
              }
              ?>
              <tr>
                <td colspan="3" align="right">Total</td>
                <th align="right">$ <?php echo number_format($total, 2); ?></th>
                <td></td>
              </tr>
              <?php
              }
              ?>
              </table>
        </div>
   </div>






<!--- end of testing for cart and products ---->









<!--check out or continue shopping button-->
<div class="offer">
  <div class="small-container">
    <div class="row">
        <div class="col-6">
        <a href="products.php" class="hero-btn">Continue Shopping</a>
        </div>
        <div class="col-6">
                <a href="order.php" class="hero-btn">Proceed to Checkout</a>
        </div>
    </div>
  </div>
</div>
<!--end of check out or continue shopping button-->








    

     

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