<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Home Wrecker";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/HomeWrecker/";
  $price = 53;
  $prodDesc = "The Home Wrecker was designed to fulfill all of your erotic needs. 
  Measuring in at 9.5 inches from end-to-end, this toy is not meant for the faint 
  of heart. If you’re looking for a large, realistic toy with the girth to match, 
  then look no further. The Home Wrecker quickly warms up to you body temperature, 
  but can be warmed before playtime using warm water for a more natural feel. Made 
  with Blush’s Sensa-Feel dual density technology, the Home Wrecker is soft to the 
  touch while its inner core stays firm to maintain rigidity. It’s also waterproof! 
  <br />
  Requires 2 AA batteries (sold separately).
  <br /><br />
  <em>*Caution: Regular use may cause you to lose interest in your lover!*</em>
  ";
  $specs = 'Length: 9.5" <br />
  Insertable Length: 7.5” <br />
  Girth: 6" at largest point <br />
  Width: 1.75" at largest point <br />
  Materials: TPR <br />
  Battery: 2 x AA Batteries <br />
  Special Features: Ultra Soft, Waterproof, Easy to Clean, Phthalate Free, Latex Free <br />
  Colors: Brown, Beige
  ';
  $paypalID = "BJYWESXGJVYZY";
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
