<?php
/**
 *
 * générer des boîtes contenant du texte et des couleurs pour évaluer ce qu'on conserve
 *
 *
 * @link       	http://parcours-performance.com/anne-laure-delpech/#ald
 * @since      	0.1.0
 *
 * @package    clea-add-func
 * @subpackage clea-add-func/includes
 */


	$colors = array();
	/* up to 6 colors max 
	* description, hexa, R, G, B, a)*/
	$colors[0] = array( 
		'description' 	=> 'PANTONE 439C - noir chaud',
		'hexa'			=> '#423432',
		'R'				=> 66,
		'V'				=> 52,
		'B'				=> 50,
		'a'				=> 1   /* 1 for 100% */
	);

	$colors[1] = array( 
		'description' 	=> 'PANTONE 715C orange clair',
		'hexa'			=> '#f28a2b',
		'R'				=> 242,
		'V'				=> 138,
		'B'				=> 43,
		'a'				=> 1   /* 1 for 100% */
	);	
	
	$colors[2] = array( 
		'description' 	=> 'PANTONE 715C orange clair',
		'hexa'			=> '#f28a2b',
		'R'				=> 242,
		'V'				=> 138,
		'B'				=> 43,
		'a'				=> 1   /* 1 for 100% */
	);

	$colors[3] = array( 
		'description' 	=> 'PANTONE 1645C orange + vif',
		'hexa'			=> '#ed693b',
		'R'				=> 237,
		'V'				=> 105,
		'B'				=> 59,
		'a'				=> 1   /* 1 for 100% */
	);

	$colors[4] = array( 
		'description' 	=> 'PANTONE 179c rouge',
		'hexa'			=> '#e6392c',
		'R'				=> 230,
		'V'				=> 57,
		'B'				=> 44,
		'a'				=> 1   /* 1 for 100% */
	);

	$colors[5] = array( 
		'description' 	=> 'PANTONE 5483C bleu-vert',
		'hexa'			=> '#4c858d',
		'R'				=> 76,
		'V'				=> 133,
		'B'				=> 141,
		'a'				=> 1   /* 1 for 100% */
	);	
	
	$colors[6] = array( 
		'description' 	=> 'PANTONE 127c jaune',
		'hexa'			=> '#f6db6b',
		'R'				=> 246,
		'V'				=> 219,
		'B'				=> 107,
		'a'				=> 1   /* 1 for 100% */
	);

function clea_add_func_generate_shades() {
	foreach ( $colors as $color ) {
		$background = $color ;
		foreach ( $colors as $text) {
			$return = '<div class=""color-box" style="background: "' . $background[ 'hexa' ] . " ;"; 
			/* texte à mettre dans le fond en utilisant $text-color 
			cf regle de style pp*/
		}
		$return.=$return ;			
	}
	
	return $return ;
}
