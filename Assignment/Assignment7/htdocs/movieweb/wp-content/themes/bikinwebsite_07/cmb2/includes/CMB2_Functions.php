<?php

function cmb2_themecrew() {
	
	/**/
	$labels = array(
		'name'                       => _x( 'Directors', 'Taxonomy General Name', 'bw_translate' ),
		'singular_name'              => _x( 'Director', 'Taxonomy Singular Name', 'bw_translate' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'director', array( 'post' ), $args );

	/**/
	$labels = array(
		'name'                       => _x( 'Writers', 'Taxonomy General Name', 'bw_translate' ),
		'singular_name'              => _x( 'Writer', 'Taxonomy Singular Name', 'bw_translate' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'writer', array( 'post' ), $args );
	
	/**/
	$labels = array(
		'name'                       => _x( 'Genre Movie', 'Taxonomy General Name', 'bw_translate' ),
		'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'bw_translate' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'genre', array( 'post' ), $args );	

	/**/
	$labels = array(
		'name'                       => _x( 'Artist Name', 'Taxonomy General Name', 'bw_translate' ),
		'singular_name'              => _x( 'Artist', 'Taxonomy Singular Name', 'bw_translate' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'artist', array( 'post' ), $args );	

}
add_action( 'init', 'cmb2_themecrew', 0 );

?>