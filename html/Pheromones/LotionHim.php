<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Pure Instinct Pheromone Massage Lotion (Him)";
  $catAdd = "../Pheromones/Pheromones.php";
  $category = "Pheromones";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Pheromones/LotionHim/";
  $price = 16;
  $prodDesc = "Make your next massage a little more sensual by adding True Blue 
  Pheromone-infused Massage Lotion. With Sweet Almond Oil, this lotion not only 
  ignites your senses, it also keeps you or your partner extra moisturized. ";
  $specs = 'Size: 8 fl oz <br />
  Special Features: Pheromone-Infused, Contains Sweet Almond Oil
  ';
  $paypalID = "QG8HY5UU6R752";
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
