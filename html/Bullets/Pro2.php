<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Satisfyer Pro 2";
  $catAdd = "../Bullets/bullets.php";
  $category = "Bullets and Things";
  $prodAdd = "#";
  $product = $title;
  //$prodTitle = "Satisfyer Pro 2";
  $imgLoc = "../../img/Products/Bullets/Pro2/";
  $price = 55;
  $prodDesc = "The Satisfyer Pro 2 encompasses the innovative Satisfyer Air Pulse 
  technology. Featuring a whisper quiet motor and a soft silicone head, this 
  best-seller will give you explosive orgasms without direct contact. It focuses 
  on tantalizing the clitoris with gentle or intense waves of pleasure, it’s your 
  choice! With an optimized button design that lets you cycle through 11 exciting 
  levels of pressure waves, it is also waterproof and can be used discreetly in the 
  tub or between the sheets.<br />

  For a better experience, water-based lubricants will work great with the soft, 
  hygienic silicone head. A handy USB charger keeps your Satisfyer Pro 2 ready and 
  willing to perform when you need it! It’s also easy to clean with soap and warm 
  water or a toy cleaner.
  ";
  $specs = 'Length: 6.5”
  Width: 1.8” <br />
  Height: 2.6” <br />
  Materials: ABS Plastic, Silicone <br />
  Battery: USB Rechargeable Lithium Ion Battery <br />
  Warranty: 15 Years <br />
  Special Features: 11 Pressure Wave Intensities, Whisper Mode, IPX7 Waterproof Rating, Easy to Clean <br />
  Color: Rose Gold <br />
  ';
  $paypalID = "QSJ667U7R4V5Y";
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
