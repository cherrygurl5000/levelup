<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  //Add in page values here (title, paypalID, catAdd, category, prodAdd, Prods)
  $title = "Anal";
  $catAdd = "../Anal/anal.php";
  $category = "Anal";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>

    <!-- Include the meta tags, Bootstrap and CSS links -->
    <?php include_once("../../include/headData.php"); ?>
    
  </head>

  <body>

    <!-- Add all page content inside this div -->
    <div class="container mx-auto">
        <!--Add navigation bar and breadcrumbs for ease of use-->
        <?php include_once("../../include/header.php"); ?>

        <div class="row mt-2 justify-content-center infoText">
            <h1>Anal</h1>
        </div>
        <div class="row introImg my-2">
            <img class="d-block w-100 col-12 mx-auto" src="../../img/Carousel/distant_lover2.gif" alt="App/Remote Controlled Toys" title="App/Remote Controlled Toys" />
        </div>
        <div class="row mb-3">
            <h4  class="text-center w-100 my-2 rounded">
                Enhancers designed to provide pleasure in the often ignored and neglected anal region.  
            </h4>
        </div>
        <div class="row justify-content-center text-center my-4 catToys">
            <div class="col-6 col-md-4 col-lg-2 mt-2">
                <a href="../Anal/vibroPlay.php">
                    <h2 class="col-12 text-"><small>Vibro Play</small></h2>
                    <img id="img1" class="d-block w-100 col-12 mx-auto mb-2" src="../../img/Explosion_Logo2.jpg" alt="Bullets and Things" title="Bullets and Things" />
                </a>
                <h2 class="col-12">$20</h2>
                <!-- Include the add to cart for each item -->
                <?php 
                    $paypalID = "YM55CBNCAHCC6";
                    include("../../include/addToCart.php"); 
                ?>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mt-2">
                <a href="#">
                    <h2 class="col-12">Vibes</h2>
                    <img class="d-block w-100 col-12 mx-auto mb-2" src="../../img/Explosion_Logo2.jpg" alt="Vibrators" title="Vibrators" />
                </a>
                <!-- Include the add to cart for each item -->
                <?php 
                    $paypalID = "YM55CBNCAHCC6";
                    include("../../include/addToCart.php"); 
                ?>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mt-2">
                <a href="#">
                    <h2 class="col-12">Dildos</h2>
                    <img class="d-block w-100 col-12 mx-auto mb-2" src="../../img/Explosion_Logo2.jpg" alt="Dildos" title="Dildos" />
                </a>
                <!-- Include the add to cart for each item -->
                <?php 
                    $paypalID = "YM55CBNCAHCC6";
                    include("../../include/addToCart.php"); 
                ?>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mt-2">
                <a href="#">
                    <h2 class="col-12">Kegelers</h2>
                    <img class="d-block w-100 col-12 mx-auto" src="../../img/Explosion_Logo2.jpg" alt="Kegelers" title="Kegelers" />
                </a>
                <!-- Include the add to cart for each item -->
                <?php 
                    $paypalID = "YM55CBNCAHCC6";
                    include("../../include/addToCart.php"); 
                ?>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mt-2">
                <a href="#">
                    <h2 class="col-12">Kinky</h2>
                    <img class="d-block w-100 col-12 mx-auto mb-2" src="../../img/Explosion_Logo2.jpg" alt="Foreplay and Kinky" title="Foreplay and Kinky" />
                </a>
                <!-- Include the add to cart for each item -->
                <?php 
                    $paypalID = "YM55CBNCAHCC6";
                    include("../../include/addToCart.php"); 
                ?>
            </div>
        </div>

      
    </div>

    <!-- Include the footer information -->
    <?php include_once("../../include/footer.php"); ?>

    <!-- Include all script tags -->
    <?php include_once("../../include/scriptTags.php"); ?>
    
    <script>$("input.addCart").attr("src", "../../img/Add_Cart.png");</script>

  </body>
</html>
