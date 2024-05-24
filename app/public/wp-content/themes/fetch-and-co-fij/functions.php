<?php

//joli var dump

//menu
function register_my_menu()
{
    register_nav_menus(array(
        'topfr' => 'Menu fr',
    ));
}
add_action('init', 'register_my_menu');

function mes_js()
{
    //put dependencies into the array
    // wp_deregister_script('jquery');
    wp_register_script('jq', get_stylesheet_directory_uri() . "/src/jQuery 3.7.1 min.js", array());
    // wp_register_script('main', get_stylesheet_directory_uri() . "./src/main.js", array());
    wp_register_script('main', get_stylesheet_directory_uri() . "/src/main.js", array());
    // wp_register_script('ow', get_stylesheet_directory_uri() . "/src/api-ow.js", array('jq'));
    // wp_localize_script('ow', 'owParams', array(
    //     'chemin' => get_stylesheet_directory_uri(),
    // )
    // );
    wp_enqueue_script('jq');
    wp_enqueue_script('main');
    // wp_enqueue_script('ow');
}
add_action('wp_enqueue_scripts', 'mes_js');

function var_dumpj($d, $e = null)
{
    echo '<pre><code>';
    if ($e == 'e') {
        echo $d;
    } else {
        if (is_array($d)) {
            print_r($d);
        } else {
            var_dump($d);
        }
    }
    echo '</code></pre>';
}