<?php
if  ( has_post_thumbnail() && is_page() ) {
	$post_thumbnail = current( wp_get_attachment_image_src( get_post_thumbnail_ID(), 'banner_inside_page') );
} else if ( is_singular('ceiling') ) {
	$post_thumbnail = get_post_meta( get_the_ID(), '_banner_image', true);
}	
?>

<div id="banner_inside_page"<?php if ($post_thumbnail) { ?> style="background-image: url(<?php echo $post_thumbnail; ?>);"<?php } ?>>
	<div class="wrap wow fadeInLeftSmall">
		<h1 class="page_title">
<?php if ( is_category() ) { ?>
			<?php single_cat_title(); ?>
<?php } else if ( is_archive() ) { ?>
			<?php _e('Inventory', SPM_TEXT_DOMAIN); ?>
<?php } else if ( is_home() ) { ?>
			<?php _e('Blog', SPM_TEXT_DOMAIN); ?>
<?php } else if ( is_single() ) { ?>
			<?php _e(the_title() ); ?>
<?php } else if ( is_404() ) { ?>
			<?php _e('Page Not Found', SPM_TEXT_DOMAIN); ?>
<?php } else { ?>
			<?php $alternate_title = get_post_meta($post->ID, '_alternate_title', true); ?>
			<?php if ($alternate_title) { echo $alternate_title; } else { the_title(); } ?>
<?php } ?>
			
			<span class="left_extension"></span>
		</h1>
	</div>
</div>
