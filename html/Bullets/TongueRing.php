<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Vibrating Tongue Ring";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/TongueRing/";
  $price = 10;
  $salePrice = 7;
  $prodDesc = "LingO is for the discerning cunning-linguist. It is the perfect 
  companion to oral sex for him or her. This one time use vibe lasts around 30 
  minutes and fits over the tongue comfortably with a stretchy ring featuring a 
  flat base to keep the tongue from curling. LingO is made of a food grade SEBS 
  TPE silicone that's hypoallergenic, taste free, and absolutely safe for oral 
  (and other) contact. The LingO is wireless and travel friendly.";
  $specs = 'Materials: Silicone <br />
  Special Features: Waterproof, Temperature Sensitive, Hypoallergenic, Phthalate Free <br />
  Color: Purple
  ';
  $paypalID = "M682ZBHLV2USA";
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
