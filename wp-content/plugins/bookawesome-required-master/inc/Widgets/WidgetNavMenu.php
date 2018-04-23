<?php 
namespace BookAwesome\Widgets;

class WidgetNavMenu extends AbstractWidget
{
	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Bookawesome Nav Menu' );
	}

	function widget( $args, $instance ) {
		// Get menu
		$nav_menu = ! empty( $instance['nav_menu'] ) ? ( $instance['nav_menu'] ) : false;

		if ( ! $nav_menu ) {
			return;
		}
		$listItems = wp_get_nav_menu_items($nav_menu);
		
        include $this->locateTemplate('widget-navmenu.tpl.php');
	}

	function update( $new_instance, $old_instance ) {
		$instance = [];
		if ( ! empty( $new_instance['nav_menu'] ) ) {
			$instance['nav_menu'] = (int) $new_instance['nav_menu'];
		}

		return $instance;
	}

	function form( $instance ) {
		$listNavMenus = wp_get_nav_menus();
		$nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';
		?>
		<div class="nav-menu-widget-form-controls">
			<p>
				<label for="<?php echo $this->get_field_id( 'nav_menu' ); ?>"><?php _e( 'Select Menu', 'bookawesome' ); ?>:</label>
				<select id="<?php echo $this->get_field_id( 'nav_menu' ); ?>" name="<?php echo $this->get_field_name( 'nav_menu' ); ?>">
					<option value="0">— Select —</option>
					<?php foreach ($listNavMenus as $value): ?>
						<option value="<?php echo $value->term_id; ?>" <?php selected( $nav_menu, $value->term_id ); ?>><?php _e( $value->name, 'bookawesome' ); ?></option>
					<?php endforeach ?>
				</select>
			</p>
		</div>
		<?php 
	}
}
