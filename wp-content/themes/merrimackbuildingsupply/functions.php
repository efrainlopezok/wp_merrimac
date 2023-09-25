<?php

define('SPM_TEXT_DOMAIN', 'merrimackbuilingsupply');

require_once( get_template_directory() .'/functions/filters.php');
require_once( get_template_directory() .'/functions/tags.php');
require_once( get_template_directory() .'/functions/shortcodes.php');
require_once( get_template_directory() .'/functions/widgets.php');
require_once( get_template_directory() .'/functions/admin.php');


function spm_after_setup_theme() {

	// Menus
	register_nav_menus( array(
		'header' => __('Header', SPM_TEXT_DOMAIN),
		'upper'  => __('Upper', SPM_TEXT_DOMAIN),
		'footer' => __('Footer', SPM_TEXT_DOMAIN)
	) );

	// Featured Images
	add_theme_support('post-thumbnails', array('post', 'page', 'front_page_slider', 'rockfon_slider') );
	add_image_size('banner', 9999, 734, true);
	add_image_size('banner_inside_page', 9999, 415, true);
	add_image_size('blog_post', 480, 433, true);
	add_image_size('ceiling_solutions', 280, 160, true);

	// HTML5 Forms
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
}
add_action('after_setup_theme', 'spm_after_setup_theme');


