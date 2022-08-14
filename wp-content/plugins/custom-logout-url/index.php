<?php
/*
Plugin Name: Custom logout URL
Author: Moin
*/

function your_prefix_redirect() {
    wp_redirect('http://localhost/login/login');
    die;
}
add_action('wp_logout', 'your_prefix_redirect', PHP_INT_MAX);