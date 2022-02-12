<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Pure Instinct Pheromone Perfume Oil / Roll-On (Her)";
  $catAdd = "../Pheromones/Pheromones.php";
  $category = "Pheromones";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Pheromones/PerfumeHer/";
  $price = "16 - 17";
  $prodDesc = "To add a bit of mystery to your night, try this Pheromone Perfume Oil 
  by Pure Instinct. Infused with Pheromones, this will give you just the right amount 
  of temptation to make your night exciting.";
  $specs = 'Size: 0.5 fl oz / 0.34 fl oz <br />
  Special Features: Pheromone-Infused
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
            <input type="hidden" name="hosted_button_id" value="HQ9SRSLQCTEWG">
            <table>
            <tr><td><input type="hidden" name="on0" value="Options">Options</td></tr><tr><td><select name="os0">
              <option value="Perfume Oil">Perfume Oil $17.00 USD</option>
              <option value="Roll On">Roll On $16.00 USD</option>
            </select> </td></tr>
            </table>
            <input type="hidden" name="currency_code" value="USD">
            <input type="image" src="https://levelupsessions.com/pics/Add_Cart.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
        </div>
      `);
      $("#cartBtn").remove();
    </script>

  </body>
</html>
