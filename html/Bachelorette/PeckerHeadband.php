<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Pecker Headband";
  $catAdd = "../Bachelorette/Bachelorette.php";
  $category = "Bachelorette";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bachelorette/PeckerHeadband/";
  $price = 14;
  $salePrice = 10;
  $prodDesc = "A bright pink, faux-fur detailed headband with flashing light-up 
  pink pecker 'ears', this must-have party favor from Pipedream's Bachelorette 
  line will certainly draw attention to the bride-to-be, which, of course, is 
  the whole point of the party! Secured on a classic black plastic band, the 
  Flashing Light Up Pecker Headband can be worn comfortably all night. Fits most. 
  <br/><br/>
  <em>*Requires AG13 batteries (included)</em>
  ";
  $specs = '';
  $paypalID = "SU28MTJ6B2E5E";
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
