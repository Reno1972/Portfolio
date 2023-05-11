<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Renaud COLOMAR</title>
  <meta name="Portfolio de Renaud COLOMAR" content="Portfolio de Renaud Colomar, développeur web et web mobile - En recherche d'emploi pour un poste de développeur web en CDI ou CDD - En recherche de projets en freelance">
  <link rel="shortcut icon" href="./img/favicon.ico?=1" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/style.js" defer></script>  <!-- defer permet d'attendre que tout soit charger avant d'executer le javascript -->
  <script src="https://kit.fontawesome.com/189b4219e7.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- PLAN DU SITE
    Header
      logo
      menu
      socials
      burger

    Hero
      left
      right

    About
      left
      right

    Services
    Skilss
    Portfolio
    Contact

    Footer
  -->

  <header class="header">
    <div class="container d-flex">
      <div class="logo">
        Renaud COLOMAR
      </div>
      <nav class="navbar">
        <ul class="menu list-unstyled">
          <li><a href="#hero">Accueil</a></li>
          <li><a href="#about">A propos</a></li><!-- le # est l'encre qui renvoie à la section de l'Id concerné-->
          <li><a href="#services">Services</a></li>
          <li><a href="#skills">Compétences</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <div class="right">
        <ul class="socials list-unstyled">
          <!--target="_blank" permet d'ouvrir la page dans un nouvel onglet-->

          <li>
            <a href="https://www.linkedin.com/in/renaud-colomar-096258232/" target="_blank">
              <svg class="icon linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
              </svg>
            </a>
          </li>

          <li>
            <a href="https://github.com/Reno1972" target="_blank">
              <i class="fa-brands fa-github" style="color: #000000; font-size: 23px;"></i>
            </a>
          </li>
        </ul>
        <button class="burger">
          <span class="bar"></span>
        </button>
      </div>
    </div>
  </header>

  <section id="hero" class="hero">
    <div class="container">
      <div class="grid">
        <div class="hero__item left">
          <span>Développeur Web & web mobile Junior</span>
          <h1 class="title">Hello, je suis Renaud COLOMAR de Montpellier</h1>
          <p>Recherche un poste de <strong>Développeur Web Junior</strong></p>
        </div>
        <div class="hero__item right">
          <div class="hero__avatar">
            <img src="./img/avatar.png" loading="lazy" width="500" height="500" alt="Avatar Renaud Colomar - Développeur web">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="container">
      <div class="grid">
        <div class="grid__item about__item">
          <img src="./img/person.jpg"   loading="lazy" width="560" height="453" alt="Renaud Colomar - Développeur web">
        </div>
        <div class="grid__item about__item">
          <h2 class="section-title">A propos</h2>
          <h3>Qui suis-je</h3>
          <p>
            Bonjour et bienvenue sur mon portfolio !
          </p>
          <p>
            Je m'appelle Renaud et à 50 ans, je suis jeune titulaire du <strong>Titre Professionnel de Développeur Web et Web Mobile</strong> de niveau 5 (Bac +2). Riche d'une expérience managériale, commerciale et de gestion réussie, je suis aujourd'hui investi dans le secteur du numérique. Après plusieurs mois de réflexion et d'introspection au cours d’un bilan de compétences, c'est mon intérêt pour le code et les nouvelles technologies qui m'a mené au choix de développeur web. Un métier qui demande créativité et réflexion, avec un marché de l'emploi porteur et de nouvelles perspectives d'évolution.
          </p>
          <p>
            En 2021 et 2022 j'ai suivi la formation de Développeur Web au sein du centre de formation de l'ADRAR et obtenu mon Titre Professionnel en juillet 2022. <strong>Je suis actuellement à la recherche d'un poste de Développeur Web Junior</strong>.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="services" class="services">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Mes services</h2>
        <p>Bien qu'à la recherche d'un emploi, j'ai créé l'entreprise <strong>Web Live</strong> en tant qu'auto-entrepreneur. Je propose divers services pour des missions à court ou moyen termes. Vous pouvez me retrouver sur <a href="https://www.malt.fr/" style="color:blue;" target="_blank">https://www.malt.fr/</a> pour toute demande.</p>
      </div>
      <div class="grid">
        <div class="grid__item">

          <div class="service">
            <div class="service__icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
            </div>
            <div class="service__content">
              <h3>Développements spécifiques</h3>
              <p> Je code une fonctionnalité, un site web ou encore une application entière, répondant aux besoins spécifiques de votre entreprise et de votre coeur de métier.</p>
            </div>
          </div>
          <div class="service">
            <div class="service__icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
            </div>
            <div class="service__content">
              <h3>Référencement naturel</h3>
              <p>J'optimise le code de votre site pour que le travail de positionnement soit le plus efficace possible.</p>
            </div>
          </div>
        </div>
        <div class="grid__item">
          <div class="service">
            <div class="service__icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg>
            </div>
            <div class="service__content">
              <h3>Conception graphique</h3>
              <p>Je conçois la partie visuelle d'une application, la maquette des écrans de l’interface utilisateur je veille à prendre en compte la charte graphique.</p>
            </div>
          </div>

          <div class="service">
            <div class="service__icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z"/></svg>
            </div>
            <div class="service__content">
              <h3>Responsive design</h3>
              <p>j'adapte l'ergonomie de votre site aux différents formats d'écrans : desktop, tablette ou mobile.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="skills" class="skills">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Mes compétences</h2>
        <p>Je conçois la partie visuelle d'une application, la maquette des écrans de l’interface utilisateur et la navigation de l’application web ou web mobile. Je suis attentif quant au respect des principes de sécurisation des interfaces utilisateur et je veille à prendre en compte la charte graphique, ou les interfaces utilisateur standardisées, ainsi que les règles d'accessibilité. Maitriser la partie back-end fait également partie de mes objectifs. </p>
      </div>
      <div class="grid">
        <div class="grid__item skill__left">
          <img src="./img/CV_Renaud_Colomar.png" loading="lazy"  width="490" alt="CV de Renaud Colomar">
          <!-- ftp://ldjk2913@soja.o2switch.net/public_html/CV_Renaud_Colomar.pdf
          ftp://ldjk2913@soja.o2switch.net/public_html/CV_Renaud_Colomar.html -->
          <div class="btn_lien">
            <button>
              <a href="https://www.renaud-colomar.com//CV_Renaud_Colomar.pdf" target="_blank">
                Télécharger le CV
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
              </a>
            </button>
          </div>
        </div>
        
        <div class="grid__item skill__right">
          <h3>Front-end</h3>
          <div class="progressbar">
            <div class="bar" data-width="90">HTML</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="90">CSS</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="60">JAVASCRIPT</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="25">REACT</div>
          </div>

          <h3>Back-end</h3>
          <div class="progressbar">
            <div class="bar" data-width="50">SQL</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="40">PHP</div>
          </div>

          <h3>CMS</h3>
          <div class="progressbar">
            <div class="bar" data-width="80">WORDPRESS</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="75">WIX</div>
          </div>

          <h3>Frameworks</h3>
          <div class="progressbar">
            <div class="bar" data-width="60">BOOTSTRAP</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Portfolio</h2>
        <p>Voici mes différents réalisations à ce jour.</p>
      </div>
      <ul class="grid portfolio-filters list-unstyled">
        <li class="grid__item">
          <a href="#" class="active" data-filter="all">Tous les projets</a>
        </li>
        <li class="grid__item">
          <a href="#" data-filter="wordpress"  >Wordpress</a>
        </li>
        <li class="grid__item">
          <a href="#"data-filter="design">Conception graphique</a>
        </li>
        <li class="grid__item">
          <a href="#" data-filter="app">Développement spécifique</a>
        </li>
      </ul>
      <div class="grid">
        <div class="grid__item">
          <div class="card" data-category="wordpress">
            <img src="./img/Skintech 4.png" loading="lazy" width="365" height="243" alt="Projet 1" class="card__image">
            <div class="card__inner">
              <h3 class="card__title">SkinTech</h3>
              <p class="category">Wordpress</p>
            </div>
            <div class="card__overlay">
              <a href="#" class="card__link" data-id="modal-1">skintech</a>
            </div>
          </div>
          <div class="modal" id="modal-1">
            <button class="modal__close">&times;</button>
            <div class="modal__content">
              <div class="container">
                <div class="grid">
                  <div class="grid__item">
                    <img src="./img/Skintech 4.png" loading="lazy" width="560" height="373" class="card__image">
                    <img src="./img/Skintech 3.png" loading="lazy" width="560" height="373" class="card__image">
                  </div>
                  <div class="grid__item">
                    <h4 class="modal__title h2">Site de SkinTech</h4>
                    <p>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                      </svg>
                      <i>Année : 2023</i>
                    </p>
                    <p class="category">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                      </svg>
                      Site Wordpress
                    </p>
                    <p>A la demande de la gérante des centres de soins de nouvelle génération <strong>SkinTech</strong>, j'ai réalisé ce site en remplacement d'un déjà existant et en ligne depuis plusieurs années afin de l'optimiser et le remettre aux goûts du jour.
                    </p>
                    <h5 class="h3">Informations</h5>
                    <p>J'ai conservé la charte graphique existante et suis reparti de zéro dans la conception du nouveau site sur Wordpress. J'ai utiliseé Elementor pour la réalisation.
                    </p>
                    <h5 class="h3">Technologies</h5>
                    <ul>
                      <li>Wordpress</li>
                      <li>Elementor</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid__item">
          <div class="card" data-category="wordpress">
            <img src="./img/Bodyrainbow 5.png" loading="lazy" width="365" height="243" alt="Projet 2" class="card__image">
            <div class="card__inner">
              <h3 class="card__title">Bodyrainbow</h3>
              <p class="category">Worpress</p>
            </div>
            <div class="card__overlay">
              <a href="#" class="card__link" data-id="modal-2">Bodyrainbow</a>
            </div>
          </div>
          <div class="modal" id="modal-2">
            <button class="modal__close">&times;</button>
            <div class="modal__content">
              <div class="container">
                <div class="grid">
                  <div class="grid__item">
                    <img src="./img/Bodyrainbow 5.png" loading="lazy" width="560" height="373" class="card__image">
                    <img src="./img/Bodyrainbow 4.png" loading="lazy" width="560" height="373" class="card__image">
                  </div>
                  <div class="grid__item">
                    <h4 class="modal__title h2">Site de Bodyrainbow</h4>
                    <p>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                      </svg>
                      <i>Année : 2023</i>
                    </p>
                    <p class="category">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                      </svg>
                      Site Wordpress
                    </p>
                    <p>Le gérent de l'entreprise de coaching sportif <strong>Bodyrainbow</strong> m'a contacté pour remodeler son site existant en vue d'une réorientations de son activité vers le coaching bien-être et santé pour les entreprises.
                    </p>
                    <h5 class="h3">Informations</h5>
                    <p>Je suis parti du site existant pour le retravailler. J'ai conservé le thème de wordpress AVA utilisé par le Web master qui a conçu le site et donc utilisé l'éditeur AVA Edit.
                    </p>
                    <h5 class="h3">Technologies</h5>
                    <ul>
                      <li>Wordpress</li>
                      <li>Thème AVA</li>
                      <li>AVA Edit</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid__item">
          <div class="card" data-category="app">
            <img src="./img/Portfolio 1.png" loading="lazy" width="365" height="243" alt="Projet 3" class="card__image">
            <div class="card__inner">
              <h3 class="card__title">Mon Poptfolio</h3>
              <p class="category">Développement spécifique</p>
            </div>
            <div class="card__overlay">
              <a href="#" class="card__link" data-id="modal-3">Mon Portfolio</a>
            </div>
          </div>
          <div class="modal" id="modal-3">
            <button class="modal__close">&times;</button>
            <div class="modal__content">
              <div class="container">
                <div class="grid">
                  <div class="grid__item">
                    <img src="./img/Portfolio 1.png" loading="lazy" width="560" height="373" class="card__image">
                    <img src="./img/Portfolio 2.png" loading="lazy" width="560" height="373" class="card__image">
                  </div>
                  <div class="grid__item">
                    <h4 class="modal__title h2">Portfolio de Renaud Colomar</h4>
                    <p>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                      </svg>
                      <i>Année : 2023</i>
                    </p>
                    <p class="category">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                      </svg>
                      Développement spécifique
                    </p>
                    <p>J'ai souhaité coder mon portfolio en exploitant les principaux langages que j'utilise afin de mettre en application mes compétences.
                    </p>
                    <h5 class="h3">Informations</h5>
                    <p>J'ai utilisé le Html et le Css pour la mise en page, Javascript pour les animations et le dynamisme de la page, et enfin le Php pour le formulaire de contact.
                    </p>
                    <h5 class="h3">Technologies</h5>
                    <ul>
                      <li>HTML, CSS</li>
                      <li>Javascript</li>
                      <li>PHP</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid__item">
          <div class="card" data-category="design">
            <img src="./img/Alison Germain 1.png" loading="lazy" width="365" height="243" alt="Projet 5" class="card__image">
            <div class="card__inner" style="margin-top: 1.3rem;">
              <h3 class="card__title">Alison GERMAIN</h3>
              <p class="category">Conception graphique</p>
            </div>
            <div class="card__overlay">
              <a href="#" class="card__link" data-id="modal-5">Alison Germain</a>
            </div>
          </div>
          <div class="modal" id="modal-5">
            <button class="modal__close">&times;</button>
            <div class="modal__content">
              <div class="container">
                <div class="grid">
                  <div class="grid__item">
                    <img src="./img/Alison Germain 1.png" loading="lazy" width="560" height="373" class="card__image">
                    <img src="./img/Alison Germain 2.png" loading="lazy" width="560" height="373" class="card__image">
                  </div>
                  <div class="grid__item">
                    <h4 class="modal__title h2">Alison GERMAIN</h4>
                    <p>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                      </svg>
                      <i>Année : 2021</i>
                    </p>
                    <p class="category">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                      </svg>
                      Conception graphique
                    </p>
                    <p>Ici, une maquette que j'ai proposé à <strong>Alison GERMAIN</strong>, auteur indépendante de romans, à sa demande. Elle a pour projet de créer un site pour mettre en avant ses livres édités.
                    </p>
                    <h5 class="h3">Informations</h5>
                    <p>J'ai utilisé Adobe XD pour la conception de cette maquette. Je suis parti du logo existant d'Alison GERMAIN pour la charte graphique.
                    </p>
                    <h5 class="h3">Technologies</h5>
                    <ul>
                      <li>Adobe Xd</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="grid__item">
          <div class="card" data-category="web">
            <img src="https://picsum.photos/600/400?random=4" loading="lazy" width="365" height="243" alt="Projet 4" class="card__image">
            <div class="card__inner">
              <h3 class="card__title">Titre du projet</h3>
              <p class="category">Développement web</p>
            </div>
            <div class="card__overlay">
              <a href="#" class="card__link" data-id="modal-4">+</a>
            </div>
          </div>
          <div class="modal" id="modal-4">
            <button class="modal__close">&times;</button>
            <div class="modal__content">
              <div class="container">
                <div class="grid">
                  <div class="grid__item">
                    <img src="https://picsum.photos/600/400?random=4" loading="lazy" width="560" height="373" class="card__image">
                    <img src="https://picsum.photos/600/400?random=14" loading="lazy" width="560" height="373" class="card__image">
                  </div>
                  <div class="grid__item">
                    <h4 class="modal__title h2">Titre de la modal 4 </h4>
                    <p>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                      </svg>
                      <i>Année : 2019</i>
                    </p>
                    <p class="category">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                      </svg>
                      Refonte graphique
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error architecto temporibus ducimus cupiditate eius sapiente quidem voluptatem accusamus atque? Ex, sapiente. Eligendi tempora rem error repudiandae magnam fugiat dolorem optio?
                    </p>
                    <h5 class="h3">Informations</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias molestiae, ipsum dolores pariatur quae id! Laudantium, eveniet iste nesciunt nobis dolor minus delectus sequi velit odio? Ullam, delectus unde.
                    </p>
                    <h5 class="h3">Technologies</h5>
                    <ul>
                      <li>HTML, CSS</li>
                      <li>Javascript</li>
                      <li>React</li>
                      <li>Node.js</li>
                      <li>Express.js</li>
                      <li>MongoDB</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid__item">
          <div class="card" data-category="design">
            <img src="https://picsum.photos/600/400?random=5" loading="lazy" width="365" height="243" alt="Projet 5" class="card__image">
            <div class="card__inner">
              <h3 class="card__title">Titre du projet</h3>
              <p class="category">Refonte graphique</p>
            </div>
            <div class="card__overlay">
              <a href="#" class="card__link" data-id="modal-5">+</a>
            </div>
          </div>
          <div class="modal" id="modal-5">
            <button class="modal__close">&times;</button>
            <div class="modal__content">
              <div class="container">
                <div class="grid">
                  <div class="grid__item">
                    <img src="https://picsum.photos/600/400?random=5" loading="lazy" width="560" height="373" class="card__image">
                    <img src="https://picsum.photos/600/400?random=15" loading="lazy" width="560" height="373" class="card__image">
                  </div>
                  <div class="grid__item">
                    <h4 class="modal__title h2">Titre de la modal 5 </h4>
                    <p>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                      </svg>
                      <i>Année : 2019</i>
                    </p>
                    <p class="category">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                      </svg>
                      Refonte graphique
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error architecto temporibus ducimus cupiditate eius sapiente quidem voluptatem accusamus atque? Ex, sapiente. Eligendi tempora rem error repudiandae magnam fugiat dolorem optio?
                    </p>
                    <h5 class="h3">Informations</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias molestiae, ipsum dolores pariatur quae id! Laudantium, eveniet iste nesciunt nobis dolor minus delectus sequi velit odio? Ullam, delectus unde.
                    </p>
                    <h5 class="h3">Technologies</h5>
                    <ul>
                      <li>HTML, CSS</li>
                      <li>Javascript</li>
                      <li>React</li>
                      <li>Node.js</li>
                      <li>Express.js</li>
                      <li>MongoDB</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid__item">
          <div class="card" data-category="app">
            <img src="https://picsum.photos/600/400?random=6" loading="lazy" width="365" height="243" alt="Projet 6" class="card__image">
            <div class="card__inner">
              <h3 class="card__title">Titre du projet</h3>
              <p class="category">Application</p>
            </div>
            <div class="card__overlay">
              <a href="#" class="card__link" data-id="modal-6">+</a>
            </div>
          </div>
          <div class="modal" id="modal-6">
            <button class="modal__close">&times;</button>
            <div class="modal__content">
              <div class="container">
                <div class="grid">
                  <div class="grid__item">
                    <img src="https://picsum.photos/600/400?random=6" loading="lazy" width="560" height="373" class="card__image">
                    <img src="https://picsum.photos/600/400?random=16" loading="lazy" width="560" height="373" class="card__image">
                  </div>
                  <div class="grid__item">
                    <h4 class="modal__title h2">Titre de la modal 6 </h4>
                    <p>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                      </svg>
                      <i>Année : 2019</i>
                    </p>
                    <p class="category">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                      </svg>
                      Refonte graphique
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error architecto temporibus ducimus cupiditate eius sapiente quidem voluptatem accusamus atque? Ex, sapiente. Eligendi tempora rem error repudiandae magnam fugiat dolorem optio?
                    </p>
                    <h5 class="h3">Informations</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias molestiae, ipsum dolores pariatur quae id! Laudantium, eveniet iste nesciunt nobis dolor minus delectus sequi velit odio? Ullam, delectus unde.
                    </p>
                    <h5 class="h3">Technologies</h5>
                    <ul>
                      <li>HTML, CSS</li>
                      <li>Javascript</li>
                      <li>React</li>
                      <li>Node.js</li>
                      <li>Express.js</li>
                      <li>MongoDB</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Contact</h2>
        <p>Un message ? Une question ? <strong>Contatctez-moi !</strong></p>
      </div>

      <form method="POST" action="https://www.renaud-colomar.com" class="form">
        <label for="firstname">
          <input type="text" name="firstname" id="firstname" placeholder="Nom*" required>
        </label>
        <label for="entreprise">
          <input type="text" name="entreprise" id="entreprise" placeholder="Entreprise">
        </label>
        <label for="email">
          <input type="email" name="email" id="email" placeholder="Email*" required>
        </label>
        <label for="subject">
          <input type="text" name="subject" id="subject" placeholder="Sujet*" required>
        </label>
        <textarea name="message" id="message" placeholder="Message*" required></textarea>
        <input type="submit" name="btn_envoyer" class="btn" value="Envoyer">
      </form>

    </div>
  </section>

  <footer>
    <div class="container">
      <div class="grid">
        <div class="grid__item">
          Renaud COLOMAR
        </div>
        <div class="grid__item">
          <img src="./img/WebLive Black.png" alt="Logo de WebLive">
        </div>
        <div class="grid__item">
          <p class="copyright">Copyright © 2023 WebLive. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Script PHP envoie mail du formulaire de contact-->
<?php

if (isset($_POST["btn_envoyer"])){
    $message = "Ce message vous a été envoyé via votre Portfolio
    Nom : " . $_POST["firstname"] . "
    Entreprise : " . $_POST["entreprise"] . "
    Email : " . $_POST["email"] . "
    Sujet : " . $_POST["subject"] . "
    Message : " . $_POST["message"];
    $retour = mail("renaud.colomar@gmail.com", $_POST["sujet"], $message, "From: contact@renaud-colomar.com" . "\r\n" . "Reply-to: " . $_POST["email"]);

    if($retour)
    {
        echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
    }
    else
    {
        echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
    }
}

?>
</body>
</html>