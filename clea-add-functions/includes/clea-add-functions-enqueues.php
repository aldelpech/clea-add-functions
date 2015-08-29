<?php
/**
 *
 * charger animate.css et wow.js
 *
 *
 * @link       	http://parcours-performance.com/anne-laure-delpech/#ald
 * @since      	0.1.0
 *
 * @package    ald-animate
 * @subpackage ald-animate/includes
 */

add_action( 'wp_enqueue_scripts', 'clea_add_func_enqueue_scripts' ); 
 
function clea_add_func_enqueue_scripts() {
	// feuille de style pour l'animation
	wp_enqueue_style( 'animate', CLEA_ADD_FUNC_DIR_URL . '/css/animate.min.css' ); 


	/* enqueue the wow js script */
	wp_enqueue_script( 'wow', CLEA_ADD_FUNC_DIR_URL .  '/js/wow.min.js', array( 'jquery' ), true );
}
