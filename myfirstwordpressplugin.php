<?php
/*
Plugin Name: Tuts+ Register Post Types
Plugin URI: https://localhost
Description: Plugin to accompany tutsplus guide to creating plugins, registers a post type.
Version: 1.0
Author: Daniel Mabadeje
Author URI: https://danielmabadeje.netlify.app/
License: GPLv2 or later
Text Domain: firstplugin
*/


function tutsplus_register_post_type() {
     
    // movies
    $labels = array( 
        'name' => __( 'Movies' , 'tutsplus' ),
        'singular_name' => __( 'Movie' , 'tutsplus' ),
        'add_new' => __( 'New Movie' , 'tutsplus' ),
        'add_new_item' => __( 'Add New Movie' , 'tutsplus' ),
        'edit_item' => __( 'Edit Movie' , 'tutsplus' ),
        'new_item' => __( 'New Movie' , 'tutsplus' ),
        'view_item' => __( 'View Movie' , 'tutsplus' ),
        'search_items' => __( 'Search Movies' , 'tutsplus' ),
        'not_found' =>  __( 'No Movies Found' , 'tutsplus' ),
        'not_found_in_trash' => __( 'No Movies found in Trash' , 'tutsplus' ),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
            'title', 
            'editor', 
            'excerpt', 
            'custom-fields', 
            'thumbnail',
            'page-attributes'
        ),
        'rewrite'   => array( 'slug' => 'movies' ),
        'show_in_rest' => true
 
    );
    register_post_type( 'tutsplus_movie', $args );
         
}