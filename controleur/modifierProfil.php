<?php
// Inclure les fichiers de modèle et toute autre logique nécessaire
include_once "../modele/authentification.inc.php";
include_once "../modele/bd.utilisateur.inc.php";

// Vérifier si l'utilisateur est connecté
if (!isLoggedOn()) {
    // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
    header("Location: ../vue/vueConnexion.php");
    exit();
}

// Récupérer l'identifiant de l'utilisateur connecté
$id_utilisateur = getUserId(); // Implémentez cette fonction selon votre logique d'authentification

// Récupérer les informations actuelles de l'utilisateur à partir de la base de données
$utilisateur = getUtilisateurById($id_utilisateur); // Implémentez cette fonction selon votre logique de récupération des utilisateurs

// Variables pour les messages d'erreur
$error_message = '';

// Si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Nettoyer et valider les données du formulaire
    $nouveau_nom = htmlspecialchars($_POST["nom"]);
    $nouveau_prenom = htmlspecialchars($_POST["prenom"]);
    $nouveau_mailU = htmlspecialchars($_POST["mailU"]);
    $nouveau_mdp = $_POST["nouveauMdp"];

    // Vérifier si un nouveau mot de passe a été saisi
    if (!empty($nouveau_mdp)) {
        // Vérifier la complexité du mot de passe
        if (strlen($nouveau_mdp) >= 8) {
            // Hasher le nouveau mot de passe
            $nouveau_mdp = password_hash($nouveau_mdp, PASSWORD_DEFAULT);
            // Mettre à jour le mot de passe dans la base de données
            updtMdpUtilisateur($utilisateur['mailU'], $nouveau_mdp);
        } else {
            // Mot de passe invalide, afficher un message d'erreur
            $error_message = "Le mot de passe doit contenir au moins 8 caractères avec une majuscule, une minuscule, des chiffres et au moins un caractère spécial.";
        }
    }

    // Mettre à jour les autres informations du profil dans la base de données
    updateProfilUtilisateur($id_utilisateur, $nouveau_nom, $nouveau_prenom, $nouveau_mailU, $nouveau_mdp);

    // Rediriger l'utilisateur vers une page de confirmation ou de profil après la mise à jour
    header("Location: ../vue/vueConfirmationModif.php");
    exit();
}
?>