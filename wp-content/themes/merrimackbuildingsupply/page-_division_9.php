<?php /* Template Name: Division-9 */ ?>

<?php get_header(); ?>

<?php 
	$hero_image = get_field('background_hero_div9');
?>
<div id="banner" class="cycle-slideshow hero-divicion-10"
	data-cycle-timeout="7000"
	data-cycle-slides="> .slide"
	data-cycle-auto-height="false"
	style="background-image: url(<?php echo $hero_image['url'];?>);">

	<div class="slide" >
		<div class="wrap">
			<div id="banner_text" class="fadeInUpSmall animated">
				<div class="banner_text_source">
					<h3 class="title"><?php the_title(); ?></h3>
				</div>
			</div>
		</div>
	</div>

</div>

<div id="calls_to_action_rockfon" class="serv_div9">
	<div class="wrap">
		<div class="columns three">
			<?php 
			// $service = new WP_Query( 
			// 	array(
			// 		'post_type' => 'service', 
			// 		'order' => 'ASC', 
			// 		'posts_per_page' => 8
			// 	) 
			// );
			?>
			<?php 
			// if ( $service->have_posts() ) :
			// 	while ( $service->have_posts() ) : $service->the_post();
			// 	$bg_service = get_field('background_service'); 
			// 	if ($bg_service) {
			// 		$bg_service = $bg_service['url'];
			// 	} else {
			// 		$bg_service =  get_template_directory_uri() .'/images/calls_to_action_rockfon-post-what_is_rockfon-img.jpg';
			// 	}
				$services = get_field('service_div_9');
				foreach ($services as $item) {
					# code...
				
				?>
				<div class="column">
					<article class="post">
						<img src="<?php echo $item['background']['url']; ?>" alt="" />

						<div class="background">
							<div class="inner_border">
								<div class="cont-img">
									<img src="<?php echo $item['image']['url']; ?>" alt="">
								</div>
								<p class="pre_title"><?php echo $item['text']; ?></p>
							</div>
						</div>

						<div class="center_point"><a href="<?php echo $item['text_link']; ?>" class="button">Learn More</a></div>
					</article>
				</div>
				<?php 
				}
			// 	endwhile;
			// endif; 
			?>
			<!-- <div class="cleared"></div> -->
		</div>
	</div>
</div>

<?php $latest_blogs = new WP_Query( array('posts_per_page' => 3) ); ?>
<?php if ( $latest_blogs->have_posts() ) : ?>
<div id="latest_blogs" class="latest_blogs_div9">
	<div class="wrap">
		<p class="pre_title">Learn / Grow / Inspire</p>

		<h3 class="section_title">Latest Blogs</h3>

		<div class="columns three">
		<?php for ( $i = 0; $latest_blogs->have_posts(); $i+=200 ) : $latest_blogs->the_post(); ?>
			<div <?php post_class('column wow fadeInUpSmall'); ?> data-wow-delay="<?php echo $i; ?>ms">
				
				<?php if ( has_post_thumbnail() ) { 
					the_post_thumbnail('blog_post');
				} else { 
					echo "<img src='".get_site_url()."/wp-content/uploads/2018/12/shutterstock_45754906-480x433.jpg' class='attachment-blog_post size-blog_post wp-post-image' alt='Merrimack'>"; 
				} ?>

				<div class="overlay">
					<div class="layer_2">
						<h3 class="title"><?php echo the_title(); ?></h3>

						<div class="excerpt">
							<?php the_excerpt(); ?>
						</div>
					</div>

					<div class="arrow_background"></div>
					<div class="arrow"></div>

					<a href="<?php the_permalink(); ?>" class="full_coverage_link">&nbsp;</a>
				</div>
			</div>
		<?php endfor; ?>

			<div class="cleared"></div>
		</div>
	</div>
</div>
<?php endif; ?>


<?php get_template_part('template_part-newsletter'); ?>


<?php get_footer(); ?>
