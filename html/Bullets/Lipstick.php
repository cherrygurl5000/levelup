<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Vibrating Lipstick";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/Lipstick/";
  $price = 20;
  $salePrice = 16;
  $prodDesc = "Vibrating Lipstick is a secretive, sexy addition to any make-up bag 
  or purse. The design and packaging would be completely at home on a high-end makeup 
  counter. Contained in the sleek body, there's a powerful motor that drives 3 speeds 
  of vibration and one orgasmic pattern of pulsation through the perfectly slanted, 
  softly flexible tip that seeks out the clitoris and other external sweet spots 
  perfectly. Compatible with water-based lube, this discreet, innocent-looking tube 
  packs a punch (requires 3 LR44 batteries, which are included, and it is water 
  resistant).";
  $specs = 'Length: 4" <br />
  Materials: ABS Plastic, Silicone <br />
  Battery: 3 x LR44 Batteries <br />
  Special Features: Multi-Speed, Non-Phallic, Phthalate Free <br />
  Color: Black, Pink
  ';
  $paypalID = "6CGKKUXWMURGE";
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
