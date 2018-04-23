<?php
namespace BookAwesome\Shortcode;

class ShortcodeOurTeam extends AbstractShortcode
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
        return 'bookawesome_our_team';
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
        include $this->parent->locateTemplate('shortcode-our-team.tpl.php');
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
                'param_name' => 'team_title',
                'heading'    => esc_html__('Title of our team', 'bookawesome')
            ),
            array(
                'type'       => 'textarea',
                'param_name' => 'team_desc',
                'heading'    => esc_html__('Description of our team', 'bookawesome')
            ),
            array(
                'type'       => 'param_group',
                'param_name' => 'items',
                'heading'    => esc_html__( 'List personnel', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'        => 'attach_image',
                        'param_name'  => 'personnel_avatar',
                        'heading'     => esc_html__( 'Avatar of personnel', 'bookawesome' )
                    ),
                    array(
                        'type'        => 'textfield',
                        'param_name'  => 'personnel_name',
                        'heading'     => esc_html__( 'Name of personnel', 'bookawesome' )
                    ),
                    array(
                        'type'        => 'textfield',
                        'param_name'  => 'personnel_positon',
                        'heading'     => esc_html__( 'Position of personnel', 'bookawesome' )
                    )
                )
            )
        );

        return array(
            'name'        => esc_html__('Our Team', 'bookawesome'),
            'description' => esc_html__('Our Team', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
