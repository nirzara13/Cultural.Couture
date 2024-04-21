<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur d'inscription</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Ajoutez le lien vers votre feuille de style CSS -->
</head>
<body>
    <div class="container">
        <h2>Erreur d'inscription</h2>
        <p><?php if(isset($msg)) echo $msg; ?></p>
        <p>Vous pouvez <a href="./vueConnexion.php">vous connecter</a> avec vos informations existantes.</p>
    </div>
</body>
</html>