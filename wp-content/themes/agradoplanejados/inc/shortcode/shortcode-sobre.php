<?php

function sobre_container($atts, $content = null)
{
    extract(shortcode_atts(array(), $atts));

    return '<section id="sobre-container">
    <div id="sobre-content">
        ' . do_shortcode($content) . '
    </div>
</section>';
}
add_shortcode('sobre_container', 'sobre_container');

function sobre_box($atts, $content = null)
{
    extract(shortcode_atts(array(
        'titulo' => '',
        'texto' => '',
    ), $atts));

    return '<div id="sobre-box-1">
    <h2 class="h2 bold">' . $titulo . '</h2>
    <p class="p regular">' . $texto . '</p>
</div>';
}
add_shortcode('sobre_box', 'sobre_box');

function sobre_imagem($atts, $content = null)
{
    extract(shortcode_atts(array(
        'img' => '',
    ), $atts));

    return ' <div id="sobre-box-2">
    <img src="' . wp_get_attachment_url($img) . '" alt="Leones Júnior">
</div>';
}
add_shortcode('sobre_imagem', 'sobre_imagem');
