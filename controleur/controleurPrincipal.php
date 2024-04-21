<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["propos"] = "propos.php";
    $lesActions["signUp"] = "signUp.php";
    $lesActions["login"] = "login.php";
    $lesActions["dashboard"] = "dashboard.php";
    $lesActions["mentionLegal"] = "mentionlegal.php";
    $lesActions["mesFavoris"] = "favoris.php"; // Ajouter une action pour afficher les favoris de l'utilisateur
    

    // Gestion spécifique de la charte
    $lesActions["charte"] = function() {
        if (utilisateurEstConnecte() && CharteInformatique::utilisateurPeutAcceder($roleUtilisateur)) {
            return "vueCharteInformatique.php";
        } else {
            // Rediriger vers une autre page ou afficher un message d'erreur
            return "vueErreur.php";
        }
    };

    // Vérifier si l'action demandée existe dans le tableau et renvoyer la vue correspondante
    if (array_key_exists($action, $lesActions)) {
        // Si l'action est une fonction, l'exécuter pour obtenir le nom de la vue
        if (is_callable($lesActions[$action])) {
            return $lesActions[$action]();
        } else {
            return $lesActions[$action];
        }
    } else {
        // Si l'action demandée n'existe pas, rediriger vers la page d'accueil par défaut
        return "vueAccueil.php";
    }
}

?>