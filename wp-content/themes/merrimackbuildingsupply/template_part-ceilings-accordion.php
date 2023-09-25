<?php global $ceiling_category_parent; ?>

<div id="accordion">
	<div class="wrap">
<?php $ceiling_types = get_terms( array('taxonomy' => 'ceiling_category', 'parent' => $ceiling_category_parent) ); ?>
<?php if ($ceiling_types) { ?>
		<div class="ui-accordion">
<?php foreach ($ceiling_types as $ceiling_type) { ?>
			<p class="ui-accordion-header"><a href="#"><?php echo $ceiling_type->name; ?></a></p>
			
			<div class="ui-accordion-content">
<?php $ceiling_types_inner = get_terms( array('taxonomy' => 'ceiling_category', 'parent' => $ceiling_type->term_id) ); ?>
<?php if ($ceiling_types_inner) { // products exist in inner category ?>
				<div class="ui-accordion inner">
<?php foreach ($ceiling_types_inner as $ceiling_type_inner) { ?>
					<p class="ui-accordion-header"><a href="#"><?php echo $ceiling_type_inner->name; ?></a></p>	
					
					<div class="ui-accordion-content">
						
<?php $accordion_term_id = $ceiling_type_inner->term_id; ?>
<?php include( locate_template('template_part-ceilings-accordion-content.php') ); ?>
						
					</div>
<?php } ?>
				</div>
<?php } else { // products only exist in outer category ?>
				
<?php $accordion_term_id = $ceiling_type->term_id; ?>
<?php include( locate_template('template_part-ceilings-accordion-content.php') ); ?>
				
			</div>
<?php } ?>
<?php } ?>
		</div>
<?php } ?>
	</div>
</div>
