<?php

include_once "bd.inc.php";

// Fonction pour récupérer toutes les tenues
function getAllTenues() {
    global $connexion;
    $requete = "SELECT * FROM Tenues";
    $resultat = mysqli_query($connexion, $requete);
    $tenues = [];
    while ($row = mysqli_fetch_assoc($resultat)) {
        $tenues[] = $row;
    }
    return $tenues;
}

// Fonction pour récupérer une tenue par son ID
function getTenueById($idTenue) {
    global $connexion;
    $requete = "SELECT * FROM Tenues WHERE Id_Tenue = $idTenue";
    $resultat = mysqli_query($connexion, $requete);
    return mysqli_fetch_assoc($resultat);
}

// Fonction pour insérer une nouvelle tenue
function insertTenue($nomTenue, $pays, $genre) {
    global $connexion;
    $nomTenue = mysqli_real_escape_string($connexion, $nomTenue);
    $pays = mysqli_real_escape_string($connexion, $pays);
    $genre = mysqli_real_escape_string($connexion, $genre);
    $requete = "INSERT INTO Tenues (NomTenue, Pays, Genre) VALUES ('$nomTenue', '$pays', '$genre')";
    mysqli_query($connexion, $requete);
    return mysqli_insert_id($connexion);
}

// Fonction pour mettre à jour une tenue
function updateTenue($idTenue, $nomTenue, $pays, $genre) {
    global $connexion;
    $nomTenue = mysqli_real_escape_string($connexion, $nomTenue);
    $pays = mysqli_real_escape_string($connexion, $pays);
    $genre = mysqli_real_escape_string($connexion, $genre);
    $requete = "UPDATE Tenues SET NomTenue = '$nomTenue', Pays = '$pays', Genre = '$genre' WHERE Id_Tenue = $idTenue";
    return mysqli_query($connexion, $requete);
}

// Fonction pour supprimer une tenue
function deleteTenue($idTenue) {
    global $connexion;
    $requete = "DELETE FROM Tenues WHERE Id_Tenue = $idTenue";
    return mysqli_query($connexion, $requete);
}

// Fonction pour rechercher des tenues par pays
function searchTenuesByPays($pays) {
    global $connexion;
    $requete = "SELECT * FROM Tenues WHERE Pays = '$pays'";
    $resultat = mysqli_query($connexion, $requete);
    $tenues = [];
    while ($row = mysqli_fetch_assoc($resultat)) {
        $tenues[] = $row;
    }
    return $tenues;
}

// Fonction pour rechercher des tenues par genre
function searchTenuesByGenre($genre) {
    global $connexion;
    $requete = "SELECT * FROM Tenues WHERE Genre = '$genre'";
    $resultat = mysqli_query($connexion, $requete);
    $tenues = [];
    while ($row = mysqli_fetch_assoc($resultat)) {
        $tenues[] = $row;
    }
    return $tenues;
}

?>