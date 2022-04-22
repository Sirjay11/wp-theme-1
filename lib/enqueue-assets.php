<?php 

function wptheme1_assets() {
 wp_enqueue_style( 'wptheme1-stylesheet', get_template_directory_uri(  ) . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all' );
}

add_action('wp_enqueue_scripts', 'wptheme1_assets');

function wptheme1_admin_assets() {
 wp_enqueue_style( 'wptheme1-admin-stylesheet', get_template_directory_uri(  ) . '/dist/assets/css/admin.css', array(), '1.0.0', 'all' );
}

add_action('admin_enqueue_scripts', 'wptheme1_assets');

