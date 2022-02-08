<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Neon Deluxe Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/NeonDeluxe/";
  $price = 25;
  $salePrice = 20;
  $prodDesc = "This Deluxe Vibe is an ultra-versatile vibe packing ten modes of steady, 
  pulsating, and escalating stimulation. It is firm and smooth with a curvy tip 
  designed to pinpoint your sweet spots with ease. This vibe is perfect for most 
  positions and acts, alone or with a partner. The Deluxe Vibe is made from ABS plastic 
  which makes it low maintenance and easy to clean with warm soapy water or a good toy 
  cleaner. It is compatible with water and silicone-based lubricants and is completely 
  waterproof (requires 2 AA batteries, sold separately).";
  $specs = 'Length: 7.1" <br />
  Insertable Length: 5.5” <br />
  Girth: 3.5" at largest point <br />
  Width: 1" at largest point <br />
  Materials: ABS Plastic <br />
  Battery: 2 x AA Batteries <br />
  Special Features: Multi-Speed, Multi-Function, Non-Phallic, Phthalate Free, Smooth Surface, Waterproof <br />
  Color: Pink
  ';
  $paypalID = "87EGVX4PNXHC6";
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
