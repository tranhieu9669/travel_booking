<?php
namespace BookAwesome\Shortcode;

class ShortcodeSocials extends AbstractShortcode
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
        return 'bookawesome_socials';
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
        include $this->parent->locateTemplate('shortcode-socials.tpl.php');
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
                'type'       => 'param_group',
                'param_name' => 'items',
                'heading'    => esc_html__( 'List social', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'        => 'textfield',
                        'param_name'  => 'social_item',
                        'heading'     => esc_html__( 'Item social', 'bookawesome' ),
                        'description' => esc_html__('See list icon in -> http://fontawesome.io/icons', 'bookawesome')
                    ),
                    array(
                        'type'        => 'textfield',
                        'param_name'  => 'social_link',
                        'heading'     => esc_html__( 'Link social', 'bookawesome' ),
                    )
                )
            )
        );

        return array(
            'name'        => esc_html__('Socials', 'bookawesome'),
            'description' => esc_html__('Socials', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
