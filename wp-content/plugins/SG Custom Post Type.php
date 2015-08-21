<?php
/*
Plugin Name: SG DIGITAL Custom Post Types
Description: Custom Post Types
Author: Simon Gooder
Author URI: http://www.simongooder.ca
*/

add_action( 'init', 'sg_digital_cpt' );

function sg_digital_cpt() {

register_post_type( 'inspiration', array(
  'labels' => array(
    'name' => 'Inspiration',
    'singular_name' => 'inspiration',
   ),
  'taxonomies' => array('category'),
  'description' => 'Add an inspiration or adventure.',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'custom-fields' )
));

register_post_type( 'destination', array(
  'labels' => array(
    'name' => 'Destination',
    'singular_name' => 'destination',
   ),
  'description' => 'Add or edit a new destination.',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'custom-fields' )
));

register_post_type( 'region', array(
  'labels' => array(
    'name' => 'Region',
    'singular_name' => 'region',
   ),
  'taxonomies' => array('category'),
  'description' => 'Add or edit a new region.',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'custom-fields')
));

register_post_type( 'blog', array(
  'labels' => array(
    'name' => 'Blog',
    'singular_name' => 'blog',
   ),
  'taxonomies' => array('category'),
  'description' => 'Add a new blog post!',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'custom-fields' )
));

register_post_type( 'news', array(
  'labels' => array(
    'name' => 'Press',
    'singular_name' => 'news',
   ),
  'description' => 'Add new news or press articles!',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'custom-fields' )
));

}


