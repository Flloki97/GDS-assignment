// functions.php
<?php
function custom_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'custom_theme_setup');
