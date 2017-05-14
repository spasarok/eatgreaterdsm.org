<?php

// Enqueue jQuery
function egdm_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('egdm_mobile_drop_menu', get_template_directory_uri() . '/assets/js/mobile-drop-menu.js');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    wp_enqueue_style('egdm_font_comfortaa', 'https://fonts.googleapis.com/css?family=Comfortaa');
    wp_enqueue_style('egdm_font_nunito', 'https://fonts.googleapis.com/css?family=Nunito');
    wp_enqueue_style('egdm_style', get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts', 'egdm_enqueue_scripts');

// Thumbnails
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
add_image_size( 'square_300x300', 300, 300, true );

include('plugins/theme-options/theme-options.php');

function egdm_remove_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
    $template = basename(get_post_meta($post_id, '_wp_page_template', true));
    if($template == 'page-about.php' or $template == 'page-donate.php'){
        remove_post_type_support('page', 'editor');
    }
}
add_action( 'admin_init', 'egdm_remove_editor' );

// Generate responsive image set
function egdm_full_srcset($img){
    echo '<picture>';
        echo '<source srcset="'.get_template_directory_uri().'/assets/images/full/'.$img.'-xlarge.jpg" media="(min-width: 1201px)" />';
        echo '<source srcset="'.get_template_directory_uri().'/assets/images/full/'.$img.'-large.jpg" media="(min-width: 993px)" />';
        echo '<source srcset="'.get_template_directory_uri().'/assets/images/full/'.$img.'-medium.jpg" media="(min-width: 768px)" />';
        echo '<img srcset="'.get_template_directory_uri().'/assets/images/full/'.$img.'-large.jpg" media="(min-width: 1201px)" />';
    echo '</picture>';
}

// Create newsletter widget
function egdm_widgets_init() {

    register_sidebar( array(
        'name' => 'Footer Widgets',
        'id' => 'footer_widgets',
        'before_widget' => '',
        'after_widget' => ''
    ));

}
add_action( 'widgets_init', 'egdm_widgets_init' );
