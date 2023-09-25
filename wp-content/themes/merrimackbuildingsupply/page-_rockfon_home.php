<?php /* Template Name: Rockfon Home */ ?>

<?php $additional_body_classes = 'rockfon'; ?>

<?php get_header(); ?>

<?php $rockfon_slider = new WP_Query( array('post_type' => 'rockfon_slider', 'order' => 'ASC') ); ?>
<?php if ( $rockfon_slider->have_posts() ) : ?>
<div id="banner" class="cycle-slideshow"
	data-cycle-timeout="7000"
	data-cycle-slides="> .slide"
	data-cycle-auto-height="false"
>
	<img src="<?php echo get_template_directory_uri(); ?>/images/banner-sizer-img.png" alt="rockfon ceiling solutions" title="Rockfon Ceiling Solutions" class="sizer" />

<?php while ( $rockfon_slider->have_posts() ) : $rockfon_slider->the_post(); ?>
	<div class="slide"<?php if ( has_post_thumbnail() ) { ?> style="background-image: url(<?php echo current( wp_get_attachment_image_src( get_post_thumbnail_ID(), 'banner') ); ?>);"<?php } ?>>
		<div class="wrap">
			<div id="banner_text" class="fadeInUpSmall animated">
				<div class="banner_text_source">
					<p class="pre_title"><?php the_field('pre_title');?></p><br />

					<h3 class="title"><?php the_title(); ?></h3>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>

	<div class="cleared"></div>
</div>
<?php endif; ?>

<div id="calls_to_action_rockfon">
	<div class="wrap">
		<div class="columns three">
			<div class="column">
				<article class="post">
					<img src="<?php echo get_template_directory_uri(); ?>/images/calls_to_action_rockfon-post-what_is_rockfon-img.jpg" alt="rockfon ma" title="What Is Rockfon" />

					<div class="background">
						<div class="inner_border">
							<p class="pre_title">What is</p>

							<h4 class="title">ROCKFON</h4>
						</div>
					</div>

					<div class="center_point"><a title="What Is Rockfon" href="what-is-rockfon/" class="button">Learn More</a></div>
				</article>
			</div>

			<div class="column">
				<article class="post">
					<img src="<?php echo get_template_directory_uri(); ?>/images/calls_to_action_rockfon-post-benefits_of_rockfon-img.jpg" alt="benefits of rockfon" title="Benefits of Rockfon" />

					<div class="background">
						<div class="inner_border">
							<p class="pre_title">Benefits of</p>

							<h3 class="title">ROCKFON</h3>
						</div>
					</div>

					<div class="center_point"><a title="Benefits of Rockfon" href="benefits-of-rockfon/" class="button">Learn More</a></div>
				</article>
			</div>

			<div class="column">
				<article class="post">
					<img src="<?php echo get_template_directory_uri(); ?>/images/calls_to_action_rockfon-post-ceiling_solutions-img.jpg" alt="rockfon ceiling" title="Rockfon Ceiling Solutions" />

					<div class="background">
						<div class="inner_border">
							<p class="pre_title">Ceiling</p>

							<h3 class="title">Solutions</h3>
						</div>
					</div>

					<div class="center_point"><a title="Rockfon Ceiling Solutions" href="ceiling-solutions/" class="button">Learn More</a></div>
				</article>
			</div>

			<div class="cleared"></div>
		</div>
	</div>
</div>

<div id="building_products">
	<div class="wrap">
		<p class="pre_title">Leading New England Distributor of</p>

		<h2 class="section_title">ROCKFON Products</h2>
	</div>

	<div class="background_container">
		<div class="wrap">
			<div class="columns two">
				<div class="column">
					<p>Acoustically enhanced ceiling solutions from <b>ROCKFON</b> provide any office a quiet, private feeling that rids rooms of distractions. <b>ROCKFON</b> products are versatile, environmentally-friendly, and designed to inhibit the spread of fire in the event of an emergency. With easily customizable shapes and colors, <b>ROCKFON</b> ceiling solutions can accommodate to any aesthetic you wish to achieve.</p>
				</div>

				<div class="column">
					<p>Discovered in Hawaii in the early 20th century, <b>ROCKFON</b> is made from basalt rock, earth’s most abundant bedrock, which is exposed to extreme high heat returning it to its molten lava state and spun into wool. Due to their lightweight nature, <b>ROCKFON</b> is easy and painless to install. Contact us today to see how <b>ROCKFON</b> can transform your office into a sanctuary.</p>
				</div>

				<div class="cleared"></div>
			</div>
		</div>
	</div>
