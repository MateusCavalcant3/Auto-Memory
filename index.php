<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Auto Memory</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#" class="logo">
              <img src="assets/logo-white.png" alt="logo" class="logo-white" />
              <img src="assets/logo-dark.png" alt="logo" class="logo-dark" />
              <span>Auto Memory</span>
            </a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">Sobre Nós</a></li>
          <li><a href="#deals">Comprar Carros</a></li>
          <li><a href="orcamento_defeito.php">Fazer Orçamento</a></li>
          <li><a href="">Avaliações</a></li>
          
        </ul>
        <div class="nav__btns">
       <a class="btn" href="cadastro.php">Cadastrar-se</a>
        </div>
      <div class="nav__btns">
     <a class="btn" href="login.php">Login admin</a>
     </div>
      </nav>
      <div class="header__container" id="home">
        <div class="header__image">
          <img src="assets/header.png" alt="header" />
        </div>
        <div class="header__content">
          <h2>👍 Plataforma de compra e raparos de carros 100% confiável em SP</h2>
          <h1>MANEIRA RÁPIDA E FÁCIL DE COMPRAR UM CARRO</h1>
          <p class="section__description">
            Descubra uma experiência de reparos de carro perfeita conosco.
             Escolha entre uma variedade de veículos premium  para atender 
             ao seu estilo e necessidades, e pegue a estrada com confiança. 
             Rápido e fácil.
          </p>
        </div>
      </div>
    </header>

    <section class="header__form">
      <form action="/">
        <div class="input__group">
          <label for="location">Local de retirada e reparos</label>
          <input
            type="text"
            name="location"
            id="location"
            placeholder="São Paulo,   Diadema"
          />
        </div>
        <div class="input__group">
          <label for="start">horário de funcionamento</label>
          <input
            type="text"
            name="start"
            id="start"
            placeholder="Das 8h às 20h"
          />
        </div>
        <div class="input__group">
          <label for="stop">Dias da Semana</label>
          <input
            type="text"
            name="stop"
            id="stop"
            placeholder="Segunda a Sábado"
          />
        </div>
 
      </form>
    </section>

    <section class="section__container about__container" id="about">
      <h2 class="section__header">Como funciona</h2>
      <p class="section__description">
        Comprar um carro conosco é fácil! Basta escolher
        o veículo que deseja e agendar uma visita à nossa
        loja para conhecê-lo. Nós cuidamos de tudo para que
        sua jornada comece com tranquilidade.
      </p>
      <div class="about__grid">
        <div class="about__card">
          <span><i class="ri-map-pin-2-fill"></i></span>
          <h4>localização</h4>
          <p>
            R. Graciosa, 137 - Centro, Diadema - SP, <br>
            09910-660. Bairro: Centro. Cidade: Diadema
          </p>
        </div>
        <div class="about__card">
          <span><i class="ri-calendar-event-fill"></i></span>
          <h4>Data de retirada</h4>
          <p>
            Agende a data e o horário ideais para retirar seu carro,
            com a garantia de que estará pronto quando você precisar.
            Nosso atendimento é de segunda a sábado, das 8h às 20h.
          </p>
        </div>
        <div class="about__card">
          <span><i class="ri-roadster-fill"></i></span>
          <h4>Faça o seu Orçamento</h4>
          <p>
            Solicite seu orçamento em poucos cliques,
            e nós prepararemos todos os detalhes para
            garantir um processo simples e sem complicações.
          </p>
        </div>
      </div>
    </section>

    <section class="deals" id="deals">
      <div class="section__container deals__container">
        <h2 class="section__header">Ofertas de Carros </h2>
        <p class="section__description">
          Explore nossas principais ofertas de carros,
          escolhidas a dedo para lhe dar o melhor valor e experiência.
          Reserve uma visita agora e dirija seu carro favorito a uma taxa incrível!
        </p>
        <div class="deals__tabs">
          <button class="btn active" data-id="Tesla">Tesla</button>
          <button class="btn" data-id="Mitsubishi">Mitsubishi</button>
          <button class="btn" data-id="Mazda">Mazda</button>
          <button class="btn" data-id="Toyota">Toyota</button>
          <button class="btn" data-id="Honda">Honda</button>
        </div>
        <div id="Tesla" class="tab__content active">
          <div class="deals__card">
            <img src="assets/deals-1.png" alt="ofertas" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(550)</span>
            </div>
            <h4>Tesla Model S</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Piloto Automático
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 400km
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Elétrico
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$ 1.276.840<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora 
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="assets/deals-2.png" alt="ofertas" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(450)</span>
            </div>
            <h4>Tesla Model E</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Piloto Automático
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 400km
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Elétrico
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$ 389.000</h3><span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="assets/deals-3.png" alt="ofertas" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(550)</span>
            </div>
            <h4>Tesla Model Y</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Piloto Automático
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 400km
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Elétrico
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$ 219.787</h3><span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
        </div>
        
        <div id="Mitsubishi" class="tab__content">
          <div class="deals__card">
            <img src="assets/deals-4.png" alt="ofertas" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(350)</span>
            </div>
            <h4>Mirage</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 13km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Gasolina
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$ 90.000<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="assets/deals-5.png" alt="ofertas" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(250)</span>
            </div>
            <h4>Xpander</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$257.000<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="assets/deals-6.png" alt="ofertas" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(150)</span>
            </div>
            <h4>Pajero Sports</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Gasolina
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$350.999<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
        </div>
        <div id="Mazda" class="tab__content">
          <div class="deals__card">
            <img src="assets/deals-7.png" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(200)</span>
            </div>
            <h4>Mazda CX5</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 7km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Gasolina
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$799.999<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="assets/deals-8.png" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(100)</span>
            </div>
            <h4>Mazda CX-30</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 8km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> gasolina
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$1.250.999<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="assets/deals-9.png" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(180)</span>
            </div>
            <h4>Mazda CX-9</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 6km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$ 849.999<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
        </div>
        <div id="Toyota" class="tab__content">
          <div class="deals__card">
            <img src="assets/deals-10.png" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(250)</span>
            </div>
            <h4>Corolla</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 10km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> gasolina
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$159.000<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="assets/deals-11.png" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(550)</span>
            </div>
            <h4>Innova</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 7 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 7km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$399.999<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="assets/deals-12.png" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(180)</span>
            </div>
            <h4>Fortuner</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 7 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 20km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Hybrid
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$359.000<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
        </div>
        <div id="Honda" class="tab__content">
          <div class="deals__card">
            <img src="assets/deals-13.png" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(200)</span>
            </div>
            <h4>Amaze</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 22km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> hybrid
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$139.000<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="assets/deals-14.png" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(350)</span>
            </div>
            <h4>Elevate</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 7 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 30km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Hybrid
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$299.000<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="assets/deals-15.png" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(300)</span>
            </div>
            <h4>City</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 Pessoas
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 15km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> gasolina
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>R$129.999<span></span></h3>
              <a href="agendar_visita.php">
                Comprar Agora
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="choose__container" id="choose">
      <div class="choose__image">
        <img src="assets/choose.png" alt="choose" />
      </div>
      <div class="choose__content">
        <h2 class="section__header">Por que nos escolher</h2>
        <p class="section__description">
          Descubra a diferença com nosso serviço de <strong>Reparos</strong> de carros.
          Oferecemos veículos confiáveis, atendimento ao cliente excepcional,
          e preços competitivos para garantir uma experiência perfeita.
        </p>
        <div class="choose__grid">
          <div class="choose__card">
            <span><i class="ri-customer-service-line"></i></span>
            <div>
              <h4>
                Suporte ao cliente</h4>
              <p>Nossa equipe de suporte dedicada está disponível para ajudar você 24 horas por dia, 7 dias por semana.</p>
            </div>
          </div>
          <div class="choose__card">
            <span><i class="ri-map-pin-line"></i></span>
            <div>
              <h4>Locais</h4>
              <p>
                Co R. Graciosa, 137 - Centro, Diadema - SP, <br>
                09910-660. Bairro: Centro. Cidade: Diadema
              </p>
            </div>
          </div>
          <div class="choose__card">
            <span><i class="ri-wallet-line"></i></span>
            <div>
              <h4>Melhor preço</h4>
              <p>Aproveite <strong>Preços</strong> competitivos e ótimo atendimento ao cliente.</p>
            </div>
          </div>
          <div class="choose__card">
            <span><i class="ri-user-star-line"></i></span>
            <div>
              <h4>Motorista experiente</h4>
              <p>Motoristas confiáveis ​​e profissionais disponíveis mediante solicitação.</p>
            </div>
          </div>
          <div class="choose__card">
            <span><i class="ri-verified-badge-line"></i></span>
            <div>
              <h4>
                Marcas Verificadas</h4>
              <p>Escolha entre marcas de carros confiáveis ​​e bem conservadas.</p>
            </div>
          </div>
          <div class="choose__card">
            <span><i class="ri-calendar-close-line"></i></span>
            <div>
              <h4>Cancelamentos grátis</h4>
              <p>Reservas flexíveis com opções de cancelamento gratuito para o seu <strong>Orçamento</strong></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="subscribe__container">
      <div class="subscribe__image">
        <img src="assets/subscribe.png" alt="subscribe" />
      </div>
      <div class="subscribe__content">
        <h2 class="section__header">
          Inscreva-se para receber as últimas atualizações sobre Reparos de carros
        </h2>
        <p class="section__description">
        Fique por dentro! Assine para receber as últimas ofertas de carros,
        ofertas exclusivas e atualizações diretamente na sua caixa de entrada. Não perca
        promoções especiais e as mais novas adições à nossa frota.
        </p>
        <form action="/">
          <input type="text" placeholder="Seu email aqui" />
          <button class="btn">Enviar</button>
        </form>
      </div>
    </section>

    <section class="section__container client__container" id="client">
      <h2 class="section__header">O que as pessoas dizem sobre nós?</h2>
      <p class="section__description">
        Descubra por que nossos clientes amam Fazer serviços conosco! Leia avaliações
        e depoimentos reais para ver como oferecemos um serviço excepcional.
      </p>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__details">
                <img src="assets/client-1.jpg" alt="client" />
                <div>
                  <h4>Sara Oliveira</h4>
                  <div class="client__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                </div>
              </div>
              <p>
                Eu tive uma experiência incrível Comprando um carro desse serviço.
                O processo de reserva foi rápido e fácil, e o carro estava em perfeitas
                condições. Super recomendo!
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__details">
                <img src="assets/client-2.jpg" alt="client" />
                <div>
                  <h4>Bigode</h4>
                  <div class="client__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                </div>
              </div>
              <p>
                O suporte ao cliente foi excelente! Eles me ajudaram com
                todas as minhas dúvidas e eu me senti confiante em relação
                à minha <strong>Manutenção</strong>. Com certeza <strong>Voltarei</strong> a fazer serviços com eles novamente.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__details">
                <img src="assets/client-3.jpg" alt="client" />
                <div>
                  <h4>Yasmin Silva</h4>
                  <div class="client__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                </div>
              </div>
              <p>
               Preços acessíveis e uma ótima seleção de veículos! Encontrei exatamente
              o que precisava, e o processo de retirada foi tranquilo. Fiquei muito feliz com a minha compra.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__details">
                <img src="assets/client-4.jpg" alt="client" />
                <div>
                  <h4>Lucas Almeida</h4>
                  <div class="client__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                </div>
              </div>
              <p>
                Atendimento excelente, serviço rápido e de qualidade. Preço justo. Recomendo!
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__details">
                <img src="assets/client-5.jpg" alt="client" />
                <div>
                  <h4>Davi Rocha</h4>
                  <div class="client__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                </div>
              </div>
              <p>
                Excelente atendimento e serviço rápido. A equipe foi clara nas explicações
                e o preço justo. Meu carro voltou em perfeitas condições. Recomendo a todos!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#" class="logo">
              <img src="assets/logo-white.png" alt="logo" />
              <span>Auto Memory</span>
            </a>
          </div>
          <p>
            Estamos aqui para lhe fornecer os melhores veículos e uma experiência
            perfeita. Fique conectado para atualizações, ofertas especiais
            e muito mais. Dirija com confiança!
          </p>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-linkedin-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-youtube-fill"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Serviços</h4>
          <ul class="footer__links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Sobre Nós</a></li>
            <li><a href="#deals">Comprar Carros</a></li>
            <li><a href="#choose">Fazer Orçamento</a></li>
            <li><a href="#client">Avaliações</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Modelo do veículo
          </h4>
          <ul class="footer__links">
            <li><a href="#">Toyota Corolla</a></li>
            <li><a href="#">Toyota Noah</a></li>
            <li><a href="#">Toyota Allion</a></li>
            <li><a href="#">Toyota Premio</a></li>
            <li><a href="#">Mistubishi Pajero</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Contato</h4>
          <ul class="footer__links">
            <li>
              <a href="#">
                <span><i class="ri-phone-fill"></i></span> (11) 912345678
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-map-pin-fill"></i></span> São Paulo, Diadema
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-mail-fill"></i></span> automemory@email.com
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__bar">
      Copyright © 2024 Web Design Mastery. Todos os direitos reservados Bigode.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
