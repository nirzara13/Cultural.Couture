
<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
// Inclure le modèle Favori
include_once "$racine/modele/favori.php;";
include_once "$racine/modele/bd.inc.php";

    // Créer une instance de la classe Favori
    $favori = new Favori($conn);

    // Si le formulaire d'ajout aux favoris est soumis
    if(isset($_POST['ajouter_favori'])) {
        $id_article = $_POST['id_article'];
        $type_contenu = $_POST['type_contenu'];

        // Ajouter l'article aux favoris
        $result = $favori->ajouterFavori($id_utilisateur, $id_article, null, $type_contenu);
        if($result) {
            echo "Article ajouté aux favoris avec succès.";
        } else {
            echo "Erreur lors de l'ajout de l'article aux favoris.";
        }
    }

    // Si le formulaire de suppression des favoris est soumis
    if(isset($_POST['supprimer_favori'])) {
        $id_favori = $_POST['id_favori'];

        // Supprimer le favori
        $result = $favori->supprimerFavori($id_favori);
        if($result) {
            echo "Favori supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression du favori.";
        }
    }

    // Récupérer les favoris de l'utilisateur
    $liste_favoris = $favori->getFavorisUtilisateur($id_utilisateur);

    // Inclure la vue pour afficher les favoris
    include_once 'vue/vueMesFavoris.php';

    //else {
   // echo "Veuillez vous connecter pour voir vos favoris.";
//}

?>