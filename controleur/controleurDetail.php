<?php
// Contrôleur pour l'action "detail"
function controleurDetail() {
    // Vérifie si l'utilisateur est connecté
    if (utilisateurEstConnecte()) {
        // Si oui, affiche la page de détail
        include "vueAmerique_du_Nord.php";
        include "vueAmerique_du_Sud.php";
        include "vueAsie.html.php";
        include "vueDetail.php";
        include "vueDetail.php";
    } else {
        // Si l'utilisateur n'est pas connecté, redirige vers la page de connexion
        header("Location: vueConnexion.php");
        exit();
    }
}
?>