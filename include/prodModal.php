<div class="row" id="gallery" data-toggle="modal" data-target="#the_modal">
        <div class="col-12 col-sm-6 col-lg-2">
            <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>1.jpg" alt="<?php echo $title; ?> Image" 
            data-target="#the_carousel" data-slide-to="0" />
        </div>
        <div class="col-12 col-sm-6 col-lg-2 d-none d-sm-inline">
            <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>2.jpg" alt="<?php echo $title; ?> Image" 
            data-target="#the_carousel" data-slide-to="1" />
        </div>
        <div class="col-12 col-sm-6 col-lg-2 d-none d-lg-inline">
          <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>3.jpg" alt="<?php echo $title; ?> Image" 
          data-target="#the_carousel" data-slide-to="2" />
        </div>
        <div class="col-12 col-sm-6 col-lg-2 d-none d-lg-inline">
            <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>4.jpg" alt="<?php echo $title; ?> Image" 
            data-target="#the_carousel" data-slide-to="3" />
        </div>
        <div class="col-12 col-sm-6 col-lg-2 d-none d-lg-inline">
            <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>5.jpg" alt="<?php echo $title; ?> Image" 
            data-target="#the_carousel" data-slide-to="4" />
        </div>
        <div class="col-12 col-sm-6 col-lg-2 d-none d-lg-inline">
            <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>6.jpg" alt="<?php echo $title; ?> Image" 
            data-target="#the_carousel" data-slide-to="5" />
        </div>
    </div>

    <!--The modal for the product images -->
    <div class="modal fade" id="the_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content fits">
            <div class="modal-header">
              <h2 class="d-block w-100 text-center pt-1"><?php echo $title; ?></h2> 
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="the_carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>1.jpg" alt="<?php echo $title; ?> Image" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>2.jpg" alt="<?php echo $title; ?> Image" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>3.jpg" alt="<?php echo $title; ?> Image" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>4.jpg" alt="<?php echo $title; ?> Image" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>5.jpg" alt="<?php echo $title; ?> Image" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>6.jpg" alt="<?php echo $title; ?> Image" />
                    </div>
                </div>
                <a class="carousel-control-prev" href="#the_carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#the_carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
            <!--Add the images to the footer in order to have clickable images in the modal-->
            <div class="modal-footer">
                <div class="row justify-content-around">
                    <div class="col-2">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>1.jpg" alt="<?php echo $title; ?> Image"
                        data-target="#the_carousel" data-slide-to="0" />
                    </div>
                    <div class="col-2">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>2.jpg" alt="<?php echo $title; ?> Image"
                        data-target="#the_carousel" data-slide-to="1" />
                    </div>
                    <div class="col-2">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>3.jpg" alt="<?php echo $title; ?> Image"
                        data-target="#the_carousel" data-slide-to="2" />
                    </div>
                    <div class="col-2">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>4.jpg" alt="<?php echo $title; ?> Image"
                        data-target="#the_carousel" data-slide-to="3" />
                    </div>
                    <div class="col-2">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>5.jpg" alt="<?php echo $title; ?> Image"
                        data-target="#the_carousel" data-slide-to="4" />
                    </div>
                    <div class="col-2">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>6.jpg" alt="<?php echo $title; ?> Image"
                        data-target="#the_carousel" data-slide-to="5" />
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>