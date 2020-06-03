<?php

# Hooks
add_action("wp_enqueue_scripts", 'cr_enqueue');
function cr_enqueue()
{
    $url = get_template_directory_uri();
    $ver = time();
    wp_enqueue_style('style', $url . '/assets/css/style.css', [], $ver);
    wp_enqueue_style('bootstrap', $url . '/assets/css/bootstrap.min.css', [], $ver);
    wp_enqueue_style('versions', $url . '/assets/css/versions.css', [], $ver);
    wp_enqueue_style('custom', $url . '/assets/css/custom.css', [], $ver);
    wp_enqueue_style('animate', $url . '/assets/css/animate.css', [], $ver);
    wp_enqueue_style('animate2', $url . '/assets/css/animate.min.css', [], $ver);
    wp_enqueue_style('bootstrap-touch-slider', $url . '/assets/css/bootstrap-touch-slider.css', [], $ver);
    wp_enqueue_style('flaticon', $url . '/assets/css/flaticon.css', [], $ver);
    wp_enqueue_style('timeline', $url . '/assets/css//timeline.min.css', [], $ver);
    wp_enqueue_style('prettyPhoto', $url . '/assets/css/prettyPhoto.css', [], $ver);
    wp_enqueue_style('owl-carousel', $url . '/assets/css/owl.carousel.css', [], $ver);
    wp_enqueue_style('font-awesome', $url . '/assets/css/font-awesome.min.css', [], $ver);

    wp_enqueue_script("modernizer", $url . "/assets/js/modernizer.js", [], $ver);
    wp_enqueue_script("all", $url . "/assets/js/all.js", [], $ver);
    wp_enqueue_script("custom", $url . "/assets/js/custom.js", [], $ver);
    wp_enqueue_script("timeline", $url . "/assets/js/timeline.min.js", [], $ver);
}

require_once('wp-bootstrap-navwalker.php');

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('primary2', 'Primary Menu');
    register_nav_menu('Dropdown Blog', 'Secondary Menu');
}



# Added classes for main menu
function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function add_classes_on_li($classes, $item, $args)
{
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);

function add_menuclass($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu', 'add_menuclass');

function atg_menu_classes($classes, $item, $args)
{
    if ($args->theme_location == 'secondary') {
        $classes[] = 'list-inline-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

add_filter('comment_form_default_fields', 'tu_comment_form_hide_cookies_consent');
function tu_comment_form_hide_cookies_consent($fields)
{
    unset($fields['cookies']);
    return $fields;
}
