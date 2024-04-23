<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (!isset($_POST["email"]) || !isset($_POST["password"])){
    // on affiche le formulaire de connexion
    $titre = "authentification";
    include "$racine/vue/vueconnexionEurope.php";
}
else
{
    $email=$_POST["email"];
    $motDePasse=$_POST["password"];
    
    login($email,$motDePasse);

    if (isLoggedOn()){ // si l'utilisateur est connecté , on le redirige vers la vue Europe
        include "$racine/vue/vueEurope.html.php";
    }
    else{
        // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
        $titre = "authentification";
        include "$racine/vue/vueconnexionEurope.php";
    }
}

?>
