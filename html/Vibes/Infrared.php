<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Infrared Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/Infrared/";
  $price = 30;
  $salePrice = 25;
  $prodDesc = "What do you get when you combine a classic tapered shape with soothing 
  heat? <br />
  An amazing time! This full sized vibe not only targets sweet spots both inside and 
  out, buzzes and throbs at multiple speeds, but also heats to a sexy fever pitch. 
  Enjoy the vibration alone or use the infrared heating to warm things up. <br />
  
  Made from body safe ABS plastic, the Infrared Vibe is easy to clean using warm soapy 
  water or a good toy cleaner. It is also compatible with water or silicone-based lubes 
  (requires 2 C batteries, sold separately).
  ";
  $specs = 'Length: 8.25" <br />
  Insertable Length: 7.25” <br />
  Girth: 4.25" at largest point <br />
  Width: 1.25" at largest point <br />
  Materials: ABS Plastic <br />
  Battery: 2 x C Batteries <br />
  Special Features: Multi-Speed, Non-Phallic, Phthalate Free, Smooth Surface <br />
  Color: Black
  ';
  $paypalID = "TD76TE45538Q8";
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
