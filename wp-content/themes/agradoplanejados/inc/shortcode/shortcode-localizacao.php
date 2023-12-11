<?php

function localizacao($atts, $content = null)
{
    extract(shortcode_atts(array(
        'img' => '',
        'endereco' => '',
    ), $atts));

    return '<section id="localizacao-container">
    <div id="localizacao-content">
        <iframe width="150%" height="170%" src="https://www.google.com/maps?q=' . $endereco . '&output=embed"></iframe>
        <div class="localizacao-card">
            <img src="' . wp_get_attachment_url($img) . '">
        </div>
    </div>
</section>';
}
add_shortcode('localizacao', 'localizacao');
