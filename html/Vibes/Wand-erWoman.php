<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Wand-er Woman";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/Wand-erWoman/";
  $price = 60;
  $prodDesc = "Feeling stressed? Well, the Wand-er Woman is the perfect tool for 
  helping to relieve some of that tension. Its streamlined shape and impressive size 
  are uniquely designed for targeted pressure to help soothe tension and ease stress. 
  It is suitable for full-body therapeutic massages, and the Wand-er Woman will 
  tantalize you or your partner with toe-curling stimulation of your most intimate 
  parts. With its 50 vibration combos made up of 10 rhythms and 5 intensities, this 
  massager provides whole-body pleasure with ease and it’s waterproof.";
  $specs = 'Length: 13.5" <br />
  Girth: 7" at largest point <br />
  Width: 2.1" at largest point <br />
  Materials: Silicone <br />
  Battery: USB Rechargeable Lithium Ion Battery  <br />
  Warranty: 15 Years <br />
  Special Features: Flexible, Multi-Speed, Phthalate Free, Temperature Sensitive, IPX7 Waterproof Rating, Easy to Clean, Magnetic Charging Cable <br />
  Color: Purple
  ';
  $paypalID = "VFRFCKBVBHLAG";
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
