<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Super Head Honcho Masturbator";
  $catAdd = "../Men/Men.php";
  $category = "Men";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Men/HeadHoncho/";
  $price = 30;
  $salePrice = 25;
  $prodDesc = "Voted Toy of the Year by sex educator Sue Johanson from Talk Sex <br/><br/>
  
  Selling like crazy since day one, the Super Head Honcho, forms an ultra-pleasurable triple 
  suction design and easy handling while boasting an endorsement from hailed sex educator Sue 
  Johanson. <br/>
  
  Designed for incredible solo sessions and hand-job help, the Super Head Honcho's portable 
  shape fits comfortably in any sized hand. Front and center of the exterior, there's a 
  playfully detailed little opening complete with soft lips. Gripping snugly right from the 
  start, a triple-noded interior sucks and massages all the way through to an open end. 
  Increase inner suction by covering up the back hole with a finger, or simply squeeze the 
  plushy material. <br/>
  
  In body safe TPR, the Super Head Honcho cleans easily using warm, soapy water or a good 
  toy cleaner. Rinse the inner cavity by running water through. Compatible with water-based 
  lubricants.
  ";
  $specs = 'Orifice: Vagina <br/>
  Length: 6" <br/>
  Special Features: Open Ended
  ';
  $paypalID = "H8SHXRQNXQN56";
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
