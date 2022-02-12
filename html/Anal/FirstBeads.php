<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "First Time Anal Beads";
  $catAdd = "../Anal/Anal.php";
  $category = "Anal";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Anal/FirstBeads/";
  $price = 8;
  $salePrice = 5;
  $prodDesc = "Sized perfectly for beginner anal exploration, these beads are the 
  perfect set of user-friendly beads to get you started. The beads are connected 
  with a flexible cord for the best placement during solo use or with a partner. 
  They gradually and subtly grow to assist in allowing you to get fully accustomed 
  to the new feeling of each bead. The retrieval handle makes the beads safe and 
  easy to maneuver, and keeps insertion and retrieval foolproof. Made from a 
  phthalate-free PVC material, these beads are easy to clean with warm, soapy 
  water or a good toy cleaner. They are also compatible with water or 
  silicone-based lubricants.";
  $specs = 'Length: 10" <br />
  Insertable Length: 7” <br />
  Circumference: 2.6" at largest point <br />
  Width/Diameter: 0.75" at largest point  <br />
  Materials: PVC <br />
  Special Features: Flexible, Phthalate Free, Smooth Surface, Waterproof <br />
  Color: Purple
  ';
  $paypalID = "PALVQFSLLDE4N";
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
