<?php
/**
 * Plugin Name: Cathopedia Linker
 */
 
function cathopedia_linker_script_register() {
    wp_register_script(
        'cathopedia-linker-js',
        plugins_url( 'cathopedia-linker.js', __FILE__ ),
        array( 'wp-rich-text', 'wp-element', 'wp-editor' )
    );
}
add_action( 'init', 'cathopedia_linker_script_register' );
 
function cathopedia_linker_enqueue_assets_editor() {
    wp_enqueue_script( 'cathopedia-linker-js' );
}
add_action( 'enqueue_block_editor_assets', 'cathopedia_linker_enqueue_assets_editor' );