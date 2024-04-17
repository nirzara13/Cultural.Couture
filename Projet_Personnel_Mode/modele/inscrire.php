<?php

include_once '../modele/bd.inc.php';

// Fonction de connexion
function login($email, $password) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $pdo = connexionPDO();

    // Récupération de l'utilisateur par son email
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['motDePasse'])) {
        // Mot de passe vérifié
        $_SESSION['user'] = $user;
        return true;
    } else {
        // Échec de la connexion
        return false;
    }
}

// Fonction de déconnexion
function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION['user']);
}

// Fonction de vérification de connexion
function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['user']);
}

// Vérifier si des données ont été soumises via le formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sexe = $_POST['sexe'];
    // Securité sur mdp 
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $pdo = connexionPDO();

    //insere les données dans la base de données
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, motDePasse, sexe) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $prenom, $email, $hashed_password, $sexe]);

    header("Location: ../vue/vueAccueil.php");
    exit();
}

// Si des données ont été soumises via le formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Tente de se connecter
    if (login($email, $password)) {
        header("Location: ../vue/vueAccueil.php");
        exit();
    } else {
        $login_error = "Email ou mot de passe incorrect.";
    }
}


?>