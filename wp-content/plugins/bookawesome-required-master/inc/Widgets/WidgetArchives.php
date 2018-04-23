<?php 
namespace BookAwesome\Widgets;

class WidgetArchives extends AbstractWidget
{
	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Bookawesome Archives' );
	}

	function widget( $args, $instance ) {

		include $this->locateTemplate('widget-archives.tpl.php');
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['count'] = $new_instance['count'] ? 1 : 0;

		return $instance;
	}

	function form( $instance ) {
		$title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$count = isset( $instance['count'] ) ? $instance['count'] : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'bookawesome' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		
		<p>
			<input class="checkbox" type="checkbox"<?php checked( $count ); ?> id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" />
			<label for="<?php echo $this->get_field_id('count'); ?>"><?php _e( 'Show post counts', 'bookawesome' ); ?></label>
		</p>
		<?php
	}
}
