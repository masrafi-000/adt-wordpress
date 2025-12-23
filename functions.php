<?php

/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */

add_action('wp_enqueue_scripts', 'astra_child_style');
function astra_child_style()
{

	// Tailwind output
	$tailwind_path = get_stylesheet_directory() . '/src/output.css';

	wp_enqueue_style(
		'astra-child-tailwind',
		get_stylesheet_directory_uri() . '/src/output.css',
		[],
		file_exists($tailwind_path) ? filemtime($tailwind_path) : null
	);

	// // Main theme style (style.css)
	// wp_enqueue_style(
	// 	'main-css',
	// 	get_stylesheet_uri(),
	// 	['tailwind-css'],
	// 	filemtime(get_stylesheet_directory() . '/style.css')
	// );


	// Enqueu Script
	wp_enqueue_script(
		'product-plan-js',
		get_template_directory_uri() . '/assets/js/product-plan.js'
	);
}

/**
 * Your code goes below.
 */

$child_plan  = get_stylesheet_directory() . '/inc/shortcodes/plan.php';
if (file_exists($child_plan)) {
	require_once $child_plan;
} 
