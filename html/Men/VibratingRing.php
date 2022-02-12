<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Vibrating Love Ring";
  $catAdd = "../Men/Men.php";
  $category = "Men";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Men/VibratingRing/";
  $price = 8;
  $salePrice = 5;
  $prodDesc = "Add lots more sensation, stimulation, and 'O' pleasure to sex with the 
  Screaming ‘O’ Vibrating Ring. This soft, stretchy cock ring is comfortable and user 
  friendly, just place it at the base of the penis with the vibrating area facing up. 
  The ring itself has 7 round pleasure nodules that grip and massage the penis gently 
  as it helps keep your man harder and lasting longer. Aside from the obvious benefit 
  of lasting longer, the powerful little vibe on top is enhanced by a tickly, exciting 
  pattern to hit your clitoris perfectly to add stimulation to that all-important 
  toe-curling zone. The Ring is meant for a single use, the vibrations last a good 30 
  minutes. It's a great, quick, discreet way to introduce toys into the bedroom, and 
  the user-friendly design is perfect for beginners. The clear pink ring is one size, 
  fits all, and made from safe, non-toxic SEBS silicone.";
  $specs = 'Material: Silicone <br/>
  Special Features: One size fits all
  ';
  $paypalID = "KL84BPESQ99PE";
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
