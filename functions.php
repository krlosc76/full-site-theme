<?php

function encolar_estilos() {
    // Encolar el archivo style.css del tema
    wp_enqueue_style('nombre-del-estilo', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'encolar_estilos');
