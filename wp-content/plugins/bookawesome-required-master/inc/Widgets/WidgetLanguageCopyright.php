<?php 
namespace BookAwesome\Widgets;

class WidgetLanguageCopyright extends AbstractWidget
{
	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Bookawesome Language Copyright' );
	}

	function widget( $args, $instance ) {
        include $this->locateTemplate('widget-language-copyright.tpl.php');
	}

	function update( $new_instance, $old_instance ) {
		$instance = [];
		$instance['copyright'] = sanitize_text_field( $new_instance['copyright'] );

		return $instance;
	}

	function form( $instance ) {
		$copyright  = isset( $instance['copyright'] ) ? esc_attr( $instance['copyright'] ) : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'copyright' ); ?>"><?php _e( 'Copyright:', 'bookawesome' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'copyright' ); ?>" name="<?php echo $this->get_field_name( 'copyright' ); ?>" type="text" value="<?php echo $copyright; ?>" />
		</p>
		<?php 
	}
}
