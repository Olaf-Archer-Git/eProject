<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css');
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap", [], null);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('bootstrap-scripts', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', [], true);
    wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/index.js', [], '1.0.0', true);
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo', array(
    'height' => 75,
    'width'  => 200,
));
