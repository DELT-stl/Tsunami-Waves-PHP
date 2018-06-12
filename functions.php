<?php

// Custom Login //

function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

add_action( 'login_footer', 'your_custom_footer' );

function your_custom_footer() {

    // Add your content here
    ?>
    <p style="text-align:center;">Tsunami Waves Theme developed by DELT</p>
    <?php
}

// Define the version so we can easily replace it throughout the theme
define( 'NAKED_VERSION', 1.0 );

/**

 Remove wordpress from automatically setting height and width on images. Also need the section of code underneat
 * @param bool false No height and width references.
 * @param int $id Attachment ID for image.
 * @param array|string $size Optional, default is 'medium'. Size of image, either array or string.
 * @return bool|array False on failure, array on success.
 */

function myprefix_image_downsize( $value = false, $id, $size ) {
    if ( !wp_attachment_is_image($id) )
        return false;
    $img_url = wp_get_attachment_url($id);
    $is_intermediate = false;
    $img_url_basename = wp_basename($img_url);
    // try for a new style intermediate size
    if ( $intermediate = image_get_intermediate_size($id, $size) ) {
        $img_url = str_replace($img_url_basename, $intermediate['file'], $img_url);
        $is_intermediate = true;
    }
    elseif ( $size == 'thumbnail' ) {
        if ( ($thumb_file = wp_get_attachment_thumb_file($id)) && $info = getimagesize($thumb_file) ) {
            $img_url = str_replace($img_url_basename, wp_basename($thumb_file), $img_url);
            $is_intermediate = true;
        }
    }
    // We have the actual image size, but might need to further constrain it if content_width is narrower

    if ( $img_url) {
        return array( $img_url, 0, 0, $is_intermediate );
    }
    return false;
}

/**
* Dequeue jQuery Migrate script in WordPress.
*/
add_action('wp_enqueue_scripts', 'wbxp_script_remove_header');
function wbxp_script_remove_header() {
      wp_deregister_script( 'jquery' );
}

function isa_remove_jquery_migrate( &$scripts) {
	if(!is_admin()) {
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
	}
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );

// DEQUEUE CF7 JS
function load_contactform7_on_specific_page(){
	if(! is_page(100) )
	{
		wp_dequeue_script('contact-form-7');
		wp_dequeue_style('contact-form-7');
	}
}

add_action( 'wp_enqueue_scripts', 'load_contactform7_on_specific_page' );

function delt_scripts() {
  wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
  wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js');
  wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js');
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'delt_scripts');

/* (need for above)Remove the height and width refernces from the image_downsize function.
 * We have added a new param, so the priority is 1, as always, and the new
 * params are 3.
 */
add_filter( 'image_downsize', 'myprefix_image_downsize', 1, 3 );

// REMOVE CLASES FROM IMAGES
add_filter( 'get_image_tag_class', '__return_empty_string' );

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// DISABLE YOAST SCHEMA
function bybe_remove_yoast_json($data){
    $data = array();
    return $data;
  }
  add_filter('wpseo_json_ld_output', 'bybe_remove_yoast_json', 10, 1);

//  DISABLE RESPONSIVE IMAGES
function disable_srcset( $sources ) {
    return false;
}
add_filter( 'wp_calculate_image_srcset', 'disable_srcset' );

// REMOVE RECENT COMMENTS FROM HEADER
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');
// REMOVE DISABLING SPAN TAGS
function override_mce_options($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;} add_filter('tiny_mce_before_init', 'override_mce_options');

// REMOVE wlwmanifest
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// REMOVE resource hints
remove_action( 'wp_head', 'wp_resource_hints', 2 );

// REMOVE Pasting Classes from Tiny MCE
add_filter('tiny_mce_before_init','configure_tinymce');

/**
 * Customize TinyMCE's configuration
 * @param   array
 * @return  array
 */

function configure_tinymce($in) {
    $in['paste_preprocess'] = "function(plugin, args){
    // Strip all HTML tags except those we have whitelisted
    var whitelist = 'p,span,b,strong,i,em,h3,h4,h5,h6,ul,li,ol';
    var stripped = jQuery('<div>' + args.content + '</div>');
    var els = stripped.find('*').not(whitelist);
    for (var i = els.length - 1; i >= 0; i--) {
      var e = els[i];
      jQuery(e).replaceWith(e.innerHTML);
    }
    // Strip all class and id attributes
    stripped.find('*').removeAttr('id').removeAttr('class');
    // Return the clean HTML
    args.content = stripped.html();
  }";
    return $in;
}

// REMOVE feed links
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

// REMOVE REST API
function remove_api () {
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
}

add_action( 'after_setup_theme', 'remove_api' );



/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Show featured image in post
/*-----------------------------------------------------------------------------------*/
add_theme_support('post-thumbnails');
function setup_types() {
    register_post_type('mytype', array(
        'label' => __('My type'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
    ));
}
add_action('init', 'setup_types');
/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
function register_my_menus() {
    register_nav_menus(
        array(
        'main-menu' => __( 'Main Menu' ),
        'sub-menu' => __( 'Sub Menu' )
    )
    );
}
add_action( 'init', 'register_my_menus' );


/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => 'Sidebar',
		'description' => 'Take it on the side...',
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="side-title">',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));
}


// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/
