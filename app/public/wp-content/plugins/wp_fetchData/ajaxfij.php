<?php
/*
Plugin Name: ajax fij
Plugin URI:
description:
Version: 0.1
Author: none
Author URI:
License: private
 */

add_action('wp_ajax_ajaxfij_submit', 'ajaxfij'); //action si user logged in
add_action('wp_ajax_nopriv_ajaxfij_submit', 'ajaxfij'); //action si aucun user logged in

function ajaxfij()
{

    if ($_POST['type'] == "citation") {
        // echo get_field('citation', $footerID);
    }

    die();
}

add_action('wp_enqueue_scripts', 'ajaxfij_script_enqueuer');
function ajaxfij_script_enqueuer()
{
    // include locate_template('myvars.php');

    wp_register_script("ajaxfij_script", WP_PLUGIN_URL . '/ajaxfij/js/ajaxfij.js', array('jq', 'wayp'));
    wp_localize_script("ajaxfij_script", 'ajaxfijParams', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        // 'fleche'  => get_field('fleche', $footerID)['url'],
    )
    );
    wp_enqueue_script('ajaxfij_script');
}
