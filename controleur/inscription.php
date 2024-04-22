<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.utilisateur.inc.php";

$inscrit = false;
$msg="";
// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"])&& isset($_POST["motpasse"])) {

    if ($_POST["nom"] != "" && $_POST["prenom"] != "" && $_POST["email"] != ""&& $_POST["motpasse"] != "" ) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $motDePasse = $_POST["motpasse"];

        // enregistrement des donnees
        $ret = addUtilisateur($nom, $prenom, $email, $motDePasse);
        if ($ret) {
            $inscrit = true;
        } else {
            $msg = "l'utilisateur n'a pas été enregistré.";
        }
    }
 else {
    $msg="Renseigner tous les champs...";    
    }
}


// Affichage de la page en fonction du succès ou de l'échec de l'inscription
if ($inscrit) {
    // Appel du script de vue pour afficher la confirmation de l'inscription
    $titre = "Inscription confirmée";
    include "$racine/vue/vueConfirmation.Inscription.php";
} else {
    if ($msg != "") {
        // L'inscription a échoué en raison d'un utilisateur déjà inscrit
        // Affichage de la page de vue pour afficher le message d'erreur
        $titre = "Erreur d'inscription";
        include "$racine/vue/vueErreur.php";
    } else {
        // L'utilisa     afficher le formulaire d'inscription
        $titre = "Inscription pb";
        include "$racine/vue/vueInscription.php";
    }
}


?>