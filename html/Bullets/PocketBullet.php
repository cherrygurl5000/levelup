<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Pocket Bullet Vibe";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/RocketBullet/";
  $price = 8; 
  $salePrice = 5;
  $prodDesc = "Tapered at the tip, this Pocket Bullet is full of tons of portable 
  pleasure potential. With its single speed of vibration, it is extremely manageable 
  and waterproof. It is made with ABS plastic which makes it easy to clean with a 
  warm, soapy water or a good toy cleaner. It is compatible with water and 
  silicone-based lubricants (requires 3 LR44 batteries, which are included).";
  $specs = 'Length: 2.1" <br />
  Girth: 2.4" at largest point <br />
  Width: 0.6" at largest point <br />
  Materials: ABS Plastic <br />
  Battery: 3 x LR44 Batteries <br />
  Special Features: Non-Phallic, Smooth Surface, Waterproof <br />
  Color: Blue
  ';
  $paypalID = "CLLXKEA4PFZD2";
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
