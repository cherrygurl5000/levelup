<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Silicone Double Dancer Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/DoubleDancer/";
  $price = 30;
  $salePrice = 25;
  $prodDesc = "The Double Dancer presents a precise g-spot targeting shape plus twin 
  clitoral stimulators. This is ideal for beginners but has a quietly, powerful motor 
  for the advanced user. It provides three speeds of steady, unrelenting vibration. 
  It is also waterproof. Made from pure silicone, this vibe quickly warms to match 
  your body temperature and can be easily cleaned with warm, soapy water or a good 
  toy cleaner. It is compatible with water-based lubes (requires 1 AA battery, sold 
  separately).";
  $specs = 'Length: 6.75" <br />
  Insertable Length: 3.5” <br />
  Girth: 3.75" at largest point <br />
  Width: 1.1" at largest point <br />
  Materials: ABS Plastic, Silicone <br />
  Battery: 1 x AA Battery <br />
  Special Features: Hypoallergenic, Multi-Speed, Non-Phallic, Phthalate Free, Temperature Sensitive, Waterproof <br />
  Color: Purple
  ';
  $paypalID = "KU5KS5TBTS6DN";
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
