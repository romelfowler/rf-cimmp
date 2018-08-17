<?php

function cimmp_pr_pt(){
  $labels = array(
    'name'=>__('Public Relations', 'cimmp_v2' ),
    'singular_name'=>__('Public Relations', 'cimmp_v2' ),
    'menu_name'           => __( 'Public Relations', 'cimmp_v2' ),
    'parent_item_colon'   => __( 'Parent Item:', 'cimmp_v2' ),
    'all_items'           => __( 'All PR', 'cimmp_v2' ),
    'view_item'           => __( 'View PR', 'cimmp_v2' ),
    'add_new_item'        => __( 'Add New PR', 'cimmp_v2' ),
    'add_new'             => __( 'Add New', 'cimmp_v2' ),
    'edit_item'           => __( 'Edit Public Relationss', 'cimmp_v2' ),
    'update_item'         => __( 'Update Item', 'cimmp_v2' ),
    'search_items'        => __( 'Search Item', 'cimmp_v2' ),
    'not_found'           => __( 'Not found', 'cimmp_v2' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'cimmp_v2' ),
);
$args = array(
    'label'               => __( 'Public Relations', 'cimmp_v2' ),
    'description'         => __( 'Post Type Description', 'cimmp_v2' ),
    'labels'              => $labels,
    'supports'            => array('title','editor', 'author', 'custom_fields', 'post_form', 'thumbnail'),
    'taxonomies'          => array( 'category', 'post_tag' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 13,
    'menu_icon'           =>'dashicons-universal-access-alt',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'rewrite'     => array( 'slug' => 'public-relations' ),

);


  register_post_type( 'cimmp_pr', $args );
}
add_action( 'init', 'cimmp_pr_pt', 13 );
