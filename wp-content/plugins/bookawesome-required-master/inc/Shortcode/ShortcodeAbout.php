<?php
namespace BookAwesome\Shortcode;

class ShortcodeAbout extends AbstractShortcode
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
        return 'bookawesome_about';
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
        include $this->parent->locateTemplate('shortcode-about.tpl.php');
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
                'param_name' => 'about_text_small_1',
                'heading'    => esc_html__('Text small 1', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'about_number',
                'heading'    => esc_html__('Number', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'about_text_small_2',
                'heading'    => esc_html__('Text small 2', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'about_title',
                'heading'    => esc_html__('Title', 'bookawesome')
            ),
            array(
                'type'       => 'textarea_html',
                'param_name' => 'about_desc',
                'heading'    => esc_html__('Description', 'bookawesome')
            ),
        );

        return array(
            'name'        => esc_html__('About', 'bookawesome'),
            'description' => esc_html__('About', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
