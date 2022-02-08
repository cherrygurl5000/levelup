<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Rose Lipstick";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/RoseLipstick/";
  $price = 20;
  $prodDesc = "The Rose Lipstick Vibe features strong vibrations in a sweet, discreet 
  package. This vibe looks like real lipstick, and like real lipstick raises the 
  satin smooth tip when you twist the base. This also starts the vibrations to give 
  you toe-curling orgasms in an unnoticeable package. Compatible with water-based 
  lube, this subtle, guiltless tube requires 1 AAA battery (sold separately).";
  $specs = 'Length: 4" <br />
  Width: 1” Vibrating Tip <br />
  Battery: 1 x AAA Battery <br />
  Special Features: Discreet, Travel-ready, Angled Tip, Satin coated, Phthalate Free, Latex Free <br/>
  Color: Black, Red
  ';
  $paypalID = "D38TMES5LYY58";
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
