<?php
add_action('after_setup_theme', function(){add_theme_support('title-tag');add_theme_support('responsive-embeds');});
add_action('wp_enqueue_scripts', function(){wp_enqueue_style('sitara',get_stylesheet_uri(),[], '1.0');wp_enqueue_script('sitara',get_template_directory_uri().'/app.js',[], '1.0',true);});
