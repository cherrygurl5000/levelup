<?php 
    //Scan the image directory to determine which img files are in the file
    //use $imgLoc from the product page
    $files = scandir($imgLoc);
    $imgFiles = array();

    //For each element in the array, only keep the elements that are pictures
    foreach($files as $fileNames) {
        //Only keep the strings in the array that are files (not folders)
        if(strrpos($fileNames, ".") != FALSE) {
            $pos = strrpos($fileNames, ".");
            //Use the string position to split the string and determine if the file formats match
            $type = strtolower(substr($fileNames, $pos));
            if($type == '.jpg' || $type == '.png' || $type == '.jpeg') {
                array_push($imgFiles, $fileNames);
            }
        }        
    }
       // print_r($imgFiles);

    //Convert $imgFiles into a JS array
?>
<script type="text/javascript">
    var imgFiles = <?php echo json_encode($imgFiles); ?>;
    window.addEventListener('load', function(){
        //Add each image to the gallery
        for(let i = 0; i < imgFiles.length; i++) {
            $("#carInner").append(`
                    <div class="carousel-item">
                        <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>` + imgFiles[i] + `" alt="<?php echo $title; ?> Image" />
                    </div>
                `);
            $("#modFoot").append(`
                <div class="col-2">
                    <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>` + imgFiles[i] + `" alt="<?php echo $title; ?> Image"
                    data-target="#the_carousel" data-slide-to="` + i + `" />
                </div>
            `);
            if(i == 0) {
                $("#carInner div").addClass("active");
                $("#gallery").append(`
                <div class="col-12 col-sm-6 col-lg-2">
                    <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>` + imgFiles[i] + `" alt="<?php echo $title; ?> Image" 
                    data-target="#the_carousel" data-slide-to="` + i + `" />
                </div>
                `);
            }
            //Don't show the 2nd image on x-small screens
            else if(i == 1) {
                $("#gallery").append(`
                <div class="col-12 col-sm-6 col-lg-2 d-none d-sm-inline">
                    <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>` + imgFiles[i] + `" alt="<?php echo $title; ?> Image" 
                    data-target="#the_carousel" data-slide-to="` + i + `" />
                </div>
                `);

            }
            //Don't show the other images on smaller screens
            else {
                $("#gallery").append(`
                <div class="col-12 col-sm-6 col-lg-2 d-none d-lg-inline">
                    <img class="d-block w-100 mx-auto rounded" src="<?php echo $imgLoc; ?>` + imgFiles[i] + `" alt="<?php echo $title; ?> Image" 
                    data-target="#the_carousel" data-slide-to="` + i + `" />
                </div>
                `);
            }
        }
    }, false);
    

    
</script>

<div class="row" id="gallery" data-toggle="modal" data-target="#the_modal"></div>

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
            <div class="carousel-inner" id="carInner"></div>
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
            <div class="row justify-content-around" id="modFoot"></div>
        </div>

        </div>
    </div>
</div>