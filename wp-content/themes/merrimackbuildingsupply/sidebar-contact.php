<?php
$page_template_sidebar_mappings = array(
	'page-_services.php' => 'Services'
);
?>

		<aside id="sidebar" class="wow fadeInRightSmall contact-sidebar">
			<div class="contact-sidebar-wrap">
				<h3 class="contact-sidebar-title">Contact Us</h3>
				<?php echo do_shortcode('[contact-form-7 id="1306" title="Contact Us - Sidebar"]'); ?>
			</div>
			<?php dynamic_sidebar('Contact Sidebar'); ?>
		</aside>
