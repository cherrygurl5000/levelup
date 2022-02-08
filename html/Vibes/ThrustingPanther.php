<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Thrusting Panther Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/ThrustingPanther/";
  $price = 100;
  $salePrice = 85;
  $prodDesc = "Combining a classic dual stimulating shape with ferocious functions of 
  thrusting rotation, the Purring Panther vibe maxes out pleasure potential on a 
  tried-and-true favorite. Its shape is a crowd-pleaser, and the Panther features a 
  twist on a traditional rabbit with a smoothly swollen shaft and tickly panther 
  stimulator. Tapered at the tip and textured down a straight penetrator, the 
  Thrusting Panther offers up a namesake thrust function as well as rotating beads 
  just below the tip. At the touch of a button, the beads activate, spinning as the 
  shaft pumps up and down in nine intensity patterns. Below the shaft, a full-coverage 
  panther shaped tickler adds nine separate vibration modes to the mix, combining 
  steady pulses with roller-coaster escalation. Separate buttons control each function, 
  making for easy and quick adjustment. <br />

  In body safe TPR with sturdy ABS plastic, the Thrusting Panther cleans easily with 
  warm, soapy water or a good toy cleaner. Compatible with water and silicone-based 
  lubricants it requires 4 AAA batteries (sold separately). <br /><br />
  
  <em>*Not recommended for use in water</em>
  ";
  $specs = 'Length: 10.75" <br />
  Insertable Length: 5.25" <br />
  Girth: 4.75" at largest point <br />
  Width: 1.5" at largest point <br />
  Materials: ABS Plastic, Jelly Rubber (TPR) <br />
  Battery: 4 x AA Batteries <br />
  Special Features: Flexible, Multi-Speed, Multi-Function, Rotates, Phthalate Free, Thrusting Motion, Textured Surface, Smooth Surface <br />
  Color: Purple
  ';
  $paypalID = "G56YNCGWZYE5C";
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
