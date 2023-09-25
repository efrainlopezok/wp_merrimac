<?php

function content_shorten($content) {
	// Take the existing content and return a subset of it
	return substr($content, 0, 550) . "... <a href='".get_permalink()."'>read more</a>";
}


function spm_pagination($before = '', $after = '') {
	global $wpdb, $wp_query;
	
	if (is_single()) { return; }
	
	$total_pages =& $wp_query->max_num_pages;
	
	$current_page = (int) get_query_var('paged');
	if (empty($current_page) || $current_page == 0) {
		$current_page = 1;
	}
	
	$start_page = max($current_page - 5, 1); // Up to 5 pages back, but not beyond page 1
	$end_page = min($current_page + 5, $total_pages); // Up to 5 pages ahead, but not beyond the last page in the query
	
	$displayed_range =& $end_page - $start_page;
	
	if ($total_pages <= 1) { return; }
	
	echo $before."\n";
?>
<ul>
<?php
	// "First" link
	if ($start_page >= 2 && $displayed_range < $total_pages) {
?>
	<li><a href="<?php echo get_pagenum_link(); ?>">&laquo; <?php _e('First', 'amarcedu'); ?></a></li>
<?php
	}
	
	// "<<" link
	if ($current_page >= 2) {
?>
	<li><?php previous_posts_link('&laquo;'); ?></li>
<?php
	}
	
	// Numbered links loop
	for ($i = $start_page;$i <= $end_page;$i++) {
		if ($i == $current_page) {
?>
	<li><span><?php echo $i; ?></span></li>
<?php
		} else {
?>
	<li><a href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a></li>
<?php
		}
	}
	
	// ">>" link
	if ($current_page < $total_pages) {
?>
	<li><?php next_posts_link('&raquo;'); ?></li>
<?php
	}

	// "Last" link
	if ($end_page < $total_pages) {
?>
	<li><a href="<?php echo get_pagenum_link($total_pages); ?>"><?php _e('Last', SPM_TRANSLATION_DOMAIN); ?> &raquo;</a></li>
<?php
	}
?>
</ul>

<?php printf( __('Page %1$d of %2$d', SPM_TRANSLATION_DOMAIN), $current_page, $total_pages ); ?>
<?php
	echo $after."\n";
}