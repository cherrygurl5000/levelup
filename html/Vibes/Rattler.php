<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Deep Stroker Rattler";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/Rattler/";
  $price = 40;
  $salePrice = 34;
  $prodDesc = "The Deep Stroker Rattler covers all the pleasure bases and then some 
  with its dual penetration potential and rotating power. Smoothed into a tapered 
  lifelike shape, the Rattler's main shaft delves deep, positioning rows of 
  multi-speed rotating pleasure beads against internal sweet spots. Curving up from 
  below, a slim beaded tail powers six more speeds of steady vibration, but is 
  flexible enough to be pushed aside if backdoor penetration isn't in the cards. An 
  effortless interface at the base places simple push buttons in easy reach, while 
  shaft rotation and tail vibration is controlled independently for perfect 
  customization. <br />
  The Rattler's surface cleans easily using warm, soapy water or a good toy cleaner. 
  Compatible with water-based lubes, it requires 4 AAA batteries (sold separately) 
  and is waterproof.
  ";
  $specs = 'Length: 8.5" <br />
  Insertable Length: 4.25" <br />
  Girth: 4" at largest point <br />
  Width: 1.1" at largest point <br />
  Materials: ABS Plastic, Jelly Rubber (TPR) <br />
  Battery: 4 x AAA Batteries <br />
  Special Features: Waterproof, Flexible, Multi-Speed, Rotates <br />
  Color: Black
  ';
  $paypalID = "ETGQWHZSNEBPS";
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
