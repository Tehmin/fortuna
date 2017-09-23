<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01.09.2017
 * Time: 12:27
 * Plugin Name: Fortuna Program
 * Version: 1.0
 */

include_once __DIR__.'/shortcodes.php';
add_action( 'admin_enqueue_scripts', 'my_scripts_method' );


function my_scripts_method(){
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-ui-sortable' );
    wp_enqueue_script( 'jquery-ui-tabs' );
}

add_action('admin_menu', function(){
    add_menu_page('Program','Program','manage_options', 'cragir', 'toplevel_page', "dashicons-exerpt-view");
});

function toplevel_page() {
    $cragir = get_option("cragir");
    echo "<h2>".'Program menu'."</h2>";
    include(__DIR__."/index.php");
}

add_action("admin_init", "update_cragir");

function update_cragir()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["cragir"])) {
            update_option("cragir", $_POST["cragir"]);
            update_option("shabatva_skizb", $_POST["shabatva_skizb"]);
        }
    }
}
