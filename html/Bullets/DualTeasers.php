<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Dual Teasers";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/DualTeasers/";
  $price = 24;
  $salePrice = 18;
  $prodDesc = "This ten-function powerhouse provides mounds of pleasure from small 
  packages. Composed of classic egg vibes that were designed for stimulation inside 
  and out, solo or with a partner. The handheld remote offers independent controls 
  that allow for complete pleasure customization. These eggs boast 5 powerful speeds 
  with 5 unique patterns of vibration. Water or silicone-based lubes make this the 
  perfect companion for your solo adventures or partner play (requires 3 AAA 
  batteries). <br /><br />

  <em>*Not recommended for use in water</em>
  ";
  $specs = 'Length: 2.1" <br />
  Girth: 4" at largest point <br />
  Width: 1.1" at largest point <br />
  Materials: ABS Plastic, PU Coating <br />
  Battery: 3 x AAA Batteries <br />
  Special Features: Multi-Speed, Multi-Function, Remote Control, Phthalate Free, Smooth Surface <br />
  Color: Purple
  ';
  $paypalID = "HBC8ZZD9JQV6E";
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
