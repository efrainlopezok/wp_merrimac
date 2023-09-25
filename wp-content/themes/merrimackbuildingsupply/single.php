<?php get_header(); ?>

<?php get_template_part('template_part-banner_inside_page'); ?>

<div id="main">
	<div class="wrap">
		<div id="content">
<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="page_title"><?php the_title(); ?></h2>
				
				<p class="postmetadata"><?php the_time('l M j, Y'); ?></p>
				
				<?php the_content(); ?>
				
				<div class="cleared"></div>
			</article>
<?php endwhile; ?>
		</div>
		
<?php get_sidebar(); ?>
		
		<div class="cleared"></div>
	</div>
</div>
<?php get_template_part('template_part-newsletter'); ?>

</div>
<?php get_template_part('template_part-blog_posts'); ?>

<?php get_template_part('template_part-blog_posts_alternate'); ?>

<?php get_template_part('template_part-testimonials'); ?>

<?php get_footer(); ?>