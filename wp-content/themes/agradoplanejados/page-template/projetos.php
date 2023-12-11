<?php

/*
Template Name: Página - Projetos
*/

get_header();
?>

<style>
    .menu-projetos a::before {
        max-width: 100% !important;
    }

    #home-projetos-container {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        background-color: var(--background-1);
    }

    #home-projetos-content {
        width: 960px;
        height: auto;
        margin: 0 auto;
        padding: 80px 20px;
        display: grid;
        grid-template-columns: repeat(3, 280px);
        grid-auto-rows: auto;
        justify-content: center;
        align-items: flex-start;
        gap: 40px;
    }

    .home-projetos-card {
        width: 100%;
        height: 230px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px;
        padding: 0px;
        background: #FFFFFF;
        position: relative;
    }

    .home-projetos-thumb {
        width: 100%;
        height: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px;
        padding: 0px;
        background: #FFFFFF;
        position: relative;
    }

    .home-projetos-card img {
        width: 110%;
        min-width: 100%;
        min-height: 100%;
        height: auto;
        margin: 0px;
        transform: scale(1);
        transition: 0.5s ease all;
    }

    .home-projetos-card:hover img {
        transform: scale(1.08);
        transition: 0.5s ease all;
    }

    .home-projetos-card-overlay {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
        padding: 25px;
        opacity: 0;
        transition: 0.5s ease all;
        background: rgb(2, 0, 36);
        background: linear-gradient(180deg, rgba(2, 0, 36, 0.38139005602240894) 0%, rgba(0, 0, 0, 0.5858718487394958) 46%, rgba(0, 0, 0, 0.8519782913165266) 100%);
    }

    .home-projetos-card:hover .home-projetos-card-overlay {
        opacity: 1;
        transition: 0.5s ease all;
    }

    .home-projetos-card-titulo {
        padding: 0px;
        margin: 0px;
        text-align: left;
        color: white;
        text-transform: uppercase;
    }

    .home-projetos-btn {
        position: absolute;
        right: -10px;
        bottom: -15px;
        width: auto;
        height: auto;
        padding: 7px 7px;
        text-decoration: none;
        background-color: var(--secondary-1);
        color: var(--primary-1);
        z-index: 1500;
        transition: 0.5s ease all;
    }

    .home-projetos-btn:hover {
        background-color: var(--secondary-2);
        color: var(--primary-2);
        transition: 0.5s ease all;
    }

    @media (max-width: 940px) {

        #home-projetos-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 80px 20px;
            display: grid;
            grid-template-columns: repeat(3, 28%);
            grid-auto-rows: auto;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
        }

        .home-projetos-card {
            width: 100%;
            height: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0px;
            padding: 0px;
            background: #FFFFFF;
            position: relative;
        }
    }

    @media (max-width: 690px) {
        #home-projetos-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 60px 20px;
            display: grid;
            grid-template-columns: repeat(1, 270px);
            grid-auto-rows: auto;
            justify-content: center;
            align-items: flex-start;
            gap: 25px;
        }
    }
</style>

<section class="titulo-container" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/images/banner-titulo.jpg);">
    <div class="titulo-content">
        <h2 class="h2 bold">Projetos</h2>
    </div>
</section>
<section id="home-projetos-container">
    <div id="home-projetos-content">
        <?php
        $args = array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => $post->ID,
            'order'          => 'DESC',
            'orderby'        => 'date'
        );
        $parent = new WP_Query($args);
        if ($parent->have_posts()) : ?>
            <?php $c = 0;
            while ($parent->have_posts()) : $parent->the_post();
                ++$c;
            ?>
                <article class="home-projetos-card">
                    <div class="home-projetos-thumb">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <div class="home-projetos-card-overlay">
                        <h5 class="h5 medium home-projetos-card-titulo"><?php the_title(); ?></h5>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="home-projetos-btn bold p">Ver</a>
                </article>
            <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</section>

<?php
get_footer();
?>