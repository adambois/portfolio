<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function create_custom_post_types() {
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'portfolio' ),
        )
    );
    
    register_post_type( 'hp_case_studies',
        array(
            'labels' => array(
                'name' => __( 'HP Case Studies' ),
                'singular_name' => __( 'HP Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'hp-case-studies' ),
        )
    );
    
}
add_action( 'init', 'create_custom_post_types' );