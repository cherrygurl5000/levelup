<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Advanced Kegel Balls";
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/AdvancedKegel/";
  $price = 15;
  $prodDesc = "These Advanced Kegel Balls were designed to take your pelvic floor to the next level. 
  Built for pleasure, these balls will strengthen your pelvic muscles which leads to stronger, more 
  intense orgasms. Each ball contains a weighted bead that causes organic vibrations with your 
  movement while stimulating and massaging you. Simply insert both beads and use your pelvic muscles 
  to hold them in place. Try using them while exercising, in the shower, or around the house. It only 
  takes a few weeks of dedicated use to start feeling noticeably stronger. <br /><br />

  <em>*Includes a 16-page User Manual</em> <br /> <br />
  
  <em>*The Balls measure approximately 1.3” / 3.3cm in diameter</em>
  ";
  $specs = 'Weight: 2.6 oz combined <br />
  Material: ABS Plastic <br />
  Special Features: For advanced users, Smooth Surface <br />
  Color: Purple 
  ';
  $paypalID = "DGDR3SG5Y5UXN";
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
