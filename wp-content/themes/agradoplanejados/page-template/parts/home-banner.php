<style>
    #home-banner-container {
        width: 100%;
        height: 650px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--background-2);
        max-width: 1600px;
    }

    #home-banner-box-1 {
        width: 50%;
        height: 100%;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    #home-banner-box-1-content {
        width: 605px;
        height: auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }

    #home-banner-box-2 {
        width: 50%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-position-x: right;
        background-position-y: center;
    }

    .titulo-home-banner {
        color: var(--primary-1);
        margin-bottom: 0px;
    }

    .subtitulo-home-banner {
        color: var(--dark-1);
        margin-bottom: 25px;
		max-width: 500px;
    }

    @media (max-width: 1210px) {
        #home-banner-box-1-content {
            width: 100%;
            height: auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }
    }

    @media (max-width: 1100px) {
        #home-banner-container {
            position: relative;
            height: 550px;
        }

        #home-banner-box-1 {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            left: 50%;
            top: 0px;
            transform: translateX(-50%);
            z-index: 900;
            background: rgb(2, 0, 36);
            background: linear-gradient(0deg, rgba(2, 0, 36, 0.6222864145658263) 0%, rgba(0, 0, 0, 0.7483368347338936) 32%, rgba(0, 0, 0, 0.8519782913165266) 100%);
        }

        #home-banner-box-2 {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            left: 50%;
            top: 0px;
            transform: translateX(-50%);
            z-index: 500;
            filter: blur(2px);
        }

        .titulo-home-banner {
            color: var(--primary-0);
            margin-bottom: 15px;
        }

        .subtitulo-home-banner {
            color: var(--light);
            margin-bottom: 25px;
        }
    }

    @media (max-width: 460px) {
        #home-banner-container {
            position: relative;
            height: 530px;
        }

        #home-banner-box-1-content {
            width: 100%;
            height: auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }
		.titulo-home-banner {
            color: var(--primary-0);
            margin-bottom: 0px;
        }
    }
</style>

<section id="home-banner-container">
    <div id="home-banner-box-1">
        <div id="home-banner-box-1-content">
            <h1 class="h1 medium titulo-home-banner">Agradando e superando expectativas.</h1>
            <p class="h6 regular subtitulo-home-banner">Atuamos há mais de 20 anos no ramo de móveis planejados. Oferecemos produtos de alta qualidade e design personalizado, entendemos as necessidades e preferências de cada cliente para criar móveis que atendam às suas expectativas.</p>
            <a href="<?php echo get_site_url(); ?>/sobre-nos" class="btn btn-cta">SOBRE NÓS</a>
        </div>
    </div>
    <div id="home-banner-box-2" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/agradoplanejados/assets/images/banner-principal.jpg);">

    </div>
</section>