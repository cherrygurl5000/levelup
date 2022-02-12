<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Vibro Play Anal Toy";
  $catAdd = "../Anal/anal.php";
  $category = "Anal";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Anal/VibroPlay/";
  $price = 10;
  $salePrice = 7;
  $prodDesc = "Looking for some anal inspiration? The Vibro Play probe is a unique tool to help 
    you add lots of intense sensation to playtime. The shape is thoughtful and 
    functional, with a super slim head for easy and comfortable insertion, some 
    ribbed texture, along with smoothly graduated bumps for tons of sensation. To 
    add even more to your anal adventure, a wireless mini vibrator fits into the body 
    of the Plug for ultimate stimulation. The base is large, a selling point of any 
    anal toy, since the base is what makes sure that your toy doesn't get 
    'swallowed'. The Vibro Play's base, in addition to being large, is also designed 
    with strong suction, so it can be mounted on almost any flat surface and be used 
    hands free. The size is slim and manageable; it would be a great toy for a 
    beginner to work their way up and experienced users will adore the hands free 
    potential and strong vibration. Remember to use lots of lube for maximum pleasure.";
  $specs = 'Length: 5" <br />
    Insertable Length: 4" <br />
    Girth: 3.75" at largest point <br />
    Width: 1.25" at largest point <br />
    Materials: Jelly Rubber (TPR) <br />
    Battery: 1 x AAA Batteries <br />
    Special Features: Waterproof, Suction Cup, Phthalate Free, Textured Surface <br />
    Color: Purple <br />';
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
