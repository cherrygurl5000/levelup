<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Silver Bullet Vibe";
  $catAdd = "../Bullets/Bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bullets/SilverBullet/";
  $price = 12;
  $salePrice = 8;
  $prodDesc = "The Silver Bullet is a traditional vibe with a curvy shape and silky 
  feel that can also be used with any toys that use a removable bullet. The speed can 
  easily be varied using the easy spin dial. In skin safe ABS plastic, the Silver 
  Bullet cleans easily using warm, soapy water or a good toy cleaner. Compatible with 
  water and silicone-based lubricants, this vibe requires 2 AAA batteries (sold 
  separately). <br /><br />

  <i>*Not recommended for use in water</i>
  ";
  $specs = 'Length: 2.25" <br />
  Insertable Length: 2.25" <br />
  Girth: 3.25" at largest point <br />
  Width: 1" at largest point <br />
  Materials: ABS Plastic <br />
  Battery: 2 x AAA Batteries <br />
  Special Features: Multi-Speed, Remote Control, Non-Phallic, Phthalate Free, Smooth Surface <br />
  Color: Silver
  ';
  $paypalID = "5PN4NSXC4PVGG";
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
