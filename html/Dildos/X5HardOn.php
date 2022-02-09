<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "X5 Hard On";
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/X5HardOn/";
  $price = 30;
  $prodDesc = "The X5 Hard On is a realistic dildo designed by Blush Novelties. It looks and feels 
  like the real thing, and the suction cup base makes it harness compatible. Feel free to suction the 
  Hard On to any flat surface and enjoy the stability. It warms to the touch and provides an amazing 
  experience that you can always share with a partner!";
  $specs = 'Length: 8.5" <br />
  Insertable Length: 6.75" <br />
  Girth: 5.6" at largest point <br />
  Width: 1.8" at largest point <br />
  Materials: Silicone <br />
  Special Features: Phthalate-Free, Suction Base, Textured Surface, Realistic Feel, Waterproof <br />
  Colors: Brown, Beige
  ';
  $paypalID = "A7GUUFB73YYSE";
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
