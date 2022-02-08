<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Love Triangle";
  $catAdd = "../Bullets/bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/LoveTriangle/";
  $price = 60;
  $prodDesc = "The Satisfyer Love Triangle is a clit vibe that catapults you to 
  climaxes like you’ve never experienced before! It gently wraps itself around 
  your clitoris with its soft, smooth silicone head. Combining, the innovative 
  Satisfyer Air Pulse Technology with deep vibrations, this easy to use vibe 
  provides many creative waves to get you to the finish line.  <br />
  This vibrator not only allows you to choose between predefined intensity 
  combinations of pressure waves and vibrations, you can also make your own 
  creations with the innovative app control. Just download the free Satisfyer 
  Connect App to your Android or iOS device and connect your smartphone, tablet 
  or Apple Watch via Bluetooth or internet to your little pleaser. Experience 
  vibrations to the rhythm of your favorite playlist on Spotify, share your own 
  creations, or give up control to a partner through the app’s video chat 
  function. No matter how you choose to play, hours of tingling pleasure await 
  you!
  ";
  $specs = 'Length: 3.4"  <br />
  Width: 2.5" at largest point  <br />
  Height: 1.25”  <br />
  Materials: ABS Plastic, Silicone  <br />
  Battery: USB Rechargeable Lithium Ion Battery  <br />
  Warranty: 15 Years  <br />
  Special Features: 11 Pressure Wave Intensities + 10 Vibration Settings, Whisper Mode, IPX7 Waterproof Rating, Easy to Clean, App Connectivity  <br />
  Color: Black, Rose Gold  <br />
  ';
  $paypalID = "BXCLNPEHE4SEQ";
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
