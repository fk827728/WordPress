<?php
add_action( 'rest_api_init', 'my_register_route' );

function custom_phrase() {
    return rest_ensure_response( 'Hello World! This is my first REST API' );
}

function my_register_route() {
    register_rest_route('my-api', 'posts', array(
            'methods' => 'GET',
            'callback' => 'custom_phrase',
        )
    );
}
