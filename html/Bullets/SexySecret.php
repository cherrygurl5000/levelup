<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Sexy Secret";
  $catAdd = "../Bullets/bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/SexySecret/";
  $price = 50;
  $prodDesc = "The Satisfyer Sexy Secret is a hidden gem that uses a practical 
  magnet that allows it to be placed discreetly in your panties. It allows for 
  clitoral stimulation with its ergonomic shape, intense vibes, body-friendly 
  silicone, and app connectivity. The Satisfyer Connect App allows for lots of 
  on-the-go fun! Just attach the Sexy Secret to your panties and the whisper-quiet, 
  powerful motor provides spice for your everyday life…and it’s waterproof!";
  $specs = 'Length: 3.4" <br />
  Width: 1.5" at largest point <br />
  Height: 1.1” <br />
  Materials: ABS Plastic, Silicone <br />
  Battery: USB Rechargeable Lithium Ion Battery <br />
  Warranty: 15 Years <br />
  Special Features: Preset Programs, Whisper Mode, IPX7 Waterproof Rating, Easy to Clean, App Connectivity <br />
  Color: Red
  ';
  $paypalID = "8ELFRPJ48B2T4";
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
