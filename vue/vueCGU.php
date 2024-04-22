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

      <div class="col-auto pe-1 logo-container">
        <!-- Ajoutez votre logo ici -->
      <img src="../photos/Logo_Cultural_Couture.png" alt="Logo" class="logo-medium" width="100" height="auto">
      </div>

      <div class="col text-start">
        <a class="blog-header-logo text-body-emphasis text-decoration-none logo-title" href="#" aria-label="Cultural Couture">Cultural Couture</a>
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

<main class="container">

<p>
    <span class="site">www.culturalcouture.fr</span> est édité par la société <strong>Cultural</strong>, propriété de Nirzara Barua
</p>

<p>
    Siège social : 69 rue turbigo, 75003 Paris<br />
    Directeur de la publication <span>Nirzara Barua</span>
</p>
<p>
    Responsable technique application : <span>Nirzara Barua</span><br />
    Responsable technique hebergement : <span>Ewen Prigent</span><br />
    Contact administratif du site : <span>Christophe Fontaine</span>
</p>

<section id="content">

<h2 id="accpt">Acceptation des conditions générales (<abbr title="conditions générales d'utilisation">CGU</abbr>)</h2>

<p>L'utilisation du site <span class="site">www.culturalcouture.fr</span> implique l'acceptation des conditions d'utilisations mentionnées ci-dessous.</p>

<p>Une fois connecté et participant au site, l'utilisateur reconnait avoir lu l'intégralité des conditions générales d'utilisations présentes dans la section <abbr title="conditions générales d'utilisation">CGU</abbr> du site. Les conditions sont disponibles à l'adresse suivante : <a href="http://www.r3st0.fr/cgu">www.r3st0.fr/cgu</a></p>

<p>La société Crèsto se réserve le droit de modifier à tout instant les présentes conditions générales. A chaque nouvelle version, les utilisateurs sont avertis par mail, et par un bandeau sur le site. Ainsi les utilisateurs peuvent et doivent se tenir à jour des modifications apportées.</p>

<p>En cas de manquement aux <abbr title="conditions générales d'utilisation">CGU</abbr> la société Crèsto se réserve le droit de suspendre ou supprimer un compte utilisateur.</p>

</section>


<section id="content">


<h2 id="desc">Description du service</h2>
<p>Le site <span class="site">www.r3st0.fr</span> permet de consulter les fiches des restaurants contenus dans sa base de données. Les restaurants sont décrits à l'aide de caractéristiques précises. Celles-ci permettent d'effectuer des recherches précises.
    Les utilisateurs ont la possibilité d'émettre un avis personnel sur les repas qu'ils ont pu faire.</p>

<p>Les restaurants ont la possibilité de <em>répondre</em> aux critiques reçues sur le site.
    De même les critiques sont relues par une équipe de modération interne à la société Crèsto. </p>

</section>



<section id="content">

<h3  id="fonc">Fonctionnalités utilisateurs</h3>
<h4>Conditions générales</h4>
<p>
    L'inscription et la publication d'avis ou d'une note est réservée aux personnes <strong>majeures</strong>. 
</p>
<p>
    Lors de la publication d'un avis l'utilisateur comprend qu'une modération sera effectuée <strong>avant</strong> que l'avis soit définitivement visible sur le site <span class="site">www.r3st0.fr</span>.
</p>
Sont <strong>exclus</strong> du droit de publication d'avis : 
<ul>
    <li>les restaurateurs</li>
    <li>les employés de la société Crèsto</li>
</ul>
<p>
    Les utilisateurs doivent porter un avis objectif sur le restaurant.
</p>
Dans les commentaires peuvent être évalués : 
<ul>
    <li>la qualité gustative</li>
    <li>la propreté</li>
    <li>la diversité des plats</li>
    <li>le cout</li>
    <li>la qualité du service</li>
</ul>

<p>
    Les jugements personnels autres <strong>ne peuvent</strong> être acceptés. 
    De même il est <strong>interdit</strong> de faire de la publicité par quelque moyen que ce soit pour un restaurant concurrent dans les commentaires.
</p>
<p>
    Toute remarque sur l'origine ethnique, culturelle, l'orientation sexuelle, sera modérée, et le compte utilisateur pourra faire l'objet d'une suspension ou d'une suppression.
</p>

</section>

<section id="content">

