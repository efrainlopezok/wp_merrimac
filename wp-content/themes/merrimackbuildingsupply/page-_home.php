<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php $front_page_slider = new WP_Query( array('post_type' => 'front_page_slider', 'order' => 'ASC') ); ?>
<?php if ( $front_page_slider->have_posts() ) : ?>
<div id="banner" class="cycle-slideshow"
	data-cycle-timeout="7000"
	data-cycle-slides="> .slide"
	data-cycle-auto-height="false"
>
	<img src="<?php echo get_template_directory_uri(); ?>/images/banner-sizer-img.png" alt="merrimack building supply" title="Merrimack Building Supply" class="sizer" />

<?php while ( $front_page_slider->have_posts() ) : $front_page_slider->the_post(); ?>
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
</div>
<?php endif; wp_reset_query();?>

<div id="calls_to_action" class="calls_to_action">
	<div class="wrap">
		<?php 
		$calls_to_action = get_field('calls_to_action');
	 	?>

		<div class="columns three">
			<?php 
			foreach ($calls_to_action as $item) {?>
				<div class="column">
					<a title="Merrimack Building Supply" href="<?php echo $item['link_division']?>">
						<div class="cont-box" style="background-image: url('<?php echo $item["background"]["url"]?>');">
							<div class="overlaw"></div>
							
							<div class="c-box-title">
								<div class="cont-img">
									<img src="<?php echo $item["images"]["url"]?>" alt="merrimack building supply" title="Merrimack Building Supply">
								</div>

								<h3 class="title"><?php echo $item["title"]?></h3>
								<h5><?php echo $item["sub_title"]?></h5>

								<div class="cont-list">
									<div class="list-left">
										<ul>
											<?php 
											$list_left = $item["list_left"];
											foreach ($list_left as $left_item) {?>
												<li><?php echo $left_item['item']?></li>
											<?php 
											}
											?>
										</ul>
									</div>
									<div class="list-right">
										<ul>
											<?php 
											$list_right = $item["list_right"];
											foreach ($list_right as $right_item) {?>
												<li><?php echo $right_item['item']?></li>
											<?php 
											}
											?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?php 
			}
			?>
		</div>
	</div>
</div>

<div id="section_services" class="section_services">
	<div class="wrap">
		<div class="cont-service">
			<?php 
			$services = get_field('services');
			?>
			<p class="pre_title">Delivering Quality Construction supplies</p>
			<h1>what we do</h1>
			<?php  
				foreach ($services as $item) {
				?>
					<div class="columns four">
						<div class="column column wow fadeInUpSmall">
							<a href="<?php echo $item['link_page'] ?>">
								<div class="item-service">
									<?php 
										$image = $item['image']; 
									?>
									<img src="<?php echo $image['url']; ?>" alt="">
									<p><?php echo $item['text']; ?></p>
								</div>
							</a>
						</div>
					</div>
				<?php 
				}
			?>
		</div>
	</div>
</div>

<div id="building_products">
	<div class="wrap">
		<p class="pre_title">Leading Distributor of Commercial &amp; Residential</p>

		<h1 class="section_title">BUILDING PRODUCTS</h1>
	</div>

	<div class="background_container">
		<div class="wrap">
			<div class="columns two">
				<div class="column">
					<h2 style="display: inline; font-size: 1em;">Merrimack Building Supply, Inc.</h2><p style="display: inline;"> is a leading distributor of commercial and residential building products. Established in 1985, <strong>Merrimack Building Supply</strong> ranks superior in the <h6 style="display: inline; font-size: 1em;">building materials</h6> industry due to its commitment of quality and service. Our major product lines include Drywall, Steel Framing, Insulation, Acoustical Ceilings, Plaster & Compounds, Exterior Finishes, Tools, Commercial Doors, Frames &amp; Hardware and Division 10 products.</p>
				</div>

				<div class="column">
					<p style="display: inline;">We have warehouses in <h2 style="display: inline; font-size: 1em;">New Hampshire</h2>, <h2 style="display: inline; font-size: 1em;">Massachusetts</h2> and <h2 style="display: inline; font-size: 1em;">Connecticut</h2> and deliver to anywhere in New England with our extensive fleet of boom trucks, box trucks and flat beds.</p>

					<p>We offer many services in addition to delivery such as Estimating, EIFS Tinting, Door, Frame and Hardware Installation, and a Custom Hollow Metal Shop.</p>
				</div>

				<div class="cleared"></div>
			</div>
		</div>
	</div>
