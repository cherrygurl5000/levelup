<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Wanachi Micro Massager";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/MicroMassager/";
  $price = 10;
  $salePrice = 7;
  $prodDesc = "A minuscule quickie version of the beloved Wanachi massager, the 
  pint-sized Micro offers up soothing, stimulating vibration anytime and anywhere. 
  Connected to a looped length of beaded chain, the tiny vibe can be slipped onto a 
  keychain and easily hidden away in a purse or pocket. <br />

  This little vibe is great for all experience levels and erotic scenarios. The tiny 
  shape won't get in the way of anything else you may be doing. A single speed of 
  powerful vibration cues up with the flip of a switch. The Micro is intended for 
  single use, but as long as it's cleaned before and after each use, pleasure 
  potential can last as long as the included (non-replaceable) batteries. In slick 
  ABS plastic, this vibe is compatible with water and silicone-based lubes.
  ";
  $specs = 'Length: 2.5" <br />
  Girth: 2.4" at largest point <br />
  Width: 0.75" at largest point <br />
  Materials: ABS Plastic <br />
  Special Features: Non-Phallic <br />
  Color: Pink
  ';
  $paypalID = "BCK65TWMBXGBN";
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
