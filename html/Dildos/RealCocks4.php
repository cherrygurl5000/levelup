<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "RealCocks # 4";
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/RealCocks4/";
  $price = 40;
  $prodDesc = "RealCocks #4 is the 8 inches you need in your life! With its firm inner layer and a 
  life-like outer layer, there is no feeling quite like it. It contains a bendable internal rod that 
  provides even more realism. It has a suction cup base to keep it in place during playtime. It’s 
  also waterproof and the perfect edition to add to your collection.";
  $specs = 'Length: 8" <br />
  Insertable Length: 7.5" <br />
  Girth: 6" at largest point <br />
  Width: 2" at largest point <br />
  Materials: TPE <br />
  Special Features: Phthalate-Free, Suction Base, Textured Surface, Bendable Internal Rod, Realistic Feel, Waterproof <br />
  Colors: Dark, Medium, Light
  ';
  $paypalID = "D95FQV8BBMPNL";
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
