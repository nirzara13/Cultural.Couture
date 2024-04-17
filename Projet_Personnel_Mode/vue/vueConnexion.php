<?php
// Inclure le fichier de fonctions utilisateur


include_once "../modele/bd.utilisateur.inc.php";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier les informations d'identification dans la base de données
    $utilisateur = getUtilisateurByMailU($email);

    if ($utilisateur && password_verify($password, $utilisateur['mdpU'])) {
        // Informations d'identification valides, rediriger l'utilisateur
        // Par exemple, vous pouvez rediriger vers une page de profil
        header("Location: profil.php");
        exit();
    } else {
        // Informations d'identification incorrectes, afficher un message d'erreur
        $error_message = "Adresse e-mail ou mot de passe incorrect.";
    }
}
?>







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
    <title>Connexion</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
            display: flex;
            justify-content: center;
            align-items: center;z
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


      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    

    
<header data-bs-theme="dark" role="banner">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">
<a href="index.html">
    <img src="../photos/Logo_Cultural_Couture.png" class="logo" width="90" height="80" alt="Logo du site web">
</a>
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
         
          
        </ul>
        
      </div>
    </div>
  </nav>
</header>

<br>
<div class="col-xs-12 col-sm-6">
	
<br>
<br>
<br>
<br>
<br>
<br>
<fieldset>
             
	<div class="col-xs-12 col-sm-5">
  <form action="" method="post" id="login_form" class="box" role="form" aria-labelledby="login-heading">
    <h3 class="page-subheading">Déjà inscrit?</h3>
    <div class="form_content clearfix">
        <div class="form-group">
            <label for="email" title="email">Adresse e-mail</label>
            <input class="is_required validate account_input form-control" data-validate="isEmail" type="email" id="email" name="email" value="" aria-required="true" aria-label="Adresse e-mail">
        </div>

        <div class="form-group">
            <label for="password">Mot de Passe :</label>
            <input type="password" id="password" oninput="validatePassword()" required title="Le mot de passe doit contenir au moins 8 caractères." class="form-control" aria-required="true" aria-label="Mot de passe">
            <p id="password-help">Le mot de passe doit contenir au moins 8 caractères.</p>
            <p id="password-error" style="color: red; display: none;">Erreur : Le mot de passe est trop court.</p>
        </div>

        <!-- Affichage du message d'erreur -->
        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <a href="https://www./recuperation-mot-de-passe" title="Récupérez votre mot de passe" rel="nofollow" aria-labelledby="forgot-password-link">Mot de passe oublié ?</a>
        <p class="submit">
            <input type="hidden" class="hidden" name="back" value="my-account">
            <button type="submit" id="SubmitLogin" name="SubmitLogin" class="button btn btn-default button-medium" aria-label="Se connecter">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="../vue/vueAccueil.php" class="nav-link active" aria-current="page"> Connexion </a></li>
                </ul>
            </button>
        </p>
    </div>
</form>
</fieldset>
</main>


<!-- FOOTER -->
<footer class="container" style="position: relative; left: -10px;" role="footer-content-info">
  <div class="footer-content">
    <p>&copy; 2024 Welcome To Paris. Tous droits réservés.</p>
    <p>Le design de ce site a été inspiré par Bootstrap</p>
  </div>
</footer>



<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
