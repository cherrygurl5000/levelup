<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = " Small RC Egg Vibe";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/SmallRCEgg/";
  $price = 30;
  $salePrice = 25;
  $prodDesc = "Egg vibes are amazing! The only thing to make them better would be 
  making them wireless. This egg fits into most sexy scenarios whether solo or shared 
  and touts ten modes of vibrating bliss. The egg can be activated up to 65’/20m away 
  from the remote. <br />

  This egg cleans easily using warm soapy water or a good toy cleaner. It is 
  compatible with water and silicone-based lubricants (requires 6 LR44 cell batteries, 
  which are included, and it is waterproof).
  ";
  $specs = 'Length: 1.9" <br />
  Girth: 4.25" at largest point <br />
  Width: 1.25" at largest point <br />
  Materials: ABS Plastic <br />
  Battery: 6 x LR44 Batteries <br />
  Special Features: Multi-Speed, Multi-Function, Non-Phallic, Remote Control, Phthalate Free, Smooth Surface, Waterproof <br />
  Color: Pink
  ';
  $paypalID = "PLRNBKYCEEB7J";
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
