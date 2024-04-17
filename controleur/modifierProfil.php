<?php
// Inclure les fichiers de modèle et toute autre logique nécessaire
include_once "../modele/authentification.inc.php";
include_once "../modele/bd.utilisateur.inc.php";

// Vérifier si l'utilisateur est connecté
if (!isLoggedOn()) {
    // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
    header("Location: vueConnexion.php");
    exit();
}

// Récupérer l'identifiant de l'utilisateur connecté
$id_utilisateur = getUserId(); // Implémentez cette fonction selon votre logique d'authentification

// Récupérer les informations actuelles de l'utilisateur à partir de la base de données
$utilisateur = getUtilisateurById($id_utilisateur); // Implémentez cette fonction selon votre logique de récupération des utilisateurs

// Si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les données soumises du formulaire
    $nouveau_nom = $_POST["nom"];
    $nouveau_prenom = $_POST["prenom"];
    $nouveau_mailU = $_POST["mailU"];

    // Mettre à jour les informations du profil dans la base de données
    updateProfilUtilisateur($id_utilisateur, $nouveau_nom, $nouveau_prenom, $nouveau_mailU); // Implémentez cette fonction pour mettre à jour le profil dans la base de données

    // Rediriger l'utilisateur vers une page de confirmation ou de profil après la mise à jour
    header("Location: vueConfirmationModification.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon profil</title>
    <!-- Inclure les liens vers les fichiers CSS et JS nécessaires -->
</head>
<body>
    <h2>Modifier mon profil</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php echo $utilisateur['nom']; ?>"><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo $utilisateur['prenom']; ?>"><br><br>
        <label for="mailU">Adresse e-mail :</label>
        <input type="email" name="mailU" id="mailU" value="<?php echo $utilisateur['mailU']; ?>"><br><br>
        <input type="submit" value="Enregistrer les modifications">
    </form>
</body>
</html>