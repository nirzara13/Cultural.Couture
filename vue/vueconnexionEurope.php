<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/inscription.css">
   
</head>
<body>
        
<div>
<strong>
<form action="./?action=ConnexionEurope" method="POST">
<h1>Connexion</h1><br><br>
<label for="email">Adresse e-mail :</label><br>
<input type="email" id="email" name="email" required>
<br>
<label for="motDePasse">Mot de passe :</label></strong>
<input type="password" id="password" name="password" pattern="^(?=.*[A-Z])(?=.*[0-9]).{8,}$" required  title="Le mot de passe doit contenir au moins une lettre majuscule, un chiffre et faire au moins 8 caractères">
<?php if (isset($error)) { ?>
    <div class="error"><?php echo $error; ?></div>
<?php } ?>

<input type="submit" value="Se connecter">
<strong>
<a href="./?action=defaut">Accueil</a>
<a href="./?action=inscription">Inscription</a>
</strong>
</form>
</div>
</body>
</html>