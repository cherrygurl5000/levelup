<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Beat It Out Shower Masturbation Gel";
  $catAdd = "../Men/Men.php";
  $category = "Men";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Men/ShowerGel/";
  $price = 22;
  $salePrice = 15;
  $prodDesc = "Beat It Out Masturbation Gel comes to showers everywhere in a unique 
  hanging bottle that keeps friction-free hand job help at the ready. Thick and 
  viscous, this gel stays put without dripping. Control the feel by adding a little 
  water or a lot! <br />

  Beat It Out is safe for use with all toys and condoms. It’s also odorless, 
  greaseless, and non-staining.
  ";
  $specs = 'Size: 8oz <br />
  Flavor: Unflavored <br />
  Special Features: Masturbation Lube, Unscented
  ';
  $paypalID = "PS5PRCBW9W8K6";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>

    <!-- Include the meta tags, Bootstrap and CSS links -->
    <?php include_once("../../include/headData.php"); ?>

    <!-- Include the code for the darker colored carousel icons -->
    <link rel="stylesheet" type="text/css" href="../../css/carouselIcons.css" />

  </head>

  <body>

    <!-- Add all page content inside this div -->
    <div class="container mx-auto">
        <!--Add navigation bar and breadcrumbs for ease of use-->
        <?php include_once("../../include/header.php"); ?>

        <!-- Include the product page information -->
        <?php include_once("../../include/productPage.php"); ?>
        
 
    </div>

    <!-- Include the footer information -->
    <?php include_once("../../include/footer.php"); ?>

    <!-- Include all script tags -->
    <?php include_once("../../include/scriptTags.php"); ?>

  </body>
</html>
