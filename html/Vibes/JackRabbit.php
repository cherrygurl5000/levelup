<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Waterproof Jack Rabbit Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/JackRabbit/";
  $price = 80;
  $salePrice = 60;
  $prodDesc = "The powerful, waterproof, much-loved Jack Rabbit offers full coverage 
  stimulation with multiple speeds of vibration and rotation, plus a shower and tub 
  friendly design (waterproof). The non-detailed phallic shaft flaunts rotating 
  massage beads to stimulate the inner erogenous zones while a silky soft double 
  eared rabbit tickler rouses the clitoris. Compatible with water and silicone-based 
  lubricants, it requires 3 AA batteries (sold separately).";
  $specs = 'Length: 10" <br />
  Insertable Length: 5" <br />
  Girth: 5" at largest point <br />
  Width: 1.5" at largest point <br />
  Materials: Jelly Rubber (TPR) <br />
  Battery: 3 x AA Batteries <br />
  Special Features: Waterproof, Multi-Speed, Rotates, Textured Surface <br />
  Color: Purple
  ';
  $paypalID = "47MB5AR9TR724";
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
