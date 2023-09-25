<?php /* Template Name: Rockfon Ceiling Solutions */ ?>

<?php $additional_body_classes = 'rockfon'; ?>

<?php get_header(); ?>

<?php get_template_part('template_part-banner_inside_page'); ?>

<div id="rockfon_ceiling">
	<div class="wrap">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rockfon_ceiling-img.jpg" alt="" class="plant wow fadeInRightSmall" data-wow-delay="600ms" />
		
		<p>Imagine yourself at a grand concert hall with an orchestra ready to perform. As the first notes hit you, the sheer magnitude is powerful and concentrated, and unlike anything you’ve ever heard before. Well contrast that to your noisy office for a moment. The phones ringing and chatter fills the air. Trying to concentrate with such racket becomes an impossibility.</p>
		
		<p>With <span style="color: #146793;"><strong>ROCKFON</strong></span> Ceiling Solutions, we are able to transfer the sound quality of a big stage right into your office. With enhanced acoustic quality, you’ll be able to block out distractions and give your personal space a sense of privacy and be able to maximize productivity.</p>
		
		<p><strong>Here’s what we have to offer:</strong></p>
		
		<div class="cleared"></div>
	</div>
</div>

<div id="ceiling_tiles">	
	<div class="wrap">
		<h3>Stone Wool Ceiling Tiles</h3>
		
		<p>Recall the old drop ceilings from past office buildings you’ve worked in. The square tiles are ugly, they crumble easily and set the tone for a sterile room. Plus, transporting them and cutting for angles always led to a total mess, filling the air with hazardous material. With ROCKFON’s Stone Wool Ceiling Tiles, you’re able to have a clean, customized ceiling that will fit into any design. Because they are so customizable, ROCKFON’s stone wool ceiling tiles are come in all shapes and sizes. Be it baffles, Islands or suspended ceilings, the choice is yours.</p>
	</div>
</div>

<?php $ceiling_category_parent = 42; // Stone Wool Ceiling Tiles ?>
<?php get_template_part('template_part-ceilings-accordion'); ?>

<div id="metal_ceilings">	
	<div class="background_container">
		<div class="wrap">
			<h3>Metal Ceilings</h3>
			
			<p>For a swanky, industrial design, ROCKFON’s metal ceilings are adaptable to any number of patterns and aesthetics you’re trying to achieve.</p>
		</div>
	</div>
</div>

<?php $ceiling_category_parent = 43; // Metal Ceilings ?>
<?php get_template_part('template_part-ceilings-accordion'); ?>

<div id="suspension_ceilings">	
	<div class="background_container">
		<div class="wrap">
			<h3>Suspension Systems</h3>
			
			<p>Chicago Metallic™ suspension systems by Rockfon® are designed and manufactured to exacting specifications to assure the most precise, consistent fit in the business. From traditional designs to custom solutions, Chicago Metallic™ suspension systems are aesthetically pleasing, easy-to install suspension solutions for your application.</p>
		</div>
	</div>
</div>

<?php $ceiling_category_parent = 77; // Metal Ceilings ?>
<?php get_template_part('template_part-ceilings-accordion'); ?>


<?php get_template_part('template_part-newsletter'); ?>

<?php get_footer(); ?>