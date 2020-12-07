<?php
/**
 * Plugin Name:       Custom JS for GiveWP.
 * Description:       Adds Custom JS code to GiveWP's iframes.
 */
function add_custom_give_script() {
	wp_enqueue_script( 'give-custom-script', plugin_dir_url( __FILE__ ) . 'assets/js/give-custom-script.js' );
}
add_action( 'wp_enqueue_scripts', 'add_custom_give_script' );
