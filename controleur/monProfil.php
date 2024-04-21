<?php
// Inclure le fichier de connexion à la base de données
include_once "../modele/bd.inc.php";

// Vérifier si le formulaire de suppression de compte a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["supprimerCompte"])) {
    // Appeler la fonction de suppression du compte
    $id_utilisateur = getUserId(); // Récupérer l'identifiant de l'utilisateur connecté
    deleteUtilisateurById($id_utilisateur); // Appeler la fonction de suppression du modèle
}

// Fonction de suppression du compte utilisateur dans le modèle
function deleteUtilisateurById($id_utilisateur) {
    global $connexion; // Accéder à la connexion PDO définie dans bd.inc.php

    try {
        // Vérifier si l'utilisateur est un administrateur
        $req = $connexion->prepare("SELECT est_administrateur FROM utilisateur WHERE id_utilisateur = :id");
        $req->bindValue(':id', $id_utilisateur, PDO::PARAM_INT);
        $req->execute();
        $resultat = $req->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'utilisateur est un administrateur
        if ($resultat['est_administrateur'] == 1) {
            // Empêcher la suppression si l'utilisateur est un administrateur
            echo "Les administrateurs ne peuvent pas supprimer de comptes.";
            return;
        }

        // Si l'utilisateur n'est pas un administrateur, procéder à la suppression
        $req = $connexion->prepare("DELETE FROM utilisateur WHERE id_utilisateur = :id");
        $req->bindValue(':id', $id_utilisateur, PDO::PARAM_INT);
        $req->execute();
        // Vous pouvez ajouter ici la logique pour supprimer d'autres données associées à l'utilisateur, comme les articles, les commentaires, etc.
        echo "Le compte utilisateur a été supprimé avec succès.";
    } catch (PDOException $e) {
        // Gérer l'erreur de suppression si nécessaire
        echo "Erreur lors de la suppression du compte utilisateur : " . $e->getMessage();
    }
}

// Fonction pour récupérer l'identifiant de l'utilisateur connecté
function getUserId() {
    // Vous devez implémenter la logique pour récupérer l'identifiant de l'utilisateur connecté
    // Retournez l'identifiant de l'utilisateur ou null si non connecté
}
?>
