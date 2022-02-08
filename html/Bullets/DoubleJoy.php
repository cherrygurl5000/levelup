<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Double Joy";
  $catAdd = "../Bullets/bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/Pro2/";
  $price = 50;
  $prodDesc = "The Satisfyer Double Joy is a couple’s vibe that energizes your play 
  time with breathtaking vibrations and passionate rhythms. With its ergonomic and 
  flexible shape, it works effortlessly to catapult you and your partner out of this 
  world. The larger head sits on your clitoris, while the smaller shaft is slipped 
  inside to excite your G-Spot. When he inserts his penis, it adds a pleasant 
  tightness and skillfully stimulates both of you on to an ecstatic mutual orgasm.<br />
  The Double Joy is not only fun with a partner present, it can be used alone or with 
  help from the Satisfyer Connect App. Just download the app to your Android or iOS 
  device and connect your smartphone, tablet or Apple Watch via Bluetooth or internet. 
  The app will allow you to create, save, or even download various patterns that 
  seamlessly integrates sensual vibration patterns into both motors of the Double Joy, 
  independently or simultaneously. With the in-app call feature, you can give up 
  control of your new best friend to a partner as long as they are also connected to 
  the app!
  ";
  $specs = 'Length: 3" <br />
  Width: 1.6" at largest point <br />
  Materials: ABS Plastic, Silicone <br />
  Battery: USB Rechargeable Lithium Ion Battery <br />
  Warranty: 15 Years <br />
  Special Features: 10 Vibration programs for both motors, IPX7 Waterproof Rating, Easy to Clean, Perfect for Couples, App Connectivity <br />
  Color: Purple <br />
  ';
  $paypalID = "CSDB2S7JJWEW8";
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
