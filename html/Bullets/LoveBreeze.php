<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Love Breeze";
  $catAdd = "../Bullets/bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/LoveBreeze/";
  $price = 40;
  $prodDesc = "The Satisfyer Love Breeze is the ideal air pulse vibe for on-the-go 
  action. With its easy to use and intuitive control panel, this vibe stimulates 
  the clitoris with a sensual combination of air pulses and tingling negative 
  pressure without contact. It boasts 11 intensity levels and will also inspire you 
  with its soft silicone head, rechargeable battery, and ergonomic, waterproof 
  finish. ";
  $specs = 'Length: 3.9" <br />
  Width: 1.6" at largest point <br />
  Materials: ABS Plastic, Silicone <br />
  Battery: USB Rechargeable Lithium Ion Battery <br />
  Special Features: 11 Pressure Wave Settings, Whisper Mode, IPX7 Waterproof Rating, Easy to Clean, Pressure Wave and Touch-free Stimulation <br />
  Color: Ice Blue
  ';
  $paypalID = "";
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
