<style>
    #home-sobre-container {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--background-1);
        max-width: 1600px;
    }

    #home-sobre-content {
        width: 1210px;
        height: auto;
        margin: 0 auto;
        padding: 60px 20px 0px 20px;
        display: grid;
        grid-template-columns: repeat(3, 370px);
        grid-auto-rows: auto;
        justify-content: center;
        align-items: flex-start;
        gap: 30px;
        transform: translateY(-120px);
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
        color: var(--primary-1);
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
        background-color: var(--primary-1);
    }

    .home-sobre-card-texto {
        color: var(--dark-1);
        margin: 0px;
        padding: 0px;
    }

    @media (max-width: 1210px) {
        #home-sobre-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 60px 20px 0px 20px;
            display: grid;
            grid-template-columns: repeat(3, 330px);
            grid-auto-rows: auto;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            transform: translateY(-120px);
        }
    }

    @media (max-width: 1100px) {
        #home-sobre-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 60px 20px 0px 20px;
            display: grid;
            grid-template-columns: repeat(2, 370px);
            grid-auto-rows: auto;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            transform: translateY(-120px);
            z-index: 1100;
        }
    }


    @media (max-width: 830px) {
        #home-sobre-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 60px 20px 0px 20px;
            display: grid;
            grid-template-columns: repeat(1, 370px);
            grid-auto-rows: auto;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            transform: translateY(-120px);
            z-index: 1100;
        }
    }

    @media (max-width: 410px) {
        #home-sobre-content {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 60px 20px 0px 20px;
            display: grid;
            grid-template-columns: repeat(1, 100%);
            grid-auto-rows: auto;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            transform: translateY(-120px);
            z-index: 1100;
        }
    }
</style>

<section id="home-sobre-container">
    <div id="home-sobre-content">
        <div class="home-sobre-card">
            <h6 class="h6 home-sobre-card-titulo">Construindo nossa história</h6>
            <p class="p home-sobre-card-texto">Estamos no mercado há mais de 15 anos em busca de agradar e superar as expectativas de nossos clientes. Com muita dedicação e amor ao serviço conseguimos nos consolidar como uma marcenaria.</p>
        </div>
        <div class="home-sobre-card">
            <h6 class="h6 home-sobre-card-titulo">Qualidade que surpreende</h6>
            <p class="p home-sobre-card-texto">A qualidade de nossos móveis é garantida com produtos e mercadorias de primeira linha. Sempre procuramos nos atualizar em relação a novas tecnologias de produtos no mercado.</p>
        </div>
        <div class="home-sobre-card">
            <h6 class="h6 home-sobre-card-titulo">Nossa missão</h6>
            <p class="p home-sobre-card-texto">Construir um futuro sólido junto de nossos clientes fazendo móveis da melhor forma possível com respeito, amor e dedicação.</p>
        </div>
    </div>
</section>