<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01.09.2017
 * Time: 12:27
 * Plugin Name: Table
 * Version: 1.0
 */


add_action( 'admin_enqueue_scripts', 'my_scripts_method' );


function my_scripts_method(){
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-ui-sortable' );
    wp_enqueue_script( 'jquery-ui-tabs' );
}

add_action('admin_menu', function(){
    add_menu_page('Program','Program','manage_options', 'cragir', 'toplevel_page', "dashicons-exerpt-view");
} );

function toplevel_page() {
    echo "<h2>".'Program menu'."</h2>";
    include(__DIR__."/index.php");
}
