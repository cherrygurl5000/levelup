<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Pure Instinct Pheromone Body Spray (Him)";
  $catAdd = "../Pheromones/Pheromones.php";
  $category = "Pheromones";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Pheromones/SprayHim/";
  $price = 16;
  $prodDesc = "Become a magnetic attraction by using this Pheromone-infused body spray 
  by Pure Instinct. Fortified with Jojoba and Vitamin E, True Blue will have you 
  fighting them off with a stick. ";
  $specs = 'Size: 6 fl oz <br />
  Special Features: Pheromone-Infused, Contains Jojoba and Vitamin E
  ';
  $paypalID = "4BJZXDKFGV3VQ";
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
