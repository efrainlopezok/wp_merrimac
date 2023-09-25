<?php /* Template Name: Has Contact Sidebar */ ?>

<?php $additional_body_classes = 'rockfon'; ?>

<?php get_header(); ?>

<?php get_template_part('template_part-banner_inside_page'); ?>

<div id="main">
	<div class="wrap">
		<div id="content">
<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php $sub_heading = get_post_meta( get_the_ID(), '_sub_heading', true ); ?>
<?php if ($sub_heading) { ?>
				<p class="sub_heading"><?php echo $sub_heading; ?></p>
<?php } ?>

				<?php the_content(); ?>

				<div class="cleared"></div>
			</article>
<?php endwhile; ?>
		</div>

<?php get_sidebar('contact'); ?>

		<div class="cleared"></div>
	</div>
</div>

<?php get_template_part('template_part-newsletter'); ?>

<?php get_footer(); ?>
