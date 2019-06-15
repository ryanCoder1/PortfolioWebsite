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



$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


add_theme_support( 'custom-background', array(
      'default-color'    => '000000',
      'default-image'          => '',
      'default-repeat'         => 'no-repeat',
      'default-position-x'     => 'left',
      'default-position-y'     => 'top',
      'default-size'           => 'cover',
      'default-attachment'     => 'fixed',
      'wp-head-callback' => 'wpse_189361_custom_background_cb',


));

// background image for specific section div
function wpse_189361_custom_background_cb() {
    ob_start();

    _custom_background_cb(); // Default handler

    $style = ob_get_clean();
    $style = str_replace( 'body.custom-background', '.posts-image', $style );

    echo $style;
}
// change comment form fields order

function mo_comment_fields_custom_order( $fields ) {
    	$comment_field = $fields['comment'];
    	$author_field = $fields['author'];
    	$email_field = $fields['email'];
    	$url_field = $fields['url'];
    	unset( $fields['comment'] );
    	unset( $fields['author'] );
    	unset( $fields['email'] );
    	unset( $fields['url'] );
    	// the order of fields is the order below, change it as needed:

    	$fields['author'] = $author_field;
    	$fields['email'] = $email_field;
    	$fields['url'] = $url_field;
      $fields['comment'] = $comment_field;
    	// done ordering, now return the fields:
  	return $fields;
}
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );

add_theme_support( 'post-thumbnails' );



//
// AJAX calls
//

// process all wp_ajax_* calls
function core_add_ajax_hook() {
    /* Theme only, we already have the wp_ajax_ hook firing in wp-admin */
    if ( ! defined( 'WP_ADMIN' ) && isset( $_REQUEST['action'] ) ) {
        do_action( 'wp_ajax_' . $_REQUEST['action'] );
    }
}
add_action( 'init', 'core_add_ajax_hook' );

function wp_ajax_get_post_callback_mail_function() {
      $postVar = array();

      parse_str($_POST['data'], $postVar);

      if(empty($postVar['name'])){
          echo json_encode(array('msg' => 'Name field must be filled in'));
          exit();
        }
      else if(empty($postVar['message'] )){
          echo json_encode(array('msg' => 'Message field must be filled in'));
          exit();
        }
      else if(!filter_var($postVar['email'], FILTER_VALIDATE_EMAIL)){
          echo json_encode(array('msg' => 'Email address must be valid'));
          exit();
       }
      else{
          $to = 'ryan.lackey1@yahoo.com';
          $subject = 'RL Interest';
          $body = '
          <table>
          <tr>
          <th>Interested Customer</th>
          </tr>
          <tr>
          <td>'. $postVar['name'] .'</td>
          </tr>
          <tr>
          <td>'. $postVar['email'] .'</td>
          </tr>
          <tr>
          <td>'. $postVar['message'] .'</td>
          </tr>
          </table>';
          $headers = array('Content-Type: text/html; charset=UTF-8');

          if(wp_mail($to, $subject, $body, $headers)){
            echo json_encode(array('success' => 'Email was sent successfully!'));
            exit();
          }else{
            echo json_encode(array('nosuccess' => 'Email could not be sent at this time. Please try again later.'));
          }

      }
}
add_action( 'wp_ajax_get_post', 'wp_ajax_get_post_callback_mail_function' );

 ?>
