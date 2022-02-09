<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Stand-to-Pee Silicone Packer";
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/STPPacker/";
  $price = 20;
  $salePrice = 15;
  $prodDesc = "A plush-yet-firm piece created to confidently fill out a compatible pair of briefs, 
  boxers or otherwise. This packer not only provides a nice, full look under clothing and lets its 
  wearer stand to pee, it's also ready to play! Sculpted to fit snugly against the crotch, the STP 
  is soft enough to be bent and positioned for natural wear, though it's a tad firmer than average 
  which is better if you're after a noticeable bulge. That same firmness comes in pretty handy in 
  the bathroom as well. The STP holds steady as the hollow shape and open tip make nature's calls 
  stress-free. Made from silicone, this packer can be cleaned easily with warm, soapy water or a 
  good toy cleaner. Although it is compatible with water-based lubes, you should avoid 
  silicone-based lubes and other silicone products.";
  $specs = 'Length: 6.25" <br />
  Insertable Length: 4” <br />
  Girth: 4.6" at largest point <br />
  Width: 1.5" at largest point <br />
  Materials: Silicone <br />
  Special Features: Hypoallergenic, Phthalate Free, Textured Surface <br />
  Color: Brown
  ';
  $paypalID = "M6B3UFWKVMA8L";
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
