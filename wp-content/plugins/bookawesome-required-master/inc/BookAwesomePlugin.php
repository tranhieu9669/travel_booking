<?php

namespace BookAwesome;

/**
 * @author lookawesome team
 * @version 1.0
 * @package BookAwesome
 * 
 * Init plugin for theme bookawesome
*/
class BookAwesomePlugin
{
    static $getInstance = null;

    public $version = '1.0';

    public static function getInstance()
    {
        if (!(self::$getInstance instanceof self)) {
            self::$getInstance = new self();
        }
        return self::$getInstance;
    }

    protected function __construct(){
        $this->loadModule();

        $this->init();
    }

    public function init(){

        do_action('bookawesome_before_init');

        new PostType\PostTypeInit;
        new Taxonomies\TaxonomiesInit;

        $this->themeSetting();

        if ( in_array( 'js_composer/js_composer.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
            $this->shortcode = new Shortcode\ShortcodeInit;
        }

        $this->widgets = new Widgets\InitWidget;

        do_action('bookawesome_after_init');
    }

    public function themeSetting(){
        $this->themeSetting = new ThemeSettings\ThemeSettingInit;
    }

    /**
     * load_module.
     * Load module for bookawesome.
     */
    protected function loadModule()
    {
        require_once 'Autoload/BookAwesomeAutoload.php';

        do_action('bookawesome_load_module');
       
        BookAwesomeAutoload::getInstance();
    }
}

function BookAwesomePlugin(){
    return BookAwesomePlugin::getInstance();
}

$GLOBALS['BookAwesomePlugin'] = BookAwesomePlugin();