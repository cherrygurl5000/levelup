<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Mambo Vibe";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/Mambo/";
  $price = 26;
  $prodDesc = "This stylish and sexy, 9-inch Mambo Vibe is mind-blowing! It touts 
  multi-speed vibrations, a realistic penis shape, and a slight curve to maximize 
  stimulation. The Mambo Vibe is a hand-crafted, soft, and flexible marvel that is 
  made from body-safe TPE. So get ready for a wild ride because this vibe is going 
  to take you on a trip. PS. It’s also waterproof! <br />
  Requires 2 AA batteries (sold separately).
  ";
  $specs = 'Length: 9" <br />
  Insertable Length: 7.75” <br />
  Girth: 5.75" at largest point <br />
  Width: 1.4" at largest point <br />
  Materials: ABS Plastic <br />
  Battery: 2 x AA Batteries <br />
  Special Features: Multi-Speed, Ultra Soft, Waterproof <br />
  Color: Blue
  ';
  $paypalID = "Z4JPUSKT4GGQW";
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
