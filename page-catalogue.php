<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); ?>

<article class="article clearfix">

  <div class="column-container">

  <!-- left-column -->
  <div class="left-column">

    <h2><?php the_title(); ?></h2>

  <!-- /left-column -->
  </div>

  <div class="right-column">
    <?php the_content(); ?>
  <!-- /right-column -->
  </div>

<!-- /column-container -->
</div>

</article>


<?php endwhile;

else :
  echo '<p>No Content Found</p>';

endif;

get_footer();

?>
