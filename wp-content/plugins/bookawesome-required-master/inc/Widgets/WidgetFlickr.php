<?php 
namespace BookAwesome\Widgets;

class WidgetFlickr extends AbstractWidget
{
	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Bookawesome Flickr' );
	}

	function widget( $args, $instance ) {
		$apiUrl = 'http://api.instagram.com/v1/'. $instance['showby'] .'/'. $instance['val'] .'/media/recent?access_token='. $instance['token'] .'&count='. $instance['number'];
		$result = file_get_contents( $apiUrl );
		$data = (array) json_decode( $result, true );
		if ( ! $data['data'] ) {
			return;
		}
		include $this->locateTemplate('widget-flickr.tpl.php');
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['token'] = sanitize_text_field( $new_instance['token'] );
		$instance['showby'] = $new_instance['showby'];
		$instance['val'] = sanitize_text_field( $new_instance['val'] );
		$instance['number'] = (int) $new_instance['number'];

		return $instance;
	}

	function form( $instance ) {
		$title  = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$token  = isset( $instance['token'] ) ? esc_attr( $instance['token'] ) : '';
		$showby = isset( $instance['showby'] ) ? $instance['showby'] : '';
		$val    = isset( $instance['val'] ) ? esc_attr( $instance['val'] ) : '';
		$number = isset( $instance['number'] ) ? absint( $instance['number'] ) : 6;
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'bookawesome' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'token' ); ?>"><?php _e( 'Token:', 'bookawesome' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'token' ); ?>" name="<?php echo $this->get_field_name( 'token' ); ?>" type="text" value="<?php echo $token; ?>" />
			<small>Get token of your at <a href="https://smashballoon.com/instagram-feed/token/">here</a></small>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'showby' ); ?>"><?php _e( 'Show from Instagram by', 'bookawesome' ); ?>:
			</label>
			<select name="<?php echo $this->get_field_name( 'showby' ); ?>" id="<?php echo $this->get_field_id( 'showby' ); ?>" class="widefat">
				<option value="users" <?php selected( $showby, 'users' ) ?>>ID User</option>
				<option value="tags" <?php selected( $showby, 'tags' ) ?>>Tags</option>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'val' ); ?>"><?php _e( 'Value', 'bookawesome' ); ?>:
			</label>
			<input type="text" value="<?php echo $val; ?>" name="<?php echo $this->get_field_name( 'val' ); ?>" id="<?php echo $this->get_field_id( 'val' ); ?>" class="widefat">
			<small>Find ID Instagram at <a href="https://smashballoon.com/instagram-feed/find-instagram-user-id/">here</a></small>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of photo to show:', 'bookawesome' ); ?>
			</label>
			<input class="tiny-text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $number; ?>" size="3" />
		</p>
		<?php
	}
}
