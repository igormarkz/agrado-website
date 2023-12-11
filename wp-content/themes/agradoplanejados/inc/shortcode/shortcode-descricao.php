<?php

function galeria_descricao($atts, $content = null)
{
    extract(shortcode_atts(array(), $atts));

    return '<section id="descricao-container">
    <div id="descricao-content">
        <h4 class="h4 bold"><i class="fa-solid fa-ruler"></i>&nbsp;&nbsp;Características</h4>
        <ul>' . do_shortcode($content) . '</ul>
    </div>
</section>';
}
add_shortcode('galeria_descricao', 'galeria_descricao');

function galeria_descricao_item($atts, $content = null)
{
    extract(shortcode_atts(array(
        'descricao' => '',
    ), $atts));

    return '<li>' . $descricao . '</li>';
}
add_shortcode('galeria_descricao_item', 'galeria_descricao_item');
