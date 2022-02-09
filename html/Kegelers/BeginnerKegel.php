<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Beginner Kegel Balls";
  $catAdd = "../Dildos/Dildos.php";
  $category = "Dildos";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Dildos/BeginnerKegel/";
  $price = 13;
  $salePrice = 10;
  $prodDesc = "These Kegel Balls were designed with the beginner in mind! Shaped into two smooth 
  swells, the balls nestle naturally along the curves of the vaginal wall, helping you target your 
  pelvic floor muscles. These magic muscles are responsible for improved inner snugness, better 
  control of continence after childbirth or surgery, the possibility of stronger, more intense 
  orgasms and an overall happier vagina. You'll grip and release the balls during kegel exercises 
  or you can forgo the workout and focus on deep inner sensation. Insert one at a time to get the 
  full effect, or just give a single ball a try. They weigh .8oz/22.7grams each, perfect for the 
  kegel beginner. Made from ABS Plastic, these balls clean easily with warm, soapy water or a good 
  toy cleaner. They are also compatible with water and silicone-based lubes. <br /><br />

  <em>*The Balls measure approximately 1.25”/3.2cm in diameter </em>
  ";
  $specs = 'Weight: 1.6 oz combined <br />
  Material: ABS Plastic <br />
  Special Features: Beginner-Friendly, Smooth Surface <br />
  Color: Pink
  ';
  $paypalID = "NCWBWDJ4J2LDC";
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
