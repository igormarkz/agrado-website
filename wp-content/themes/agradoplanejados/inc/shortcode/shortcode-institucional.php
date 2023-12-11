<?php

function institucional_container($atts, $content = null)
{
    extract(shortcode_atts(array(), $atts));

    return '<section id="home-sobre-container">
    <div id="home-sobre-content">
     ' . do_shortcode($content) . '
    </div>
</section>';
}
add_shortcode('institucional_container', 'institucional_container');

function institucional_card($atts, $content = null)
{
    extract(shortcode_atts(array(
        'titulo' => '',
        'texto' => '',
    ), $atts));

    return '<div class="home-sobre-card">
    <h6 class="h6 home-sobre-card-titulo">' . $titulo . '</h6>
    <p class="p home-sobre-card-texto">' . $texto . '</p>
</div>';
}
add_shortcode('institucional_card', 'institucional_card');
