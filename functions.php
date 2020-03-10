<?php
//wp_enqueue_script('jquery');
add_action( 'wp_enqueue_scripts', 'include_appjs_dep_jquery' );
function include_wkda_api() {
    wp_enqueue_script( 'wdka',  '//content.wirkaufendeinauto.de/lib/wkda-api.min.js', array('jquery') );
}
function include_appjs_dep_jquery() {
    wp_enqueue_script( 'myscript', get_stylesheet_directory_uri() . '/js/app.js', array('jquery', 'wdka'));
}



add_action( 'wp_enqueue_scripts', 'include_wkda_api' );


