<?php
/*
Plugin Name: CLEA Add new functions 
Plugin URI:  http://knowledge.parcours-performance.com
Description: Ajouter des fonctions indépendantes du thème
Version:     0.1
Author:      Anne-Laure Delpech
Author URI:  http://knowledge.parcours-performance.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: clea-add-functions
 * @package			clea-add-functions
 * @version			0.1.0
 * @author 			Anne-Laure Delpech
 * @copyright 		Copyright (c) 2014-2014, Anne-Laure Delpech
 * @link			https://github.com/aldelpech/Plugins-WP/tree/master/cec29-ald-functions
 * @license 		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @since 			0.1.0
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/*----------------------------------------------------------------------------*
 * Path to files
 * @since 0.1.0
 *----------------------------------------------------------------------------*/
	/* 	will render
	http://testal.parcours-performance.com/wp-content/plugins/clea-add-functions/???  --> CLEA_ADD_FUNC_DIR_URL
	/home/parcoursz/testal/wp-content/plugins/clea-add-functions/???  --> CLEA_ADD_FUNC_DIR_URL
	clea-add-functions/clea-add-functions.php  --> CLEA_ADD_FUNC_BASENAME
	/home/parcoursz/testal/wp-content/plugins/clea-add-functions/clea-add-functions.php --> CLEA_ADD_FUNC_MAIN_FILE
	*/
	define( 'CLEA_ADD_FUNC_MAIN_FILE', __FILE__ );
	define( 'CLEA_ADD_FUNC_BASENAME', plugin_basename( CLEA_ADD_FUNC_MAIN_FILE ));
	define( 'CLEA_ADD_FUNC_DIR_PATH', plugin_dir_path( CLEA_ADD_FUNC_MAIN_FILE ));
	define( 'CLEA_ADD_FUNC_DIR_URL', plugin_dir_url( CLEA_ADD_FUNC_MAIN_FILE ));
	
	/* 
	echo '<p>' . CLEA_ADD_FUNC_DIR_URL . '???  --> CLEA_ADD_FUNC_DIR_URL' . '</p>' ;
	echo '<p>' . CLEA_ADD_FUNC_DIR_PATH . '???  --> CLEA_ADD_FUNC_DIR_URL' . '</p>' ;
	echo '<p>' . CLEA_ADD_FUNC_BASENAME . '???  --> CLEA_ADD_FUNC_BASENAME' . '</p>' ;
	echo '<p>' . CLEA_ADD_FUNC_MAIN_FILE . '???  --> CLEA_ADD_FUNC_MAIN_FILE' . '</p>' ;
	*/

/********************************************************************************
* appeler d'autres fichiers php et les exécuter
* @since 0.1
********************************************************************************/	
	/* main source of the code 
	* http://www.jeremycookson.com/how-to-add-scrolling-animations-in-wordpress/
	*/
	
	// charger des styles, fonts ou scripts correctement
	require_once CLEA_ADD_FUNC_DIR_PATH . 'includes/clea-add-functions-enqueues.php'; 

	// fonctions pour générer des boîtes avec des couleurs à tester
	require_once CLEA_ADD_FUNC_DIR_PATH . 'includes/clea-add-func-color-boxes.php'; 	
/******************************************************************************
* Actions à réaliser à l'initialisation et l'activation du plugin
* @since 0.1.0
******************************************************************************/

	function clea_add_func_functions_activation() {
		

	}

	register_activation_hook(__FILE__, 'clea_add_func_functions_activation'); // plugin's activation 


/*----------------------------------------------------------------------------*
 * deactivation and uninstall
 * * @since 0.1.0
 *----------------------------------------------------------------------------*/
	/* upon deactivation, wordpress also needs to rewrite the rules */
	register_deactivation_hook(__FILE__, 'clea_add_func_functions_deactivation');

	function clea_add_func_functions_deactivation() {
		// flush_rewrite_rules(); // pour remettre à 0 les permaliens
	}
	
	// register uninstaller
	register_uninstall_hook(__FILE__, 'clea_add_func_functions_uninstall');
	
	function clea_add_func_functions_uninstall() {    
		// actions to perform once on plugin uninstall go here
		// remove all options and custom tables
	}