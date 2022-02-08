<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Finger Friend Mini Vibe";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/FingerFriend/";
  $price = 12;
  $salePrice = 8;
  $prodDesc = "This discreet little Finger Friend is an absolutely perfect 
  accompaniment to oral sex. Slipping securely over a finger, this tiny vibe switches 
  on and off in a flash. The ensuing stimulation isn't overly intense and fits as 
  naturally as could be. Though technically considered a one-time use toy (the 
  non-replaceable batteries will power the vibe for about 30 continuous minutes) the 
  Finger Friend could last through a few sessions. <br /><br />

  <em>*Not recommended for use in water</em>
  ";
  $specs = 'Materials: Jelly Rubber (TPR) <br />
  Special Features: Textured Surface <br />
  Color: Purple
  ';
  $paypalID = "HZBWZN68R94WU";
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
