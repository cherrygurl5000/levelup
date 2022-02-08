<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Sparkle Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/Sparkle/";
  $price = 9;
  $salePrice = 7;
  $prodDesc = "Sleek and lightweight, the Sparkle Vibe combines simplicity and powerful 
  functionality with a tried-and-true shape guaranteed to please. It is perfect for 
  inner sweet spot targeting, as well as external possibilities and is waterproof. 
  This multi-speed vibe is made from ABS plastic, the Sparkle cleans easily with warm, 
  soapy water or a good toy cleaner. It is also compatible with water and 
  silicone-based lubes (requires 1 AA battery, sold separately).";
  $specs = 'Length: 5.5" <br />
  Insertable Length: 4.5” <br />
  Girth: 3.1" at largest point <br />
  Width: 0.9" at largest point <br />
  Materials: ABS Plastic <br />
  Battery: 1 x AA Batteries <br />
  Special Features: Multi-Speed, Non-Phallic <br />
  Color: Blue
  ';
  $paypalID = "92WNFU2UVLJN4";
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
