<?php

  require "carousel.php";

  // var_dump($posts);

  // foreach($posts as $post) {
  //   echo $post[title];
  //   echo $post[content];
  //   echo $post[category];
  // }

?>



<section id="posts">

        <div class="row sec_three_hed flex-column justify-content-center h3">
            <h4>news</h4>
<!--              --><h3 class="h3_black">Latest Posts</h3>
        </div>

  <!-- Set up your HTML -->
  <div class="owl-carousel owl-theme">






<?php 
$wpisy_zapytanie = "SELECT * FROM posts";
$wpisy_array = mysqli_query($link,$wpisy_zapytanie);
$table_row = mysqli_fetch_array($wpisy_array);

// var_dump($wpisy_array_done);
?>

<?php do { ?>
<!-- deklaracja zmiennej z id elementu tabeli -->
  <?php $post_id = $table_row['id']; ?>


   <div class="item owl_posts">
        <img src="http://www.themenesia.com/themeforest/linea-new/images/blog/pic-blog-1.jpg" alt="" class="img_fluid">

        <div class="owl_posts_content">
          <h3><?php echo $table_row['title']; ?></h3>
          <p><?php echo $table_row['content']; ?></p>
            <form action="">
              <input type ="hidden" name="post_id" value="<?php echo $post_id; ?>">
            </form>
        </div>
    </div>

      <?php } while ($table_row = mysqli_fetch_array($wpisy_array)); ?>


  </div>



</section>



