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

    if ($_POST['type'] == "articles") {
        // echo get_field('articles', $footerID);
        $args = array(
            'category_name' => 'films',
            'order'         => 'ASC', //ou DSC
            'orderby' => 'title',
            'nopaging'      => true,
        );

        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>

<h1>
  <?php
echo get_the_title();
                ?>
</h1>

<?php
}
            ;
        }
        ;

    }

    die();
}
?>

<?php
add_action('wp_enqueue_scripts', 'ajaxfij_script_enqueuer');
function ajaxfij_script_enqueuer()
{
// include locate_template('myvars.php');

    wp_register_script("ajaxfij_script", WP_PLUGIN_URL . '/ajaxfij/js/ajaxfij.js', array('jq', 'wayp'));
    wp_localize_script("ajaxfij_script", 'ajaxfijParams', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
// 'fleche' => get_field('fleche', $footerID)['url'],
    )
    );
    wp_enqueue_script('ajaxfij_script');
}
?>
