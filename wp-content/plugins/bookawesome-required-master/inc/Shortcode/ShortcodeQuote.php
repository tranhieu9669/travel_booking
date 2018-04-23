<?php
namespace BookAwesome\Shortcode;

class ShortcodeQuote extends AbstractShortcode
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
        return 'bookawesome_quote';
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
        include $this->parent->locateTemplate('shortcode-quote.tpl.php');
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
                'param_name' => 'quote_background',
                'heading'     => esc_html__('Backgrounnd', 'bookawesome')
            ),
            array(
                'type'        => 'textfield',
                'param_name'  => 'quote_icon',
                'heading'     => esc_html__('Icon', 'bookawesome'),
                'description' => esc_html__('See list icon in -> http://fontawesome.io/icons', 'bookawesome')
            ),
            array(
                'type'       => 'textarea_html',
                'param_name' => 'quote_content',
                'heading'    => esc_html__('Content of quote', 'bookawesome')
            ),

            array(
                'type'       => 'textfield',
                'param_name' => 'quote_date',
                'heading'    => esc_html__('Date', 'bookawesome')
            )
        );

        return array(
            'name'        => esc_html__('Quote', 'bookawesome'),
            'description' => esc_html__('Quote', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
