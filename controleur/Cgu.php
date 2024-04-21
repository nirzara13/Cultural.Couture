<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}



// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Cultural Couture - Conditions générales d'utilisations";
include "$racine../vue/vueCGU.php";



?>