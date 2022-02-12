<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Adult Charades";
  $catAdd = "../Foreplay/Foreplay.php";
  $category = "Foreplay";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Foreplay/Charades/";
  $price = 16;
  $prodDesc = "Adult Charades is a naughty party game for naughty people! It’s an 
  adults-only version of the classic party game where players take turns acting out 
  things like Horny Devil, Mr. Woodcock, and The Little Man in the Boat. The goal is 
  to get your teammates to guess as many answers within a minute. After each team 
  member has performed three times, the winners are crowned based on which team has 
  the most points. The game comes with everything for a fun night, 80 cards with 6 
  charades per card, a one-minute timer, and a score pad. Make your next game night 
  a little more exciting with this adult themed masterpiece.";
  $specs = '';
  $paypalID = "8E2SEXTAQR3PG";
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
