<?php 

const MIA_SLIDER_POST_TYPE = "sliders";
const MIA_OVERVIEW_POST_TYPE = "overviews";

const MIA_HOME_PAGE = 39;

/**
 * Enqueue scripts and styles.
 */
function scripts()
{
    wp_enqueue_style('mtkn-thailand-style', get_template_directory_uri() . '/assets/css/output.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'scripts');

//register menu//
register_nav_menus(
    array(
        'main' => 'Main',
        'mobile' => 'Mobile Menu',
        'footer' => 'Footer Menu'
    )
);

//for adding menu in adimin panle under Apperance->Menu
add_theme_support('menus');
add_theme_support('post-thumbnails');

// add footer menu
function my_admin_footer_text()
{
    return '<span id="footer-thankyou">Website managed and developed by <a href="#" target="_blank">Ye Naing Tun</a><span> | Powered by <a href="http://www.wordpress.org">WordPress</a>';
}
add_filter('admin_footer_text', 'my_admin_footer_text');