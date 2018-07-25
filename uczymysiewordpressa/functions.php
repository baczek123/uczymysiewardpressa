<?php 

// wp_enqueue_style - metoda dodawania stylu w wordpress
// dokumentacja: https://developer.wordpress.org/themes/basics/including-css-javascript/
function styles_method() {  
    // Register the style like this for a theme:  
    wp_register_style( 'index-style', get_template_directory_uri().'/css/index.css' );  
    // dodanie scriptów js - rejestracja
    wp_register_script( 'index-js',  get_template_directory_uri().'/js/index.js', array('jquery') );
     // this array lists the scripts upon which your script depends

    // enqueue the style  
    wp_enqueue_style( 'index-style' );
    // 'zagniezdzanie'/'iporzadkowanie' skryptów js
    wp_enqueue_script( 'index-js');
}  
add_action( 'wp_enqueue_scripts', 'styles_method' );