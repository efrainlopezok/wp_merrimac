<?php

function spm_add_meta_boxes() {
	
	// Custom Meta Boxes for various post types
	add_meta_box('page-options', 'Options', 'spm_page_options_html', 'page', 'normal');
	add_meta_box('ceiling-options', 'Options', 'spm_ceiling_options_html', 'ceiling', 'normal');
	
}
add_action('add_meta_boxes', 'spm_add_meta_boxes');


/* ------- PAGE OPTIONS ------- */
function spm_page_options_html($post) {
	
	$alternate_title = get_post_meta($post->ID, '_alternate_title', true);
	$sub_heading = get_post_meta($post->ID, '_sub_heading', true);
	
	wp_nonce_field('page-options', 'page-nonce');
	
?>
<table class="form-table">
	<tr>
		<th scope="row">
			<label for="page-alternate_title"><?php _e('Alternate Title', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="page-alternate_title" name="page-alternate_title" value="<?php echo esc_attr($alternate_title); ?>" class="large-text" /><br />
			<span class="description"><?php _e('Enter a title here to be displayed on the page instead of the original title above.', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="page-sub_heading"><?php _e('Sub-Heading', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="page-sub_heading" name="page-sub_heading" value="<?php echo esc_attr($sub_heading); ?>" class="large-text" /><br />
			<span class="description"><?php _e('Enter optional text to appear below the page title.', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
</table>
<?php
}


function spm_page_options_save_post($post_id) {
	
	if (
		$_POST['post_type'] != 'page' ||							// Check if saving a page
		defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ||				// Don't run if autosaving
		!isset( $_POST['page-nonce'] ) ||							// Check if our nonce is set
		!wp_verify_nonce( $_POST['page-nonce'], 'page-options' ) ||	// Verify that the nonce is valid
		!current_user_can('edit_post', $post_id)					// Check the user's permissions
	)
		return $post_id;
	
	// Update the meta fields in the database
	update_post_meta( $post_id, '_alternate_title', $_POST['page-alternate_title'] );
	update_post_meta( $post_id, '_sub_heading', $_POST['page-sub_heading'] );
	
}
add_action('save_post', 'spm_page_options_save_post');
/* ------- END PAGE OPTIONS ------- */


/* ------- CEILING OPTIONS ------- */
function spm_ceiling_options_html($post) {
	
	$banner_image = get_post_meta($post->ID, '_banner_image', true);
	$specifications_features_and_benefits = get_post_meta($post->ID, '_features_and_benefits', true);
	$specifications_fire_performance = get_post_meta($post->ID, '_fire_performance', true);
	$specifications_astm_e1264_classification = get_post_meta($post->ID, '_astm_e1264_classification', true);
	$specifications_applications = get_post_meta($post->ID, '_applications', true);
	$specifications_materials = get_post_meta($post->ID, '_materials', true);
	$specifications_hygienic_properties = get_post_meta($post->ID, '_hygienic_properties', true);
	$specifications_sustainability = get_post_meta($post->ID, '_sustainability', true);
	$datasheet_url = get_post_meta($post->ID, '_datasheet_url', true);
	
	wp_nonce_field('ceiling-options', 'ceiling-nonce');
	
?>
<table class="form-table">
	<tr>
		<th scope="row">
			<label for="ceiling-banner_image"><?php _e('Banner Image', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="ceiling-banner_image" name="ceiling-banner_image" value="<?php echo esc_attr($banner_image); ?>" class="large-text" /><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="ceiling-specifications-features_and_benefits"><?php _e('Features and Benefits', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<textarea id="ceiling-specifications-features_and_benefits" name="ceiling-features_and_benefits" class="large-text"><?php echo esc_attr($specifications_features_and_benefits); ?></textarea><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="ceiling-specifications-specifications-fire_performance"><?php _e('Fire Performance', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<textarea id="ceiling-specifications-fire_performance" name="ceiling-fire_performance" class="large-text"><?php echo esc_attr($specifications_fire_performance); ?></textarea><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="ceiling-specifications-astm_e1264_classification"><?php _e('ASTM E1264 Classification', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="ceiling-specifications-astm_e1264_classification" name="ceiling-astm_e1264_classification" value="<?php echo esc_attr($specifications_astm_e1264_classification); ?>" class="large-text" /><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="ceiling-specifications-applications"><?php _e('Applications', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<textarea id="ceiling-specifications-applications" name="ceiling-applications" class="large-text"><?php echo esc_attr($specifications_applications); ?></textarea><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="ceiling-specifications-materials"><?php _e('Materials', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<textarea id="ceiling-specifications-materials" name="ceiling-materials" class="large-text"><?php echo esc_attr($specifications_materials); ?></textarea><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="ceiling-specifications-hygienic_properties"><?php _e('Hygienic Properties', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<textarea id="ceiling-specifications-hygienic_properties" name="ceiling-hygienic_properties" class="large-text"><?php echo esc_attr($specifications_hygienic_properties); ?></textarea><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="ceiling-specifications-sustainability"><?php _e('Sustainability', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<textarea id="ceiling-specifications-sustainability" name="ceiling-sustainability" class="large-text"><?php echo esc_attr($specifications_sustainability); ?></textarea><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="ceiling-datasheet_url"><?php _e('Datasheet URL', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="ceiling-datasheet_url" name="ceiling-datasheet_url" value="<?php echo esc_attr($datasheet_url); ?>" class="large-text" /><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
</table>
<?php
}


function spm_ceiling_options_save_post($post_id) {
	
	if (
		$_POST['post_type'] != 'ceiling' ||									// Check if saving a Ceiling custom post type
		defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ||						// Don't run if autosaving
		!isset( $_POST['ceiling-nonce'] ) ||								// Check if our nonce is set
		!wp_verify_nonce( $_POST['ceiling-nonce'], 'ceiling-options' ) ||	// Verify that the nonce is valid
		!current_user_can('edit_post', $post_id)							// Check the user's permissions
	)
		return $post_id;
	
	// Update the meta fields in the database
	update_post_meta( $post_id, '_banner_image', $_POST['ceiling-banner_image'] );
	update_post_meta( $post_id, '_features_and_benefits', $_POST['ceiling-features_and_benefits'] );
	update_post_meta( $post_id, '_fire_performance', $_POST['ceiling-fire_performance'] );
	update_post_meta( $post_id, '_astm_e1264_classification', $_POST['ceiling-astm_e1264_classification'] );
	update_post_meta( $post_id, '_applications', $_POST['ceiling-applications'] );
	update_post_meta( $post_id, '_materials', $_POST['ceiling-materials'] );
	update_post_meta( $post_id, '_hygienic_properties', $_POST['ceiling-hygienic_properties'] );
	update_post_meta( $post_id, '_sustainability', $_POST['ceiling-sustainability'] );
	update_post_meta( $post_id, '_datasheet_url', $_POST['ceiling-datasheet_url'] );
	
}
add_action('save_post', 'spm_ceiling_options_save_post');
/* ------- END CEILING OPTIONS ------- */