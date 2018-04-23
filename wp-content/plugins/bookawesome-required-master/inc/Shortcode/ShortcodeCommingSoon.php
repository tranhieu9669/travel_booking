<?php
namespace BookAwesome\Shortcode;

class ShortcodeCommingSoon extends AbstractShortcode
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
        return 'bookawesome_comingsoon';
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
        
        $listItems = vc_param_group_parse_atts( $atts['items'] );

        ob_start();
        include $this->parent->locateTemplate('shortcode-comingsoon.tpl.php');
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
                'param_name' => 'comingsoon_background',
                'heading'    => esc_html__('Background', 'bookawesome')
            ),
            array(
                'type'       => 'attach_image',
                'param_name' => 'comingsoon_banner',
                'heading'    => esc_html__('Banner', 'bookawesome')
            ),
            array(
                'type'       => 'attach_image',
                'param_name' => 'comingsoon_logo',
                'heading'    => esc_html__('Logo', 'bookawesome')
            ),
            array(
                'type'       => 'param_group',
                'param_name' => 'items',
                'heading'    => esc_html__( 'List slide', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'       => 'textfield',
                        'param_name' => 'items_heading',
                        'heading'    => esc_html__('Heading', 'bookawesome')
                    ),
                    array(
                        'type'       => 'textarea',
                        'param_name' => 'items_excerpt',
                        'heading'    => esc_html__('Excerpt', 'bookawesome')
                    )
                )
            )
        );
        return array(
            'name'        => esc_html__('Comming Soon', 'bookawesome'),
            'description' => esc_html__('Comming Soon', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
