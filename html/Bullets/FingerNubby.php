<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Finger Nubby Vibe";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/FingerNubby/";
  $price = 20;
  $salePrice = 15;
  $prodDesc = "A tiny, ultra-versatile vibe created to deliver perfectly placed 
  stimulation. The Finger Nubby slips snugly over any finger (or thumb) allowing 
  the wearer to direct pleasure straight to sweet spots. It provides steady single 
  speed vibration with the touch of a button. Pop it out of the nubby textured 
  sleeve to enjoy on its own. It cleans easily using warm, soapy water or a good 
  toy cleaner. Compatible with water-based lubes, the Finger Nubby requires 3 LR44 
  cell batteries (included). <br /><br />

  <em>*Avoid contact with silicone lubricants and other silicone products</em>
  ";
  $specs = 'Length: 2.5" <br />
  Girth: 3.25" at largest point <br />
  Materials: Jelly Rubber (TPR) <br />
  Battery: 3 x LR44 Batteries <br />
  Special Features: Waterproof, Textured Surface <br />
  Color: Purple
  ';
  $paypalID = "9GUKZWWFN36PQ";
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
