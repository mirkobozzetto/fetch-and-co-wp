<?php

//joli var dump
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

//menu
function register_my_menu()
{
    register_nav_menus(array(
        'topfr' => 'Menu fr',
    ));
}
add_action('init', 'register_my_menu');

//tailles de thubnails
add_image_size('big', 1920, 5000, false);
add_image_size('galery', 300, 300, true);