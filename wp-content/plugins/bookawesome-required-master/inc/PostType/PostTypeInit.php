<?php

namespace BookAwesome\PostType;

use BookAwesome\PostType\HotelPostType;
use BookAwesome\PostType\FlightPostType;
use BookAwesome\PostType\CarPostType;
use BookAwesome\PostType\PackagePostType;
use BookAwesome\PostType\TourPostType;
use BookAwesome\PostType\CruisePostType;

/**
 * @author lookawesome team
 * @version 1.0
 * @package PostType
 * 
 * Register post type for theme bookawesome
 */
class PostTypeInit {

	public function __construct(){
		new HotelPostType;
		new FlightPostType;
		new CarPostType;
		new PackagePostType;
		new TourPostType;
		new CruisePostType;
	}
}