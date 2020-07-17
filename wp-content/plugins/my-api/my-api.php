<?php
/**
 * Plugin Name: Custom API
 * Plugin URI: http://my-api.com
 * Description: Custom API
 * Version: 1.0
 * Author: Louis
 * Author URI: http://my-api.com
 */


add_action( 'rest_api_init', 'my_register_route' );

function custom_phrase() {
    return rest_ensure_response( 'Hello World! This is my first REST API' );
}

function my_register_route() {
    register_rest_route('my-api', 'my-route', array(
            'methods' => 'GET',
            'callback' => 'custom_phrase',
        )
    );
}