function spm_init() {

	// Custom Post Type for Front Page Slider
	register_post_type( 'front_page_slider', array(
		'labels' => array(
			'name' =>				__( 'Front Page Slider', SPM_TEXT_DOMAIN ),
			'singular_name' =>		__( 'Front Page Slide', SPM_TEXT_DOMAIN ),
			'all_items' =>			__( 'All Front Page Slides', SPM_TEXT_DOMAIN ),
			'add_new_item' =>		__( 'Add New Front Page Slide', SPM_TEXT_DOMAIN ),
			'edit_item' =>			__( 'Edit Front Page Slide', SPM_TEXT_DOMAIN ),
			'new_item' =>			__( 'New Front Page Slide', SPM_TEXT_DOMAIN ),
			'view_item' =>			__( 'View Front Page Slide', SPM_TEXT_DOMAIN ),
			'search_items' =>		__( 'Search Front Page Slides', SPM_TEXT_DOMAIN ),
			'not_found' =>			__( 'No Front Page Slides Found', SPM_TEXT_DOMAIN ),
			'not_found_in_trash' =>	__( 'No Front Page Slides Found in Trash', SPM_TEXT_DOMAIN )
		),
		'show_ui' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
	) );

	// Custom Post Type for Front Page Slider (Rockfon)
	register_post_type( 'rockfon_slider', array(
		'labels' => array(
			'name' =>				__( 'Rockfon Page Slider', SPM_TEXT_DOMAIN ),
			'singular_name' =>		__( 'Rockfon Page Slide', SPM_TEXT_DOMAIN ),
			'all_items' =>			__( 'All Front Page Slides', SPM_TEXT_DOMAIN ),
			'add_new_item' =>		__( 'Add New Front Page Slide', SPM_TEXT_DOMAIN ),
			'edit_item' =>			__( 'Edit Front Page Slide', SPM_TEXT_DOMAIN ),
			'new_item' =>			__( 'New Front Page Slide', SPM_TEXT_DOMAIN ),
			'view_item' =>			__( 'View Front Page Slide', SPM_TEXT_DOMAIN ),
			'search_items' =>		__( 'Search Front Page Slides', SPM_TEXT_DOMAIN ),
			'not_found' =>			__( 'No Front Page Slides Found', SPM_TEXT_DOMAIN ),
			'not_found_in_trash' =>	__( 'No Front Page Slides Found in Trash', SPM_TEXT_DOMAIN )
		),
		'show_ui' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
	) );

	// Custom Post Type for Rockfon Ceiling Solutions
	register_post_type( 'ceiling', array(
		'labels' => array(
			'name' =>				__( 'Ceilings', SPM_TEXT_DOMAIN ),
			'singular_name' =>		__( 'Ceiling', SPM_TEXT_DOMAIN ),
			'all_items' =>			__( 'All Ceilings', SPM_TEXT_DOMAIN ),
			'add_new_item' =>		__( 'Add New Ceiling', SPM_TEXT_DOMAIN ),
			'edit_item' =>			__( 'Edit Ceiling', SPM_TEXT_DOMAIN ),
			'new_item' =>			__( 'New Ceiling', SPM_TEXT_DOMAIN ),
			'view_item' =>			__( 'View Ceiling', SPM_TEXT_DOMAIN ),
			'search_items' =>		__( 'Search Ceilings', SPM_TEXT_DOMAIN ),
			'not_found' =>			__( 'No Ceilings Found', SPM_TEXT_DOMAIN ),
			'not_found_in_trash' =>	__( 'No Ceilings Found in Trash', SPM_TEXT_DOMAIN )
		),
		'show_ui' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'public' => true
	) );

	// Custom Taxonomy "Ceiling Category" for Ceiling
	register_taxonomy( 'ceiling_category', 'ceiling', array(
		'labels' => array(
			'name'              => _x( 'Ceiling Categories', 'taxonomy general name', SPM_TEXT_DOMAIN ),
			'singular_name'     => _x( 'Ceiling Category', 'taxonomy singular name', SPM_TEXT_DOMAIN ),
			'search_items'      => __( 'Search Ceiling Categories', SPM_TEXT_DOMAIN ),
			'all_items'         => __( 'All Ceiling Categories', SPM_TEXT_DOMAIN ),
			'parent_item'       => __( 'Parent Ceiling Category', SPM_TEXT_DOMAIN ),
			'parent_item_colon' => __( 'Parent Ceiling Category:', SPM_TEXT_DOMAIN ),
			'edit_item'         => __( 'Edit Ceiling Category', SPM_TEXT_DOMAIN ),
			'update_item'       => __( 'Update Ceiling Category', SPM_TEXT_DOMAIN ),
			'add_new_item'      => __( 'Add New Ceiling Category', SPM_TEXT_DOMAIN ),
			'new_item_name'     => __( 'New Ceiling Category', SPM_TEXT_DOMAIN ),
			'menu_name'         => __( 'Ceiling Categories', SPM_TEXT_DOMAIN )
		),
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => false,
		'hierarchical'      => true
	) );

	// Custom Taxonomy "Color" for Ceiling
	register_taxonomy( 'ceiling_color', 'ceiling', array(
		'labels' => array(
			'name'              => _x( 'Colors', 'taxonomy general name', SPM_TEXT_DOMAIN ),
			'singular_name'     => _x( 'Color', 'taxonomy singular name', SPM_TEXT_DOMAIN ),
			'search_items'      => __( 'Search Colors', SPM_TEXT_DOMAIN ),
			'all_items'         => __( 'All Colors', SPM_TEXT_DOMAIN ),
			'edit_item'         => __( 'Edit Color', SPM_TEXT_DOMAIN ),
			'update_item'       => __( 'Update Color', SPM_TEXT_DOMAIN ),
			'add_new_item'      => __( 'Add New Color', SPM_TEXT_DOMAIN ),
			'new_item_name'     => __( 'New Color', SPM_TEXT_DOMAIN ),
			'menu_name'         => __( 'Colors', SPM_TEXT_DOMAIN )
		),
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => false
	) );

	// Custom Taxonomy "Texture" for Ceiling
	register_taxonomy( 'ceiling_texture', 'ceiling', array(
		'labels' => array(
			'name'              => _x( 'Textures', 'taxonomy general name', SPM_TEXT_DOMAIN ),
			'singular_name'     => _x( 'Texture', 'taxonomy singular name', SPM_TEXT_DOMAIN ),
			'search_items'      => __( 'Search Textures', SPM_TEXT_DOMAIN ),
			'all_items'         => __( 'All Textures', SPM_TEXT_DOMAIN ),
			'edit_item'         => __( 'Edit Texture', SPM_TEXT_DOMAIN ),
			'update_item'       => __( 'Update Texture', SPM_TEXT_DOMAIN ),
			'add_new_item'      => __( 'Add New Texture', SPM_TEXT_DOMAIN ),
			'new_item_name'     => __( 'New Texture', SPM_TEXT_DOMAIN ),
			'menu_name'         => __( 'Textures', SPM_TEXT_DOMAIN )
		),
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => false
	) );

	// Custom Post Type for Testimonials
	register_post_type( 'spm_testimonial', array(
		'labels' => array(
			'name' =>				__( 'Testimonials', SPM_TEXT_DOMAIN ),
			'singular_name' =>		__( 'Testimonial', SPM_TEXT_DOMAIN ),
			'all_items' =>			__( 'All Testimonials', SPM_TEXT_DOMAIN ),
			'add_new_item' =>		__( 'Add New Testimonial', SPM_TEXT_DOMAIN ),
			'edit_item' =>			__( 'Edit Testimonial', SPM_TEXT_DOMAIN ),
			'new_item' =>			__( 'New Testimonial', SPM_TEXT_DOMAIN ),
			'view_item' =>			__( 'View Testimonial', SPM_TEXT_DOMAIN ),
			'search_items' =>		__( 'Search Testimonials', SPM_TEXT_DOMAIN ),
			'not_found' =>			__( 'No Testimonials Found', SPM_TEXT_DOMAIN ),
			'not_found_in_trash' =>	__( 'No Testimonials Found in Trash', SPM_TEXT_DOMAIN )
		),
		'public' => true,
		'supports' => array('title', 'editor'),
		'has_archive' => true,
		'rewrite' => array('slug' => 'testimonial')
	) );

}
add_action('init', 'spm_init');


