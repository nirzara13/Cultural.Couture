<?php

include_once "bd.inc.php";


function getUtilisateurById($id_utilisateur) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT nom, prenom, mailU FROM utilisateur WHERE id_utilisateur=:id");
        $req->bindValue(':id', $id_utilisateur, PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUtilisateurByMailU($mailU) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM utilisateur WHERE mailU=:mailU");
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUtilisateur($mailU, $mdpU) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($mdpU, "sel");
        $req = $cnx->prepare("INSERT INTO utilisateur (mailU, mdpU, statut) VALUES (:mailU, :mdpU, 'prospect')");
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->bindValue(':mdpU', $mdpUCrypt, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function updtMdpUtilisateur($mailU, $mdpU) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($mdpU, "select");
        $req = $cnx->prepare("UPDATE utilisateur SET mdpU=:mdpU WHERE mailU=:mailU");
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->bindValue(':mdpU', $mdpUCrypt, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // Programme principal de test
    header('Content-Type:text/plain');

    echo "getUtilisateurs() : \n";
    print_r(getUtilisateurs());

    echo "getUtilisateurByMailU(\"mathieu.capliez@gmail.com\") : \n";
    print_r(getUtilisateurByMailU("mathieu.capliez@gmail.com"));

    echo "addUtilisateur(\"mathieu.capliez3@gmail.com\") : \n";
    addUtilisateur("mathieu.capliez3@gmail.com", "Passe1?");
}



function updateProfilUtilisateur($id_utilisateur, $nouveau_nom, $nouveau_prenom, $nouveau_mailU) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("UPDATE utilisateur SET nom=:nom, prenom=:prenom, mailU=:mailU WHERE id_utilisateur=:id");
        $req->bindValue(':nom', $nouveau_nom, PDO::PARAM_STR);
        $req->bindValue(':prenom', $nouveau_prenom, PDO::PARAM_STR);
        $req->bindValue(':mailU', $nouveau_mailU, PDO::PARAM_STR);
        $req->bindValue(':id', $id_utilisateur, PDO::PARAM_INT);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
?>