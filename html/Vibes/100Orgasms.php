<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "100 Orgasms Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/100Orgasms/";
  $price = 12;
  $salePrice = 9;
  $prodDesc = "A classic, versatile vibe in packaging designed to look like some of 
  your favorite chocolate bars, the 100 Orgasms is a no-nonsense, single speed toy 
  with tons of power. The sleek shape with its softly pointed head is perfect for 
  precisely pinpointing the clit, nipple, and other sweet spots. A simple little 
  dial at the easy to grip base turns on the vibration, which is centered at the 
  tip of the vibe. This vibe is compatible with your choice of lube, stores in its 
  candy-inspired case, and requires 1 AA battery (sold separately).";
  $specs = 'Length: 5.25" <br />
  Insertable Length: 4" <br />
  Girth: 3.25" at largest point <br />
  Width: 1" at largest point <br />
  Materials: ABS Plastic <br />
  Battery: 1 x AA Batteries <br />
  Special Features: Non-Phallic, Phthalate Free, Smooth Surface <br />
  Color: White
  ';
  $paypalID = "KUU5BPHS3LXAQ";
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
