<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Mon Profil</title>
    <link rel="stylesheet" href="css/supprimer.css">
   
</head>
<body>
   
<nav>
        <strong>
        <a href="./?action=defaut">Accueil</a>
        </strong>
    </nav>
  
 
        <div class="wrapper">
            <h1>Supprimer Mon Profil</h1>

            <strong>
            <form action="./?action=supprimer" method="POST">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>

                <label for="motDePasse">Mot de passe :</label></strong>
                <input type="password" id="password" name="password" pattern="^(?=.*[A-Z])(?=.*[0-9]).{8,}$" required  title="Le mot de passe doit contenir au moins une lettre majuscule, un chiffre et faire au moins 8 caractères">
              
                
                <?php if (isset($error)) { ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php } ?>

                <input type="submit" value="Supprimer">
            </form>
        </div>
</body>
</html>


