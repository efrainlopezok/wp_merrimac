<?php /* Template Name: Architectural Doors  */ ?>

<?php get_header(); ?>

<?php 
	$hero_image = get_field('background_door');
?>
<div id="banner" class="cycle-slideshow hero-door"
	data-cycle-timeout="7000"
	data-cycle-slides="> .slide"
	data-cycle-auto-height="false"
	style="background-image: url(<?php echo $hero_image['url'];?>);">

	<div class="slide door">
		<!-- <div class="wrap"> -->
			<div class="hero-left">
				<div class="cont-subtitle">
					<span class="sub_title"><?php echo get_field('sub_title_left') ;?></span>	
				</div>
				<h1><?php echo get_field('title_left'); ?></h1>
				<ul>
					<?php 
						$list = get_field('list_left');
						foreach ($list as $item) {
							echo '<li><span><img src="'.$item['icon']['url'].'" alt=""></span>'.$item['text_list'].'</li>';
						}
					?>
				</ul>
			</div>
		<!-- </div> -->
	</div>
</div>

<div id="calls_to_action_rockfon" class="serv_div9">
	<div class="wrap">
		<div class="columns three">
		<?php 
			// $bg_service =  get_template_directory_uri() .'/images/calls_to_action_rockfon-post-what_is_rockfon-img.jpg';

			$division_items = get_field('division_items');

			foreach ($division_items as $item) {

				?>
				<div class="column">
					<article class="post">
						<img src="<?php echo $item['bakground']['url']; ?>" alt="" />
						<div class="background">
							<div class="inner_border">
								<p class="pre_title"><?php echo $item['title']; ?></p>
							</div>
						</div>
						<div class="center_point"><a href="<?php echo $item['link_page']; ?>" class="button">Learn More</a></div>
					</article>
				</div>
				<?php 
			}
			?>
		</div>
	</div>
</div>

<?php 
$small_text = get_field('small_text');
$big_text = get_field('big_text');
$text_left = get_field('text_left');
$text_right = get_field('text_right');
?>
<div id="building_products">
	<div class="wrap">
		<p class="pre_title"><?php echo $small_text ?></p>

		<h1 class="section_title"><?php echo $big_text ?></h1>
	</div>

	<div class="background_container">
		<div class="wrap">
			<div class="columns two">
				<div class="column">
					<?php echo $text_left ?>
				</div>

				<div class="column">
					<?php echo $text_right ?>
				</div>

				<div class="cleared"></div>
			</div>
		</div>
	</div>
</div>

<div id="doors" class="doors" style="display:none">
	<div class="wrap">
		<p class="pre_title">LOREM IPSUM DOLR SIT</p>

		<h1 class="section_title">types of doors lorem ipsums</h1>

		<div class="columns four">
			<?php 
			$bg_service =  get_template_directory_uri() .'/images/calls_to_action_rockfon-post-what_is_rockfon-img.jpg';
			$doors = get_field('doors');
			foreach ($doors as $door) {?>
				<div class="column">
					<img src="<?php echo $door['image_door']['url'] ?>" alt="">
					<p><?php echo $door['description_door']; ?></p>
				</div>
			<?php 
			}
			?>
		</div>
	</div>
</div>

<?php $latest_blogs = new WP_Query( array('posts_per_page' => 3) ); ?>
<?php if ( $latest_blogs->have_posts() ) : ?>
<div id="latest_blogs">
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

<div id="logos" class="door">
	<div class="columns six">
		<div class="column wow fadeInUpSmall">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/06/merrimack_building_supply_logos_corbin.jpg" alt="" class="sizer" />

			<div class="logo "></div>
		</div>

		<div class="column wow fadeInUpSmall" data-wow-delay="100ms">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/06/merrimack_building_supply_logos_Falcon.jpg" alt="" class="sizer" />

			<div class="logo "></div>
		</div>

		<div class="column wow fadeInUpSmall" data-wow-delay="200ms">
			<img src="<?php echo get_site_url(); ?>//wp-content/uploads/2016/06/merrimack_building_supply_logos_pemko.jpg" alt="" class="sizer" />

			<div class="logo "></div>
		</div>

		<div class="column wow fadeInUpSmall" data-wow-delay="300ms">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/06/merrimack_building_supply_logos_schlage.jpg" alt="" class="sizer" />

			<div class="logo "></div>
		</div>

		<div class="column wow fadeInUpSmall" data-wow-delay="400ms">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/06/merrimack_building_supply_logos_lambton.jpg" alt="" class="sizer" />

			<div class="logo "></div>
		</div>

		<div class="column wow fadeInUpSmall" data-wow-delay="500ms">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/06/merrimack_building_supply_logos_harring-1.jpg" alt="" class="sizer" />

			<div class="logo "></div>
		</div>

		<div class="cleared"></div>
	</div>
</div>

<?php get_template_part('template_part-newsletter'); ?>


<?php get_footer(); ?>
