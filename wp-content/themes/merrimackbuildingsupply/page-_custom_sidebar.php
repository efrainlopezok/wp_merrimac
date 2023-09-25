<?php /* Template Name: Custom Sidebar */ ?>

<?php get_header(); ?>

<?php get_template_part('template_part-banner_inside_page'); ?>

<div id="main">
	<div class="wrap">
		<?php while (have_posts()) : the_post(); ?>
		<div id="content">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php $sub_heading = get_post_meta( get_the_ID(), '_sub_heading', true ); ?>
				<?php if ($sub_heading) { ?>
								<p class="sub_heading"><?php echo $sub_heading; ?></p>
				<?php } ?>
				<?php the_content(); ?>
				<div class="cleared"></div>
			</article>

		</div>
<!-- SIDEBAR -->
		<aside id="sidebar" class="wow fadeInRightSmall <?php the_field('custom_class'); ?>">
			<div class="contact-sidebar-wrap">
				<?php the_field('content'); ?>
			</div>
		</aside>
<!-- END SIDEBAR -->
		<div class="cleared"></div>
		<?php endwhile; ?>
	</div>
</div>

<?php get_template_part('template_part-newsletter'); ?>

<?php get_footer(); ?>
