<?php 
namespace BookAwesome\Widgets;

class WidgetLogo extends AbstractWidget
{
	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Bookawesome Logo' );
	}

	function widget( $args, $instance ) {
        include $this->locateTemplate('widget-logo.tpl.php');
	}

	function update( $new_instance, $old_instance ) {
		$instance = [];
		$instance['images'] = $new_instance['images'];

		return $instance;
	}

	function form( $instance ) {
		$images = !isset( $instance['images'] ) ? $instance['images'] : '';
		?>
		<label>Images:</label>
		<div class="bookawesome-logo-wrap">
			<input type="hidden" id="bookawesome-images-name" value="<?php echo $this->get_field_name( 'images' ); ?>">
			<div class="bookawesome-logo-image">
				<?php if ( !empty( $images ) ): ?>
					<img src="<?php echo wp_get_attachment_url( $images ); ?>" alt="">
					<input type="hidden" name="<?php echo $this->get_field_name( 'images' ); ?>" value="<?php echo $images; ?>">
				<?php else: ?>
					<?php esc_html_e( 'No images selected', 'bookawesome' ); ?>
				<?php endif ?>
			</div>
			<div class="bookawesome-logo-buttons">
				<button type="button" class="button">
					<?php esc_html_e( 'Add Image', 'bookawesome' ); ?>
				</button>
			</div>
		</div>
		<?php 
	}
}
