<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Weighted Steel Balls";
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/WeightedSteel/";
  $price = 20;
  $salePrice = 16;
  $prodDesc = "Rolling in on the buzz created by a certain steamy trilogy, these Weighted Orgasm 
  Balls were specifically designed to strengthen and tone the pelvic floor muscles, but they double 
  as a pleasure tool, too. Worn internally, these heavier-than-average steel balls inspire 
  contractions of the pelvic muscles as they rock and roll against sensitive areas. Many women find 
  that wearing the balls adds lots of sexy awareness and arousal, not to mention the toning effect. 
  Beginners can start with one ball before graduating to both. The smooth metallic surface inserts 
  comfortably. Wash well before and after use using warm soapy water or a good toy care fluid/foam. 
  The slick nickel-free steel is compatible with water and silicone-based lubricants. <br /> <br />

  <em>*The balls measure approximately .6”/1.5cm in length and 2.25”/5.7cm in circumference. Each 
  weighs 1.2oz/34g</em>
  ";
  $specs = 'Circumference: 2.25"  <br />
  Weight: 2.4 oz combined <br />
  Material: Metal <br />
  Special Features: Weighted, Smooth Surface <br />
  Color: Pink
  ';
  $paypalID = "SM2VJFDAAKZFW";
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
