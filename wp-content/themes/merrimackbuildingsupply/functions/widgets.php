<?php

class SPM_Latest_News extends WP_Widget {
	
	public function __construct() {
		$widget_ops = array('classname' => 'spm_widget_latest_news', 'description' => __( "Display the latest news on your site") );
		parent::__construct('spm-latest-news', __('Latest News'), $widget_ops);

		add_action( 'save_post', array($this, 'flush_widget_cache') );
		add_action( 'deleted_post', array($this, 'flush_widget_cache') );
		add_action( 'switch_theme', array($this, 'flush_widget_cache') );
	}

	public function widget($args, $instance) {
		$cache = wp_cache_get('widget_spm_latest_news', 'widget');

		if ( !is_array($cache) )
			$cache = array();

		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']) ? __('Latest News') : $instance['title'], $instance, $this->id_base);
		if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
 			$number = 10;
		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
		if ($r->have_posts()) :
?>
		<?php echo $before_widget; ?>
		<?php if ( $title ) echo $before_title . $title . $after_title; ?>
		<?php while ( $r->have_posts() ) : $r->the_post(); ?>
		<article class="post">
			<p class="title"><a href="<?php the_permalink() ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a></p>
			
			<?php if ( $show_date ) : ?>
				<p class="postmetadata"><?php the_time('M. jS Y'); ?></p>
			<?php endif; ?>
			
			<?php the_excerpt(); ?>
		</article>
		
		<?php endwhile; ?>
		
		<?php echo $after_widget; ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;

		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('widget_spm_latest_news', $cache, 'widget');
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
		$instance['show_date'] = (bool) $new_instance['show_date'];
		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_recent_entries']) )
			delete_option('widget_recent_entries');

		return $instance;
	}
	
	public function flush_widget_cache() {
		wp_cache_delete('widget_spm_latest_news', 'widget');
	}
	
	public function form( $instance ) {
		$title					= isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number					= isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$show_date				= isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
		$show_post_thumbnail	= isset( $instance['show_post_thumbnail'] ) ? (bool) $instance['show_post_thumbnail'] : false;
?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
		<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

		<p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
		<label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label></p>
<?php
	}
}
register_widget('SPM_Latest_News');


class SPM_Document_Link extends WP_Widget {
	
	public function __construct() {
		$widget_ops = array('classname' => 'spm_widget_document_link', 'description' => __( "Display a Document Link post type in a widget") );
		parent::__construct('spm-document-link', __('Document Link'), $widget_ops);

		add_action( 'save_post', array($this, 'flush_widget_cache') );
		add_action( 'deleted_post', array($this, 'flush_widget_cache') );
		add_action( 'switch_theme', array($this, 'flush_widget_cache') );
	}

	public function widget($args, $instance) {
		$cache = wp_cache_get('widget_spm_document_link', 'widget');

		if ( !is_array($cache) )
			$cache = array();

		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}
		
		$document_link_id = $instance['document_link_id'];
		if ( ! $document_link_id) return;

		ob_start();
		extract($args);

		$document_link_id = isset( $instance['show_date'] ) ? $instance['document_link_id'] : false;
		
		$r = new WP_Query( array( 'post_type' => 'document_link', 'p' => $document_link_id, 'posts_per_page' => 1 ) );
		if ($r->have_posts()) : $r->the_post();
		
		$title = apply_filters('widget_title', get_the_title(), $instance, $this->id_base);
?>
		<?php echo $before_widget; ?>
		<?php if ( $title ) echo $before_title . $title . $after_title; ?>
		<article class="post">
			
			<?php the_content(); ?>
			
			<p><a href="<?php echo esc_attr( get_post_meta( get_the_ID(), '_url', true) ); ?>" class="download_link" target="_blank">&nbsp;</a></p>
		</article>
		
		<?php echo $after_widget; ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;

		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('widget_spm_document_link', $cache, 'widget');
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['document_link_id'] = (int) $new_instance['document_link_id'];
		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_spm_document_link']) )
			delete_option('widget_spm_document_link');

		return $instance;
	}
	
	public function flush_widget_cache() {
		wp_cache_delete('widget_spm_document_link', 'widget');
	}
	
	public function form( $instance ) {
		$document_link_id = isset( $instance['document_link_id'] ) ? absint( $instance['document_link_id'] ) : 5;
?>
		<p><label for="<?php echo $this->get_field_id( 'document_link_id' ); ?>"><?php _e( 'ID of document to show:' ); ?></label>
		<input id="<?php echo $this->get_field_id( 'document_link_id' ); ?>" name="<?php echo $this->get_field_name( 'document_link_id' ); ?>" type="text" value="<?php echo $document_link_id; ?>" size="3" /></p>
<?php
	}
}
register_widget('SPM_Document_Link');