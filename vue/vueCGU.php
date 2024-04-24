<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">

    <link rel="icon" href="../photos/Logo_Cultural_Couture.png" type="image/x-icon">
    <link rel="shortcut icon" href="../photos/Logo_Cultural_Couture.png" type="image/x-icon">
    
    <title>CGU</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      .logo-title {
  font-size: 28px;
  font-family: 'Times New Roman', sans-serif; /* Choisissez votre police préférée */
}


.link-white {
    color: white;
}
    </style>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>

  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10"/>
    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
</svg>

<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap align-items-center">

    <a href="./?action=defaut">
    <img src="../photos/Logo_Cultural_Couture.png" alt="Logo" class="logo-medium" width="100" height="auto"tabindex="0">
    </a>
</div>


<br>
<div class="col text-start">
    <a class="blog-header-logo text-body-emphasis text-decoration-none logo-title" href="#" aria-label="Cultural Couture">Cultural Couture</a>
    <br>
    <br>
    <a href="./?action=defaut" class="btn btn-primary">Accueil</a>
</div>

      <div class="col d-flex justify-content-end">
        <form action="recherche.php" method="GET" class="d-flex me-3">
          <input type="text" name="recherche" placeholder="Recherche par pays..." aria-label="Recherche par pays" class="form-control me-2">
          <button type="submit" class="btn btn-secondary" aria-label="Rechercher">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Recherche</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
          </button>
        </form>
        
      </div>

    </div>
  </header>
</div>


<div class="nav-scroller py-1 mb-3 border-bottom">
  <nav class="nav nav-underline justify-content-center">
    <a class="nav-item nav-link link-body-emphasis active" href="#"> </a>
    <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
    <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
    <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
    <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
    <a class="nav-item nav-link link-body-emphasis" href="#"><strong class="fs-4 fw-bold">Conditions générales d'utilisation du site Cultural Couture</strong> </a>
    <a class="nav-item nav-link link-body-emphasis" href="#">  </a>
    <a class="nav-item nav-link link-body-emphasis" href="#">  </a>
    <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
    <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
    <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
    <a class="nav-item nav-link link-body-emphasis" href="#"></a>
  </nav>
</div>

<br>
<br>
<main class="container">
<h4><strong>Les Conditions Générales d'Utilisation sont à jour au 20 avril 2024</strong></h4>

<p> Bienvenue sur Cultural Couture. L'utilisation de ce site implique l'acceptation des conditions générales d'utilisation décrites ci-dessous. Veuillez les lire attentivement avant de vous inscrire ou d'utiliser nos services.   </p>

<p>
Notre plateforme, <strong>Cultural Couture</strong>, offre une expérience immersive dans la richesse culturelle du monde entier. Nous proposons une sélection minutieuse de tenues traditionnelles et d'accessoires iconiques de divers pays et continents, permettant aux visiteurs de découvrir et d'explorer la diversité vestimentaire de manière authentique et captivante.
</p>

<h4><strong>Les Mentions légales </strong></h4>
  
<p>Le site Internet www.culturalcouture.com (ci-après le « Site ») 
          est édité par : la société Cultural , SAS au capital de 6 072 000 euros, dont le siège social est
         situé 69, rue turbigo 75003 Paris et immatriculée au Registre du Commerce et des Sociétés de Paris sous le n°421 197 005 (ci-après « la Société »).</p>

<p>La Société peut être contactée par email à l’adresse suivante : nirzara.barua0103@gmail.com ou par téléphone au numéro suivant : 01.44.55.60.00 </p>

<p>Le Directeur de la publication est : BARUA Nirzara </p>

<p>Le Site est hébergé par l'entreprise <a href="https://awsacademy.instructure.com">Amazon AWSAcademy </a>.</p>

<p>La Société est immatriculée au registre d’Atout France sous le numéro n°IM075120225.</p>


<p>La Société a souscrit un contrat d’assurance responsabilité civile générale auprès de la compagnie MMA ENTREPRISE, située 19-21 avenue de l’Europe à Clichy. </p>

<br>
<h4><strong>Acceptation des conditions d'utilisation</strong></h4>

<p>
Le présent document a pour objet de définir les modalités et conditions (ci-après « Conditions Générales d’Utilisation » ou « CGU ») dans lesquelles la Société met à la disposition des utilisateurs (ci-après les « Utilisateurs »), la possibilité de naviguer et d’utiliser le Site.
</p>

<p>
L’utilisation du Site implique l’adhésion pleine, entière et sans réserve aux présentes CGU.
</p>

<p>La Société se réserve le droit de modifier à tout moment les présentes CGU et d’en informer les Utilisateurs par tous moyens. Ces modifications entrent en vigueur dès leur mise en ligne sur le Site. L’Utilisateur est invité à s’informer sur de telles modifications. Si l’Utilisateur n’accepte pas ces modifications, il est invité à ne pas utiliser le Site. </p>

<br>
<h4><strong> Utilisation du site </strong>  </h4>

<p>Avant toute utilisation du Site, l’Utilisateur doit s’assurer qu’il dispose des moyens techniques et informatiques lui permettant de naviguer et d’utiliser le Site. Il doit également s’assurer que la configuration informatique de son matériel/équipement est en bon état de fonctionnement et ne contient pas de virus. </p>

