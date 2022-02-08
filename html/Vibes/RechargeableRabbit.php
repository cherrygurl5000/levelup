<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Rechargeable Rabbit Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/RechargeableRabbit/";
  $price = 50;
  $salePrice = 45;
  $prodDesc = "Aside from a beloved shape that easily targets inner and outer sweet 
  spots at once, this plushy soft Rechargeable Rabbit features body safe silicone with 
  a fully waterproof design. It is easy to handle by you or your partner and boasts 7 
  modes for your sweet spots that can be controlled independently. Made from 
  high-quality, body-safe silicone, the Rabbit cleans easily with warm, soapy water or 
  a good toy cleaner. It is compatible with water-based lubricants and is 
  waterproof. <br /><br />

  <em>*Keep away from silicone lubes and other silicone toys</em>
  ";
  $specs = 'Length: 8" <br />
  Girth: 3.9" at largest point <br />
  Width: 1.25" at largest point <br />
  Materials: ABS Plastic, Silicone <br />
  Power Source: USB Rechargeable <br />
  Special Features: Hypoallergenic, Multi-Speed, Multi-Function, Non-Phallic, Phthalate Free, Smooth Surface, Temperature Sensitive, USB Rechargeable, Waterproof <br />
  Color: Purple
  ';
  $paypalID = "CF942X8FZ3GYA";
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
