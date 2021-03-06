<?php
//disable gutenberg... but i don't want to blanket disable. should be enabled or disabled as a theme option or better yet only if the template is full-width.php. for now just add this snippet to your child theme files to disable where needed.
// if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
// 	// WP > 5 beta
// 	add_filter('use_block_editor_for_post_type', '__return_false', 10);
// } else {
// 	// WP < 5 beta
// 	add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
// }
require_once get_template_directory().'/library/blocks/gutenberg_blocks.php';
require_once get_template_directory().'/library/tinymce.php';
/* Languages! */
function braftonium_language_setup(){

	load_theme_textdomain( 'braftonium', get_template_directory() . '/library/translation' );
  
	$locale = get_locale();
	$locale_file = get_template_directory() . "/library/translation/$locale.php";
  
	if ( is_readable( $locale_file ) ) {
		require_once( $locale_file );
	}
  }
  add_action('after_setup_theme', 'braftonium_language_setup');

/*********************
LAUNCH BRAFTONIUM
Let's get everything up and running.
*********************/
function braftonium_start() {
	require_once( 'library/braftonium.php' );
	include_once get_template_directory().'/library/blocks/fields.php';
	

  //Allow editor style.
  add_editor_style( get_template_directory_uri() . '/library/css/editor-style.css' );
  add_editor_style( get_template_directory_uri() . '/library/css/block-editor-style.css' );

  add_action( 'admin_enqueue_scripts', 'load_admin_style' );
  function load_admin_style() {
	wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/library/css/admin.css', false, '1.0.0' );
  }
  if(function_exists("register_field_group")):
	$stickynav=get_field('sticky_nav', 'option');
  if ( is_array($stickynav) && $stickynav[0]=='on' ){
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/library/js/sticky.js', array(), '1.0.0', true );
  }
endif;
  // launching operation cleanup
  add_action( 'init', 'braftonium_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'braftonium_rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'braftonium_rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'braftonium_remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'braftonium_remove_recent_comments_style', 1 );
	add_action('wp_head', 'braftonium_header_scripts', 11);
	add_action('wp_footer', 'braftonium_footer_scripts', 11);
  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'braftonium_scripts_and_styles', 9 );
  // ie conditional wrapper

  // launching this stuff after theme setup
  braftonium_support();

  // cleaning up code around images
  add_filter( 'the_content', 'braftonium_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'braftonium_excerpt_more' );

} /* end braftonium */

// let's get this party started
add_action( 'after_setup_theme', 'braftonium_start' );

/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 680;
}

/************* THEME CUSTOMIZE *********************/

function braftonium_customizer($wp_customize) {
  $wp_customize->remove_section('background_image');
  $wp_customize->get_section('colors')->title = __( 'Theme Colors', 'braftonium' );
}

add_action( 'customize_register', 'braftonium_customizer' );