<br>
<br>
<h4><strong> Le site ne peut être utilisé que par les personnes âgées de dix huit ans et plus. Si une personne de moins de dix huit ans souhaite utiliser le site, elle devra avoir l'accord exprès des son representant légal.</strong> </h4>


<p>La Société se réserve le droit de modifier, réviser, supprimer, valider ou changer, intégralement ou en partie, tout contenu (« Contenu ») figurant sur le Site ou affiché sur celui-ci. </p>

<p> La Société peut supprimer, changer ou modifier le Site et/ou les Contenus à tout moment et sans préavis. </p>

<br>

<h4><strong> Obligations de l'utilisateur</strong></h4>

<p> En utilisant le Site, les Utilisateurs conviennent :
<br>- de s'inscrire et de se connecter afin d'accéder aux pages spécifiques des tenues et accessoires de pays.
<br> - de s’abstenir d’utiliser le Site de manière illégale, pour toute finalité illégale ou de manière incompatible avec les présentes CGU ;
<br>-    de ne pas utiliser le Site pour la publication de propos injurieux, diffamants, harcelants, diffamatoires, obscènes ou menaçants, et/ou portant atteinte à la vie privée d’autrui ; 
<br> -  de respecter les autres Utilisateurs ; 
<br> -  de ne pas collecter et stocker des données personnelles afférentes aux autres Utilisateurs, à toutes fins ;
<br> -    de ne pas diffuser de contenus qui pourraient être constitutifs d'incitation à la réalisation de crimes ou délits ; de provocation à la discrimination, à la haine raciale, et plus généralement qui pourraient être contraires aux lois et règlements en vigueur, aux présentes règles d'utilisation et aux bonnes mœurs et à l’ordre public ;
<br> -    de ne pas diffuser d'informations d'ordre idéologique, religieux, politique ou de revendication ethnique ;
<br> -    de ne pas afficher, transmettre par email ou de toute autre manière tout élément violant tout brevet, marque déposée, secret de fabrication, droit de propriété intellectuelle ou tout autre droit de propriété appartenant à autrui ;
<br>-    de ne pas afficher, transmettre par email ou de toute autre manière une publicité ou tout matériel promotionnel non sollicité ou non autorisé (notamment se livrer à du « spam », ou toute autre forme de sollicitation) ;
<br>-    de ne pas utiliser le Site à des fins abusives en y introduisant volontairement des virus ou tout autre programme malveillant et de tenter d’accéder de manière non autorisée au Site ;
<br>-    de ne pas dénigrer le Site et/ou la Société et/ou les autres Utilisateurs sur les réseaux sociaux ou tout autre moyen de communication.  </p>

<p> Si, pour un quelconque motif, la Société considère que les Utilisateurs ne respectent pas les présentes CGU, elle peut à tout moment, et à son entière discrétion, supprimer leur accès au Site et prendre toutes mesures incluant toute action judiciaire à leur encontre.</p>

<br>

<h4><strong>Exacititude et licéité des informations</strong> </h4>

<p>  Chaque Utilisateur s’engage à ce que toutes les informations, notamment celles le concernant, qu’il fournit soient adéquates, exactes, à jour et complètes. Pour ce faire, il s’engage à les mettre à jour régulièrement. </p>


<p> L’Utilisateur reconnaît que la Société ne dispose pas des moyens matériels de vérifier la véracité de toutes les informations présentes sur le Site. La Société ne peut donc être tenue pour responsable en cas d'usurpation d'identité, ou du fait que les informations mentionnées soient fausses ou mensongères.</p>

<p> La Société ne garantit pas non plus l'opportunité, la licéité, la probité ou la qualité des informations transmises par les Utilisateurs.</p>
<p> La Société ne pourra en aucun cas être tenue pour responsable des contenus que les Utilisateurs communiquent et mettent en ligne, notamment de leur caractère illégal au regard de la réglementation en vigueur, d'erreur ou d'omission, de toute perte ou dommage consécutifs à leur utilisation, transmission par la messagerie interne ou de toute autre manière via le Site.</p>

<br>
<h4><strong> Données personnelles </strong></h4>

<p>Les dispositions concernant la protection des données personnelles telles qu’issues de la Loi Informatique et Libertés en date du 6 janvier 1978 telle que modifiée et du Règlement européen sur la protection des données personnelles du 27 avril 2016 entré en vigueur le 25 mai 2018 (« RGPD ») sont situées dans un document annexe intitulé « Politique de Confidentialité » accessible sur le Site. </p>

<br>
<h4><strong>Propriété intellectuelle</strong></h4>

<p>En accédant au Site, les Utilisateurs reconnaissent expressément que le Site et les Contenus créés par la Société et mis à la disposition des Utilisateurs sont la propriété exclusive de la Société et sont protégés par le Code de la propriété intellectuelle français ainsi que par les traités et accords internationaux applicables relatifs à la protection des droits de propriété intellectuelle. A ce titre, ils ne peuvent être reproduits sans autorisation expresse de la Société sous peine de poursuites judiciaires civiles et pénales. </p>

