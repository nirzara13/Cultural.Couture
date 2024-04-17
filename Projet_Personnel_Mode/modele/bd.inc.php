<?php

// Fonction de connexion à la base de données
function connexionPDO() {
    $login = "root";
    $mdp = "";
    $bd = "cultural";
    $serveur = "localhost";

    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    } catch (PDOException $e) {
        print "Erreur de connexion : " . $e->getMessage();
        die();
    }
}

// Appel de la fonction pour obtenir la connexion à la base de données
$connexion = connexionPDO();

?>