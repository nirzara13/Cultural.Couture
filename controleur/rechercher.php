<?php
require_once "../modele/bd.inc.php";

// Fonction pour gérer l'action de recherche
function gererAction($action) {
    // Vérifiez l'action demandée et effectuez les opérations nécessaires
    if ($action === "recherche") {
        // Effectuez la recherche et récupérez les résultats
        $motCle = isset($_GET['recherche']) ? $_GET['recherche'] : "";
        $resultats = rechercher($motCle);

        // Si des résultats sont trouvés, les retourner pour affichage sur la même page
        if (!empty($resultats)) {
            return afficherResultats($resultats);
        } else {
            // Si aucun résultat n'est trouvé, redirigez l'utilisateur vers une autre page avec un message approprié
            header("Location: vueRecherche.php");
            exit();
        }
    }

    // Si l'action n'est pas gérée ici, retournez une chaîne vide
    return "";
}

// Fonction pour rechercher dans la base de données
function rechercher($motCle){
    try {
        // Connexion à la base de données
        $conn = connexionPDO();

        // Préparer la requête SQL pour rechercher dans la table Tenues
        $stmtTenues = $conn->prepare("SELECT t.*, p.cheminP FROM Tenues t LEFT JOIN photo p ON t.Id_Tenue = p.idTenue WHERE t.NomTenue LIKE :motCle");
        $stmtTenues->bindValue(':motCle', '%' . $motCle . '%', PDO::PARAM_STR);
        $stmtTenues->execute();
        
        // Récupérer les résultats de la recherche pour les tenues
        $resultatsTenues = $stmtTenues->fetchAll(PDO::FETCH_ASSOC);
        
        // Préparer la requête SQL pour rechercher dans la table Accessoires
        $stmtAccessoires = $conn->prepare("SELECT a.*, p.cheminP FROM Accessoires a LEFT JOIN photo p ON a.Id_Accessoire = p.idAccessoire WHERE a.NomAccessoire LIKE :motCle");
        $stmtAccessoires->bindValue(':motCle', '%' . $motCle . '%', PDO::PARAM_STR);
        $stmtAccessoires->execute();
        
        // Récupérer les résultats de la recherche pour les accessoires
        $resultatsAccessoires = $stmtAccessoires->fetchAll(PDO::FETCH_ASSOC);
        
        // Fermer la connexion à la base de données
        $conn = null;

        // Fusionner les résultats des tenues et des accessoires
        $resultats = array_merge($resultatsTenues, $resultatsAccessoires);
        
        // Renvoyer les résultats de la recherche
        return $resultats;
    } catch(PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}


?>