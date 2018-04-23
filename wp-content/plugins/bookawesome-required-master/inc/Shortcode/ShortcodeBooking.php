<?php
namespace BookAwesome\Shortcode;

class ShortcodeBooking extends AbstractShortcode
{
    public function __construct($self = null) {
        $this->parent = $self;
        add_shortcode($this->get_name(), array($this, 'render'));
        vc_lean_map($this->get_name(), array($this, 'map'));
    }

    /**
     * Get shortcode name.
     *
     * @return string
     */
    public function get_name() {
        return 'bookawesome_booking';
    }

    /**
     * Shortcode handler.
     *
     * @param array $atts Shortcode attributes.
     *
     * @return string Shortcode output.
     */
    public function render($atts) {
        $atts = vc_map_get_attributes($this->get_name(), $atts);
        $atts = array_map('trim', $atts);

        ob_start();
        include $this->parent->locateTemplate('shortcode-booking.tpl.php');
        return ob_get_clean();
    }

    /**
     * Get shortcode settings.
     *
     * @return array
     *
     * @see vc_lean_map()
     */
    public function map() {
        $params = array(
            array(
                'type'       => 'attach_image',
                'param_name' => 'booking_background',
                'heading'    => esc_html__('Background', 'bookawesome')
            ),
            array(
                'type'       => 'attach_image',
                'param_name' => 'booking_logo',
                'heading'    => esc_html__('Logo banner', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'booking_link',
                'heading'    => esc_html__('Link of logo banner', 'bookawesome')
            )
        );

        return array(
            'name'        => esc_html__('Booking', 'bookawesome'),
            'description' => esc_html__('Booking', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
