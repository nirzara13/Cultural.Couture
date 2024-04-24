<?php
require_once "../modele/bd.inc.php";


function gererAction($action) {
    // Vérifiez l'action demandée et effectuez les opérations nécessaires
    if ($action === "recherche") {
        // Effectuez la recherche et récupérez les résultats
        $motCle = isset($_GET['recherche']) ? $_GET['recherche'] : "";
        $resultats = rechercher($motCle);

        // Si des résultats sont trouvés, les retourner afin de les afficher sur la même page
        if (!empty($resultats)) {
            return afficherResultats($resultats);
        } else {
            // Si aucun résultat n'est trouvé, redirigez l'utilisateur vers une autre page avec un message approprié
            header("Location: vueRecherche.php");
            exit();
        }
    }

    // Si l'action n'est pas géré ici, retournez une chaîne vide
    return "";
}


function rechercher($motCle){
    try {
        // Connexion à la base de données
        $conn = connexionPDO();

        // requête SQL pour rechercher dans la table Tenues
        $searchTenues = $conn->prepare("SELECT Tenues.*, photo.cheminP FROM Tenues LEFT JOIN photo ON Tenues.Id_Tenue = photo.idTenue WHERE Tenues.NomTenue LIKE :motCle");
        $searchTenues->bindValue(':motCle', '%' . $motCle . '%', PDO::PARAM_STR);
        $searchTenues->execute();
        
        // Récupérer les résultats de la recherche pour les tenues
        $resultatsTenues = $searchTenues->fetchAll(PDO::FETCH_ASSOC);
        
        // requête SQL pour rechercher dans la table Accessoires
        $searchAccessoires = $conn->prepare("SELECT Accessoires.*, photo.cheminP FROM Accessoires LEFT JOIN photo ON Accessoires.Id_Accessoire = photo.idAccessoire WHERE Accessoires.NomAccessoire LIKE :motCle");
        $searchAccessoires->bindValue(':motCle', '%' . $motCle . '%', PDO::PARAM_STR);
        $searchAccessoires->execute();
        
        // Récupérer les résultats de la recherche pour les accessoires
        $resultatsAccessoires = $searchAccessoires->fetchAll(PDO::FETCH_ASSOC);
        
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
