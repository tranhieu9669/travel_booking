<?php
namespace BookAwesome\Shortcode;

class ShortcodeMagazine extends AbstractShortcode
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
        return 'bookawesome_magazine';
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
        include $this->parent->locateTemplate('shortcode-magazine.tpl.php');
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
                'type'       => 'textfield',
                'param_name' => 'magazine_title',
                'heading'    => esc_html__('Title of travel magazine', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'magazine_button_text',
                'heading'    => esc_html__('Text of button', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'magazine_button_link',
                'heading'    => esc_html__('Link of button', 'bookawesome')
            )
        );

        return array(
            'name'        => esc_html__('Travel magazine', 'bookawesome'),
            'description' => esc_html__('Travel magazine', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
