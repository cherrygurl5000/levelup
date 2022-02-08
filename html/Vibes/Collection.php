<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "The Collection Vibes";
  $catAdd = "../Vibes/Vibes.php";
  $category = "Vibes";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Vibes/Collection/";
  $price = "22 - 84";
  $prodDesc = "Who knew that pleasure could be this cute? The Collection consists of 
  four individual vibes with remarkable sayings on them. These limited-edition vibes 
  will leave you satisfied and full of joy with every use. The classic, slim design is 
  quiet, discreet, smooth, and delivers lots of sensations with their multi-speed 
  vibrations. They are splash-proof and easy to clean. They are the perfect gift for 
  yourself or for your lover. Enjoy a single item from the collection or the entire 
  set… Whatever you choose, I’m sure you won’t be disappointed! <br />
  Requires 2 AA batteries (sold separately).
  ";
  $specs = 'Length: 7" <br />
  Insertable Length: 5.5” <br />
  Width: 1" at largest point <br />
  Materials: ABS Plastic <br />
  Battery: 2 x AA Batteries <br />
  Special Features: Multi-Speed, Splashproof, Phthalate Free, Latex Free, Smooth Surface <br />
  Phrases: XOXO, With Love, Sweet Bunny, Play Naughty
  ';
  //$paypalID = "";
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
            <input type="hidden" name="hosted_button_id" value="5RLG2YSZ9JVY8">
            <table>
            <tr><td><input type="hidden" name="on0" value="Options">Options</td></tr><tr><td><select name="os0">
              <option value="XOXO">XOXO $22.00 USD</option>
              <option value="With Love">With Love $22.00 USD</option>
              <option value="Sweet Bunny">Sweet Bunny $25.00 USD</option>
              <option value="Play Naughty">Play Naughty $25.00 USD</option>
              <option value="Bundle">Bundle $84.00 USD</option>
            </select> </td></tr>
            </table>
            <input type="hidden" name="currency_code" value="USD">
            <input class="ml-4" type="image" src="https://levelupsessions.com/pics/Add_Cart.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
        </div>
      `);
      $("#cartBtn").remove();
    </script>

  </body>
</html>
