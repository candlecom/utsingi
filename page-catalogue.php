<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); ?>

<article class="post page">

  <div class="column-container clearfix">

  <!-- left-column -->
  <div class="left-column">


  <!-- /left-column -->
  </div>

  <div class="right-column">

  <!-- /right-column -->
  </div>

<!-- /column-container -->
</div>
  <?php the_content(); ?>
</article>

<?php endwhile;

else :
  echo '<p>No Content Found</p>';

endif;

get_footer();

?>