/*
This is where we can declare some external fonts. If you're using Google Fonts, you can replace
these fonts, change it in your scss files and be up and running in seconds.
*/
function braftonium_fonts() {
  wp_enqueue_style('googleFonts', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
}
add_action('wp_enqueue_scripts', 'braftonium_fonts');

/* I CALL UPON THE POWERS OF AN SVG SPRITESHEET except linking an svg file doesn't work in IE so I gots to do this */
require_once(ABSPATH . 'wp-admin/includes/file.php');
function braftonium_get_svg_path($svgid) {
	// WP_Filesystem();
	// global $wp_filesystem;
	/*
	* This function relies heavily on the syntax of the svg icon file.
	* it searches for the Icon id, and then copies the text until the closing path 
	* tag. As a result, the return syntax is pretty janky and specific.
	* The first '>' character is included in the $second_step element
	* Tags need to be closed after the output though.
	*
	* @todo maybe rewrite the entire way this is handled? consider implementing some of
	* the recomendations here: https://css-tricks.com/gotchas-on-getting-svg-into-production/
	*/
	$file_data = get_template_directory().'/library/theme-options/svg-icons.svg';
	$content = file_get_contents($file_data);
	$first_step = explode( '<symbol id="'.$svgid.'"' , $content );
	$second_step = explode("</path>" , $first_step[1] );
	return '<svg class="'.$svgid.'" '.$second_step[0].'</path></svg>';
}

/**
 * Social Sharing buttons - What it says on the tin.
 */
if (!function_exists( 'braftonium_social_sharing_buttons' ) && function_exists('get_field') ) :
	$ssbutton = get_field('social_share_buttons', 'option');
	if (is_array($ssbutton) && in_array("on", $ssbutton) ) {
		function braftonium_social_sharing_buttons() {
			$social_media = get_field('social_media', 'option');
			$ss_location = get_field('ss_button_location', 'option');

			// Get current page URL 
			$ssbURL = get_permalink();

			// Get current page title
			$ssbTitle = str_replace( ' ', '%20', get_the_title());
				
			// Get Post Thumbnail for pinterest
			$ssbThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

			// Construct sharing URL without using any script
			$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$ssbURL;
			$twitterURL = 'https://twitter.com/intent/tweet?text='.$ssbTitle.'&amp;url='.$ssbURL;
			$googleURL = 'https://plus.google.com/share?url='.$ssbURL;
			$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$ssbURL.'&amp;media='.$ssbThumbnail[0].'&amp;description='.$ssbTitle;
			$linkedURL = 'https://linkedin.com/shareArticle?mini=true&url='.$ssbURL.'&title='.$ssbTitle;

			// Add sharing button at the end of page/page content
			$variable = '<span class="ssb-social"><span class="ssb-text">'.__( 'Social Share', 'braftonium' ).': </span>';

			if(is_array($social_media)):
				if ( in_array("facebook", $social_media)) { $variable .= '<a class="ssb-facebook" href="'.$facebookURL.'" target="_blank">'.braftonium_get_svg_path('icon-facebook').'</a>'; }
				if ( in_array('twitter', $social_media) ) { $variable .= '<a class="ssb-twitter" href="'. $twitterURL .'" target="_blank">'.braftonium_get_svg_path('icon-twitter').'</a>'; }
				if ( in_array('google', $social_media) ) { $variable .= '<a class="ssb-googleplus" href="'.$googleURL.'" target="_blank">'.braftonium_get_svg_path('icon-google').'</a>'; }
				if ( in_array('linkedin', $social_media) ) { $variable .= '<a class="ssb-linked" href="'.$linkedURL.'" target="_blank">'.braftonium_get_svg_path('icon-linkedin').'</a>'; }
				if ( in_array('pinterest', $social_media) ) { $variable .= '<a class="ssb-pinterest" href="'.$pinterestURL.'" target="_blank">'.braftonium_get_svg_path('icon-pinterest').'</a>'; }
				if ( in_array('email', $social_media) ) { $variable .= '<a class="ssb-email" href="mailto:?subject=I wanted you to see this site&amp;body='.$ssbURL.'">'.braftonium_get_svg_path('icon-envelope').'</a>'; }
			endif;
			$variable .= '</span>';

			if ( is_single() && $ss_location=="post" || !is_single() && $ss_location=="excerpt" || $ss_location=="all" ){
				echo $variable;
			}
		}
	}
endif;

// Comment Layout
function braftonium_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>
	<div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>
	 <article  class="cf">
	   <header class="comment-author vcard">
		 <?php // custom gravatar call ?>
		 <?php
		   // create variable
		   $bgauthemail = get_comment_author_email();
		 ?>
		 <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
		 <?php // end custom gravatar call ?>
		 <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'braftonium' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'braftonium' ),'  ','') ) ?>
		 <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'braftonium' )); ?> </a></time>
 
	   </header>
	   <?php if ($comment->comment_approved == '0') : ?>
		 <div class="alert alert-info">
		   <p><?php _e( 'Your comment is awaiting moderation.', 'braftonium' ) ?></p>
		 </div>
	   <?php endif; ?>
	   <section class="comment_content cf">
		 <?php comment_text() ?>
	   </section>
	   <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	 </article>
   <?php // </li> is added by WordPress automatically ?>
 <?php
 }



