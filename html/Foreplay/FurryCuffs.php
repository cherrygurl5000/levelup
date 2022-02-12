<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Black Furry Hand Cuffs";
  $catAdd = "../Foreplay/Foreplay.php";
  $category = "Foreplay";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Foreplay/FurryCuffs/";
  $price = 15;
  $salePrice = 12;
  $prodDesc = "A beautiful set of classic cuffs suitable for all levels of rapturous 
  bondage experience, the fur-lined cuffs, despite their soft, delicately fuzzy 
  surface, are certainly sturdy and wonderfully escape-proof, setting the scene for 
  literally hundreds of possible trussed-up fantasies. <br />

  Completely adjustable, the core metal clicks easily into place as the cuffs are 
  positioned around the wrists (or ankles), a key lock them into place (two included), 
  though there's a safety catch on the side, just in case. The soft faux fur cushions 
  the skin comfortably while a short chain connector keeps hands or legs under 
  complete control- the chain also works as a support for any bondage gear you may 
  already own, as most tethers, ropes, bed restrains and otherwise will be able to be 
  attached or knotted through. <br /><br />
  
  <em>*In plastic eco-pack. Box not included.</em>
  ";
  $specs = '';
  $paypalID = "FAVQS9LMUNMRS";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>

    <!-- Include the meta tags, Bootstrap and CSS links -->
    <?php include_once("../../include/headData.php"); ?>

    <!-- Include the code for the darker colored carousel icons -->
    <link rel="stylesheet" type="text/css" href="../../css/carouselIcons.css" />
    <style type="text/css">
      #specs {
        display: none;
      }
    </style>

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
