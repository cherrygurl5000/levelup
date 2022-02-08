<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Eve's Rabbit Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/EvesRabbit/";
  $price = 60;
  $prodDesc = "Eve’s favorite rabbit is ready to burrow its sensuously ribbed shaft in 
  your love mound! With its silent and powerful motors, sturdy construction, 4 rotating 
  speeds, 5 rows of non-jamming pleasure beads, and its rotating, gyrating shaft, this 
  vibe will not let you down. Eve’s Rabbit is perfect for solo or partner play, and it 
  also features a 7-vibration clit stimulator that puts you or your partner over the 
  top!<br />
  Requires 4 AA batteries (sold separately).
  ";
  $specs = 'Length: 10.5" <br />
  Insertable Length: 6" <br />
  Width: 1.75" at largest point <br />
  Materials: Jelly Rubber (TPR) <br />
  Battery: 4 x AA Batteries <br />
  Special Features: Latex Free, Phthalate Free, Multi-Speed, Rotates, Textured Surface <br />
  Color: Pink
  ';
  $paypalID = "P37F24J7KU4JQ";
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
