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
        

        // Enregistrement des données dans la base de données
        $ret = addUtilisateur($mailU, $mdpU,);
        if ($ret) {
            $inscrit = true;
        } else {
            $msg = "L'utilisateur n'a pas été enregistré.";
        }
    } else {
        $msg = "Veuillez renseigner tous les champs.";
    }
}

// Affichage de la page en fonction du succès ou de l'échec de l'inscription
if ($inscrit) {
    // Appel du script de vue pour afficher la confirmation de l'inscription
    $titre = "Inscription confirmée";
   
    include "$racine/vue/vueConfirmationInscription.php";
    
} else {
    // Appel du script de vue pour afficher le formulaire d'inscription
    $titre = "Inscription pb";
    
    include "$racine/vue/vueInscription.php";
   
}
?>