<?php get_header(); ?>

<?php get_template_part('template_part-banner_inside_page'); ?>

<div id="main">
	<div class="wrap">
		<div id="content">
<?php if ( is_category() ) { ?>
			<h2 class="page_title"><?php single_cat_title(); ?></h2>
<?php } ?>
			
<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h3 class="title blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				
				<?php add_filter('the_content', 'content_shorten'); ?>
				<?php the_content(); ?>
				<?php remove_filter('the_content', 'content_shorten'); ?>
				
			</article>
<?php endwhile; ?>
			
<?php get_template_part('template_part-pager'); ?>
			
		</div>
		
		<?php get_sidebar(); ?>
		
		<div class="cleared"></div>
	</div>
</div>

<?php get_template_part('template_part-newsletter'); ?>

<?php get_footer(); ?>