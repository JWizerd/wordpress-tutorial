<?php

add_theme_support( 'post-thumbnails' );

add_action('init', 'create_object_post_type');
function create_object_post_type() {
  register_post_type(
    'objects',
    array(
      'labels'      => array(
        'name'          => __('Objects'),
        'singular_name' => __('Object')
      ),
      'public'      => true,
      'has_archive' => true,
      'taxonomies'  => array('category', 'post_tag'),
      'supports'    => array('custom-fields', 'editor', 'thumbnail')
    )
  );
}

add_action('init', 'create_activity_post_type');
function create_activity_post_type() {
  register_post_type(
    'activites',
    array(
      'labels'      => array(
        'name'          => __('Activities'),
        'singular_name' => __('Activity')
      ),
      'public'      => true,
      'has_archive' => true,
      'taxonomies'  => array('category', 'post_tag'),
      'supports'    => array('custom-fields', 'editor', 'thumbnail')
    )
  );
}

function show_posts_sidebar_widget($type_of_post, $how_many_posts){
  $not_template = true;

  if ($not_template) {
    define( 'WP_USE_THEMES', false );
  }
    $post_params = array(
      'posts_per_page' => $how_many_posts,
      'post_type' => $type_of_post
    );
    $queryObject = new WP_Query($post_params);

    if ($queryObject->have_posts()) {
      while ($queryObject->have_posts()) {

      $queryObject->the_post();

      echo '<dl>' .
            '<dt><a href="' . $post_link . '">' . $post_title . '</a></dt>' .
            '<dd><small>' . $post_date . '</small></dd>' .
           '</dl>';

    }
  }
}
