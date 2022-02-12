<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Pecker Wearable Glasses";
  $catAdd = "../Bachelorette/Bachelorette.php";
  $category = "Bachelorette";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bachelorette/PeckerGlasses/";
  $price = 10;
  $salePrice = 7;
  $prodDesc = "A hilarious set of eight, the Pecker Glasses fold out to big 
  oversized wearables perfect for a girls’ night, bachelorette parties and beyond. 
  Flip the arms outward to secure the shiny pink dick in jazz-hands position (8 
  included)!";
  $specs = '';
  $paypalID = "FGLEP9FPH29Y8";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>

    <!-- Include the meta tags, Bootstrap and CSS links -->
    <?php include_once("../../include/headData.php"); ?>

    <!-- Include the code for the darker colored carousel icons -->
    <link rel="stylesheet" type="text/css" href="../../css/carouselIcons.css" />
    <style type="text/css">
      #specs {
        display: none;
      }
    </style>

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
