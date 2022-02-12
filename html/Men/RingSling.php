<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "C-Ring with Ball Sling";
  $catAdd = "../Men/Men.php";
  $category = "Men";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Men/RingSling/";
  $price = 6;
  $salePrice = 4;
  $prodDesc = "A snug support system designed to maximize the effect of classic 
  constriction on erection strengthen and stamina, Screaming O's RingO2 doubles up 
  on performance. Circles both base and balls, the dual design helps maintain a firm 
  erection while slowing down (and intensifying) orgasm. <br/>

  In a body safe, non-toxic SEBS material, a special blend of scent and taste-free 
  elastomer, the RingO2 perfectly suits sensitive skin. Maintenance is worry free 
  and simple. A good rinse in warm, soapy water or a wipe-down with a good toy 
  cleaner will have the RingO2 squeaky clean and ready to enjoy (compatible with 
  water-based lubes). <br/><br/>
  
  <em>*Shaft ring diameter stretches from 1.25 inches (3.2cm)</em>
  ";
  $specs = '';
  $paypalID = "ZG6865MN5DNKQ";
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