// Add new constant that returns true if WooCommerce is active
define( 'WPEX_WOOCOMMERCE_ACTIVE', class_exists( 'WooCommerce' ) );

// Checking if WooCommerce is active
if ( WPEX_WOOCOMMERCE_ACTIVE ) {
	add_action( 'after_setup_theme', function() {
		add_theme_support( 'woocommerce' );
	} );

	add_action('woocommerce_before_main_content', 'theme_prefix_wrapper_start', 10);
	add_action('woocommerce_after_main_content', 'theme_prefix_wrapper_end', 10);
	
	function theme_prefix_wrapper_start() {
		echo '<div id="content"><div id="inner-content" class="wrap cf"><main id="main" class="m-all t-2of3 d-5of7 cf"><article class="hentry">';
	}
	
	function theme_prefix_wrapper_end() {
		echo '</article></main></div></div>';
	}
}


/* Excerpt shortening for image rich blog style */
if (function_exists('get_field')):
$layout = get_field('blog_layout', 'option');
if ( isset($layout) && $layout=='rich' ) {
	function custom_excerpt_length( $length ) {
		return 25;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
}
endif;

// that 404 page
function get_page_by_title_search($string){
    global $wpdb;
    $title = esc_sql($string);
    if(!$title) return;
    $page = $wpdb->get_results("
        SELECT * 
        FROM $wpdb->posts
        WHERE post_title LIKE '%$title%'
        AND post_type = 'page' 
        AND post_status = 'publish'
        LIMIT 1
    ");
    return $page;
}

// Adds js needed for the video background.
function braftonium_video_script() {
	wp_enqueue_script( 'video', get_template_directory_uri() . '/library/js/video.js', array(), '1.0.0', true );
}

//All to do with slick slider
function braftonium_slick_script() {
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/library/js/slick/slick.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'slickfunction', get_template_directory_uri() . '/library/js/slickfunction.js', array(), '1.0.0', true );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/library/js/slick/slick.css', false, '1.0.0' );
	wp_enqueue_style( 'slick-themes', get_template_directory_uri() . '/library/js/slick/slick-theme.css', false, '1.0.0' );
}
function braftonium_map_script() {
	wp_enqueue_script( 'functions', get_template_directory_uri() . '/library/js/functions.js', array(), '1.0.0', true );
}

//customized css colors in the header
function braftonium_customize_css() {
	$css = '<style type="text/css">';
		//build css from the theme customizer variables
		if (get_theme_mod( 'braftonium_color' )) { 
			$braftonium_text = sanitize_hex_color(get_theme_mod( 'braftonium_color' ));
			$css .= PHP_EOL . sprintf( 'body { color:%s; }', $braftonium_text );
		}
		if (get_theme_mod( 'braftonium_link_color' )) {
			$braftonium_link = sanitize_hex_color(get_theme_mod( 'braftonium_link_color' ));
			$css .= PHP_EOL . sprintf( 'a, a:visited, .blog .read-more, .archive .read-more, .slick-prev:before, .slick-next:before { color:%s; }', $braftonium_link );
			$css .= PHP_EOL . sprintf( 'button, .blue-btn,.btn, .hero .read-more, .pagination a:hover, .comment-reply-link, #submit, .button, .flipcards .list-item .text, .blog .full article.hentry, .archive .full article.hentry { background-color:%s; }', $braftonium_link );
			$css .= PHP_EOL . sprintf( '.blog .rich article.hentry .content, .archive .rich article.hentry .content { background-color: %sbf; }', $braftonium_link );
		}
		if (get_theme_mod( 'braftonium_linkhover_color' )) {
			$braftonium_hover = sanitize_hex_color(get_theme_mod( 'braftonium_linkhover_color' ));
			$css .= PHP_EOL . sprintf( 'a:hover, a:focus, a:visited:hover, a:visited:focus, .pagination a:hover, .blog .read-more:hover, .archive .read-more:hover { color:%s; }', $braftonium_hover );
			$css .= PHP_EOL . sprintf( 'button:hover, .blue-btn:hover,.btn:hover, .hero .read-more:hover, .comment-reply-link:hover, #submit:hover, .button:hover { background-color:%s; }', $braftonium_hover );
		}
		if (get_theme_mod( 'braftonium_headerbg_color' )) {
			$braftonium_headerbg = sanitize_hex_color(get_theme_mod( 'braftonium_headerbg_color' ));
			$css .= PHP_EOL . sprintf( '.header, #inner-header, .header, nav .nav li ul.sub-menu { background-color:%s; }', $braftonium_headerbg );
			$css .= PHP_EOL . sprintf( '@media only screen and (max-width: 768px){ nav .nav li a { background-color:%s; }}', $braftonium_headerbg );
		}
		if (get_theme_mod( 'braftonium_header_color2' )) {
			$braftonium_headercolor = sanitize_hex_color(get_theme_mod( 'braftonium_header_color2' ));
			$css .= PHP_EOL . sprintf( '.header { color:%s; }', $braftonium_headercolor );
		}
		if (get_theme_mod( 'braftonium_headerlink_color' )) {
			$braftonium_headerlink = sanitize_hex_color(get_theme_mod( 'braftonium_headerlink_color' ));
			$css .= PHP_EOL . sprintf( '.header a, nav .nav li a, .nav button { color:%s; }', $braftonium_headerlink );
			$css .= PHP_EOL . sprintf( '.header .blue-btn, .header .btn { background-color:%s; }', $braftonium_headerlink );
		}
		if (get_theme_mod( 'braftonium_headerlinkhover_color' )) {
			$braftonium_headerlinkhover = sanitize_hex_color(get_theme_mod( 'braftonium_headerlinkhover_color' ));
			$css .= PHP_EOL . sprintf( '.header a:hover, nav .nav li a:hover, .nav button:hover { color:%s; }', $braftonium_headerlinkhover );
			$css .= PHP_EOL . sprintf( '.header .header button:hover, .header .blue-btn:hover, .header .btn:hover { background-color:%s; }', $braftonium_headerlinkhover );
		}
		if (get_theme_mod( 'braftonium_footerbg_color' )) {
			$braftonium_footerbg_color = sanitize_hex_color(get_theme_mod( 'braftonium_footerbg_color' ));
			$css .= PHP_EOL . sprintf( '.footer, .full article.hentry { background-color:%s; }', $braftonium_footerbg_color );
		}
		if (get_theme_mod( 'braftonium_footer_color' )) {
			$braftonium_footer_color = sanitize_hex_color(get_theme_mod( 'braftonium_footer_color' ));
			$css .= PHP_EOL . sprintf( '.footer, .full article.hentry a { color:%s; }', $braftonium_footer_color );
		}
		if (get_theme_mod( 'braftonium_footerlink_color' )) {
			$braftonium_footerlink_color = sanitize_hex_color(get_theme_mod( 'braftonium_footerlink_color' ));
			$css .= PHP_EOL . sprintf( '.footer a { color:%s; }', $braftonium_footerlink_color );
			$css .= PHP_EOL . sprintf( '.footer button, .footer .blue-btn, .footer .btn { background-color:%s; }', $braftonium_footerlink_color );
		}
		if (get_theme_mod( 'braftonium_footerlinkhover_color' )) {
			$braftonium_footerlinkhover_color = sanitize_hex_color(get_theme_mod( 'braftonium_footerlinkhover_color' ));
			$css .= PHP_EOL . sprintf( '.footer a:hover }', $braftonium_footerlinkhover_color );
			$css .= PHP_EOL . sprintf( '.footer button:hover, .footer .blue-btn:hover, .footer .btn:hover { background-color:%s; }', $braftonium_footerlinkhover_color );
		}
		$css .= '</style>';
		echo $css;
	}
	add_action( 'wp_head', 'braftonium_customize_css', 20);

	function braftonium_header_scripts(){
		$head = get_field('header_script', 'option');
		if($head){
			echo $head;
		}
	}
	function braftonium_footer_scripts(){
		$foot = get_field('footer_script', 'option');
		if($foot){
			echo $foot;
		}
	}

/* DON'T DELETE THIS CLOSING TAG */ ?>