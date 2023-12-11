<?php

/*
Template Name: Página - Sobre nós
*/

get_header();
?>

<style>
    .menu-sobre a::before {
        max-width: 100% !important;
    }

    #sobre-container {
        width: 100%;
        height: auto;
        padding: 0px;
        margin: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--dark-2);
    }

    #sobre-content {
        width: 1210px;
        height: auto;
        padding: 60px 20px 120px 20px;
        margin: 0px;
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    #sobre-box-1 {
        width: 520px;
        height: auto;
        margin: 0px 70px 0px 0px;
        padding: 0px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
    }

    #sobre-box-1 h2 {
        color: var(--secondary-2);
        margin: 0px;
        padding: 0px;
        margin-bottom: 15px;
        text-align: left;
    }

    #sobre-box-1 p {
        color: var(--light);
        margin: 0px;
        padding: 0px;
        text-align: left;
        position: relative;
		max-width: 400px;
    }

    #sobre-box-1 p::before {
        content: "";
        position: absolute;
        bottom: -40px;
        left: 0;
        width: 200px;
        height: 2px;
        background-color: var(--light);
    }

    #sobre-box-2 {
        width: 250px;
        min-width: 250px;
        max-width: 250px;
        height: 250px;
        min-height: 250px;
        max-height: 250px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid var(--secondary-2);
        border-radius: 0px 30px 0px 30px;
    }

    #sobre-box-2 img {
        width: 110%;
        height: auto;
        margin: 0px;
        filter: grayscale(1);
        transition: 0.5s ease all;
    }

    #sobre-box-2:hover img {
        filter: grayscale(0);
        transition: 0.5s ease all;
    }

    #home-sobre-container {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--background-1);
    }

    #home-sobre-content {
        width: 1210px;
        height: auto;
        margin: 0 auto;
        padding: 40px 20px 0px 20px;
        display: grid;
        grid-template-columns: repeat(3, 370px);
        grid-auto-rows: auto;
        justify-content: center;
        align-items: flex-start;
        gap: 30px;
        transform: translateY(-100px);
    }

    .home-sobre-card {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        margin: 0px;
        padding: 25px;
        border-radius: 4px;
        border: 1px solid #E2E2E2;
        background: #FFFFFF;
        transition: 0.5s ease all;
    }

    .home-sobre-card:hover {
        transition: 0.5s ease all;
        -webkit-box-shadow: 0px 4px 30px 0px rgba(0, 0, 0, 0.12);
        -moz-box-shadow: 0px 4px 30px 0px rgba(0, 0, 0, 0.12);
        box-shadow: 0px 4px 30px 0px rgba(0, 0, 0, 0.12);
    }

    .home-sobre-card-titulo {
        color: var(--primary-0);
        padding: 0px;
        margin: 0px;
        margin-bottom: 44px;
        text-align: center;
        text-transform: uppercase;
        position: relative;
    }

    .home-sobre-card-titulo::before {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -22px;
        transform: translateX(-50%);
        width: 80px;
        height: 1px;
        border: none;
        background-color: var(--primary-0);
    }

    .home-sobre-card-texto {
        color: var(--dark-1);
        margin: 0px;
        padding: 0px;
    }

    #localizacao-container {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        background-color: var(--background-1);
        max-width: 1600px;
        padding: 0px;
    }

    #localizacao-content {
        width: 100%;
        height: 350px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0px;
        margin: 0px;
        position: relative;
    }

    #localizacao-content iframe {
        padding: 0px;
        margin: 0px;
        width: 100%;
        height: 100%;
        border: 2px solid var(--background-1);
    }

    .localizacao-card {
        width: 150px;
        height: 150px;
        margin: 0px;
        padding: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        border: 1px solid var(--primary-2);
        position: absolute;
        top: -45px;
        left: 50%;
        transform: translateX(-50%);
    }

    .localizacao-card img {
        height: 110%;
        width: auto;
        margin: 0px;
    }

    @media (max-width: 1210px) {
        #sobre-content {
            width: 100%;
            height: auto;
            padding: 60px 20px 120px 20px;
            margin: 0px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        #home-sobre-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 40px 20px 0px 20px;
            display: grid;
            grid-template-columns: repeat(3, 330px);
            grid-auto-rows: auto;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
        }
    }

    @media (max-width: 1100px) {
        #home-sobre-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 40px 20px 120px 20px;
            display: grid;
            grid-template-columns: repeat(2, 370px);
            grid-auto-rows: auto;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            z-index: 1100;
        }
    }

    @media (max-width: 960px) {
        #sobre-box-1 {
            width: 400px;
            height: auto;
            margin: 0px 70px 0px 0px;
            padding: 0px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }

        #sobre-box-2 {
            width: 200px;
            min-width: 200px;
            max-width: 200px;
            height: 200px;
            min-height: 200px;
            max-height: 200px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid var(--primary-0);
        }
    }


    @media (max-width: 830px) {
        #home-sobre-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 40px 20px 0px 20px;
            display: grid;
            grid-template-columns: repeat(1, 370px);
            grid-auto-rows: auto;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            z-index: 1100;
        }
    }

    @media (max-width: 730px) {
        #sobre-content {
            width: 100%;
            height: auto;
            padding: 40px 20px 120px 20px;
            margin: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #sobre-box-1 {
            width: 100%;
            height: auto;
            margin: 0px;
            padding: 0px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            margin-bottom: 50px;
        }

        #sobre-box-1 p::before {
            display: none;
        }

        #sobre-box-2 {
            width: 280px;
            min-width: 280px;
            max-width: 280px;
            height: 280px;
            min-height: 280px;
            max-height: 280px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid var(--primary-0);
        }

        #localizacao-container {
            transform: translateY(-30px);
			margin-bottom: -30px;
        }

        .localizacao-card {
            display: none;
        }
    }
	
	@media (max-width: 500px) {
		#sobre-box-1 h2 {
			color: var(--secondary-2);
			margin: 0px;
			padding: 0px;
			margin-bottom: 15px;
			text-align: center;
			font-size: 24px !important;
			line-height: 30px !important;
		}
		#sobre-box-1 p {
			color: var(--light);
			margin: 0px;
			padding: 0px;
			text-align: center;
			position: relative;
			max-width: none;
		}
	}

    @media (max-width: 410px) {
        #home-sobre-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 40px 20px 0px 20px;
            display: grid;
            grid-template-columns: repeat(1, 100%);
            grid-auto-rows: auto;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            z-index: 1100;
        }
    }
</style>

<section class="titulo-container" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/images/banner-titulo.jpg);">
    <div class="titulo-content">
        <h2 class="h2 bold">Sobre nós</h2>
    </div>
</section>

<?php if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
        edit_post_link();
    endwhile;
endif; ?>

<?php
get_footer();
?>