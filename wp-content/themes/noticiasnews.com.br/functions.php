<?php

function load_stylesheets () {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/output.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');