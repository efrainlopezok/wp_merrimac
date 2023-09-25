<?php

function spm_after_setup_theme_woocommerce() {
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-lightbox');
}
add_action( 'after_setup_theme', 'spm_after_setup_theme_woocommerce' );

// Don't use global wrapper
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

// Move breadcrumbs to immediately after #content opening div
//remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
//add_action( 'woocommerce_before_single_product', 'woocommerce_breadcrumb', 20 );

// Adjust product featured image size
//add_filter( 'single_product_large_thumbnail_size', 'spm_product_large_thumbnail_size' );
function spm_product_large_thumbnail_size() {
	return array(630, 320);
}

// View 24 posts per page instead of WordPress global default
//add_filter( 'loop_shop_per_page', 'spm_loop_shop_per_page', 20 );
function spm_loop_shop_per_page() {
	return 24;
}

// Adjust product thumbnail column count
//add_filter( 'woocommerce_product_thumbnails_columns', 'spm_product_thumbnails_columns' );
function spm_product_thumbnails_columns() {
	return 4;
}

// Change product thumbnail placeholder image
//add_filter( 'woocommerce_placeholder_img_src', 'spm_placeholder_img_src');
function spm_placeholder_img_src() {
	return get_template_directory_uri().'/images/woocommerce-products-li-a-img-placeholder.jpg';
}

// Remove title and price from content area. Each will be displayed in #title_bar instead
//add_action( 'woocommerce_show_page_title', 'spm_show_page_title');
function spm_show_page_title() {
	return false;
}

//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

// Remove "Add to cart" controls
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
//remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

// Remove meta (specifically, the category, which is already displayed in the nearby breadcrumbs)
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Remove sale flash from product catalog
//remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );

// Remove sale flash from single product template
//remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

// Add sold flash to product catalog
//add_action('woocommerce_before_shop_loop_item_title', 'spm_woocommerce_show_product_loop_sold_flash', 10 );
function spm_woocommerce_show_product_loop_sold_flash() {
	wc_get_template( '/loop/sold-flash.php' );
}

// Move thumbnail in product catalog below title
//remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
//add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 5 );

//add_filter( 'woocommerce_product_tabs', 'spm_product_tabs' );
function spm_product_tabs( $tabs = array() ) {
	global $post;
	
	// Remove "Additional Information" from tabs. Custom product attributes will be displayed in sidebar instead.
	unset( $tabs['additional_information'] );
	
	// Add Floorplan tab (if applicable)
	$floorplan = get_post_meta(get_the_ID(), 'floorplan', true);
	if ($floorplan) {
		$tabs['floorplan'] = array(
			'title'    => __( 'Floorplan', SPM_TEXT_DOMAIN ),
			'priority' => 15,
			'callback' => 'spm_floorplan_tab'
		);
	}
	
	return $tabs;
}


// Output the floorplan tab content.
function spm_floorplan_tab() {
	wc_get_template( 'single-product/tabs/floorplan.php' );
}


// Remove "Related Products"
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


// Add product attributes to product catalog
//add_action('woocommerce_after_shop_loop_item_title', 'spm_woocommerce_template_loop_attributes', 20 );
function spm_woocommerce_template_loop_attributes() {
	wc_get_template( '/loop/attributes.php' );
}


// Remove sale flash from product catalog
/*add_filter('woocommerce_sale_flash', 'spm_sale_flash');
function spm_sale_flash() {
	return false;
}*/


// Replace "Free!" text when price is 0
//add_filter('woocommerce_free_sale_price_html', 'spm_free_price_html');
//add_filter('woocommerce_free_price_html', 'spm_free_price_html');
function spm_free_price_html($product) {
	return __('Price not published', SPM_TEXT_DOMAIN);
}


// Find custom attribute value by name. Used in shop/title-bar.php
function spm_get_attribute_value_by_name($attributes, $name) {
	global $product;
	
	if ( !is_array($attributes) || !$name ) return;
	
	foreach ($attributes as $attribute) {
		
		if ( strcasecmp($attribute['name'], $name ) == 0 ) { // Case insensitive match
			//echo $attribute['name'].' = '.$attribute['value'].'<br />';
			if ( $attribute['is_taxonomy'] ) {
				$values = woocommerce_get_product_terms( $product->id, $attribute['name'], 'names' );
			} else {
				$values = array_map( 'trim', explode( '|', $attribute['value'] ) );
			}
			
			$values = apply_filters( 'woocommerce_attribute', wptexturize( implode( ', ', $values ) ), $attribute, $values );
			
			return $values;
		}
	}
	
	return false;
}


// List WooCommerce Products by tags ex: [spm_products_by_tags tags="shoes,socks"]
function spm_shortcode_products_by_tags( $atts ) {
	global $woocommerce_loop;

	extract( shortcode_atts(array(
		'per_page'      => '12',
		'columns'       => '4',
		'orderby'       => 'title',
		'order'         => 'asc',
		'tags'			=> ''
	), $atts) );

	$args = array(
		'post_status' 			=> 'publish',
		'post_type'				=> 'product',
		'ignore_sticky_posts'	=> 1,
		'posts_per_page'		=> $per_page,
		'orderby' 				=> $orderby,
		'order' 				=> $order,
		'meta_query' 			=> array(
			array(
				'key' 		=> '_visibility',
				'value' 	=> array('catalog', 'visible'),
				'compare' 	=> 'IN'
			)
		),
		'product_tag'			=> $tags
	);

	ob_start();

	$products = new WP_Query( apply_filters( 'woocommerce_shortcode_products_query', $args, $atts ) );

	$woocommerce_loop['columns'] = $columns;

	if ( $products->have_posts() ) : ?>

		<?php woocommerce_product_loop_start(); ?>

			<?php while ( $products->have_posts() ) : $products->the_post(); ?>

				<?php wc_get_template_part( 'content', 'product' ); ?>

			<?php endwhile; // end of the loop. ?>

		<?php woocommerce_product_loop_end(); ?>

	<?php endif;

	wp_reset_postdata();

	return '<div class="woocommerce columns-' . $columns . '">' . ob_get_clean() . '</div>';
}
//add_shortcode('spm_products_by_tags', 'spm_shortcode_products_by_tags');