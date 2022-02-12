<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Delicious Encounter Flavored Lubricant";
  $catAdd = "../Lubes/Lubes.php";
  $category = "Lubes and Cleaners";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Lubes/DeliciousEncounters/";
  $price = 15;
  $prodDesc = "Enjoy the burst of flavor as you spread Delicious Encounter on your 
  partner! Manufactured by the makers of Elbow Grease brand lubes, this water-based 
  and silky-smooth lube is available in multiple flavors. With Delicious Encounter, 
  you can literally taste your sexual satisfaction!";
  $specs = 'Size: 2 oz <br />
  Flavors: Peach, Watermelon, Strawberry, Vanilla
  ';
  $paypalID = "";
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

    <script type="text/javascript">
      $("#cartBtn").after(`
        <div class="row justify-content-center" id="ddCartBtn">
          <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="UFHNEMHZ24KRY">
            <table class="ml-3 mb-2">
            <tr><td><input type="hidden" name="on0" value="Flavors">Flavors</td></tr><tr><td><select name="os0">
              <option value="Peach">Peach </option>
              <option value="Watermelon">Watermelon </option>
              <option value="Strawberry">Strawberry </option>
              <option value="Vanilla">Vanilla </option>
            </select> </td></tr>
            </table>
            <input type="image" src="https://levelupsessions.com/pics/Add_Cart.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
        </div>
      `);
      $("#cartBtn").remove();
    </script>

  </body>
</html>
