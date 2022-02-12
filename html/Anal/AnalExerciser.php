<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Advanced Anal Exerciser";
  $catAdd = "../Anal/Anal.php";
  $category = "Anal";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Anal/AnalExerciser/";
  $price = 20;
  $salePrice = 16;
  $prodDesc = "This Advanced Anal Exerciser is perfect for expert anal players with 
  its long, strategically swollen shape. It provides an exciting challenge to 
  rear-pleasure seekers progressing to more filling penetration. Simple and 
  user-friendly, the double-tiered Advanced Exerciser is sleek and manageable, 
  flexing subtly for comfort and precision placement. Featuring a wide circular base 
  enhanced by sturdy suction, the Advanced Exerciser can be secured against just 
  about any smooth, flat surface for hands free play. The base also protects against 
  travel and overly deep penetration. Made from smooth TPR that is compatible with 
  water or silicone-based lube and cleans easily using warm, soapy water or a good 
  toy cleaner.";
  $specs = 'Length: 6.25" <br />
  Insertable Length: 5.25” <br />
  Girth: 4.6" at largest point <br />
  Width: 1.4" at largest point <br />
  Materials: TPR <br />
  Color: Black
  ';
  $paypalID = "L9RKETS94MZ3Q";
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
