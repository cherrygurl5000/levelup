<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Tantric Sex Cards";
  $catAdd = "../Foreplay/Foreplay.php";
  $category = "Foreplay";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Foreplay/TantricCards/";
  $price = 10;
  $prodDesc = "Have you ever wanted to experience a more powerful orgasm? Well with 
  100,000 possible paths to powerful orgasms, Tantric Sex Cards are just right for 
  you! The methods within these cards allow you and your partner to connect your 
  minds, bodies and souls by exploring tantric orgasm delay techniques. Create your 
  optimal fantasy by incorporating your favorite practices into future love-making 
  sessions. These cards aid in your use of mood, emotional connection, tantra 
  practices, foreplay, and sexual positions to push you both to more powerful 
  orgasms. Remember, great techniques lead to great sex!";
  $specs = '';
  $paypalID = "GRCR6PF4UZDZU";
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
