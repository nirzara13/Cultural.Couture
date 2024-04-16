<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/authentification.inc.php";
include_once "$racine/modele/bd.utilisateur.inc.php";
include_once "$racine/modele/bd.typecuisine.inc.php";
include_once "$racine/modele/bd.resto.inc.php";
include_once "$racine/modele/bd.aimer.inc.php";
include_once "$racine/modele/bd.preferer.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url" => "./?action=profil", "label" => "Consulter mon profil");
$menuBurger[] = Array("url" => "./?action=updProfil", "label" => "Modifier mon profil");

// init messages 
$messageMdp = "";

// recuperation des donnees GET, POST, et SESSION
if (isLoggedOn()) {
    $mailU = getMailULoggedOn();
    $util = getUtilisateurByMailU($mailU);

        // traitement si necessaire des donnees recuperees

    if (isset($_POST["pseudoU"])){
        $pseudoU = $_POST["pseudoU"];
        if ($pseudoU!=""){
            updtPseudoUtilisateur($mailU, $pseudoU);
        }
    }
    
    if (isset($_POST["mdpU"]) && isset($_POST["mdpU2"])) {
        if ($_POST["mdpU"] != "") {
            if (($_POST["mdpU"] == $_POST["mdpU2"])) {
                updtMdpUtilisateur($mailU, $_POST["mdpU"]);
            } else {
                $messageMdp = "erreur de saisie du mot de passe";
            }
        }
    }

    if (isset($_POST["lstidR"])) {
        $lstidR = $_POST["lstidR"];
        for ($i = 0; $i < count($lstidR); $i++) {
            delAimer($mailU, $lstidR[$i]);
        }
    }
    
    //addLstidTC
    if (isset($_POST["addLstidTC"])) {
        $addLstidTC = $_POST["addLstidTC"];
        for ($i = 0; $i < count($addLstidTC); $i++) {
            addPreferer($mailU, $addLstidTC[$i]);
        }
    }
    
    //delLstidTC
    if (isset($_POST["delLstidTC"])) {
        $delLstidTC = $_POST["delLstidTC"];
        for ($i = 0; $i < count($delLstidTC); $i++) {
            delPreferer($mailU, $delLstidTC[$i]);
        }
    }

    
    // appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
    $mesRestosAimes = getRestosAimesByMailU($mailU);
    $mesTypeCuisineAimes = getTypesCuisinePreferesByMailU($mailU);
    $lesAutresTypesCuisine = getTypesCuisineNonPreferesByMailU($mailU);
    
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Mon profil";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueUpdProfil.php";
    include "$racine/vue/pied.html.php";
}
else{
    $titre = "Mon profil";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/pied.html.php";
}
?>

<!--Texte de chatgtp

<?php
// Inclure les fichiers de modèle et toute autre logique nécessaire
include_once "modele/authentification.inc.php";
include_once "modele/bd.utilisateur.inc.php";

// Vérifier si l'utilisateur est connecté
if (!isLoggedOn()) {
    header("Location: login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}

// Récupérer les informations de l'utilisateur depuis la session
$mailU = getMailULoggedOn();
$utilisateur = getUtilisateurByMailU($mailU);

// Traitement du formulaire de modification si soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Traitez ici les données soumises et mettez à jour le profil de l'utilisateur dans la base de données
    // Assurez-vous de valider et de sécuriser les données entrées par l'utilisateur
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon profil</title>
     Inclure les liens vers les fichiers CSS et JS nécessaires -->
</head>
<body>
    <h2>Modifier mon profil</h2>
    <!-- Formulaire de modification avec les champs pré-remplis avec les informations actuelles de l'utilisateur -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- Ajoutez ici les champs pour modifier les informations du profil (nom, prénom, email, etc.) -->
        <input type="submit" class="btn btn-primary" value="Enregistrer les modifications">
    </form>
</body>
</html>