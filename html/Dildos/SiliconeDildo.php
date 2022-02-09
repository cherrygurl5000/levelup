<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Silicone Dildo";
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/SiliconeDildo/";
  $price = 30;
  $salePrice = 25;
  $prodDesc = "A fantastically textured dildo featuring a silken touch and smoothly contoured 
  shape, this silicone dildo is a simple, pleasurable penetration tool with an impressively 
  long list of must-have features. Shaped ergonomically the D3 was tailored to fit the contours 
  of the body, effortlessly reaching upward to massage the super-sensitive, nerve-packed upper 
  vaginal (or anal) walls when inserted, making it a great tool for g-spot or prostate seekers. 
  A wide rounded base helps protect against too-deep penetration and allows a precision grip, 
  it's enhanced with ultra-strong suction that holds the D3 firmly in place on almost any 
  smooth, flat surface. There's some definite harness and strap-on potential as well, as the 
  shaft will fit through many O-ring and open-front harness varieties. <br />

  Made from 100% medical grade silicone, the D3 is velvety, and has a supremely plush, 
  squeezable texture that, as it warms to match body temperature, feels breathtakingly 
  lifelike, especially when combined with the firmer feel underneath. Always use a water-based 
  lubricant with this dildo, avoid silicone lubes and products, and store away from other toy 
  materials. <br /><br />
  
  <em>*A soft drawstring storage and travel bag is included</em>
  ";
  $specs = 'Length: 8" <br />
  Insert able Length: 7" <br />
  Girth: 5.25" at largest point <br />
  Width: 1.75" at largest point <br />
  Materials: Silicone <br />
  Special Features: Hypoallergenic, Phthalate-Free, Smooth Surface, Suction Base, Textured Surface, Waterproof
  ';
  $paypalID = "WEF6C6HM6HMEA";
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