<h4 id="mode">Modération des avis</h4>
<p>
    Lorsque les avis donnés par les utilisateurs ne respectent pas les règles énoncées dans les <abbr title="conditions générales d'utilisation">CGU</abbr>, l'avis peut être <strong>supprimé, masqué, ou modifié</strong>. Une fois modéré, l'utilisateur est averti, et peut le cas échéant modifier ou supprimer son commentaire.
</p>

<section id="content">


<h4 id="sanc">Sanctions prévues en cas de non respect des règles</h4>
<ol>
    <li>suppression de commentaire</li>
    <li>suspension du compte</li>
    <li>suppression de tous les commentaires déjà postés, et des évaluations.</li>
    <li>suppression du compte</li>
</ol>

<section id="content">

<h4 id="moti">Liste non exhaustive des motifs de modération des commentaires</h4>
<ul>
    <li>non respect des règles énoncées dans les <abbr title="conditions générales d'utilisation">CGU</abbr> du site</li>
    <li>mention spécifique d'une personne</li>
    <li>spam</li>
    <li>commentaire posté par un robot ou généré</li>
    <li>texte illisible</li>
    <li>coordonnées personnelles</li>
    <li>lien vers un site extérieur</li>
    <li>diffamation</li>
    <li>inclusion de code javascript/SQL/PHP ou autre</li>
    <li>informations <em>personnelles</em> (numéro de téléphone, adresse, mail, IP, numéro de carte bancaire...)</li>
</ul>

</section>

<h3 id="foncr">Fonctionnalités restaurateurs</h3>
<h4 id="gene">Généralités</h4>

<h4 id="prot">Protection des données personnelles</h4>
<p>
    Lors de l'inscription certaines données personnelles sont stockées dans le système d'information de Crèsto. Ces données sont enregistrées conformément au respect de la protection des données personnelles.
    Ces données sont utilisées pour permettre à l'utilisateur de profiter de toutes les fonctionnalités du site <span class="site">www.r3st0.fr</span>
</p>


<section id="content">
<h4 id="droi">Droits d'accès et de modification</h4>
<p>
    Les utilisateurs enregistrés peuvent en accédant à la page "mon compte" modifier les informations personnelles à défaut de leur adresse mail.
</p>

</section>


<section id="content">

<h3 id="util">Utilisation de données par des partenaires</h3>
<p>
    Lors de l'inscription sur le site, les utilisateurs peuvent accepter ou refuser l'utilisation de leur adresse e-mail à des fins d'information (<em>newsletter</em>) pour le site <span class="site">www.r3st0.fr</span> et d'autres sites de la société Crèsto.
</p>
<p>
    Le carnet d'adresse ainsi constitué par la société Crèsto peut éventuellement être vendu à des sociétés partenaires, puis utilisé à des fins commerciales pour du démarchage, et pour orienter l'utilisateur vers des produits répondant à ses préférences.
</p>

</section>


<section id="content">
<h3 id="bila">Bilan des fonctionnalités accessibles selon votre profil</h3>
<div id="bilanDiv">
    <table id="bilanT">
        <thead>
            <tr>
                <th></th><th>Prospect</th>	<th>Utilisateur</th>	<th>Administrateur</th>
            </tr>
        </thead>
        <tfoot>
            <tr><td></td><td class="cell">visiteur non enregistré</td><td class="cell">visiteur connecté sur le site</td><td class="cell">restaurateur connecté sur le site</td></tr>

        </tfoot>
        <tbody>
            <tr><td class="label">Consulter la page d'accueil</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Consulter les tenues et les accessoires</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Recherche une tenue et un accessoire</td>			<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Mettre en favoris une tenue ou un accessoire</td>			<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell">	</td>	</tr>
            <tr><td class="label">Modifier les informations personnellles de son compte</td>				<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell">	</td>	</tr>
            <tr><td class="label">Consulter ses favoris</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Editer la fiche d'un restaurant</td>	<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Ajouter une photo d'un restaurant</td>	<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>	</tr>
            <tr><td class="label">Gérer une liste de favoris</td>			<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell">	</td>	</tr>	
            <tr><td class="label">Suggestion automatique</td>				<td class="cell">	</td>		<td class="cell"><img src="../photos/coche.png" alt="case cochée" />	</td>		<td class="cell">	</td>	</tr>
        </tbody>
    </table>
</div>

</div>


</body>
</html>