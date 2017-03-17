<?php /* Template Name: Special layout */ ?>

<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); ?>

<article class="article">
  <h1><?php the_title(); ?></h1></a>

  <!-- info box -->
    <div class="info-box">

      <h4>Disclaimer Title</h4>
      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, velit in tristique iaculis, neque nisl dignissim turpis, vitae faucibus ex ante sed mauris. Sed bibendum diam in sapien maximus porttitor. Nam pharetra mauris eu lorem accumsan eleifend. Fusce quis nulla metus. Vivamus vitae orci eget ex sagittis pretium. Nulla hendrerit lectus vitae mauris malesuada maximus. Maecenas est nulla, finibus eget nulla quis, vulputate tempor est. Cras sed metus vehicula, pulvinar ex ac, placerat lacus. Donec sit amet urna varius ante feugiat ultrices at nec libero.</p>

    <!-- /info box -->
    </div>

    <?php the_content(); ?>
</article>

<?php endwhile;

else :
  echo '<p>No Content Found</p>';

endif;

get_footer();

?>
