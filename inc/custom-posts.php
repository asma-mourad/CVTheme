<?php
// Add custom post type work experience

// Register Custom Post Type
function cvtheme_post_types() {

	$work_labels = array(
		'name'                  => _x( 'Work Experience', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Work Experience', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Work Experience', 'text_domain' ),
		'name_admin_bar'        => __( 'Work Experience', 'text_domain' ),
		'archives'              => __( 'Work exp Archives', 'text_domain' ),
		'attributes'            => __( 'Work exp Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Work Exp', 'text_domain' ),
		'add_new_item'          => __( 'Add New Work Exp', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Work Exp', 'text_domain' ),
		'edit_item'             => __( 'Edit Work exp', 'text_domain' ),
		'update_item'           => __( 'Update Work Exp', 'text_domain' ),
		'view_item'             => __( 'View Work Exp', 'text_domain' ),
		'view_items'            => __( 'View Work Exp', 'text_domain' ),
		'search_items'          => __( 'Search Work Exp', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Work exp', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Work exp', 'text_domain' ),
		'items_list'            => __( 'Work exp list', 'text_domain' ),
		'items_list_navigation' => __( 'Work exp list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Work exp list', 'text_domain' ),
	);
	$work_args = array(
		'label'                 => __( 'Work Experience', 'text_domain' ),
		'description'           => __( 'Work Experience', 'text_domain' ),
		'labels'                => $work_labels,
		'supports'              => array( 'title', 'editor', 'custom-fields', 'post-formats' ),
		'show_in_rest' 			=> true,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	
		$educ_labels = array(
		'name'                  => _x( 'Education', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Education', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Education', 'text_domain' ),
		'name_admin_bar'        => __( 'Education', 'text_domain' ),
		'archives'              => __( 'Education Archives', 'text_domain' ),
		'attributes'            => __( 'Education Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Education', 'text_domain' ),
		'add_new_item'          => __( 'Add New Education', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Education', 'text_domain' ),
		'edit_item'             => __( 'Edit Education', 'text_domain' ),
		'update_item'           => __( 'Update Education', 'text_domain' ),
		'view_item'             => __( 'View Education', 'text_domain' ),
		'view_items'            => __( 'View Education', 'text_domain' ),
		'search_items'          => __( 'Search Education', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Education', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Education', 'text_domain' ),
		'items_list'            => __( 'Education list', 'text_domain' ),
		'items_list_navigation' => __( 'Education list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Education list', 'text_domain' ),
	);
	$educ_args = array(
		'label'                 => __( 'Education', 'text_domain' ),
		'description'           => __( 'Education', 'text_domain' ),
		'labels'                => $educ_labels,
		'supports'              => array( 'title', 'editor', 'custom-fields', 'post-formats' ),
		'show_in_rest' 			=> true,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
		$skills_labels = array(
		'name'                  => _x( 'Skills', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Skill', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Skills', 'text_domain' ),
		'name_admin_bar'        => __( 'Skills', 'text_domain' ),
		'archives'              => __( 'Skill Archives', 'text_domain' ),
		'attributes'            => __( 'Skill Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Skills', 'text_domain' ),
		'add_new_item'          => __( 'Add New Skill', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Skill', 'text_domain' ),
		'edit_item'             => __( 'Edit Skill', 'text_domain' ),
		'update_item'           => __( 'Update Skill', 'text_domain' ),
		'view_item'             => __( 'View Skill', 'text_domain' ),
		'view_items'            => __( 'View Skills', 'text_domain' ),
		'search_items'          => __( 'Search Skills', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Skill', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Skill', 'text_domain' ),
		'items_list'            => __( 'Skills list', 'text_domain' ),
		'items_list_navigation' => __( 'Skills list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Skill list', 'text_domain' ),
	);
	$skills_args = array(
		'label'                 => __( 'Skill', 'text_domain' ),
		'description'           => __( 'Skill', 'text_domain' ),
		'labels'                => $skills_labels,
		'supports'              => array( 'title', 'custom-fields', 'post-formats' ),
		'show_in_rest' 			=> true,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);

	$languages_labels = array(
		'name'                  => _x( 'Languages', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Language', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Languages', 'text_domain' ),
		'name_admin_bar'        => __( 'Languages', 'text_domain' ),
		'archives'              => __( 'Language Archives', 'text_domain' ),
		'attributes'            => __( 'Language Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Languages', 'text_domain' ),
		'add_new_item'          => __( 'Add New Language', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Language', 'text_domain' ),
		'edit_item'             => __( 'Edit Language', 'text_domain' ),
		'update_item'           => __( 'Update Language', 'text_domain' ),
		'view_item'             => __( 'View Language', 'text_domain' ),
		'view_items'            => __( 'View Languages', 'text_domain' ),
		'search_items'          => __( 'Search Languages', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Language', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Language', 'text_domain' ),
		'items_list'            => __( 'Languages list', 'text_domain' ),
		'items_list_navigation' => __( 'Languages list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Language list', 'text_domain' ),
	);
	$languages_args = array(
		'label'                 => __( 'Language', 'text_domain' ),
		'description'           => __( 'Language', 'text_domain' ),
		'labels'                => $languages_labels,
		'supports'              => array( 'title', 'custom-fields', 'post-formats' ),
		'show_in_rest' 			=> true,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	
	register_post_type( 'work-experience', $work_args );
	register_post_type( 'education', $educ_args );
	register_post_type( 'skills', $skills_args );
	register_post_type( 'languages', $languages_args );

}
add_action( 'init', 'cvtheme_post_types', 0 );