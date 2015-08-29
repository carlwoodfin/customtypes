<?php
 
/**
* Plugin Name: Allsaints CustomTypes
* Description: A plugin to create a custom post type and User Roles for Allsaints
* Version:  1.0
* Author: Carl Woodfin
* License:  GPL2
*/

/* THis is Year 1 Custom Type */

add_action( 'init', 'register_cpt_cp_name' );
 
function register_cpt_cp_name() {
 
    $labels = array( 
  	'name'               => __( 'Year 1 Posts ', 'text_domain' ),
		'singular_name'      => __( 'Year 1 Post', 'text_domain' ),
		'add_new'            => _x( 'Add New Year 1 Post', '${4:Name}', 'text_domain' ),
		'add_new_item'       => __( 'Add New Year 1 Post', 'text_domain}' ),
		'edit_item'          => __( 'Edit Year 1 Post', 'text_domain' ),
		'new_item'           => __( 'New Year 1 Post', 'text_domain' ),
		'view_item'          => __( 'View Year 1 Post', 'text_domain' ),
		'search_items'       => __( 'Search Year 1 Posts', 'text_domain' ),
		'not_found'          => __( 'No Year 1 Posts found', 'text_domain' ),
		'not_found_in_trash' => __( 'No Year 1 Posts found in Trash', 'text_domain' ),
		'parent_item_colon'  => __( 'Parent Year 1 Post:', 'text_domain' ),
		'menu_name'          => __( 'Year 1 Posts', 'text_domain' ),
    );
 
    $args = array( 
		'labels'              => $labels,
		'hierarchical'        => true,
		'description'         => 'description',
		'taxonomies'          => array( 'category' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		//'menu_icon'         => '',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite' 			  => true,
		'capability_type'     => array('year1post','year1posts'),
        'map_meta_cap'        => true, 
		'supports'            => array( 
									'title', 'editor', 'thumbnail', 
									'comments', 
									'revisions', 'post-formats'
								),
    );
 
    register_post_type( 'year-1', $args );
}

function create_post_type_labels($singular, $plural = null) {

	if ($plural === null) {
		$plural = $singular.'s';
	}

	$labels = array(
		'name'               => __( $plural, 'text-domain'),
		'singular_name'      => __( $singular, 'text-domain'),
		'menu_name'          => __( $plural, 'text-domain'),
		'name_admin_bar'     => __( $singular, 'text-domain'),
		'add_new'            => __( 'Add New '.$singular, 'text-domain'),
		'add_new_item'       => __( 'Add New '.$singular, 'text-domain'),
		'new_item'           => __( 'New '.$singular, 'text-domain'),
		'edit_item'          => __( 'Edit '.$singular, 'text-domain'),
		'view_item'          => __( 'View '.$singular, 'text-domain'),
		'all_items'          => __( 'All '.$plural, 'text-domain'),
		'search_items'       => __( 'Search '.$plural, 'text-domain'),
		'parent_item_colon'  => __( 'Parent '.$plural.':', 'text-domain'),
		'not_found'          => __( 'No '.$plural.' found.', 'text-domain'),
		'not_found_in_trash' => __( 'No '.$plural.' found in Trash.', 'text-domain')
	);

	return $labels;
}

/* THis is Year 2 Custom Type */

add_action( 'init', 'register_cpt_cp_year2' );
 
function register_cpt_cp_year2() {
 
    $labels = array( 
  	'name'               => __( 'Year 2 Posts ', 'text_domain' ),
		'singular_name'      => __( 'Year 2 Post', 'text_domain' ),
		'add_new'            => _x( 'Add New Year 2 Post', '${4:Name}', 'text_domain' ),
		'add_new_item'       => __( 'Add New Year 2 Post', 'text_domain}' ),
		'edit_item'          => __( 'Edit Year 2 Post', 'text_domain' ),
		'new_item'           => __( 'New Year 2 Post', 'text_domain' ),
		'view_item'          => __( 'View Year 2 Post', 'text_domain' ),
		'search_items'       => __( 'Search Year 2 Posts', 'text_domain' ),
		'not_found'          => __( 'No Year 2 Posts found', 'text_domain' ),
		'not_found_in_trash' => __( 'No Year 2 Posts found in Trash', 'text_domain' ),
		'parent_item_colon'  => __( 'Parent Year 2 Post:', 'text_domain' ),
		'menu_name'          => __( 'Year 2 Posts', 'text_domain' ),
    );
 
    $args = array( 
		'labels'              => $labels,
		'hierarchical'        => true,
		'description'         => 'description',
		'taxonomies'          => array( 'category' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		//'menu_icon'         => '',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => array('year2post','year2posts'),
        'map_meta_cap'        => true, 
		'supports'            => array( 
									'title', 'editor', 'thumbnail', 
									'comments', 
									'revisions', 'post-formats'
								),
    );
 
    register_post_type( 'year-2', $args );
}

function create_year2_post_type_labels($singular, $plural = null) {

	if ($plural === null) {
		$plural = $singular.'s';
	}

	$labels = array(
		'name'               => __( $plural, 'text-domain'),
		'singular_name'      => __( $singular, 'text-domain'),
		'menu_name'          => __( $plural, 'text-domain'),
		'name_admin_bar'     => __( $singular, 'text-domain'),
		'add_new'            => __( 'Add New '.$singular, 'text-domain'),
		'add_new_item'       => __( 'Add New '.$singular, 'text-domain'),
		'new_item'           => __( 'New '.$singular, 'text-domain'),
		'edit_item'          => __( 'Edit '.$singular, 'text-domain'),
		'view_item'          => __( 'View '.$singular, 'text-domain'),
		'all_items'          => __( 'All '.$plural, 'text-domain'),
		'search_items'       => __( 'Search '.$plural, 'text-domain'),
		'parent_item_colon'  => __( 'Parent '.$plural.':', 'text-domain'),
		'not_found'          => __( 'No '.$plural.' found.', 'text-domain'),
		'not_found_in_trash' => __( 'No '.$plural.' found in Trash.', 'text-domain')
	);

	return $labels;
}

/* THis is Year 3 Custom Type */

add_action( 'init', 'register_cpt_cp_year3' );
 
function register_cpt_cp_year3() {
 
    $labels = array( 
  	'name'               => __( 'Year 3 Posts ', 'text_domain' ),
		'singular_name'      => __( 'Year 3 Post', 'text_domain' ),
		'add_new'            => _x( 'Add New Year 3 Post', '${4:Name}', 'text_domain' ),
		'add_new_item'       => __( 'Add New Year 3 Post', 'text_domain}' ),
		'edit_item'          => __( 'Edit Year 3 Post', 'text_domain' ),
		'new_item'           => __( 'New Year 3 Post', 'text_domain' ),
		'view_item'          => __( 'View Year 3 Post', 'text_domain' ),
		'search_items'       => __( 'Search Year 3 Posts', 'text_domain' ),
		'not_found'          => __( 'No Year 3 Posts found', 'text_domain' ),
		'not_found_in_trash' => __( 'No Year 3 Posts found in Trash', 'text_domain' ),
		'parent_item_colon'  => __( 'Parent Year 3 Post:', 'text_domain' ),
		'menu_name'          => __( 'Year 3 Posts', 'text_domain' ),
    );
 
    $args = array( 
		'labels'              => $labels,
		'hierarchical'        => true,
		'description'         => 'description',
		'taxonomies'          => array( 'category' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		//'menu_icon'         => '',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => array('year3post','year3posts'),
        'map_meta_cap'        => true, 
		'supports'            => array( 
									'title', 'editor', 'thumbnail', 
									'comments', 
									'revisions', 'post-formats'
								),
    );
 
    register_post_type( 'year-3', $args );
}

function create_year3_post_type_labels($singular, $plural = null) {

	if ($plural === null) {
		$plural = $singular.'s';
	}

	$labels = array(
		'name'               => __( $plural, 'text-domain'),
		'singular_name'      => __( $singular, 'text-domain'),
		'menu_name'          => __( $plural, 'text-domain'),
		'name_admin_bar'     => __( $singular, 'text-domain'),
		'add_new'            => __( 'Add New '.$singular, 'text-domain'),
		'add_new_item'       => __( 'Add New '.$singular, 'text-domain'),
		'new_item'           => __( 'New '.$singular, 'text-domain'),
		'edit_item'          => __( 'Edit '.$singular, 'text-domain'),
		'view_item'          => __( 'View '.$singular, 'text-domain'),
		'all_items'          => __( 'All '.$plural, 'text-domain'),
		'search_items'       => __( 'Search '.$plural, 'text-domain'),
		'parent_item_colon'  => __( 'Parent '.$plural.':', 'text-domain'),
		'not_found'          => __( 'No '.$plural.' found.', 'text-domain'),
		'not_found_in_trash' => __( 'No '.$plural.' found in Trash.', 'text-domain')
	);

	return $labels;
}

/* THis is Year 4 Custom Type */

add_action( 'init', 'register_cpt_cp_year4' );
 
function register_cpt_cp_year4() {
 
    $labels = array( 
  	'name'               => __( 'Year 4 Posts ', 'text_domain' ),
		'singular_name'      => __( 'Year 4 Post', 'text_domain' ),
		'add_new'            => _x( 'Add New Year 4 Post', '${4:Name}', 'text_domain' ),
		'add_new_item'       => __( 'Add New Year 4 Post', 'text_domain}' ),
		'edit_item'          => __( 'Edit Year 4 Post', 'text_domain' ),
		'new_item'           => __( 'New Year 4 Post', 'text_domain' ),
		'view_item'          => __( 'View Year 4 Post', 'text_domain' ),
		'search_items'       => __( 'Search Year 4 Posts', 'text_domain' ),
		'not_found'          => __( 'No Year 4 Posts found', 'text_domain' ),
		'not_found_in_trash' => __( 'No Year 4 Posts found in Trash', 'text_domain' ),
		'parent_item_colon'  => __( 'Parent Year 4 Post:', 'text_domain' ),
		'menu_name'          => __( 'Year 4 Posts', 'text_domain' ),
    );
 
    $args = array( 
		'labels'              => $labels,
		'hierarchical'        => true,
		'description'         => 'description',
		'taxonomies'          => array( 'category' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		//'menu_icon'         => '',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => array('year4post','year4posts'),
        'map_meta_cap'        => true,
		'supports'            => array( 
									'title', 'editor', 'thumbnail', 
									'comments', 
									'revisions', 'post-formats'
								),
    );
 
    register_post_type( 'year-4', $args );
}

function create_year4_post_type_labels($singular, $plural = null) {

	if ($plural === null) {
		$plural = $singular.'s';
	}

	$labels = array(
		'name'               => __( $plural, 'text-domain'),
		'singular_name'      => __( $singular, 'text-domain'),
		'menu_name'          => __( $plural, 'text-domain'),
		'name_admin_bar'     => __( $singular, 'text-domain'),
		'add_new'            => __( 'Add New '.$singular, 'text-domain'),
		'add_new_item'       => __( 'Add New '.$singular, 'text-domain'),
		'new_item'           => __( 'New '.$singular, 'text-domain'),
		'edit_item'          => __( 'Edit '.$singular, 'text-domain'),
		'view_item'          => __( 'View '.$singular, 'text-domain'),
		'all_items'          => __( 'All '.$plural, 'text-domain'),
		'search_items'       => __( 'Search '.$plural, 'text-domain'),
		'parent_item_colon'  => __( 'Parent '.$plural.':', 'text-domain'),
		'not_found'          => __( 'No '.$plural.' found.', 'text-domain'),
		'not_found_in_trash' => __( 'No '.$plural.' found in Trash.', 'text-domain')
	);

	return $labels;
}

/* THis is Year 2 Custom Type */

add_action( 'init', 'register_cpt_cp_year5' );
 
function register_cpt_cp_year5() {
 
    $labels = array( 
  	'name'               => __( 'Year 5 Posts ', 'text_domain' ),
		'singular_name'      => __( 'Year 5 Post', 'text_domain' ),
		'add_new'            => _x( 'Add New Year 5 Post', '${4:Name}', 'text_domain' ),
		'add_new_item'       => __( 'Add New Year 5 Post', 'text_domain}' ),
		'edit_item'          => __( 'Edit Year 5 Post', 'text_domain' ),
		'new_item'           => __( 'New Year 5 Post', 'text_domain' ),
		'view_item'          => __( 'View Year 5 Post', 'text_domain' ),
		'search_items'       => __( 'Search Year 5 Posts', 'text_domain' ),
		'not_found'          => __( 'No Year 5 Posts found', 'text_domain' ),
		'not_found_in_trash' => __( 'No Year 5 Posts found in Trash', 'text_domain' ),
		'parent_item_colon'  => __( 'Parent Year 5 Post:', 'text_domain' ),
		'menu_name'          => __( 'Year 5 Posts', 'text_domain' ),
    );
 
    $args = array( 
		'labels'              => $labels,
		'hierarchical'        => true,
		'description'         => 'description',
		'taxonomies'          => array( 'category' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		//'menu_icon'         => '',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => array('year5post','year5posts'),
        'map_meta_cap'        => false, 
		'supports'            => array( 
									'title', 'editor', 'thumbnail', 
									'comments', 
									'revisions', 'post-formats'
								),
    );
 
    register_post_type( 'year-5', $args );
}

function create_year5_post_type_labels($singular, $plural = null) {

	if ($plural === null) {
		$plural = $singular.'s';
	}

	$labels = array(
		'name'               => __( $plural, 'text-domain'),
		'singular_name'      => __( $singular, 'text-domain'),
		'menu_name'          => __( $plural, 'text-domain'),
		'name_admin_bar'     => __( $singular, 'text-domain'),
		'add_new'            => __( 'Add New '.$singular, 'text-domain'),
		'add_new_item'       => __( 'Add New '.$singular, 'text-domain'),
		'new_item'           => __( 'New '.$singular, 'text-domain'),
		'edit_item'          => __( 'Edit '.$singular, 'text-domain'),
		'view_item'          => __( 'View '.$singular, 'text-domain'),
		'all_items'          => __( 'All '.$plural, 'text-domain'),
		'search_items'       => __( 'Search '.$plural, 'text-domain'),
		'parent_item_colon'  => __( 'Parent '.$plural.':', 'text-domain'),
		'not_found'          => __( 'No '.$plural.' found.', 'text-domain'),
		'not_found_in_trash' => __( 'No '.$plural.' found in Trash.', 'text-domain')
	);

	return $labels;
}
/* THis is Year 2 Custom Type */

add_action( 'init', 'register_cpt_cp_year6' );
 
function register_cpt_cp_year6() {
 
    $labels = array( 
  	'name'               => __( 'Year 6 Posts ', 'text_domain' ),
		'singular_name'      => __( 'Year 6 Post', 'text_domain' ),
		'add_new'            => _x( 'Add New Year 6 Post', '${4:Name}', 'text_domain' ),
		'add_new_item'       => __( 'Add New Year 6 Post', 'text_domain}' ),
		'edit_item'          => __( 'Edit Year 6 Post', 'text_domain' ),
		'new_item'           => __( 'New Year 6 Post', 'text_domain' ),
		'view_item'          => __( 'View Year 6 Post', 'text_domain' ),
		'search_items'       => __( 'Search Year 6 Posts', 'text_domain' ),
		'not_found'          => __( 'No Year 6 Posts found', 'text_domain' ),
		'not_found_in_trash' => __( 'No Year 6 Posts found in Trash', 'text_domain' ),
		'parent_item_colon'  => __( 'Parent Year 6 Post:', 'text_domain' ),
		'menu_name'          => __( 'Year 6 Posts', 'text_domain' ),
    );
 
    $args = array( 
		'labels'              => $labels,
		'hierarchical'        => true,
		'description'         => 'description',
		'taxonomies'          => array( 'category' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		//'menu_icon'         => '',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => array('year6post','year6posts'),
        'map_meta_cap'        => false, 
		'supports'            => array( 
									'title', 'editor', 'thumbnail', 
									'comments', 
									'revisions', 'post-formats'
								),
    );
 
    register_post_type( 'year-6', $args );
}

function create_year6_post_type_labels($singular, $plural = null) {

	if ($plural === null) {
		$plural = $singular.'s';
	}

	$labels = array(
		'name'               => __( $plural, 'text-domain'),
		'singular_name'      => __( $singular, 'text-domain'),
		'menu_name'          => __( $plural, 'text-domain'),
		'name_admin_bar'     => __( $singular, 'text-domain'),
		'add_new'            => __( 'Add New '.$singular, 'text-domain'),
		'add_new_item'       => __( 'Add New '.$singular, 'text-domain'),
		'new_item'           => __( 'New '.$singular, 'text-domain'),
		'edit_item'          => __( 'Edit '.$singular, 'text-domain'),
		'view_item'          => __( 'View '.$singular, 'text-domain'),
		'all_items'          => __( 'All '.$plural, 'text-domain'),
		'search_items'       => __( 'Search '.$plural, 'text-domain'),
		'parent_item_colon'  => __( 'Parent '.$plural.':', 'text-domain'),
		'not_found'          => __( 'No '.$plural.' found.', 'text-domain'),
		'not_found_in_trash' => __( 'No '.$plural.' found in Trash.', 'text-domain')
	);

	return $labels;
}

add_action( 'init', 'register_cpt_slider' );

function register_cpt_slider() {
 
    $labels = array( 
  	'name'               => __( 'Slider Posts ', 'text_domain' ),
		'singular_name'      => __( 'Slider Post', 'text_domain' ),
		'add_new'            => _x( 'Add New Slider Post', '${4:Name}', 'text_domain' ),
		'add_new_item'       => __( 'Add New Slider Post', 'text_domain}' ),
		'edit_item'          => __( 'Edit Slider Post', 'text_domain' ),
		'new_item'           => __( 'New Slider Post', 'text_domain' ),
		'view_item'          => __( 'View Slider Post', 'text_domain' ),
		'search_items'       => __( 'Search Slider Posts', 'text_domain' ),
		'not_found'          => __( 'No Slider Posts found', 'text_domain' ),
		'not_found_in_trash' => __( 'No Slider Posts found in Trash', 'text_domain' ),
		'parent_item_colon'  => __( 'Parent Slider Post:', 'text_domain' ),
		'menu_name'          => __( 'Slider Posts', 'text_domain' ),
    );
 
    $args = array( 
		'labels'              => $labels,
		'hierarchical'        => true,
		'description'         => 'description',
		'taxonomies'          => array( 'category' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		//'menu_icon'         => '',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post', 
		'supports'            => array( 
									'title','thumbnail' 
									
								),
    );
 
    register_post_type( 'slider', $args );
}

function create_slider_post_type_labels($singular, $plural = null) {

	if ($plural === null) {
		$plural = $singular.'s';
	}

	$labels = array(
		'name'               => __( $plural, 'text-domain'),
		'singular_name'      => __( $singular, 'text-domain'),
		'menu_name'          => __( $plural, 'text-domain'),
		'name_admin_bar'     => __( $singular, 'text-domain'),
		'add_new'            => __( 'Add New '.$singular, 'text-domain'),
		'add_new_item'       => __( 'Add New '.$singular, 'text-domain'),
		'new_item'           => __( 'New '.$singular, 'text-domain'),
		'edit_item'          => __( 'Edit '.$singular, 'text-domain'),
		'view_item'          => __( 'View '.$singular, 'text-domain'),
		'all_items'          => __( 'All '.$plural, 'text-domain'),
		'search_items'       => __( 'Search '.$plural, 'text-domain'),
		'parent_item_colon'  => __( 'Parent '.$plural.':', 'text-domain'),
		'not_found'          => __( 'No '.$plural.' found.', 'text-domain'),
		'not_found_in_trash' => __( 'No '.$plural.' found in Trash.', 'text-domain')
	);

	return $labels;
}

function psp_add_project_management_role() {
 add_role('year1_user',
            'Year 1',
            array(
                'read' => true,
                'edit_posts' => false,
                'delete_posts' => false,
                'publish_posts' => false,
                'upload_files' => true,
            )
        );
 		add_role('year2_user',
            'Year 2',
            array(
                'read' => true,
                'edit_posts' => false,
                'delete_posts' => false,
                'publish_posts' => false,
                'upload_files' => true,
            )
        );
        add_role('year3_user',
            'Year 3',
            array(
                'read' => true,
                'edit_posts' => false,
                'delete_posts' => false,
                'publish_posts' => false,
                'upload_files' => true,
            )
        );
        add_role('year4_user',
            'Year 4',
            array(
                'read' => true,
                'edit_posts' => false,
                'delete_posts' => false,
                'publish_posts' => false,
                'upload_files' => true,
            )
        );
        add_role('year5_user',
            'Year 5',
            array(
                'read' => true,
                'edit_posts' => false,
                'delete_posts' => false,
                'publish_posts' => false,
                'upload_files' => true,
            )
        );
        add_role('year6_user',
            'Year 6',
            array(
                'read' => true,
                'edit_posts' => false,
                'delete_posts' => false,
                'publish_posts' => false,
                'upload_files' => true,
            )
        );

   }
   

add_action( 'init', 'psp_add_project_management_role' );

add_action('admin_init','psp_add_role_caps',999);
    function psp_add_role_caps() {

		// Add the roles you'd like to administer the custom post types
		$roles = array('year1_user');
		
		// Loop through each role and assign capabilities
		foreach($roles as $the_role) { 

		     $role = get_role($the_role);
			
	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year1post');
	             $role->add_cap( 'read_private_year1posts' );
	             $role->add_cap( 'edit_year1post' );
	             $role->add_cap( 'edit_year1posts' );
	             $role->remove_cap( 'edit_others_year1posts' );
	             $role->remove_cap( 'edit_published_year1posts' );
	             $role->remove_cap( 'publish_year1posts' );
	             $role->remove_cap( 'delete_others_year1posts' );
	             $role->remove_cap( 'delete_private_year1posts' );
	             $role->remove_cap( 'delete_published_year1posts' );
		
		}
		$roles = array('year2_user');
		
		// Loop through each role and assign capabilities
		foreach($roles as $the_role) { 

		     $role = get_role($the_role);
			
	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year2post');
	             $role->add_cap( 'read_private_year2posts' );
	             $role->add_cap( 'edit_year2post' );
	             $role->add_cap( 'edit_year2posts' );
	             $role->remove_cap( 'edit_others_year2posts' );
	             $role->remove_cap( 'edit_published_year2posts' );
	             $role->remove_cap( 'publish_year2posts' );
	             $role->remove_cap( 'delete_others_year2posts' );
	             $role->remove_cap( 'delete_private_year2posts' );
	             $role->remove_cap( 'delete_published_year2posts' );
		
		}
		$roles = array('year3_user');
		
		// Loop through each role and assign capabilities
		foreach($roles as $the_role) { 

		     $role = get_role($the_role);
			
	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year3post');
	             $role->add_cap( 'read_private_year3posts' );
	             $role->add_cap( 'edit_year3post' );
	             $role->add_cap( 'edit_year3posts' );
	             $role->remove_cap( 'edit_others_year3posts' );
	             $role->remove_cap( 'edit_published_year3posts' );
	             $role->remove_cap( 'publish_year3posts' );
	             $role->remove_cap( 'delete_others_year3posts' );
	             $role->remove_cap( 'delete_private_year3posts' );
	             $role->remove_cap( 'delete_published_year3posts' );
		
		}
		$roles = array('year4_user');
		
		// Loop through each role and assign capabilities
		foreach($roles as $the_role) { 

		     $role = get_role($the_role);
			
	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year4post');
	             $role->add_cap( 'read_private_year4posts' );
	             $role->add_cap( 'edit_year4post' );
	             $role->add_cap( 'edit_year4posts' );
	             $role->remove_cap( 'edit_others_year4posts' );
	             $role->remove_cap( 'edit_published_year4posts' );
	             $role->remove_cap( 'publish_year4posts' );
	             $role->remove_cap( 'delete_others_year4posts' );
	             $role->remove_cap( 'delete_private_year4posts' );
	             $role->remove_cap( 'delete_published_year4posts' );
		
		}
		$roles = array('year5_user');
		
		// Loop through each role and assign capabilities
		foreach($roles as $the_role) { 

		     $role = get_role($the_role);
			
	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year5post');
	             $role->add_cap( 'read_private_year5posts' );
	             $role->add_cap( 'edit_year5post' );
	             $role->add_cap( 'edit_year5posts' );
	             $role->remove_cap( 'edit_others_year5posts' );
	             $role->remove_cap( 'edit_published_year5posts' );
	             $role->remove_cap( 'publish_year5posts' );
	             $role->remove_cap( 'delete_others_year5posts' );
	             $role->remove_cap( 'delete_private_year5posts' );
	             $role->remove_cap( 'delete_published_year5posts' );
		
		}
		$roles = array('year6_user');
		
		// Loop through each role and assign capabilities
		foreach($roles as $the_role) { 

		     $role = get_role($the_role);
			
	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year6post');
	             $role->add_cap( 'read_private_year6posts' );
	             $role->add_cap( 'edit_year6post' );
	             $role->add_cap( 'edit_year6posts' );
	             $role->remove_cap( 'edit_others_year6posts' );
	             $role->remove_cap( 'edit_published_year6posts' );
	             $role->remove_cap( 'publish_year6posts' );
	             $role->remove_cap( 'delete_others_year6posts' );
	             $role->remove_cap( 'delete_private_year6posts' );
	             $role->remove_cap( 'delete_published_year6posts' );
		
		}
		$roles = array('administrator');
		
		// Loop through each role and assign capabilities
		foreach($roles as $the_role) { 

		     $role = get_role($the_role);

	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year1post');
	             $role->add_cap( 'read_private_year1posts' );
	             $role->add_cap( 'edit_year1post' );
	             $role->add_cap( 'edit_year1posts' );
	             $role->add_cap( 'edit_others_year1posts' );
	             $role->add_cap( 'edit_published_year1posts' );
	             $role->add_cap( 'publish_year1posts' );
	             $role->add_cap( 'delete_others_year1posts' );
	             $role->add_cap( 'delete_private_year1posts' );
	             $role->add_cap( 'delete_published_year1posts' );
	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year2post');
	             $role->add_cap( 'read_private_year2posts' );
	             $role->add_cap( 'edit_year2post' );
	             $role->add_cap( 'edit_year2posts' );
	             $role->add_cap( 'edit_others_year2posts' );
	             $role->add_cap( 'edit_published_year2posts' );
	             $role->add_cap( 'publish_year2posts' );
	             $role->add_cap( 'delete_others_year2posts' );
	             $role->add_cap( 'delete_private_year2posts' );
	             $role->add_cap( 'delete_published_year2posts' );
	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year3post');
	             $role->add_cap( 'read_private_year3posts' );
	             $role->add_cap( 'edit_year3post' );
	             $role->add_cap( 'edit_year3posts' );
	             $role->add_cap( 'edit_others_year3posts' );
	             $role->add_cap( 'edit_published_year3posts' );
	             $role->add_cap( 'publish_year3posts' );
	             $role->add_cap( 'delete_others_year3posts' );
	             $role->add_cap( 'delete_private_year3posts' );
	             $role->add_cap( 'delete_published_year3posts' );
	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year4post');
	             $role->add_cap( 'read_private_year4posts' );
	             $role->add_cap( 'edit_year4post' );
	             $role->add_cap( 'edit_year4posts' );
	             $role->add_cap( 'edit_others_year4posts' );
	             $role->add_cap( 'edit_published_year4posts' );
	             $role->add_cap( 'publish_year4posts' );
	             $role->add_cap( 'delete_others_year4posts' );
	             $role->add_cap( 'delete_private_year4posts' );
	             $role->add_cap( 'delete_published_year4posts' );
				 $role->add_cap( 'read' );
	             $role->add_cap( 'read_year5post');
	             $role->add_cap( 'read_private_year5posts' );
	             $role->add_cap( 'edit_year5post' );
	             $role->add_cap( 'edit_year5posts' );
	             $role->add_cap( 'edit_others_year5posts' );
	             $role->add_cap( 'edit_published_year5posts' );
	             $role->add_cap( 'publish_year5posts' );
	             $role->add_cap( 'delete_others_year5posts' );
	             $role->add_cap( 'delete_private_year5posts' );
	             $role->add_cap( 'delete_published_year5posts' );
	             $role->add_cap( 'read' );
	             $role->add_cap( 'read_year6post');
	             $role->add_cap( 'read_private_year6posts' );
	             $role->add_cap( 'edit_year6post' );
	             $role->add_cap( 'edit_year6posts' );
	             $role->add_cap( 'edit_others_year6posts' );
	             $role->add_cap( 'edit_published_year6posts' );
	             $role->add_cap( 'publish_year6posts' );
	             $role->add_cap( 'delete_others_year6posts' );
	             $role->add_cap( 'delete_private_year6posts' );
	             $role->add_cap( 'delete_published_year6posts' );
		
		}
		

}

?>