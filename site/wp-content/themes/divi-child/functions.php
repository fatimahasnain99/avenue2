<?php
///add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles');

//function enqueue_parent_styles(){
	
//	wp_enqueue_style('abc', get_stylesheet_directory_uri().'/style.css');
//}
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>