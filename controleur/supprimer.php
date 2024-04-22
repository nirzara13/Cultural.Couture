<?php
include_once "$racine/modele/bd.utilisateur.inc.php"; 
include_once "$racine/modele/bd.inc.php";
include "$racine/vue/vueDelete.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["email"])&& isset($_POST["password"])) {
    $email = $_POST["email"];
    $motDePasse = $_POST["password"];

    // Appel à la fonction de suppression
    if (DeleteUtilisateur($email,$motDePasse)) {
        echo "L'utilisateur a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur.";
    }
}
?>
