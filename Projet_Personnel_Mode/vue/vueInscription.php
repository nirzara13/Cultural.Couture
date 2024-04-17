<?php
include_once "../modele/bd.inc.php";

$message = ""; // Variable pour stocker le message de réussite ou d'erreur

if (isset($_POST['bouton'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mailU = $_POST['email'];
    $mdpU = $_POST['motpasse'];
    $pays = $_POST['pays'];

    // Vérifier la longueur du mot de passe
    if (strlen($mdpU) > 15) {
        $message = "Erreur lors de l'inscription : Le mot de passe est trop long.";
    } else {
        // Chiffrage du mot de passe
        $mdpChiffre = password_hash($mdpU, PASSWORD_DEFAULT);

        try {
            // Vérifier si le pays existe déjà dans la table des pays
            $check_pays = $connexion->prepare("SELECT id_pays FROM pays WHERE nom_pays = ?");
            $check_pays->execute(array($pays));
            $row = $check_pays->fetch(PDO::FETCH_ASSOC);

            // Si le pays n'existe pas, l'ajouter à la table des pays
            if (!$row) {
                $add_pays = $connexion->prepare("INSERT INTO pays (nom_pays) VALUES (?)");
                $add_pays->execute(array($pays));
            }

            // Récupérer l'ID du pays
            $get_pays_id = $connexion->prepare("SELECT id_pays FROM pays WHERE nom_pays = ?");
            $get_pays_id->execute(array($pays));
            $pays_id = $get_pays_id->fetchColumn();

            // Préparation de la requête d'insertion dans la table utilisateur
            $req = $connexion->prepare("INSERT INTO utilisateur (nom, prenom, mailU, mdpU, pays_id, DateInscription) VALUES (?, ?, ?, ?, ?, NOW())");
            // Exécution de la requête avec les valeurs des champs du formulaire
            $req->execute(array($nom, $prenom, $mailU, $mdpChiffre, $pays_id));
            $message = "Inscription réussie !";

            // Redirection vers une autre page après l'inscription réussie
            header("Location: ../vue/vueConfirmation.Inscription.php");
            exit; // Assurez-vous de quitter le script après la redirection
        } catch (PDOException $e) {
            $message = "Erreur lors de l'inscription : " . $e->getMessage();
        }
    }
}
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../photos/Logo_Cultural_Couture.png" type="image/x-icon">
    <link rel="shortcut icon" href="../photos/Logo_Cultural_Couture.png" type="image/x-icon">
    
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="../css/inscription.css">
</head>
<body>
<form action="" method="POST">
    <br>
    <h4>INSCRIPTION</h4>
    <hr>
    <!-- Affichage du message de succès ou d'erreur -->
    <p><?php echo $message; ?></p>
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
    <div style="background-color: #ffffff;">
        <label for="pays">Pays :</label>
        <select id="pays" name="pays" tabindex="3" required>
            <optgroup label="Europe">
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <!-- Ajoutez d'autres pays européens ici -->
            </optgroup>
            <!-- Ajoutez d'autres optgroup pour les autres continents -->
        </select>
    </div>
    <br>
    <label for="email">Adresse Mail</label>
    <input type="email" id="email" name="email" tabindex="4">
    <label for="motpasse" class="cartouche">Mot de passe :</label>
    <input class="cartouche" name="motpasse" type="password" size="50" tabindex="5" />
    <label for="repmotpasse" class="cartouche">Répétez votre mot de passe</label>
    <input class="cartouche" name="repmotpasse" type="password" size="10" tabindex="6" />
    <input type="submit" name="bouton" value="S'inscrire" tabindex="7" aria-label="Cliquer le bouton pour s'inscrire">
    <p>Vous avez déjà un compte ? <a href="VueConnexion.php" tabindex="8">Se connecter</a></p>
</form>
</body>
</html>