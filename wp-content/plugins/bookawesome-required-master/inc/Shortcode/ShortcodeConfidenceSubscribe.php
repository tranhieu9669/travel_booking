<?php
namespace BookAwesome\Shortcode;

class ShortcodeConfidenceSubscribe extends AbstractShortcode
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
        return 'bookawesome_confidence_subscribe';
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

        $listItems = vc_param_group_parse_atts( $atts['items_confidence'] );
        $listSocials = vc_param_group_parse_atts( $atts['items_social'] );

        ob_start();
        include $this->parent->locateTemplate('shortcode-confidence-subscribe.tpl.php');
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
                'param_name' => 'confidence_background',
                'heading'    => esc_html__('Background', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'confidence_title',
                'heading'    => esc_html__('Title of confidence', 'bookawesome')
            ),
            array(
                'type'       => 'param_group',
                'param_name' => 'items_confidence',
                'heading'    => esc_html__( 'List confidence', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'        => 'textfield',
                        'param_name'  => 'confidence_title_item',
                        'heading'     => esc_html__( 'Title', 'bookawesome' )
                    ),
                    array(
                        'type'        => 'textfield',
                        'param_name'  => 'confidence_excerpt_item',
                        'heading'     => esc_html__( 'Excerpt', 'bookawesome' )
                    ),
                ),
            ),

            array(
                'type'       => 'textfield',
                'param_name' => 'subscribe_title',
                'heading'    => esc_html__('Title of subscribe', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'subscribe_desc',
                'heading'    => esc_html__('Title of description', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'subscribe_input_text',
                'heading'    => esc_html__('Text of input subscribe', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'subscribe_button_text',
                'heading'    => esc_html__('Text of button subscribe', 'bookawesome')
            ),

            array(
                'type'       => 'textfield',
                'param_name' => 'follow_title',
                'heading'    => esc_html__('Name of title follow', 'bookawesome')
            ),
            array(
                'type'       => 'param_group',
                'param_name' => 'items_social',
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
                        'heading'     => esc_html__( 'Link social', 'bookawesome' )
                    )
                )
            )
        );

        return array(
            'name'        => esc_html__('Confidence and Subscribe', 'bookawesome'),
            'description' => esc_html__('Confidence and Subscribe', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
