<?php

include_once "bd.inc.php";

function getUtilisateurs() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur");
        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUtilisateurByemail($email) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur where email=:email");
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUtilisateur($nom, $prenom, $email, $motDePasse) {
    try {
        $cnx = connexionPDO();

        $motDePasseCrypt = crypt($motDePasse, "sel");
        $req = $cnx->prepare("insert into utilisateur (nom, prenom, email, motDePasse) values(:nom,:prenom,:email,:motDePasse)");
        $req->bindValue(':nom', $nom, PDO::PARAM_STR);
        $req->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':motDePasse', $motDePasseCrypt, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function DeleteUtilisateur($email,$motDePasse) {
    try {
        // Establish connection
        $cnx = connexionPDO();
        $motDePasseCrypt = crypt($motDePasse, "sel");
        // Prepare a DELETE SQL statement
        $req = $cnx->prepare("DELETE FROM utilisateur WHERE email = :email and motDePasse = :motDePasse");
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':motDePasse', $motDePasseCrypt, PDO::PARAM_STR);
        
        // Execute the query and store the result
        $resultat = $req->execute();
        
        // Optional: Check if the deletion was successful
        if ($resultat) {
            echo "Compte supprimé avec succès.";
        } else {
            echo "Le compte n'as pas été supprimé .";
        }

        return $resultat;

    } catch (PDOException $e) {
        // Handle potential errors in a catch block
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function DeleteUtilisateurByAdmin($email) {
    try {
        // Establish connection
        $cnx = connexionPDO();
        // Prepare a DELETE SQL statement
        $req = $cnx->prepare("DELETE FROM utilisateur WHERE email = :email");
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        
        // Execute the query and store the result
        $resultat = $req->execute();
        
        // Optional: Check if the deletion was successful
        if ($resultat) {
            echo "l'utilisateur a été supprimé avec succès.";
        } else {
            echo "Le compte n'as pas été supprimé .";
        }

        return $resultat;

    } catch (PDOException $e) {
        // Handle potential errors in a catch block
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function updtmotDePasseUtilisateur($email, $motDePasse) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $motDePasseCrypt = crypt($motDePasse, "sel");
        $req = $cnx->prepare("update utilisateur set motDePasse=:motDePasse where email=:email");
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':motDePasse', $motDePasseCrypt, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function updtnomUtilisateur($email, $nom) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("update utilisateur set nom=:nom where email=:email");
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':nom', $nom, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function updtprenomUtilisateur($email, $prenom) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("update utilisateur set prenom=:prenom where email=:email");
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':prenom', $prenom, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getUtilisateurs() : \n";
    print_r(getUtilisateurs());

    echo "getUtilisateurByemail(\"mathieu.capliez@gmail.com\") : \n";
    print_r(getUtilisateurByemail("mathieu.capliez@gmail.com"));

    echo "addUtilisateur(\"mathieu.capliez3@gmail.com\") : \n";
    addUtilisateur("add","Utilisateur","utilisateur@gmail.com","Utilisateur34","Homme");
}
?>