<?php

function weraw_style_parent() {
	
	// enqueue parent styles
	wp_enqueue_style('atomic-blocks-parent-theme', get_template_directory_uri() .'/style.css');
	
}


add_action('wp_enqueue_scripts', 'weraw_style_parent');