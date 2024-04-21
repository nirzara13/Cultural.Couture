<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.utilisateur.inc.php";

// Initialisation des variables
$inscrit = false;
$msg = "";

// Vérification et traitement des données reçues en POST
if (isset($_POST["mailU"]) && isset($_POST["mdpU"]) ) {
    if ($_POST["mailU"] != "" && $_POST["mdpU"] != "" ) {
        $mailU = $_POST["mailU"];
        $mdpU = $_POST["mdpU"];
        
        // Vérification si l'utilisateur est déjà inscrit
        $utilisateurExistant = getUtilisateurByEmail($mailU);
        if ($utilisateurExistant) {
            $msg = "Vous êtes déjà inscrit. Veuillez vous connecter.";
        } else {
            // Enregistrement des données dans la base de données
            $ret = addUtilisateur($mailU, $mdpU);
            if ($ret) {
                $inscrit = true;
            } else {
                $msg = "L'utilisateur n'a pas été enregistré.";
            }
        }
    } else {
        $msg = "Veuillez renseigner tous les champs.";
    }
}

// Affichage de la page en fonction du succès ou de l'échec de l'inscription
if ($inscrit) {
    // Appel du script de vue pour afficher la confirmation de l'inscription
    $titre = "Inscription confirmée";
    include "$racine./vue/vueConfirmationInscription.php";
} else {
    if ($msg != "") {
        // L'inscription a échoué en raison d'un utilisateur déjà inscrit
        // Affichage de la page de vue pour afficher le message d'erreur
        $titre = "Erreur d'inscription";
        include "$racine./vue/vueErreur.php";
    } else {
        // L'utilisateur n'est pas déjà inscrit, donc afficher le formulaire d'inscription
        $titre = "Inscription pb";
        include "$racine./vue/vueInscription.php";
    }
}


?>