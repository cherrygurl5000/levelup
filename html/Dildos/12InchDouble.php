<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "12 Inch Double Dong";
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/12InchDouble/";
  $price = 25;
  $salePrice = 20;
  $prodDesc = "An excitingly lengthy dildo with tons of versatile flexibility, this Double Dong presents 
  two lifelike tips for double penetration during solo play or partner fun. It can be bent, twisted, and 
  angled to suit many positions and acts. Made from a phthalate-free PVC material, this dong cleans 
  easily with warm, soapy water or a good toy cleaner. It is also compatible with water-based 
  lubricants.";
  $specs = 'Length: 11.75" <br />
  Insertable Length: 9.75” <br />
  Girth: 5" at largest point <br />
  Width: 1.6" at largest point <br />
  Materials: PVC <br />
  Special Features: Phthalate Free, Textured Surface <br />
  Color: Pink
  ';
  $paypalID = "53JQ4B7BTMFY4";
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
