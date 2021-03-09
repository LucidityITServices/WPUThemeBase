<?
function register_custom_styles_scripts() {
    wp_register_style('homepage-style', get_theme_root_uri().'/CHILD_DIR/THEME-homepage.css' );
    wp_register_style('default-style', get_theme_root_uri().'/CHILD_DIR/THEME.css');
}
add_action('init', 'register_custom_styles_scripts');

function THEME_child_enqueue_styles() {
    if(is_front_page()) {
        wp_enqueue_style('homepage-style');
    }
    else {
        wp_enqueue_style('default-style');
    }
}
add_action( 'wp_enqueue_scripts', 'THEME_child_enqueue_styles' );
?>