function spm_widgets_init() {

	// Names of sidebars to create
	$sidebar_names = array(
		__('Sidebar', SPM_TEXT_DOMAIN),
		'Contact Sidebar',
		'Services Sidebar',
		'Rockfon Megamenu',
		'We Work With Megamenu',
		'Products Megamenu',
		'Services Megamenu',
		'Image Sidebar'
	);

	foreach ($sidebar_names as $sidebar_name) {
		register_sidebar( array(
			'name' => $sidebar_name,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		) );
	}

}
add_action('widgets_init', 'spm_widgets_init');


function spm_enqueue_scripts() {
	wp_enqueue_style('googleapis-fonts', '//fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic|Raleway:300,400,600,700|Montserrat:400,500,700');
	wp_enqueue_style('icomoon', get_template_directory_uri().'/icons2/style.css', array(), rand());
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/owl.carousel.css');
	wp_enqueue_style( SPM_TEXT_DOMAIN.'-styles', get_stylesheet_uri() , array(), rand());

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );

	wp_enqueue_script(SPM_TEXT_DOMAIN.'-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3');
	wp_script_add_data(SPM_TEXT_DOMAIN.'-html5', 'conditional', 'lt IE 9');
	wp_register_script('jquery-cycle2', get_template_directory_uri().'/js/jquery.cycle2.min.js', array('jquery'), '2.1.6');
	wp_register_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '2.2.1');
	wp_register_script('wow', get_template_directory_uri().'/js/wow.min.js', null, '1.1.2');
	wp_enqueue_script(SPM_TEXT_DOMAIN.'-script', get_template_directory_uri().'/js/functions.js', array('jquery', 'jquery-cycle2', 'jquery-ui-accordion', 'owl-carousel', 'wow'), null, true);
}
add_action('wp_enqueue_scripts', 'spm_enqueue_scripts');


function spm_comments_callback($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
	<div id="comment-<?php comment_ID(); ?>">
		<p class="comment-author vcard">
			<span class="comment-date"><?php comment_date('F jS, Y'); ?> at <?php comment_time(); ?></span>
			<?php echo get_avatar( $comment, 32); ?> <?php comment_author_link(); ?> posted: <?php if ($comment->comment_approved == '0') { ?> <em>(Awaiting Moderation)</em><?php } ?>
		</p>

		<?php comment_text(); ?>

		<p class="comment-meta commentmetadata"><?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply to this Comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?><?php edit_comment_link('<em>Edit this Comment</em>', ' | '); ?></p>
	</div>
<?php
}

// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10); 