<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'No direct script access allowed' );
}

/**
* @package BookAwesomeTheme
* @version 1.0
* @author lookawesome team
*
* Class Init for theme
*/
class BookAwesomeTheme
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
    	// Init scripts for theme.
    	$this->bookAwesomeScripts();
    }

    /**
     * bookAwesomeScripts
     * Load library object script.
     * 
     * @return void
     */
    protected function bookAwesomeScripts(){
    	require_once 'inc/BookAwesomeScripts.php';
    	new BookAwesomeScripts;
    }
}

function BookAwesomeTheme(){
	return BookAwesomeTheme::getInstance();
}

$GLOBALS['bookAwesomeTheme'] = BookAwesomeTheme();

include 'inc/AfterSetupTheme.php';