</div>

<div id="logos">
	<div class="columns six">
		<div class="column wow fadeInUpSmall">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="building supply" title="Merrimack Building Supply Rockfon" class="sizer" />

			<div class="logo rockfon"></div>
		</div>

		<div class="column wow fadeInUpSmall" data-wow-delay="100ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="building supplies" title="Merrimack Building Supply Allegion" class="sizer" />

			<div class="logo allegion"></div>
		</div>

		<div class="column wow fadeInUpSmall" data-wow-delay="200ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="supplies" title="Merrimack Budiling Supply Gypsum" class="sizer" />

			<div class="logo gypsum"></div>
		</div>

		<div class="column wow fadeInUpSmall" data-wow-delay="300ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="merrimack building supply" title="Merrimack Building Supply Certainteed" class="sizer" />

			<div class="logo certainteed"></div>
		</div>

		<div class="column wow fadeInUpSmall" data-wow-delay="400ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="building" title="Merrimack Budilding Supply Dryvit" class="sizer" />

			<div class="logo dryvit"></div>
		</div>

		<div class="column wow fadeInUpSmall" data-wow-delay="500ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="building supplies" title="Merrimack Budiling Supply Masonite" class="sizer" />

			<div class="logo masonite"></div>
		</div>

		<div class="cleared"></div>
	</div>
</div>

<?php /*<div id="featured_case_study">
	<div class="wrap">
		<div class="overlay  wow fadeInLeftSmall" data-wow-delay="500ms">
			<h3 class="section_title">/ / Featured Case Study</h3>

			<div class="case_study">
				<h3 class="title">Rockfon Acoustic Installation</h3>

				<p>Short description about the products that were used on this particular project and how Merrimack Building Supply was able to help.</p>

				<a href="" class="read_more">&nbsp;</a>
			</div>
		</div>
	</div>
</div>*/ ?>

<?php $latest_blogs = new WP_Query( array('posts_per_page' => 3) ); ?>
<?php if ( $latest_blogs->have_posts() ) : ?>
<div id="latest_blogs">
	<div class="wrap">
		<p class="pre_title">Learn / Grow / Inspire</p>

		<h3 class="section_title">Latest Blogs</h3>

		<div class="columns three">
<?php for ( $i = 0; $latest_blogs->have_posts(); $i+=200 ) : $latest_blogs->the_post(); ?>
	
			<div <?php post_class('column wow fadeInUpSmall'); ?> data-wow-delay="<?php echo $i; ?>ms">
				<?php  ?>
				<?php if ( has_post_thumbnail() ) { 
					the_post_thumbnail('blog_post');
				} else { 
					echo "<img src='".get_site_url()."/wp-content/uploads/2018/12/shutterstock_45754906-480x433.jpg' class='attachment-blog_post size-blog_post wp-post-image' alt='Merrimack Building Supply' title='Merrimack Building Supply'>"; 
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

					<a title="Merrimack Building Supply" href="<?php the_permalink(); ?>" class="full_coverage_link">&nbsp;</a>
				</div>
			</div>

<?php endfor; ?>

			<div class="cleared"></div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php $testimonials = new WP_Query( array('post_type' => 'spm_testimonial', 'order' => 'ASC', 'posts_per_page' => 99) ); ?>
<?php if ( $testimonials->have_posts() ) : ?>
<div id="testimonials">
	<div class="wrap">
		<p class="pre_title">Testimonials</p>
		<p class="section_title">What Our Customers Are Saying</p>

		<p class="star_rating">
			<i class="icon-star"></i>
			<i class="icon-star"></i>
			<i class="icon-star"></i>
			<i class="icon-star"></i>
			<i class="icon-star"></i>
		</p>

		<div id="testimonials-carousel" class="owl-carousel">
<?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
			<div class="testimonial">
				<i class="icon-quotes-left"></i>

				<?php the_excerpt(); ?>

				<footer class="signed"><?php the_title(); ?></footer>
			</div>
<?php endwhile; ?>
		</div>
		<center>
<h4 style="font-size:2em;">Merrimack Building Supply</h4>
<h5>Serving New England with Warehouses in <span style="color: slategrey;">New Hampshire, Massachusetts & Connecticut</span></h5>
</center>
	
	</div>
</div>
<?php endif; wp_reset_query(); ?>

<?php //get_template_part('template_part-newsletter2'); ?>

<?php get_footer(); ?>
