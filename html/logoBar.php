<div class="row justify-content-center my-3 order-2 order-lg-1">
    <!-- Search bar code -->
    <div class="col-9 order-2 order-lg-1 col-md-4 d-flex align-items-center">
        <form class="form-inline my-2 col-12" id="searchForm">
            <input class="form-control col-10" type="search" id="searchBar" name="searchBar" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-sm-0 h-100 col-2" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <!-- The logo that takes you back to the homepage -->
    <div class="col-12 col-md-4 my-2">
        <a href="<?php echo HOME; ?>" role="button" >
            <img src="../img/Level_Logo_Title1.png" alt="Level Logo" class="d-block w-md-100 logoPic" />
        </a>
    </div>
    <!-- PayPal shopping cart code -->
    <div class="col-3 order-3 col-md-4 d-flex align-items-center">
        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
            <input type="image" src="../img/Cart.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>




</div>