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
