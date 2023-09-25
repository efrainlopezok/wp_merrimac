<?php if ($wp_query->max_num_pages > 1) { ?>
			<div class="navigation">
<?php if (function_exists('spm_pagination')) { spm_pagination(); } else { ?>
				<div class="alignleft"><?php next_posts_link('Next Page') ?></div>
				<div class="alignright"><?php previous_posts_link('Previous Page') ?></div>
<?php } ?>
			</div>
<?php } ?>