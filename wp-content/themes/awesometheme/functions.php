<?php

function awesome_script_enqueue() {
  // all styles
     wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), 20141119 );
     wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/styles.css', array(), 20141119 );
     // all scripts
     wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
     wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true );

}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_setup(){

   add_theme_support( 'menus' );
   register_nav_menu( 'primary', 'Primary Header Navigation' );
   register_nav_menu( 'secondary', 'Footer Navigation' );
}

add_action('init', 'awesome_theme_setup');

// Our custom post type function
function codex_custom_init() {
  $labels = array(
    'name' => _x('Projects', 'post type general name'),
    'singular_name' => _x('Project', 'post type singular name'),
    'add_new' => _x('Add New', 'project'),
    'add_new_item' => __('Add New Project'),
    'edit_item' => __('Edit Project'),
    'new_item' => __('New Project'),
    'all_items' => __('All Projects'),
    'view_item' => __('View Project'),
    'search_items' => __('Search Projects'),
    'not_found' =>  __('No projects found'),
    'not_found_in_trash' => __('No projects found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => __('projects')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );
  register_post_type('project',$args);
}
// Hooking up our function to theme setup
add_action( 'init', 'codex_custom_init' );

add_theme_support( 'post-thumbnails' );

 ?>
