<?php
namespace BookAwesome\Shortcode;

class ShortcodeContact extends AbstractShortcode
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
        return 'bookawesome_contact';
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
        include $this->parent->locateTemplate('shortcode-contact.tpl.php');
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
                'param_name' => 'contact_latlng',
                'heading'    => esc_html__('Code latlng of Google maps', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'contact_title',
                'heading'    => esc_html__('Title', 'bookawesome')
            ),
            array(
                'type'       => 'param_group',
                'param_name' => 'items',
                'heading'    => esc_html__( 'List contact', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'        => 'attach_image',
                        'param_name'  => 'item_icon',
                        'heading'     => esc_html__( 'Item icon contact', 'bookawesome' )
                    ),
                    array(
                        'type'        => 'textfield',
                        'param_name'  => 'item_text',
                        'heading'     => esc_html__( 'Item text contact', 'bookawesome' )
                    )
                )
            )
        );

        return array(
            'name' => esc_html__('Contact', 'bookawesome'),
            'description' => esc_html__('Contact', 'bookawesome'),
            'category' => $this->get_category(),
            'icon' => $this->get_icon(),
            'params' => $params
        );
    }
}
