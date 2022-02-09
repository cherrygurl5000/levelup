<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Glass Dildo";
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/GlassDildo/";
  $price = 30;
  $salePrice = 25;
  $prodDesc = "From the Icicles Collection of hand-blown Pyrex glass treats, the No. 5 
  dildo has a petite, pseudo realistic shape that's very versatile. The softly pointed 
  tip is angled out and up slightly thanks to the natural curve of the dildo, fitting 
  the description of a great g-spot toy for men and women. It slips around your curves 
  with smooth ease, pleasing wherever it lands, and lavishing pinpoint stimulation on 
  your favorite erogenous zones. The wider base provides a good grip for easy 
  maneuvering, as well as making the No. 5 safe for anal enjoyment. If you're new to 
  this type of toy, welcome; glass is revered by pleasure connoisseurs for many reasons 
  such as the hard, weighty feel that's ideal for firm massage of your pleasure points, 
  particularly the g-spot and prostate. Glass toys are also extremely 
  temperature-sensitive, you'll be able to feel it warm naturally to body temperature 
  with use, but you can also amp up the heat or cool sensation by dipping your dildo 
  into cold or warm water before use. In addition, glass is perfectly hygienic, 
  non-porous and hypoallergenic, containing no additives or irritating chemicals. To 
  clean, just rinse with warm water and soap, use a good toy cleaner, boil for complete 
  sterilization, or even place into the top rack of the dishwasher. You'll be able to 
  use your lube of choice with your Icicles toy.";
  $specs = 'Length: 6.75" <br />
  Insert able Length: 6" <br />
  Girth: 4.5" at largest point <br />
  Width: 1.4" at largest point <br />
  Materials: Glass <br />
  Special Features: Hypoallergenic, Phthalate-Free, Smooth Surface, Textured Surface, Waterproof
  ';
  $paypalID = "RDQULEPWWQAH4";
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
