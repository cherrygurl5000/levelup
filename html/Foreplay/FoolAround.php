<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Let's Fool Around Dice Game";
  $catAdd = "../Foreplay/Foreplay.php";
  $category = "Foreplay";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Foreplay/FoolAround/";
  $price = 13;
  $prodDesc = "For sexually adventurous groups of two or more, the Let's Fool Around 
  Dice will certainly get the sexy times rolling. The core die is the silver, which 
  spells out a teasing act, all players (you can split into teams if there's a big 
  group) choose a body part die to represent themselves. Players take turns rolling 
  all the dice in play, with the silver determining what action needs to be carried 
  out (lick, blow on, tickle etc.), the roller picks the color die and therefore, 
  the player they want to perform it on/with. With combinations like Kiss Neck, 
  Tickle Bottom and Caress Crotch, who knows where the night will lead?";
  $specs = '';
  $paypalID = "B86VEN88Z7BCY";
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
