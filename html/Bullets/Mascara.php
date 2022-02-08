<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Vibrating Mascara";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/Mascara/";
  $price = 15;
  $salePrice = 12;
  $prodDesc = "The Vibrating Mascara boasts high-end, cosmetic-designed looks have 
  completely disguised this vibe from something that would be in your make-up bag 
  or purse. This clitoral-pleasing vibe with cap on looks like an innocent tube of 
  mascara, but when the top comes off, a nubby, supple silicone tip is revealed, 
  which seeks out sensitive body parts with impeccable precision. Contained in the 
  sleek body, there's a powerful motor that drives three speeds of vibration and 
  one orgasmic pattern of pulsation through to the tip. When you're finished, just 
  place the cap back on, and drop it back into your bag, ready for next time. 
  Compatible with water-based lubes, this mascara is water resistant (requires 3 
  LR44 batteries, which are included).";
  $specs = 'Length: 5.5" <br />
  Materials: ABS Plastic, Silicone <br />
  Battery: 3 x LR44 Batteries <br />
  Special Features: Multi-Speed, Non-Phallic, Phthalate Free <br />
  Color: Black
  ';
  $paypalID = "GBSJ5CTJDKJ36";
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
