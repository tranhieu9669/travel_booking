<?php

namespace BookAwesome\Taxonomies;

use BookAwesome\Taxonomies\PortsTaxonomie;
use BookAwesome\Taxonomies\AreaTaxonomie;
use BookAwesome\Taxonomies\FacilitiesTaxonomie;
use BookAwesome\Taxonomies\LocationTaxonomie;
use BookAwesome\Taxonomies\CuiseLineTaxonomie;

/**
 * @author lookawesome team
 * @version 1.0
 * @package taxonomie
 * 
 * Register taxonomie for theme bookawesome
 */
class TaxonomiesInit {

	public function __construct(){
		new PortsTaxonomie;
		new AreaTaxonomie;
		new FacilitiesTaxonomie;
		new CuiseLineTaxonomie;
	}
}