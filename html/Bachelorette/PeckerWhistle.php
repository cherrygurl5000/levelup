<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Pecker Whistle Necklace";
  $catAdd = "../Bachelorette/Bachelorette.php";
  $category = "Bachelorette";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bachelorette/PeckerWhistle/";
  $price = 6;
  $salePrice = 4;
  $prodDesc = "Keep track of the girls on the bachelorette party night. This cheeky, 
  Pecker Whistle Necklace packs some unmistakable volume in its teeny tiny shape! 
  It hangs securely around the neck of the bride-to-be or party boss and features 
  just enough detail for the perfect amount of prank potential (1 included).";
  $specs = '';
  $paypalID = "PPV7Q3ARX978A";
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
