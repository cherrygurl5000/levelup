<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Bedroom Commands";
  $catAdd = "../Foreplay/Foreplay.php";
  $category = "Foreplay";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Foreplay/BedroomCommands/";
  $price = 18;
  $prodDesc = "This is for the Dirty Daddies and Sexy Bitches in all of us! Bedroom 
  Commands is a double-deck card game of commands that allows you to easily spice up 
  your routine. Pick a card from either deck and reveal the action for the evening. 
  Then let your imagination flow free as you perform the chosen action. With 108 
  game-cards included, you and your partner will make memories and create new 
  experiences each time you decide to choose a command to complete. <br /><br />

  <em>*Warning: This game is for the WILD, not the MILD!</em>
  ";
  $specs = '';
  $paypalID = "TUZAW9V3ESKXS";
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
