<?php

function bojan_theme_one_register_styles() {
    wp_enqueue_style('bojan_theme_one_scss', get_template_directory_uri() . "/assets/css/scss-style.css", array(), '1.0', 'all');
    wp_enqueue_style('bojan_theme_one_fontawesome', get_template_directory_uri() . "/assets/css/fontawesome.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'bojan_theme_one_register_styles');



function bojan_theme_one_register_scripts() {
    wp_enqueue_script('bojan_theme_one_bootstrap_js', get_template_directory_uri() . "/assets/js/bootstrap.bundle.js", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'bojan_theme_one_register_scripts');

?>