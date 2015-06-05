<?php
/**
 * Use front page template for home custom page.
 *
 * This provides examples only, actual code will vary from project to project
 *
 * @author Papertree Design
 * @package Mobile First Theme
 * @subpackage Template
 */
 
/*
    add_action( 'genesis_meta', 'pdg_home_genesis_meta' );

// Add widget support for homepage. If no widgets active, display the default loop.
function pdg_home_genesis_meta() {

    if ( is_active_sidebar( 'home-slider' ) ) {

        //* if slideshow widget is present then use full width
        add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

        //* add widget are after header
        add_action( 'genesis_after_header', 'pdg_home_sections' ); 

        //* use a custom body class       
        add_filter( 'body_class', 'pdg_home_body_class' );

    }
    
}

//
function pdg_home_sections() {

    genesis_widget_area( 'home-slider', array(
        'before' => '<div class="home-slider widget-area">',
        'after'  => '</div>',
    ) );
    
}

// Add a custom body class to home page    
function pdg_home_body_class( $classes ) {

    $classes[] = 'mobile-first-theme';
    return $classes;
    
}
*/

//* You need this s
//* so let's leave 
//* it in place
genesis();
