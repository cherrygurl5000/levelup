<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Elite Vibro Balls";
  $catAdd = "../Anal/Anal.php";
  $category = "Anal";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Anal/VibroBalls/";
  $price = 25;
  $salePrice = 20;
  $prodDesc = "These Elite Vibro Balls are a pleasurable take on the classic ben wa 
  balls, but geared toward anal bliss. They are completely discreet and are used 
  internally to create a distinctly unique stimulation. Linked by a flexible, 
  silicone strand and finished with a looped handle, the Balls can be removed and 
  manipulated easily. For an enhanced experience, the package includes two protective, 
  rubber finger sleeves, samples of Moist water-based lube and Anal Eaze cream, and a 
  small bottle of Refresh toy cleaner. <br />

  Silicone makes it easy to warm and cool the toy before play. It also makes it easy 
  to clean and/or sterilize this toy using boiling water. Compatible with water-based 
  lubricants, ensure that you avoid silicone-based lubes and other silicone toys and 
  products.
  ";
  $specs = 'Length: 8" <br />
  Insertable Length: 5” <br />
  Girth: 4.5" at largest point <br />
  Width: 1.25" at largest point <br />
  Materials: Silicone <br />
  Color: Black
  
  ';
  $paypalID = "BEHRMGF9BFH64";
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
