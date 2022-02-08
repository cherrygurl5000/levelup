<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Silicone Thumper G Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/ThumperG/";
  $price = 30;
  $salePrice = 25;
  $prodDesc = "A decadent little vibe with a silky silicone finish and full-coverage 
  shape, the curvy Thumper G features a dual stimulating shape, luxuriously silky 
  touch and ten toe-curling functions of vibration. Ideal for toy beginners and 
  perfect for stimulation seekers of all varieties, Thumper features a curvy, lightly 
  textured shaft plus a sexy up-reaching clitoral stimulator. A simple push button on 
  the base cycles an impressively quiet, intensely powerful motor through three 
  possible speeds of steady, unrelenting vibration. <br />

  In silky brushed silicone, the Thumper G cleans easily using warm, soapy water or a 
  good toy cleaner. Compatible with water-based lubes, it requires 1 AA battery (sold 
  separately), and is waterproof.
  ";
  $specs = 'Length: 6.5" <br />
  Insertable Length: 3.25" <br />
  Girth: 3.75" at largest point <br />
  Width: 1.25" at largest point <br />
  Materials: Silicone, ABS Plastic <br />
  Battery: 1 x AA Batteries <br />
  Special Features: Waterproof, Multi-Speed, Temperature Sensitive, Hypoallergenic, Non-Phallic, Phthalate Free, Textured Surface <br />
  Color: Pink
  ';
  $paypalID = "SSVTF3CKMFG4A";
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
