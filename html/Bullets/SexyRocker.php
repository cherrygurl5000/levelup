<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Sexy Things Rocker";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/SexyRocker/";
  $price = 10;
  $prodDesc = "This Rocker is eager to rock your world by moving you with deep, 
  powerful vibrations. You will feel these vibrations from your temples to your toes. 
  Its motor is extremely powerful, but the diamond grip ensures that your hand won’t 
  slip for the big finish! Compatible with water-based lubes, this toy is waterproof 
  and requires 1 AA battery (sold separately).";
  $specs = 'Length: 4" <br />
  Battery: 1 x AA Batteries <br />
  Special Features: Waterproof, Non-Phallic, Diamond Grip, Powerful Motor <br />
  Color: Pink
  ';
  $paypalID = "TT8MXN8T4APYG";
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
