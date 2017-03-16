<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); ?>

<article class="post page">
  <h1><?php the_title(); ?></h1></a>
  <?php the_content(); ?>
</article>

<?php endwhile;

else :
  echo '<p>No Content Found</p>';

endif;

get_footer();

?>
