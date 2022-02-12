<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Ultra Cuff Set";
  $catAdd = "../Foreplay/Foreplay.php";
  $category = "Foreplay";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Foreplay/CuffSet/";
  $price = 15;
  $salePrice = 12;
  $prodDesc = "This Ultra Cuff Set can take you from bondage beginner to expert. 
  Designed of a sturdy material, the cuffs are completely adjustable to fit almost 
  any size with a satin lining for comfortable security. The user-friendly Velcro 
  fastenings hold your partner right where you want them, yet are easy to take off 
  quickly if needed. The spring loaded clamp and solid metal rings that connect the 
  two cuffs can be attached to any compatible restraint system, and they're equally 
  effective on their own. To add to the excitement of this bondage, a blindfold 
  mask is included, which brings some mild sensory deprivation to the mix.";
  $specs = '';
  $paypalID = "RLP334MZ3DPES";
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
