<?php
$page_template_sidebar_mappings = array(
	'page-_services.php' => 'Services'
);
?>
		
		<aside id="sidebar" class="wow fadeInRightSmall">
			
<?php if ( get_page_template_slug() && array_key_exists( get_page_template_slug(), $page_template_sidebar_mappings ) ) { ?>
			<?php dynamic_sidebar( $page_template_sidebar_mappings[ get_page_template_slug() ] ); ?>
<?php } else { ?>
			<?php dynamic_sidebar(); ?>
<?php } ?>
			
		</aside>
