<?php
/*
Plugin Name: Toggle Text
*/

if(! wp_script_is('jquery'))
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js');

wp_enqueue_script('toggle-text', plugins_url('toggle-text.js', __FILE__ ));

add_shortcode('toggle-text', 'toggle_text_handler');
function toggle_text_handler($atts, $content = null){
    $open = '<div class="toggle-text">';
    $heading = '<div class="toggle-text-heading">';
    $body = '<div class="toggle-text-body">';
    $close = '</div>';

    return $open . $heading . $atts['heading'] . $close . $body . $content . $close . $close;
}
