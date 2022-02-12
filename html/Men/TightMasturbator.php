<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Tight Masturbator";
  $catAdd = "../Men/Men.php";
  $category = "Men";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Men/TightMasturbator/";
  $price = 15;
  $salePrice = 12;
  $prodDesc = "Get the most (and best!) mileage from your anime fantasies with 
  Sakura's Tight Masturbator. In sparkly pink, this soft sleeve features a snug, 
  non-detailed entrance, a very lifelike inner texture, and a closed-ended design 
  that naturally creates lots of suction. This masturbator is perfectly 
  squeezable which allows you or your partner to easily customize just how tight 
  Sakura grips your penis. Use water-based lubes to make it slippery. It can 
  easily be cleaned with warm, soapy water or a good toy cleaner. <br/><br/>

  <em>*Measures approximately 6”/15.24cm in total length</em>
  ";
  $specs = 'Length: 6" <br/>
  Orifice: Neutral <br/>
  Special Features: Closed End <br/>
  Color: Pink
  ';
  $paypalID = "VJSLS3SA7WQRE";
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
