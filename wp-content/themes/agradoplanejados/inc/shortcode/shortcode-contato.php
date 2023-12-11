<?php

function contato($atts, $content = null)
{
    extract(shortcode_atts(array(
        'titulo' => '',
        'endereco' => '',
        'telefone' => '',
    ), $atts));

    return '<section id="contato-container">
    <div id="contato-titulo-content">
        <h3 class="h3 bold contato-titulo">' . $titulo . '</h3>
        <p class="p regular"><span class="bold">Endereço:</span>&nbsp;' . $endereco . ' <br /><span class="bold">Tel/Whatsapp:</span>&nbsp;' . $telefone . '</p>
    </div>
</section>';
}
add_shortcode('contato', 'contato');
