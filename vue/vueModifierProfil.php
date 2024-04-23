<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="./assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="page de connexion" aria-describedby="page-description" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">

    <link rel="icon" href="../photos/Logo_Cultural_Couture.png" type="image/x-icon">
    <link rel="shortcut icon" href="../photos/Logo_Cultural_Couture.png" type="image/x-icon">
    
    <title>Modifier mon profil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4; /* Ajout d'une couleur de fond */
        }

        form {
            width: 600px; /* Largeur du formulaire */
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white; /* Couleur de fond du formulaire */
			      text-align: center;
			      display: flex; /* Utilisation de flexbox */
            flex-direction: column; /* Empile les éléments verticalement */
            align-items: center; 
			
        }

		label {
            display: inline;
            margin-bottom: 8px; /* Ajout de marge en bas */
			
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
			      margin-left: 32%;
			
		
        }

        button:hover {
            background-color: #45a049;
        }
    


        .navbar img.logo {
  margin-left: 20px; /* Ajustez la valeur en pixels selon vos besoins */
}


        main {
      flex: 1; /* Fait en sorte que le contenu de la page prenne tout l'espace disponible */
      padding: 20px;
    }

   footer {
  background-color: #000;
  color: #fff;
  padding: 15px;
  text-align: center;
  margin-top: 20px;
  width: 100%;
  box-sizing: border-box;
  position: relative;
  left: -2px; /* Ajustez la valeur selon votre besoin pour décaler vers la gauche */
}

.navbar-title {
  font-family: 'Times New Roman', Times, serif;
  color: white; /* Définit la couleur du texte en blanc */
  position: absolute; /* Positionnement absolu */
  left: 50%; /* Déplace le titre à 50% de la largeur de son conteneur */
  transform: translateX(-50%); /* Déplace le titre de -50% de sa propre largeur vers la gauche pour le centrer */
}


</style>

    
<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet">
</head>
<body>
    

    
    <header data-bs-theme="dark" role="banner">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">
    <a href="index.html">
      <img src="photos/Logo_Cultural_Couture.png" class="logo" width="90" height="80" alt="Logo du site web">
    </a>
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
             
              
            </ul>
            <div class="navbar-brand mx-auto">
          <h1 class="navbar-title">Modifier mon Profil</h1>
        
        </div>
        
          </div>
        </div>
      </nav>
    </header>

<div class="col-xs-12 col-sm-6">
	
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <fieldset>

    <fieldset>
        <form id="profileForm" action="./?action=ModifProfil" method="post">
            <p><strong>Adresse e-mail :<br></strong> <?= $util["email"] ?></p><br><br>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" value="<?php echo isset($utilisateur['nom']) ? htmlspecialchars($utilisateur['nom']) : ''; ?>"><br><br>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" value="<?php echo isset($utilisateur['prenom']) ? htmlspecialchars($utilisateur['prenom']) : ''; ?>"><br><br>
           
            <label for="nouveauMdp">Nouveau mot de passe :</label>
            <input type="password" name="motDePasse" placeholder="Nouveau mot de passe"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}"title="Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial." /><br />
            <input type="password" name="motDePasse2" placeholder="Confirmer la saisie"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}"title="Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial." /><br />
            <input type="submit" value="Enregistrer" />
        </form>
    </fieldset>
    <br><br>
    <p>Vous pouvez également <a href="./?action=connexion">vous connecter</a> avec vos nouvelles informations.</p>
</div>
<script>
    // // JavaScript pour la validation du mot de passe
    // document.getElementById('profileForm').addEventListener('submit', function(event) {
    //     var passwordInput = document.getElementById('nouveauMdp');
    //     var password = passwordInput.value;
    //     var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
    //     if (!passwordRegex.test(password)) {
    //         alert('Le mot de passe doit contenir au moins 8 caractères avec une majuscule, une minuscule, des chiffres et au moins un caractère spécial.');
    //         event.preventDefault();
    //     }
    // });
</script>

<br>
<br>
   
</body>
</html>