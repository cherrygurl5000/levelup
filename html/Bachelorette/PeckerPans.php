<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Pecker Cake Pans";
  $catAdd = "../Bachelorette/Bachelorette.php";
  $category = "Bachelorette";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bachelorette/PeckerPans/";
  $price = 15;
  $salePrice = 11;
  $prodDesc = "Bake up a cream filled pecker shaped cake, or proudly display an 
  assortment of edible penises at your next ladies night or bachelorette 
  celebration! These Pecker Cake Pans are guaranteed to make tasty treats 
  hilarious. <br/><br/>

  <em>*2 pans included, each with 6 4.5”/11.4cm by 2.6”/6.6cm pecker shaped molds</em>
  ";
  $specs = '';
  $paypalID = "5T5Y8EMNKMG38";
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
