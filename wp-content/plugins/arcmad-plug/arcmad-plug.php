<?php
/*
 * Plugin Name: Arcmad
 * Description: An Arcmad plugin
 * Version 0.1
 */


 /*
* CPT - done
* Custom Taxonomy - done
* Create a few helper functions
* Theme vs Plugin functionality - done
* Q&A 
* Deploy the code to github
* i18n functions
*/

if ( ! defined( 'ARCMAD_PLUGIN_VERSION' ) ) {
    define( 'ARCMAD_PLUGIN_VERSION', '0.1' );
}

if ( ! defined ( 'ARCMAD_PLUGIN_ASSETS_URL' ) ) {
    define ( 'ARCMAD_PLUGIN_ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets' );
}

require 'includes/cpt-portfolio.php';
require 'includes/cpt-testimonial.php';