<p>La Société est seule titulaire de tous les droits, titres et intérêts portant sur le Site et les Contenus, y compris tous droits de propriété intellectuelle incluant, notamment, tous droits relatifs aux droits d’auteur, droits des dessins et modèles, marques, enseignes, noms commerciaux, dénomination sociale, noms de domaine, technologie, savoir-faire, procédés, formules, codes sources et codes exécutables, données et droits similaires, y compris les informations relatives à toute demande, tout enregistrement ou tout renouvellement de ceux-ci qui pourront être protégés par les lois, règlements ou règles en matière de propriété intellectuelle de tout pays. </p>

<p>L’extraction systématique et répétée des informations et Contenus figurant sur le Site est strictement interdite et sanctionnée au titre du droit de la propriété intellectuelle et du droit sui generis des bases de données. Toute extraction illicite pourra engager la responsabilité civile et pénale de son auteur. </p>

<p> « CULTURAL COUTURE » et tous autres marques et logos de la Société sont des marques protégées par le droit de la propriété intellectuelle français (ci-après collectivement dénommées les « Marques »). Sauf autorisation écrite et expresse de la Société, l’Utilisateur s’engage à ne pas utiliser ou diffuser de quelque manière que ce soit les Marques. </p>


<br>

<h4><strong> Responsabilité </strong></h4>

<p>La Société décline toute responsabilité pour tout dommage résultant d’une intrusion frauduleuse d’un tiers, en dehors de son contrôle, ayant entraîné une modification ou altération des informations/Contenus figurant sur le Site ou ayant porté préjudice à tout Utilisateur du présent Site ; et plus généralement pour tout dommage, quelles qu’en soient les causes, origines, nature ou conséquences, provoqué à raison de l’accès de quiconque au Site ou de l’impossibilité d’y accéder, en dehors de son contrôle. </p>

<p>La Société ne peut en aucun cas être tenue pour responsable des problèmes ou défaillances techniques liés aux réseaux de téléphonie, aux systèmes informatiques en ligne, aux serveurs, aux fournisseurs d'Internet, à l'équipement informatique et/ou aux logiciels des Utilisateurs. </p>

<br>
<h4><strong> Droit applicable et juridiction compétente </strong></h4>

<p> Les présentes CGU sont régies et interprétées conformément au droit français, sans tenir compte des principes de conflits de lois.



<br>
<br>

<section id="content">
<h3 id="bila"><strong>Bilan des fonctionnalités accessibles selon votre profil</strong></h3>
<div id="bilanDiv">
    <table id="bilanT">
        <thead>
            <tr>
                <th></th><th>Prospect</th>	<th>Utilisateur</th>	<th>Administrateur</th>
            </tr>
        </thead>
        <tfoot>
            <tr><td></td><td class="cell">visiteur non enregistré </td> <br> <br><td class="cell">visiteur connecté sur le site</td><td class="cell">restaurateur connecté sur le site</td></tr>

        </tfoot>
        <tbody>
            <tr><td class="label">Consulter la page d'accueil</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Consulter les tenues et les accessoires</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Recherche une tenue et un accessoire</td>			<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Mettre en favoris une tenue ou un accessoire</td>			<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell">	</td>	</tr>
            <tr><td class="label">Modifier les informations personnellles de son compte</td>				<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Consulter ses favoris</td>		<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Editer la description d'une tenue ou accessoire</td>	<td class="cell">	</td>		<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Ajouter une photo d'une tenue ou d'un accessoire</td>	<td class="cell">	</td>		<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Gérer une liste de favoris</td>			<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell">	</td>	</tr>	
            <tr><td class="label">Suggestion automatique</td>				<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell">	</td>	</tr>
        </tbody>
    </table>
</div>

<hr>

<h4><strong>Contact</strong></h4>
<p>Si vous avez des questions concernant ces Conditions Générales d'Utilisation, veuillez nous contacter à l'adresse suivante : <strong>nirara.barua0102@gmail.com</strong></p>
</div>
 


<footer class="py-5 text-center text-body-secondary bg-dark" aria-label="Pied de page">
    <div class="copyright-text py-3 text-white bg-dark text-center"><strong>
        © 2024 Cultural Couture. Tous droits réservés. 
        <br>
        <br>
       Le design de ce site a été inspiré par <a href="https://getbootstrap.com/" class="link-white">Bootstrap</a>.
       </strong>
      </div>
    
    
        <a href="#" class="link-white"><strong>Retour en haut</strong></a> | <!-- Lien vers le haut de la page -->
        <a href="./vue/vueMentions.legales.php" class="link-white"><strong>Mentions légales</strong></a> | <!-- Lien vers les mentions légales -->
        <a href="./vue/vueCGU.php" class="link-white"><strong>CGU</strong></a> | <!-- Lien vers les conditions générales d'utilisation -->
        <a href="./vue/vuePolitique_de_confidentialite.php" class="link-white"><strong>Politique de confidentialité</strong></a> <!-- Lien vers la politique de confidentialité -->
    </p>
</footer>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  

</body>
</html>
