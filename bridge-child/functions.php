<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);

function brace_output_header(){
    ?>
<style>
.header_bottom .container_inner{
    margin-bottom: 2rem;
}
</style>
    <?php
}
add_action('wp_head', 'brace_output_header');