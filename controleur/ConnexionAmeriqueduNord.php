<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (!isset($_POST["email"]) || !isset($_POST["password"])){
    // on affiche le formulaire de connexion
    $titre = "authentification";
    include "$racine/vue/vueconnexionAmerique_du_Nord.php";
}
else
{
    $email=$_POST["email"];
    $motDePasse=$_POST["password"];
    
    login($email,$motDePasse);

    if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers la vue afrique
        include "$racine/vue/vueAmerique_du_Nord.html.php";
    }
    else{
        // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
        $titre = "authentification";
        include "$racine/vue/vueconnexionAmerique_du_Nord.php";
    }
}

?>