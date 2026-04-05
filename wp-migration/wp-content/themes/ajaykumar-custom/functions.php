<?php
/**
 * Ajaykumar Custom Theme functions and definitions
 */

// Disable Contact Form 7 automatic paragraph tags
add_filter('wpcf7_autop_or_not', '__return_false');

function ajaykumar_enqueue_assets() {
    $theme_uri = get_template_directory_uri() . '/assets/';

    // 1. Google Fonts Direct Enqueue (High Priority)
    wp_enqueue_style('ajaykumar-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@400;600;700;900&display=swap', array(), null);

    // 2. Vendor Styles
    wp_enqueue_style('ajaykumar-vendors', $theme_uri . 'css/vendors.min.css', array(), '1.0');
    wp_enqueue_style('ajaykumar-icons', $theme_uri . 'css/icon.min.css', array(), '1.0');

    // 3. Main Theme Styles
    wp_enqueue_style('ajaykumar-style', $theme_uri . 'css/style.css', array('ajaykumar-vendors'), '1.0');

    // 4. Responsive & Specialized Styles
    wp_enqueue_style('ajaykumar-responsive', $theme_uri . 'css/responsive.css', array('ajaykumar-style'), '1.0');
    wp_enqueue_style('ajaykumar-custom-responsive', $theme_uri . 'css/custom-responsive.css', array('ajaykumar-responsive'), '1.0');
    wp_enqueue_style('ajaykumar-beauty-salon', $theme_uri . 'demos/beauty-salon/beauty-salon.css', array('ajaykumar-style'), '1.0');
    wp_enqueue_style('ajaykumar-chat', $theme_uri . 'css/chat-widgets.css', array('ajaykumar-style'), '1.0');

    // Scripts
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', $theme_uri . 'js/jquery.js', array(), '1.0', true);
    wp_enqueue_script('ajaykumar-vendors-js', $theme_uri . 'js/vendors.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('ajaykumar-main-js', $theme_uri . 'js/main.js', array('ajaykumar-vendors-js'), '1.0', true);
    wp_enqueue_script('ajaykumar-chat-widgets-js', $theme_uri . 'js/chat-widgets.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'ajaykumar_enqueue_assets');


function ajaykumar_custom_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ajaykumar_custom_setup');

// Force Site Title
function ajaykumar_force_site_title($title) {
    if (is_front_page() || is_home()) {
        return 'Ajay Kumar Sarnaik - Official Website';
    }
    return $title;
}
add_filter('pre_get_document_title', 'ajaykumar_force_site_title', 20);
// SMTP Configuration for reliable email delivery
add_action('phpmailer_init', 'ajaykumar_smtp_config');
function ajaykumar_smtp_config($phpmailer) {
    if (defined('SMTP_HOST')) {
        $phpmailer->isSMTP();
        $phpmailer->Host       = SMTP_HOST;
        $phpmailer->SMTPAuth   = true;
        $phpmailer->Port       = defined('SMTP_PORT') ? SMTP_PORT : 587;
        $phpmailer->Username   = SMTP_USER;
        $phpmailer->Password   = SMTP_PASS;
        $phpmailer->SMTPSecure = defined('SMTP_SECURE') ? SMTP_SECURE : 'tls';
        $phpmailer->From       = SMTP_USER;
        $phpmailer->FromName   = 'Ajay Kumar Sarnaik - Official';
    }
}
