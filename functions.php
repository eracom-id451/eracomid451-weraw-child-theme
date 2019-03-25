<?php

function weraw_style_parent() {

	// enqueue parent styles
	wp_enqueue_style('atomic-blocks-parent-theme', get_template_directory_uri() .'/style.css');

	//chargement de la typo depuis google fonts
	wp_enqueue_style('googlefonts-weraw', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700');

		wp_enqueue_style('googlefonts-weraw2', 'https://fonts.googleapis.com/css?family=Inconsolata');


}


add_action('wp_enqueue_scripts', 'weraw_style_parent');

/* Allowed FileTypes
 ********************
 * method based on
 * http://howto.blbosti.com/?p=329
 * List of defaults: https://core.trac.wordpress.org/browser/tags/3.8.1/src/wp-includes/functions.php#L1948
*/
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
		// add an extension to the array
		$existing_mimes['svg'] = 'image/svg+xml';
		// remove existing file types
		unset( $existing_mimes['bmp'] );
		unset( $existing_mimes['tif|tiff'] );
		// and return the new full result
		return $existing_mimes;
}
