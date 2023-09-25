<?php /* Template Name: Division-10 */ ?>

<?php get_header(); ?>

<?php 
	$hero_image = get_field('image_background');
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

<div id="divicion-10" class="divicion-10">
	<div class="wrap">
		<div class="columns two">
			<?php 
				$div_10 =  get_field('division_10');
				$count = 1;
				foreach ($div_10 as $item) {
					if ($count%2 != 0) {
						?>
							<div class="cont-item">
								<div class="column">
									<div class="con-text">
										<p class="title-div"><?php echo $item['title']; ?></p>
										<?php echo $item['description']; ?>
									</div>
								</div>
								<div class="column">
									<div class="image-div" style="background-image: url(<?php echo $item['image']['url']; ?>);"></div>
								</div>
							</div>
						<?php
						}else{
							?>
							<div class="cont-item">
								<div class="column">
									<div class="image-div" style="background-image: url(<?php echo $item['image']['url']; ?>);"></div>
								</div>
								<div class="column">
									<div class="con-text">
										<p class="title-div"><?php echo $item['title']; ?></p>
										<?php echo $item['description']; ?>
									</div>
								</div>
							</div>
					<?php
						}
					$count++;
				}
			?>
		</div>
	</div>
</div>

<div id="line_section" class="line_section">
	<div class="wrap">
		<div class="line"></div>
	</div>
</div>

<div id="logos" class="div10-logos">
	<div class="wrap">
		<div class="columns five">
			<?php 
			$div10_logos =  get_field('division_10_logos');
				foreach ($div10_logos as $item) {
				?>
				<div class="column">
					<img src="<?php echo $item['image']['url'] ?>" alt="" class="sizer" />
				</div>
				<?php 
				}
				?>
		</div>
	</div>
</div>

<?php get_template_part('template_part-newsletter'); ?>


<?php get_footer(); ?>
