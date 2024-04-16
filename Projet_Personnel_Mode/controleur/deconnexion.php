<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/authentification.inc.php";

// Déconnexion de l'utilisateur
logout();

// Redirection vers la page d'accueil ou une autre page appropriée
header("Location: vueDeconnexion.php"); // Remplacez "index.php" par la page vers laquelle vous souhaitez rediriger l'utilisateur
exit();
?>