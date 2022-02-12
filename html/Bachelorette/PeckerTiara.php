<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Pecker Party Tiara";
  $catAdd = "../Bachelorette/Bachelorette.php";
  $category = "Bachelorette";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Bachelorette/PeckerTiara/";
  $price = 14;
  $salePrice = 10;
  $prodDesc = "Crown the bachelorette with the pecker Party Tiara at the start of 
  the party, and there'll be no mistake about who the bride to be is! This 
  beautiful headpiece has pink fur, pink gems, and the token pink peckers standing 
  proud across the front. The comb end fits easily onto any hairstyle, and the 
  whole thing is nice and lightweight so she can wear it all night long.";
  $specs = '';
  $paypalID = "TV6X7JPFD8DML";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>

    <!-- Include the meta tags, Bootstrap and CSS links -->
    <?php include_once("../../include/headData.php"); ?>

    <!-- Include the code for the darker colored carousel icons -->
    <link rel="stylesheet" type="text/css" href="../../css/carouselIcons.css" />
    <style type="text/css">
      #specs {
        display: none;
      }
    </style>

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
