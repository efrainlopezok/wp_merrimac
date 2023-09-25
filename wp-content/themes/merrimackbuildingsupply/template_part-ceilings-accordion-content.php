<?php
$ceilings = new WP_Query( array('post_type' => 'ceiling', 'tax_query' => array( array('taxonomy' => 'ceiling_category',  'terms' => $accordion_term_id) ) ) );
if ( $ceilings->have_posts() ) :
?>
				<div class="columns four ceiling_items">
<?php while ( $ceilings->have_posts() ) : $ceilings->the_post(); ?>
					<div class="column ceiling_item">
<?php $post_thumbnail = has_post_thumbnail() ? current( wp_get_attachment_image_src( get_post_thumbnail_ID(), 'ceiling_solutions') ): get_template_directory_uri().'/images/accordion-ceiling_item-placeholder-img.jpg'; ?>
						<div class="image_container">
							<img src="<?php echo $post_thumbnail; ?>" alt="" />
							
							<div class="arrow_background"></div>
							<div class="arrow"></div>
						</div>
						
						<div class="ceiling_item_content">
							<h1><?php the_title(); ?></h1>
							
							<p>Color: <?php echo implode( ', ', wp_get_post_terms( get_the_ID(), 'ceiling_color', array('fields' => 'names') ) ); ?></p>
							
							<p>Texture: <?php echo implode( ', ', wp_get_post_terms( get_the_ID(), 'ceiling_texture', array('fields' => 'names') ) ); ?></p>
						</div>
						
						<a href="<?php the_permalink(); ?>" class="full_coverage_link">&nbsp;</a>
					</div>
<?php endwhile; ?>
					
					<div class="cleared"></div>
				</div>
<?php endif; wp_reset_query(); ?>