</div>

<div id="why_rockfon">
	<div class="wrap">

		<h6 class="pre_title">why we choose ROCKFON for our</h6>

		<h3 class="section_title">acoustical ceilings</h3>

		<p>Make loud office interiors buildings a thing of the past by installing ROCKFON acoustic ceiling tiles. Be it stone wool ceiling tiles, metal ceilings, or suspension systems, ROCKFON products are engineered to perform. See how we can help!</p>

		<div class="cleared"></div>
	</div>
</div>

<div id="calls_to_action_rockfon_secondary">
	<div class="wrap">
		<div class="columns five">
			<div class="column performance wow zoomIn">
				<div class="container">
					<h3>Performance</h3>

					<div class="hover">
						<h3>Performance</h3>

						<a href="<?php echo home_url(); ?>/rockfon/benefits-of-rockfon/" class="full_coverage_link">&nbsp;</a>
					</div>
				</div>
			</div>

			<div class="column inspiration wow zoomIn" data-wow-delay="200ms">
				<div class="container">
					<h3>Inspiration</h3>

					<div class="hover">
						<h3>Inspiration</h3>

						<a href="<?php echo home_url(); ?>/rockfon/benefits-of-rockfon/" class="full_coverage_link">&nbsp;</a>
					</div>
				</div>
			</div>

			<div class="column sustainability wow zoomIn" data-wow-delay="400ms">
				<div class="container">
					<h3>Sustainability</h3>

					<div class="hover">
						<h3>Sustainability</h3>

						<a href="<?php echo home_url(); ?>/rockfon/benefits-of-rockfon/" class="full_coverage_link">&nbsp;</a>
					</div>
				</div>
			</div>

			<div class="column installation wow zoomIn" data-wow-delay="600ms">
				<div class="container">
					<h3>Installation</h3>

					<div class="hover">
						<h3>Installation</h3>

						<a href="<?php echo home_url(); ?>/rockfon/benefits-of-rockfon/" class="full_coverage_link">&nbsp;</a>
					</div>
				</div>
			</div>

			<div class="column investment wow zoomIn" data-wow-delay="800ms">
				<div class="container">
					<h3>Investment</h3>

					<div class="hover">
						<h3>Investment</h3>

						<a href="<?php echo home_url(); ?>/rockfon/benefits-of-rockfon/" class="full_coverage_link">&nbsp;</a>
					</div>
				</div>
			</div>

			<div class="cleared"></div>
		</div>
	</div>
</div>

<?php $latest_blogs = new WP_Query( array('category_name' => 'Rockfon', 'posts_per_page' => 3) ); ?>
<?php if ( $latest_blogs->have_posts() ) : ?>
<div id="latest_blogs">
	<div class="wrap">
		<p class="pre_title">Learn / Grow / Inspire</p>

		<h3 class="section_title">Latest Blogs</h3>

		<div class="columns three">
<?php for ( $i = 0; $latest_blogs->have_posts(); $i+=200 ) : $latest_blogs->the_post(); ?>
			<div <?php post_class('column wow fadeInUpSmall'); ?> data-wow-delay="<?php echo $i; ?>ms">
				<?php the_post_thumbnail('blog_post'); ?>

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
	<center><h1>Rockfon Ceiling Solutions</h1></center>
</div>
<?php endif; ?>

<?php get_template_part('template_part-newsletter'); ?>

<?php get_footer(); ?>
