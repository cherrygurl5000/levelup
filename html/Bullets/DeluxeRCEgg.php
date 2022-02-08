<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Deluxe RC Egg Vibe";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/Pro2/";
  $price = 40;
  $salePrice = 35;
  $prodDesc = "The tiny, discreet remote wirelessly controls ten blissful modes of 
  unique vibration through a silky coated egg stimulator. The remote has an 
  approximate range of 65’/20m, which allows for all kinds of mischievous sexual 
  scenarios. The remote's discreet shape fits onto a key ring or over a belt loop to 
  keep it close at hand. Ideal for solo sex as well as many couple-centered 
  situations, this deluxe vibe’s manageable, lightweight design allows for complete 
  focus on stimulation. Plus it is waterproof! Made from ABS Plastic, this egg is 
  easy to clean with warm, soapy water or a good toy cleaner (requires 2 AAA 
  batteries, which are included).";
  $specs = 'Length: 3.25" <br />
  Girth: 4.5" at largest point <br />
  Width: 1.4" at largest point <br />
  Materials: ABS Plastic <br />
  Battery: 2 x AAA Batteries <br />
  Special Features: Multi-Speed, Multi-Function, Non-Phallic, Remote Control, Phthalate Free, Smooth Surface, Waterproof <br />
  Color: Gray
  ';
  $paypalID = "PKD6JDNEFZZGS";
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
