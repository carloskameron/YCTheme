<?php 
add_theme_support( 'post-thumbnails' );


	
add_filter( 'wp_image_editors', 'change_graphic_lib' );
function change_graphic_lib($array) {
return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


?>
