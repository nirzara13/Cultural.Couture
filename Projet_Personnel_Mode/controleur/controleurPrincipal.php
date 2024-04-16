<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["connexion"] = "connexion.php"; // Nouvelle action pour la page de connexion
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["updateProfil"] = "updateProfil.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["aimer"] = "aimer.php";

    
    if (array_key_exists($action, $lesActions)){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>