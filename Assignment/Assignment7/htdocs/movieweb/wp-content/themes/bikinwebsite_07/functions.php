<?php

/* Sets up defaults theme features */
function bw_bikinwebsite_setup()
{
	// adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// this theme uses a custom image size for featured images
	add_theme_support('post-thumbnails');
	add_image_size('img200300', 200, 300, true);

	// custom background
	add_theme_support('custom-background');
	
	// meta title - since wp 4.1
	add_theme_support( "title-tag" );
	
	// this theme uses register_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'bw_translate' ) );
	
	// widget - List all widget
	register_sidebar(array(
					'name'			=> 'Sidebar Widget',
					'id'			=> 'widget-sidebar-all',
					'description'   => 'This position for display widget in sidebar.',
					));	
}
add_action( 'after_setup_theme', 'bw_bikinwebsite_setup' );

/* Enqueues scripts, styles and font for front-end */
function bw_enqueue_scripts() {
	global $wp_styles;

	// Add JavaScript and Comment Form
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_enqueue_script( 'jquery' );

	// All Style
	wp_enqueue_style( 'bw-all-style-min', get_template_directory_uri() . '/style.all.min.css');
	wp_enqueue_style( 'bw-style', get_stylesheet_uri() );
	wp_enqueue_script('bw-all-jquery-min-script', get_template_directory_uri() . '/jquery.all.min.js', false, '1.0', true);
	wp_enqueue_script('bw-customs-script', get_template_directory_uri() . '/customs.js', false, '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'bw_enqueue_scripts' );

/* Google Font */
function bw_gfonts() 
{
	$protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_style( 'bw-opensans', "$protocol://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext,greek,greek-ext,vietnamese,cyrillic,cyrillic-ext" ); 
}
add_action( 'wp_enqueue_scripts', 'bw_gfonts' );

/* require */
require( get_template_directory() . '/functions/wp_bootstrap_navwalker.php' );
require( get_template_directory() . '/cmb2.php' ); 
require( get_template_directory() . '/cmb2/includes/CMB2_Functions.php' );

/* translate */
load_theme_textdomain( 'bw_translate', get_template_directory() . '/languages' );

/* widget */
require( get_template_directory() . '/widgets/bw_sticky.php' );
require( get_template_directory() . '/widgets/bw_recentpost.php' );
require( get_template_directory() . '/widgets/bw_aboutme.php' );

/* limit tag cloud */
add_filter('widget_tag_cloud_args', 'tag_widget_limit'); 
	function tag_widget_limit($args){ 
	if(isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag'){ 
	$args['number'] = 30; //Limit number of tags 
	} 
	return $args; 
}

/* content Width */
if ( ! isset( $content_width ) ) $content_width = 600;

/* shortcode in widget */
add_filter('widget_text', 'do_shortcode');

/* limit post title */
function bw_title($limit) {
    $title = get_the_title($post->ID);  
    if(strlen($title) > $limit) { $title = mb_substr($title, 0, $limit) . '..'; }
    echo $title;  
}

/* limit description */
function bw_excerpt($num) {
    echo mb_substr(get_the_excerpt(), 0, $num+1) . " [...]";
}

/* remove auto inline */
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action( 'widgets_init', 'my_remove_recent_comments_style' );

/* enable font size & font family selects in the editor */
if ( ! function_exists( 'wpex_mce_buttons' ) ) {
	function wpex_mce_buttons( $buttons ) {
		array_unshift( $buttons, 'fontselect' ); // Add Font Select
		array_unshift( $buttons, 'fontsizeselect' ); // Add Font Size Select
		return $buttons;
	}
}
add_filter( 'mce_buttons_2', 'wpex_mce_buttons' );

/* add menu */
if (function_exists('add_theme_support')) { add_theme_support('menus'); }

/* custom widget admin - admin dashboard */
function my_custom_dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

/* custom dashboard */
function custom_dashboard_help() {
	$link_address = 'http://bikinwebsite.com';
    $link_address_forum = 'http://bikinwebsite.com';
  echo ' 
	<p style="color:#777;font-size:18px;font-weight:bold;">Welcome to <span style="color:#002e5b;">bikin</span><span style="color:#ff5400;">website</span></p>
	<span class="bw_theme_desc">To install the theme, please visit <a href='.$link_address.'>Bikinwebsite.com</a><br><br>
	If you need help? ask your question in here: <span class="bw_theme_blue_color"></span><a href='.$link_address_forum.'>Bikinwebsite.com</a><br></span>
  ';
}

/* Custom CSS to Admin Area */
function bw_custom_css_admin() {
  echo '<style>
	.widgets-holder-wrap .widgets-sortables .sidebar-description p.description {color:#ff5555;}
    } 
  </style>';
}
add_action('admin_head', 'bw_custom_css_admin');

/* add search in navbar */
function bw_add_search_menu ( $items, $args ) {
	if( 'primary' === $args -> theme_location ) {
		$items .= '<li id="bw_search_button" class="bw_menu_search">';
		$items .= '<!--<for mobile search>--><form method="get" class="bw_menu_search_form_mobile" action="' . home_url() . '/">					   
				   <input id="s" class="bw_text_input" type="text" value="Click Enter to Search.." name="s" />
				   </form><!--</for mobile search>-->';
		$items .= '</li>';
	} return $items;
}
add_filter('wp_nav_menu_items', 'bw_add_search_menu', 10, 2);

/* feed img */
function featuredtoRSS($content) {
	global $post;
		if ( has_post_thumbnail( $post->ID ) ){
		$content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail' ) . '' . $content;
		}
	return $content;
}
add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

/* Insert in sec0nd paragraph */
function prefix_insert_post_ads( $content ) {
	$ad_code = wp_remote_retrieve_body( wp_remote_get(get_template_directory_uri() . '/ad_second_paragraph.php') );
		if( is_singular( array('post')) ) {
		return prefix_insert_after_paragraph( $ad_code, 2, $content ); // paragraf?
		}
	return $content;
}
 
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
	$closing_p = '</p>';
	$paragraphs = explode( $closing_p, $content );
	foreach ($paragraphs as $index => $paragraph) {
		if ( trim( $paragraph ) ) {
			$paragraphs[$index] .= $closing_p;
		}
		if ( $paragraph_id == $index + 1 ) {
			$paragraphs[$index] .= $insertion;
		}
	}
	return implode( '', $paragraphs );
}
add_filter( 'the_content', 'prefix_insert_post_ads' );

?>