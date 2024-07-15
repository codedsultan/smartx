<?php

function veci_enqueue() {
    // Register Files
    wp_register_style(
        'veci_font_rubik_and_pacifico',
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
        [],
        null
    );

    wp_register_style(
        'veci_bootstrap_icons',
        get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
    );

    wp_register_style(
        'veci_theme',
        get_theme_file_uri('assets/public/index.css')
    );

    // Enqueue Files

    wp_enqueue_style('veci_font_rubik_and_pacifico');
    wp_enqueue_style('veci_bootstrap_icons');
    wp_enqueue_style('veci_theme');
}