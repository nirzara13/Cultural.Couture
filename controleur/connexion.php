<?php
// Démarrer la session
session_start();

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
        // Informations d'identification valides, rediriger l'utilisateur vers la page de profil
        $_SESSION['logged_in'] = true; // Définir la variable de session indiquant que l'utilisateur est connecté
        header("Location: vueMonProfil.php");
        exit();
    } else {
        // Informations d'identification incorrectes, afficher un message d'erreur
        $error_message = "Adresse e-mail ou mot de passe incorrect.";
    }
}

//Vérifier si l'utilisateur est connecté ou non
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // L'utilisateur est déjà connecté, vous pouvez le rediriger vers la page spécifique
    $redirect = isset($_GET['redirect']) ? $_GET['redirect'] : 'vueAccueil.php'; // Par défaut, redirigez vers une page d'accueil
    header("Location: $redirect");
    exit;
}
?>