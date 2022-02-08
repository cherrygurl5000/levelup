<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Tongue Teaser";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/TongueTeaser/";
  $price = 10;
  $prodDesc = "Do you want to take your partner into EROTIC OVERDRIVE? Then this 
  Tongue Teaser is for you. The Tongue Teaser is a tongue-shaped, vibrating tongue 
  ring that comes with an ultra-powerful motor and sensuous, stretchy silicone. This 
  ring is sure to please and tease both partners. <br /><br />

  <strong>WARNING:</strong> <em>May cause <strong>UNCONTROLLABLE SCREAMS of PLEASURE!</strong> Use with caution.</em>
  ";
  $specs = 'Materials: Silicone <br />
  Special Features: Waterproof, Hypoallergenic, Phthalate Free <br />
  Color: Pink
  ';
  $paypalID = "UJA7USW4V2TFA";
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
