<?php $additional_body_classes = 'rockfon'; ?>

<?php get_header(); ?>

<?php get_template_part('template_part-banner_inside_page'); ?>

<div id="main">
	<div class="wrap">
		<div id="content" class="full_width">
<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<p class="title">Product Summary</p>
				
				<?php the_content(); ?>
				
<?php
$specifications = array(
	'Features and Benefits'		=> '_features_and_benefits',
	'Fire Performance'			=> '_fire_performance',
	'ASTM E1264 Classification'	=> '_astm_e1264_classification',
	'Applications'				=> '_applications',
	'Materials'					=> '_materials',
	'Hygienic Properties'		=> '_hygienic_properties',
	'Sustainability'			=> '_sustainability'
);
?>
				<div class="specifications">
					<div class="columns two">
						<div class="column">
<?php
$i = 1; foreach ($specifications as $title => $meta_key) {
	$meta_value = get_post_meta( get_the_ID(), $meta_key, true);
	
	if ($i == ceil( count($specifications) / 2 ) ) {
?>
						</div>
						
						<div class="column">
<?php } ?>
							<p class="title"><?php echo $title; ?></p>
							
							<?php echo apply_filters('the_content', $meta_value); ?>
<?php $i++; } ?>
						</div>
						
						<div class="cleared"></div>
					</div>
					
<?php $datasheet_url = get_post_meta( get_the_ID(), '_datasheet_url', true); ?>
<?php if ($datasheet_url) { ?>
					<p><a href="<?php esc_url($datasheet_url); ?>" class="button rounded">Download Datasheet</a></p>
<?php } ?>
				</div>
				
				<div class="cleared"></div>
			</article>
<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_template_part('template_part-newsletter'); ?>

<?php get_footer(); ?>