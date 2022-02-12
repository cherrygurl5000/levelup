<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Fantasy Door Swing";
  $catAdd = "../Foreplay/Foreplay.php";
  $category = "Foreplay and Kinky";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Foreplay/FantasySwing/";
  $price = 60;
  $salePrice = 52;
  $prodDesc = "Get into some creatively compromising positions easily and very 
  excitingly with this fantastic Door Jam Sex Swing. Especially considering all the 
  pleasure you'll get from this sexy system, it's breathtakingly easy to use and 
  requires only a doorway to set up .Overtop of the door, simply place the 
  stopper-ended section of the main straps and close the door. That's it, you're 
  done! This exciting Swing is meant to help your partner support your weight during 
  sexy-time and provide some exciting positioning control. It's not meant to be used 
  as a suspension device, and shouldn't be used alone, nor should you attempt to 
  support more than one person. The max supportable weight is 300lbs (147kg). Please 
  be sure to follow the safety instructions included on the box for the safest and 
  most pleasurable experience with the Door Jam Sex Swing. <br /><br />

  <em>*A blindfold mask is included</em>
  ";
  $specs = 'Max Weight: 300lbs (147kg)';
  $paypalID = "XHXWG7SCCE3M6";
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
