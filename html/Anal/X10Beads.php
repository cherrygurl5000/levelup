<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "X-10 Anal Beads";
  $catAdd = "../Anal/Anal.php";
  $category = "Anal and Cleaners";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Anal/X10Beads/";
  $price = 10;
  $salePrice = 5;
  $prodDesc = "Slick, comfortably graduated and extra hygienic, the X-10 features 
  smooth PVC construction, manageable styling and a flexible, forgiving feel that's 
  nevertheless very satisfying. Ideal for many levels of anal experience, but ideal 
  for beginners, the X-10 Beads range from a very small (1/4 inch) starter bead to 
  a more filling final sphere, letting cautious players ease gently into the 
  insertion process. Seamless and supple, the entire strand is pliable and easy to 
  handle. There is a large, ringed handle that provides a sturdy grip at all times.
  <br />
  Made of a body safe, phthalate free PVC, the Beads are easy to clean with warm, 
  soapy water or a good toy cleaner. Always use lots of a good water-based lubricant 
  with the Beads for maximum comfort and pleasure.
  ";
  $specs = 'Length: 12.25" <br />
  Insertable Length: 10.5" <br />
  Girth: 3.25" at largest point <br />
  Width: 0.9" at largest point <br />
  Materials: PVC <br />
  Special Features: Flexible, Non-Phallic, Phthalate Free <br />
  Color: Black, Gray
  ';
  $paypalID = "S5RSH9HDCEKQQ";
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
