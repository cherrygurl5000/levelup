<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "G-Spot Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/G-Spot/";
  $price = 35;
  $salePrice = 28;
  $prodDesc = "The Lucid Dream 14 is hailed as one of the best g-spot vibes in 
  existence. It boasts a winning combination of softness, accuracy, and power 
  originating from a motor located in a sweet-spot targeting tip. Easy to maneuver 
  in, over, and around the body, the 14's larger size makes for a blissfully 
  full-coverage experience. Effortlessly reaching the g-spot upon penetration, the 
  vibe's natural curve positions the power-packed multi-speed motor directly against 
  the nerve ending rich upper vaginal wall. Breathtakingly powerful, the steady, 
  unrelenting vibration is easily varied with a simple twist of the base. <br />
  The Lucid Dream 14 is skin-friendly and compatible with water and silicone-based 
  lubricants, it requires 2 AA batteries (sold separately), and is waterproof.
  ";
  $specs = 'Length: 8.75" <br />
  Insertable Length: 7" <br />
  Girth: 4.75" at largest point <br />
  Width: 1.5" at largest point <br />
  Materials: PVC <br />
  Battery: 2 x AA Batteries <br />
  Special Features: Waterproof, Multi-Speed, Non-Phallic <br />
  Color: Purple
  ';
  $paypalID = "MU65G2X8UULZQ";
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
