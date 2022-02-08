<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Mono Flex Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/MonoFlex/";
  $price = 55;
  $prodDesc = "The Satisfyer Mono Flex stimulates both the clitoris and G-Spot with 
  sensual vibrations via the toy or within the Satisfyer Connect App. With 2 
  independently controlled and powerful motors, this rabbit vibrator is made of 
  high-quality, flexible silicone which adapts seamlessly to your contours and 
  transmits intense vibrations to your hotspots! <br />
  When you download the Satisfyer Connect App to your Android or iOS device and 
  connect your smartphone, tablet or Apple Watch via Bluetooth or internet, the app 
  will allow you to create, save, or even download various patterns that seamlessly 
  integrates multiple vibration patterns into either motor. The app offers an unending 
  range of programs, but the toy itself offers 50 vibration combinations on its own. 
  Plus, it’s waterproof!
  ";
  $specs = 'Length: 8" <br />
  Width: 1.7" at largest point <br />
  Materials: ABS Plastic, Silicone <br />
  Battery: USB Rechargeable Lithium Ion Battery  <br />
  Warranty: 15 Years <br />
  Special Features: IPX7 Waterproof Rating, Independently-Controlled Motors, App Connectivity, Easy to Clean <br />
  Color: Pink
  ';
  $paypalID = "PXBMWWJ8AQUYE";
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
