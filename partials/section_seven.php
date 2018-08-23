<?php

  require "carousel.php";

  ?>


<section class="three">
  <div class="sec_element_parallax"></div>
    <div class="container">
        <div class="row sec_three_hed flex-column justify-content-center">
            <h4>behind</h4>
            <h3>The Scene</h3>
        </div>
      


      <div class="row">


<?php $c = count($posts);  ?>
<?php for($i=0; $i<$c; $i++) { ?>
        <div class="col-md-3">
                  <div class="block_image author_img">
                    <div class="block_image_overlay author_overlay">
                      <div class="row margin_zero">
                        <p><?php echo $posts[$i]['content']; ?></p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="author_info">
                    <h3><?php echo $posts[$i]['title']; ?></h>
                    <h4><?php echo $posts[$i]['category']; ?></h4>
                  </div>
        </div>
      
<?php }; ?>

      </div>


    </div>
  </div>
    
</section>

