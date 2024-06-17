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
        $args = array(
            'category_name' => 'films',
            'order'         => 'ASC',
            'orderby'       => 'title',
            'nopaging'      => true,
        );

        $query = new WP_Query($args);
        if ($query->have_posts()) {
            echo '<div class="space-y-8">';
            while ($query->have_posts()) {
                $query->the_post();
                ?>
<div>
  <h1 class="text-xl font-bold mb-2"><?php echo get_the_title(); ?></h1>
  <p class="text-gray-300 mb-12"><?php echo get_the_content(); ?></p>
</div>
<?php
}
            echo '</div>';
        }
    }
    die();
}
?>

<?php
add_action('wp_enqueue_scripts', 'ajaxfij_script_enqueuer');
function ajaxfij_script_enqueuer()
{
// include locate_template('myvars.php');

    // wp_register_script("ajaxfij_script", WP_PLUGIN_URL . '/ajaxfij/js/ajaxfij.js', array('jq', 'wayp'));

    wp_register_script("ajaxfij_script", plugins_url('/js/ajaxfij.js', __FILE__), array());

    wp_localize_script("ajaxfij_script", 'ajaxfijParams', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
// 'fleche' => get_field('fleche', $footerID)['url'],
    )
    );
    wp_enqueue_script('ajaxfij_script');
}
?>