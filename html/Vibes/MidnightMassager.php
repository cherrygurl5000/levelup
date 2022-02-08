<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Midnight Massager";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/MidnightMassager/";
  $price = 60;
  $salePrice = 52;
  $prodDesc = "A jet black, silky smooth version of the much loved massager that's been 
  giving some of the favorites a run for their money. It is an extra powerful, 
  user-friendly pleasure tool featuring a soft, flexible head that easily reaches all 
  the spots you seek to please. The sleek wand style shape fits smoothly in hand, 
  letting you comfortably and easily direct the Soft Touch head over, around and against 
  sore muscles or more intimate areas. A little dial requiring just one free fingertip 
  starts up the vibrations and switches up the multiple speeds. <br />

  The Body Wand was specifically engineered for strong, continuous stimulation that 
  won't quit until you're satisfied and sated. You'll appreciate the subdued sound 
  levels, which, considering the power are impressive. Though not the most silent 
  vibrator you'll come across, it's less intrusive than most electric models. In case 
  you need more reasons to adore the Body Wand, it's made from high quality, body 
  safe materials, plus, it's powered by good old electricity, so it will always be 
  ready when you are. If you'll be using a lubricant, choose a water-based formula to 
  keep your Wand in tip top shape.
  ";
  $specs = 'Length: 10.25" <br />
  Girth: 5.6" at largest point <br />
  Width: 1.6" at largest point <br />
  Materials: ABS Plastic, Thermoplastic Elastomer <br />
  Special Features: Flexible, Multi-Speed, Phthalate Free <br />
  Color: Black
  ';
  $paypalID = "EBLVN5BTJAEM6";
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
