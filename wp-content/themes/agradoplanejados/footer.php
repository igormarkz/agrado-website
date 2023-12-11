<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<section id="footer-container">
    <div id="footer-content">
        <div class="footer-box">
            <img id="footer-logo" src="<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/images/agrado-logo-white.png" alt="Agrado Móveis Planejados" title="Agrado Móveis Planejados">
        </div>
        <div class="footer-box">
            <h4 class="h4 bold footer-box-titulo">MENU</h4>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-principal'
            ));
            ?>
        </div>
        <div class="footer-box footer-box-faleconosco">
            <h4 class="h4 bold footer-box-titulo">FALE CONOSCO</h4>
            <p class="small bold footer-box-text">ENDEREÇO</p>
            <p class="small regular">Rua Tarapitinga, 174 - Vila Jacuí, São Paulo - SP</p>
            <p class="small bold footer-box-text">TELEFONE/WHATSAPP</p>
            <p class="small regular">(11) - 99575-4196</p>
        </div>
        <div class="footer-box">
            <h4 class="h4 bold footer-box-titulo">SIGA-NOS</h4>
            <a href="https://www.instagram.com/agradoplanejados/" target="_blank" class="small regular footer-box-text"><span class="h6"><i class="fa-brands fa-instagram"></i></span>&nbsp;&nbsp;/agradoplanejados</a>
        </div>
    </div>
    <div id="footer-bottom-content">
        <p class="small regular">Agrado Móveis Planejados &copy; <?php echo date('Y'); ?></p>
        <a href="https://igormarques.me" target="_blank">
            <svg width="53px" height="25px" viewBox="0 0 440 218" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M129.672 61.8083C134.086 54.0263 153.116 39.2406 173.678 39.2406C190.424 39.2406 203.821 44.6102 223.137 14.7274C199.251 50.265 135.747 125.698 72.8146 143.13C104.051 131.441 191.606 115.812 305.308 139.366M331.789 145.464C331.789 145.464 329.19 144.81 327.895 144.49M216.516 74.6485C207.17 73.6109 187.542 76.3605 183.804 95.6598M183.804 95.6598C181.727 104.22 178.975 123.908 189.256 124.842C191.982 125.09 207.17 125.076 216.516 102.664C218.204 100.329 214.024 95.6598 183.804 95.6598ZM183.804 95.6598C182.765 95.9192 179.52 95.6598 173.678 100.329M280.384 131.846C281.366 127.823 282.496 122 283.186 115.893M283.186 115.893C284.318 105.855 284.258 95.0507 280.384 90.2124C287.394 89.1748 302.971 88.8117 309.202 95.6598C314.394 100.199 320.885 110.601 305.308 115.893C303.411 117.32 296.331 119.317 283.186 115.893ZM283.186 115.893C289.261 123.444 302.192 138.71 305.308 139.366M305.308 139.366C306.602 139.634 307.9 139.908 309.202 140.186M309.202 140.186L339.188 80.485L327.895 144.49M309.202 140.186C315.36 141.503 321.592 142.936 327.895 144.49M327.895 144.49C349.444 123.155 393.787 80.485 398.772 80.485C401.039 80.485 393.46 91.9998 382.458 115.893M382.458 115.893C369.265 144.544 351.151 188.096 339.188 212C353.338 211.741 398.811 212 425.643 181.261C436.965 168.291 447.104 130.679 382.458 115.893ZM382.458 115.893C307.542 108.759 216.516 90.2124 7 102.664L24.1352 163.363C30.7556 181.261 50.6168 195.375 78.6561 167.643C132.296 116.023 268.153 11.2256 382.458 5M249.229 80.485C240.661 80.3262 224.772 85.6291 225.084 104.998C224.824 111.224 228.589 124.064 245.724 127.177C252.344 128.379 271.653 124.406 272.984 105.776C273.763 94.8816 266.364 80.485 249.229 80.485Z" stroke="white" stroke-width="8" />
            </svg>
        </a>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var tag_body = document.querySelector("body");
    var tag_title = document.querySelector("title");

    if (tag_body.classList.contains("home")) {
        tag_title.innerText = '<?php bloginfo('name') ?> | <?php bloginfo('description') ?>';
    }

    if (tag_body.classList.contains("archive")) {
        var titulo_tag = document.querySelector(".produto-titulo").innerHTML;
        tag_title.innerText = '<?php bloginfo('name') ?>' + ' | ' + titulo_tag;
    }
</script>

<?php wp_footer(); ?>

</body>

</html>