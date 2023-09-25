<?php get_header(); ?>

<?php get_template_part('template_part-banner_inside_page'); ?>

<div id="main">
	<div class="wrap">
		<div id="content">
			<h2 class="page_title"><span><?php printf( __('Search: &quot;%s&quot;', SPM_TEXT_DOMAIN), get_search_query() ); ?></span></h2>
			
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="postmetadata">
					<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
					<p class="date"><?php the_time('l, M j, Y'); ?></p>
				</div>
				
				<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				
				<?php the_excerpt(); ?>
				
				<p><a href="<?php the_permalink(); ?>" class="read_more">Read More</a></p>
			</article>
<?php endwhile; ?>
<?php else : ?>
			<article>
				<h3 class="title"><?php _e('No Results'); ?></h3>
				
				<?php _e('Nothing found for these search terms.', SPM_TEXT_DOMAIN); ?>
			</article>
<?php endif; ?>
			
<?php get_template_part('template-part-pager'); ?>
			
		</div>
	</div>
</div>
	
<?php get_template_part('template_part-to_learn_more'); ?>

<?php get_template_part('template_part-featured_events'); ?>

<?php get_footer(); ?>