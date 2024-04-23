
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="css/inscription.css">
</head>
<body>
<form action="./?action=inscription" method="POST">
    <br>
    <h4>INSCRIPTION</h4>
    <hr>
   
    <div class="name-field">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" aria-describedby="aide-nom" tabindex="1">
    </div>
    <br>
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" tabindex="2">
    </div>
    <br>
    
    <br>
    <label for="email">Adresse Mail</label>
    <input type="email" id="email" name="email" tabindex="4" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
    <!-- Ajout de la validation de l'email -->
    <br>
    <label for="motpasse" class="cartouche">Mot de passe :</label>
    <input class="cartouche" name="motpasse" type="password" size="50" tabindex="5" 
           required 
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}"
           title="Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.">
    <!-- Ajout de la validation du mot de passe -->
    <br>
    <label for="repmotpasse" class="cartouche">Répétez votre mot de passe</label>
    <input class="cartouche" name="repmotpasse" type="password" size="10" tabindex="6" required>
    <!-- Ajout de la validation de la répétition du mot de passe -->
    <input type="submit" name="bouton" value="S'inscrire" tabindex="7" aria-label="Cliquer le bouton pour s'inscrire">
    <p>Vous avez déjà un compte ? <a href="./?action=connexion" tabindex="8">Se connecter</a></p>
</form>
</body>
</html>