<?php

/*
Template Name: Página - Contato
*/

get_header();
?>

<style>
    .btn-menu-contato a {
        width: auto;
        height: auto;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 16px;
        padding: 12px 25px;
        background-color: var(--primary-0);
        border: 1px solid transparent;
        color: var(--light) !important;
        transition: 0.5s ease all;
    }

    #contato-container {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        background-color: var(--background-1);
    }

    #contato-titulo-content {
        width: 940px;
        height: auto;
        margin: 0 auto;
        padding: 150px 20px 60px 20px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: flex-start;
    }

    .contato-titulo {
        color: var(--primary-2);
        padding: 0px;
        margin: 0px;
        position: relative;
        text-transform: uppercase;
        text-align: left;
        margin-bottom: 40px;
    }

    .contato-titulo::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -20px;
        width: 110px;
        height: 2px;
        border: none;
        background-color: var(--primary-2);
    }

    #contato-titulo-content p {
        color: var(--dark-1);
        padding: 0px;
        margin: 0px;
        text-align: left;
    }

    #formulario-container {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        background-color: #2c2c2c;
        padding: 0px;
        border-top: 4px solid var(--primary-0);
    }

    #formulario-content {
        width: 940px;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 60px 20px;
        margin: 0px;
    }

    #formulario-content form {
        width: 100%;
        height: auto;
        padding: 0px;
        margin: 0px;
    }

    #formulario-container input::placeholder,
    #formulario-container #contato-mensagem::placeholder {
        color: var(--light) !important;
    }

    #formulario-container #contato-mensagem {
        width: 100%;
        padding: 0;
        height: 80px;
        border: none;
        outline: none;
        background: 0 0 !important;
        border-bottom: 1px solid var(--light) !important;
        font-size: 15px;
        font-weight: 400;
        color: var(--light);
    }


    #contato-nome {
        width: 49%;
        margin-right: 2%;
        padding: 0;
        height: 35px;
        border: none;
        outline: none;
        background: 0 0 !important;
        border-bottom: 1px solid var(--light) !important;
        float: left;
        font-size: 15px;
        font-weight: 400;
        color: var(--light);
        margin-bottom: 15px;
    }

    #contato-telefone {
        width: 49%;
        margin-right: 0px;
        padding: 0;
        height: 35px;
        border: none;
        outline: none;
        background: 0 0 !important;
        border-bottom: 1px solid var(--light) !important;
        font-size: 15px;
        font-weight: 400;
        color: var(--light);
        margin-bottom: 15px;
    }

    #contato-email {
        width: 100%;
        margin-right: 0px;
        padding: 0;
        height: 35px;
        border: none;
        outline: none;
        background: 0 0 !important;
        border-bottom: 1px solid var(--light) !important;
        font-size: 15px;
        font-weight: 400;
        color: var(--light);
        margin-bottom: 15px;
    }

    #contato-enviar {
        width: 100%;
        margin: 20px 0;
        height: 45px !important;
        font-weight: 500 !important;
        background: var(--primary-1);
        border: none !important;
        border-bottom: none !important;
        outline: none !important;
        color: var(--light) !important;
        font-size: 18px !important;
        cursor: pointer;
        transition: 0.5s ease all;
        padding: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #contato-enviar:hover {
        background: var(--primary-0) !important;
        transition: 0.5s ease all;
    }

    #contato-status {
        font-size: 12px;
        text-align: center;
        color: var(--primary-1);
        width: 100%;
        height: auto;
        padding: 10px 20px;
    }

    .error {
        color: var(--primary-1) !important;
    }

    #formulario-container input.error::placeholder,
    #formulario-container #contato-mensagem.error::placeholder {
        color: var(--primary-1) !important;
    }

    @media (max-width: 940px) {
        #contato-titulo-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 130px 20px 60px 20px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: flex-start;
        }

        #formulario-content {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
            margin: 0px;
        }
    }

    @media (max-width: 400px) {
        #contato-nome {
            width: 100% !important;
            margin-right: 2%;
            padding: 0;
            height: 35px;
            border: none;
            outline: none;
            background: 0 0 !important;
            border-bottom: 1px solid var(--light) !important;
            float: none;
            font-size: 15px;
            font-weight: 400;
            color: var(--light);
            margin-bottom: 15px;
        }

        #contato-telefone {
            width: 100% !important;
            margin-right: 0px;
            padding: 0;
            height: 35px;
            border: none;
            outline: none;
            background: 0 0 !important;
            border-bottom: 1px solid var(--light) !important;
            font-size: 15px;
            font-weight: 400;
            color: var(--light);
            margin-bottom: 15px;
        }
    }
</style>

<?php if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
        edit_post_link();
    endwhile;
endif; ?>

<section id="formulario-container">
    <div id="formulario-content">
        <form action="<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/php/enviar-contato.php" method="post" onsubmit="return validaContato(); return false;" enctype="multipart/form-data">
            <input type="text" maxlength="100" name="nome" value="" placeholder="Nome" id="contato-nome">
            <input type="text" maxlength="15" name="telefone" value="" placeholder="Telefone" id="contato-telefone" im-insert="true">
            <input type="text" maxlength="60" name="email" value="" placeholder="Email" id="contato-email">
            <textarea type="text" rows="4" name="mensagem" placeholder="Mensagem" id="contato-mensagem"></textarea>
            <div id="contato-status"></div>
            <input type="submit" id="contato-enviar" value="Enviar" class="btn-formulario">
        </form>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/js/inputmask.js" type="text/javascript"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/js/jquery.inputmask.js" type="text/javascript"></script>

<script>
    jQuery(document).ready(function() {
        jQuery("#contato-telefone").inputmask({
            "mask": "(99) 99999-9999"
        }); //specifying options
    });

    function validaContato() {

        var nome = jQuery("#contato-nome").val();
        var telefone = jQuery("#contato-telefone").val();
        var email = jQuery("#contato-email").val();
        var emailMask = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var mensagem = jQuery("#contato-mensagem").val();

        if (nome == '') {
            jQuery("#contato-nome").attr("placeholder", "Preencha seu nome.");
            jQuery("#contato-nome").addClass('error');
            return false;
        }
        if (telefone == '') {
            jQuery("#contato-telefone").attr("placeholder", "Preencha seu telefone.");
            jQuery("#contato-telefone").addClass('error');
            jQuery("#contato-nome").removeClass('error');
            return false;
        }

        if (email == '') {
            jQuery("#contato-email").attr("placeholder", "Preencha seu e-mail.");
            jQuery("#contato-email").addClass('error');
            jQuery("#contato-telefone").removeClass('error');
            return false;
        }

        if (!emailMask.test(email)) {
            jQuery("#contato-status").html("Por favor, preencha um e-mail válido.").show();
            return false;
        }

        if (mensagem == '') {
            jQuery("#contato-mensagem").attr("placeholder", "Preencha sua mensagem.");
            jQuery("#contato-mensagem").addClass('error');
            jQuery("#contato-email").removeClass('error');
            jQuery("#contato-status").hide();
            return false;
        }

        jQuery("#contato-enviar").val('Aguarde, enviando...');
        jQuery("#contato-enviar").prop("disabled", true);
        return true;
    }
</script>



<?php
get_footer();
?>