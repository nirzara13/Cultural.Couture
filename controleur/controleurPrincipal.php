<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["ModifProfil"] = "ModifProfil.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["supprimer"] = "supprimer.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["mentionLegal"] = "mentionlegal.php";
    $lesActions["mesFavoris"] = "favoris.php"; 

    $lesActions["connexionAfrique"] = "connexionAfrique.php";
    $lesActions["ConnexionAsie"] = "connexionAsie.php";
    $lesActions["ConnexionAmeriqueduNord"] = "ConnexionAmeriqueduNord.php";
    $lesActions["ConnexionAmeriqueduSud"] = "ConnexionAmeriqueduSud.php";
    $lesActions["connexionOceanie"] = "connexionOceanie.php"; 
    $lesActions["ConnexionEurope"] = "connexionEurope.php";    

    // Gestion spécifique de la charte
    /*$lesActions["charte"] = function() {
        if (utilisateurEstConnecte() && CharteInformatique::utilisateurPeutAcceder($roleUtilisateur)) {
            return "vueCharteInformatique.php";
        } else {
            // Rediriger vers une autre page ou afficher un message d'erreur
            return "vueErreur.php";
        }
    };*/ C'est une fonctionnalité que j'ai voulu mettre afin de permettre uniquement aux administrateurs de voir la charte informatique, mais je n'ai pas réussi.

    // Vérifier si l'action demandée existe dans le tableau et renvoyer la vue correspondante
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }
}

?>
