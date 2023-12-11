<?php

/*
Template Name: Página - Projeto
*/

get_header();
?>

<style>
    #titulo-projeto-container {
        width: 100%;
        height: auto;
        padding: 0px;
        margin: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 1500px;
    }

    #titulo-projeto-content {
        width: 1210px;
        height: auto;
        padding: 130px 20px 50px 20px;
        margin: 0px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    #titulo-projeto-content h2 {
        padding: 0px;
        margin: 0px;
        color: var(--primary-1);
        position: relative;
    }

    #titulo-projeto-content h2::before {
        content: "";
        position: absolute;
        left: 105%;
        top: 50%;
        transform: translateY(-50%);
        width: 70%;
        height: 2px;
        border: none;
        background-color: var(--primary-1);
    }

    #galeria-container {
        width: 100%;
        height: auto;
        padding: 0px 5px;
        margin: 0px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        max-width: 1600px;
        background-color: var(--dark-2);
        overflow-x: overlay;
    }

    #galeria-container::-webkit-scrollbar-track {
        background-color: rgba(0, 0, 0, 0);
    }

    #galeria-container::-webkit-scrollbar {
        width: 6px;
        height: 12px;
        background: rgba(0, 0, 0, 0.26);
    }

    #galeria-container::-webkit-scrollbar-thumb {
        background: var(--primary-0);
    }

    .galeria-card {
        width: 280px;
        min-width: 280px;
        height: 280px;
        min-height: 280px;
        margin: 0px 5px;
        padding: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--dark-0);
        overflow: hidden;
        position: relative;
        cursor: pointer;
    }

    .galeria-card img {
        width: 110%;
        min-width: 100%;
        min-height: 100%;
        height: auto;
        margin: 0px;
        transform: scale(1);
        transition: 0.5s ease all;
    }

    .galeria-card:hover img {
        transform: scale(1.08);
        transition: 0.5s ease all;
    }

    .galeria-card-overlay {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: 0.5s ease all;
        background: rgb(2, 0, 36);
        background: linear-gradient(180deg, rgba(2, 0, 36, 0.38139005602240894) 0%, rgba(0, 0, 0, 0.5858718487394958) 46%, rgba(0, 0, 0, 0.8519782913165266) 100%);
        font-size: 24px;
        color: white;
    }

    .galeria-card:hover .galeria-card-overlay {
        opacity: 1;
        transition: 0.5s ease all;
    }

    #descricao-container {
        width: 100%;
        height: auto;
        padding: 0px;
        margin: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 1500px;
    }

    #descricao-content {
        width: 1210px;
        height: auto;
        padding: 60px 20px;
        margin: 0px;
        display: block;
    }

    #descricao-content h4 {
        color: var(--primary-1);
        padding: 0px;
        margin: 0px;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    #descricao-content ul {
        list-style-position: inside !important;
        list-style: circle;
    }

    #descricao-content li {
        color: var(--dark-1);
        padding: 0px;
        margin: 0px;
        margin-bottom: 3px;
    }

    @media (max-width: 1210px) {
        #titulo-projeto-content {
            width: 100%;
            height: auto;
            padding: 130px 20px 50px 20px;
            margin: 0px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        #descricao-content {
            width: 100%;
            height: auto;
            padding: 60px 20px;
            margin: 0px;
            display: block;
        }
    }

    @media (max-width: 730px) {
        #titulo-projeto-content h2::before {
            display: none;
        }
    }

    @media (max-width: 380px) {
        #titulo-projeto-content {
            width: 100%;
            height: auto;
            padding: 110px 20px 30px 20px;
            margin: 0px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
    }
</style>

<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/css/lightgallery.css" />

<section id="titulo-projeto-container">
    <div id="titulo-projeto-content">
        <h2 class="h2 medium"><?php the_title(); ?></h2>
    </div>
</section>
<?php if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
        edit_post_link();
    endwhile;
endif; ?>

<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/js/lightgallery.js">
</script>

<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/js/lg-zoom.js">
</script>

<script>
    lightGallery(document.getElementById('galeria-container'), {
        zoom: true,
        scale: 1,
        selector: '.item',
    });
</script>

<?php
get_footer();
?>