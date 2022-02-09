<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Slim 7 Inch Dildo";
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/Slim7Inch/";
  $price = 30;
  $salePrice = 25;
  $prodDesc = "Sleek and soft, the Slim 7 from offers pleasure seekers a classic tapered shaft 
  rippled through with lifelike texture. Courtesy of a wide circular base enhanced with sturdy 
  suction, the Slim 7 offers up tons of hands-free options, in or out of strap-on situations. 
  Smooth and tapered at its tip, the Slim widens very gradually down the length, gently 
  stretching and stimulating along the way. A thick swell at the below rounds off the 
  traditional shape before widening out to the suction base. Press the suction portion against 
  just about any smooth, flat surface to steady the length vertically or horizontally on floor, 
  wall, window, and beyond. For strap-on play, simply insert the Slim through a favorite 
  harness,' O-ring or yoke opening, using the wide circular base to steady. <br />

  In a special blend of soft jelly rubber, the Slim 7 cleans easily using warm, soapy water or 
  a good toy cleaner, and is compatible with water-based lubes.
  ";
  $specs = 'Length: 8.25" <br />
  Insertable Length: 7.25" <br />
  Girth: 5.6" at largest point <br />
  Width: 1.6" at largest point <br />
  Materials: Jelly Rubber (TPR) <br />
  Special Features: Phthalate-Free, Suction Base, Textured Surface <br />
  Color: Purple
  ';
  $paypalID = "8XEXT3QAX32SQ";
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
