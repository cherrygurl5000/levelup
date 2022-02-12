<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = 'Silicone "O" Balls ';
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/SiliconeOBalls/";
  $price = 25;
  $salePrice = 20;
  $prodDesc = "Luxuriously designed and perfectly body safe, this lovely silicone kegel strengthening 
  set of 'O' Balls hails from the high-end Posh collection. This particular set of Balls, the likes 
  of which has been steadily growing in popularity thanks to a certain grey-shaded erotic novel, 
  consists of two plush silicone weighted spheres meant to tone and tighten, while providing 
  deliciously discreet pleasure. Strong PC (pelvic floor) muscles play a big role in making sex more 
  enjoyable for both you and your partner, allowing more control over sensation, and giving you the 
  ability to tighten up your sex muscles at will to grip your lover or a toy tighter to bring them (or 
  it) closer to the sensitive vaginal walls. Strong pelvic floor muscles can also help tighten and tone 
  after giving birth, and can help with possible incontinence issues. Aside from the sexual fitness 
  effect, wearing the Balls provides a deeply pleasurable feeling as the free form weights (2.6oz 
  combined) within each Ball jiggle and roll with movement. Many women wear this type of toy as a way 
  to prime for sex, constant awareness of the Beads inside can be extremely arousing. <br />
  Made from high end silicone, the Posh Balls are silky and temperature sensitive, warming deliciously 
  to match body heat with touch and wear. Silicone is also incomparably hygienic, it's nonporous and 
  wipes clean with little effort, for more thorough sterilization, you can boil or bleach the Balls, 
  or place in the top rack of the dishwasher. Use a water-based lubricant with this toy, silicone 
  formulas should be avoided, as should storage with other silicone products and toys.
  ";
  $specs = 'Length: 8"  <br />
  Insertable Length: 5" <br />
  Girth: 4.6" at largest point  <br />
  Width: 1.4" at largest point <br />
  Weight: 2.6 oz combined <br />
  Material: Silicone <br />
  Special Features: Hygienic, hypoallergenic, large retrieval cord <br />
  Color: Pink
  ';
  $paypalID = "2NPPFZZU9WL6W";
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
