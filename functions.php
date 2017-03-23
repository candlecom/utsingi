<?php

function utsingi_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'utsingi_resources');


// Get Top Ancestor
function get_top_ancestor_id() {

  global $post;

  if ($post->post_parent) {
    $ancestors = array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0];
  }

  return $post->ID;
}


// Does Page Have Children?
function has_children() {
  global $post;

  get_pages('child_of=' . $post->ID);
  return count($pages);
}


// Customize excerpt word count
function custom_excerpt_length() {
  return 15;
}

add_filter('excerpt_length', 'custom_excerpt_length');

//Theme setup
function utsingi_setup() {

// Navigation Menus
register_nav_menus(array(
  'primary' => __( 'Primary Menu'),
  'footer' => __( 'Footer Menu'),
));

// Add featured image support

  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail' , 180, auto, true);
  add_image_size('banner-mage', 920, auto, true);
}
add_action('after_setup_theme', 'utsingi_setup');
