<?php

function galeria_container($atts, $content = null)
{
    extract(shortcode_atts(array(), $atts));

    return '<section id="galeria-container">
        ' . do_shortcode($content) . '
    </section>';
}
add_shortcode('galeria_container', 'galeria_container');

function galeria_card($atts, $content = null)
{
    extract(shortcode_atts(array(
        'img' => '',
    ), $atts));

    return '<a href="' . wp_get_attachment_url($img) . '" class="galeria-card item">
        <img src="' . wp_get_attachment_url($img) . '">
        <div class="galeria-card-overlay">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </a>';
}
add_shortcode('galeria_card', 'galeria_card');
