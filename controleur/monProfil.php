<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";
include_once "$racine/modele/bd.utilisateur.inc.php";

// récuperation des données GET, POST, et SESSION

// appel des fonctions permettant de récuperer les donnees utiles pour l'affichage 
if (isLoggedOn()){
    $mailU = getemailLoggedOn();
    $util = getUtilisateurByemail($mailU);
    
    // appel du script de vue qui permet de gérer l'affichage des données
    $titre = "Mon profil";
    include "$racine/vue/vueMonProfil.php";
    
    
}
else{
    $titre = "Mon profil";
}

?>
