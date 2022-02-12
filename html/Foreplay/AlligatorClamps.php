<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Alligator Nipple Clamps";
  $catAdd = "../Foreplay/Foreplay.php";
  $category = "Foreplay";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Foreplay/AlligatorClamps/";
  $price = 15;
  $salePrice = 11;
  $prodDesc = "Tugging and teasing sensitive flesh while dazzling with silvery beaded 
  styling, this classic chained clamp set applies pleasurable pressure to nipples and 
  beyond, keeping up an unrelenting pinch for long drawn out stimulation. Simple 
  alligator style closures tipped in plushy black pads grip from two sides. Once 
  positioned, twist the dial on each to customize pressure and fit. Dangling below, 
  subtly weighted beads and a connector chain tug and tantalize as they rock and 
  jiggle with movement. ";
  $specs = '';
  $paypalID = "L8JUC6P6BJ228";
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
