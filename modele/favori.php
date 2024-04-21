<?php

class Favori {
    private $conn;

    public function __construct($db_conn) {
        $this->conn = $db_conn;
    }

    // Méthode pour récupérer les favoris d'un utilisateur
    public function getFavorisUtilisateur($id_utilisateur) {
        $sql = "SELECT Favoris.*, Tenues.NomTenue, Accessoires.NomAccessoire, photo.cheminP FROM Favoris 
                LEFT JOIN Tenues ON Favoris.tenue_id = Tenues.Id_Tenue 
                LEFT JOIN Accessoires ON Favoris.accessoire_id = Accessoires.Id_Accessoire 
                LEFT JOIN photo ON Favoris.tenue_id = photo.Id_Tenue OR Favoris.accessoire_id = photo.Id_Accessoire
                WHERE id_utilisateur = ?";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id_utilisateur);
        $stmt->execute();
        
        $result = $stmt->get_result();

        $favoris = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $favoris[] = $row;
            }
        }
        return $favoris;
    }

    // Méthode pour ajouter un favori
    public function ajouterFavori($id_utilisateur, $tenue_id, $accessoire_id, $type_contenu) {
        $sql = "INSERT INTO Favoris (id_utilisateur, tenue_id, accessoire_id, type_contenu) VALUES (?, ?, ?, ?)";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("iiis", $id_utilisateur, $tenue_id, $accessoire_id, $type_contenu);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Méthode pour supprimer un favori
    public function supprimerFavori($id_favori) {
        $sql = "DELETE FROM Favoris WHERE id_favori = ?";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id_favori);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Autres méthodes pour mettre à jour les favoris, etc.
}
?>