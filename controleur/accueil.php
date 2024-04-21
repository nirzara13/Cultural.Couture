<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

// include_once "$racine/modele/bd.resto.inc.php";
// include_once "$racine/modele/bd.typecuisine.inc.php";
// include_once "$racine/modele/bd.photo.inc.php";



$titre = "Accueil - Cultural Couture.fr";
include_once "$racine/vue/vueAccueil.php";


?>
