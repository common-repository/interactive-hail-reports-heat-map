<?php
	/*
	Plugin Name: Hail Reports Heatmap
	Plugin URI: http://www.interactivehailmaps.com/plugins/wordpress
	Description: Interactive Hail Maps gives web designers, weather enthusiasts, and severe weather related businesses such as roofers and paintless dent repair companies a cool, free, and easy to use map that can be used to illustrate the intensity of a hail storm in any area of the continental US. 
	Version: 1.0.1
	Author: Interactive Hail Maps
	Author URI: http://www.interactivehailmaps.com
	*/

	add_action('wp_print_styles', 'add_ihm_stylesheet');
	add_action('wp_enqueue_scripts', 'load_ihm_remote_scripts');
	add_shortcode('hailmap','get_hail_map');

	function add_ihm_stylesheet() {
	    wp_register_style( 'ihm_plugin_css', plugins_url( 'ihm_wpplugin.css', __FILE__ ) );
	    wp_enqueue_style( 'ihm_plugin_css' );
	}

	function load_ihm_remote_scripts() {

		wp_register_script( 'googleMapsAPI', 'http://maps.google.com/maps/api/js?sensor=false');
		wp_enqueue_script( 'googleMapsAPI' );

	}

	function get_hail_map($atts) {
		$date = urlencode($atts['date']);
		$state = urlencode($atts['state']);
		$city = urlencode($atts['city']);
		$zoom = urlencode($atts['zoom']);
		$hidedatenavigator = urlencode($atts['hidedatenavigator']);
		$hideheader = urlencode($atts['hideheader']);
		$heatonly = urlencode($atts['heatonly']);
		$url = "https://maps.interactivehailmaps.com/plugin/hailheatmapplugin?initialdate=$date&state=$state&city=$city&zoomlevel=$zoom&hidedatenavigator=$hidedatenavigator&hideheader=$hideheader&heatonly=$heatonly";
		$response = wp_remote_get($url);
		if( is_wp_error( $response ) ) {
		   return 'Interactive Hail Maps error';
		} else { 
		   return $response['body'];
		}
	}

?>