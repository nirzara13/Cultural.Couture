#contexte projet Cultural Couture
Il y trois fichiers de base de données pour mon github mais c'est le bdd.Principal.sql qu'il faut utiliser pour le site.
Le fichier bd2. sql est la base de données que j'ai voulu mettre en place pour avoir les pays des utilisateurs et pour gérer les administrateurs.

Et le fichier MCD.bd.sql contient les tables généré sur Loooping, mais je n'utilise pas ces tables.

J'ai crée un site pour permettre aux utilisateurs de voir les différents tenues traditionnels ds pays dans le monde. 
Dans la page d'accueil, il y a 6 continents avec des boutons "Découvrir".
Tout le monde peut accéder et voir la page d'accueil, mais si un utilisateur tente de voir les tenues et les acessoires des pays.
Il devra cliquer sur le bouton "Découvrir" et se connecter pour voir les contenues principaux.  
C'est une fonctionnalité que j'ai mis pour que seules les utilisateurs inscrits et connectés puissent accéder aux contenues.

Sur le controleurPrincipal.php , j'ai voulu mettre une fonctionnalité qui permettrai uniquement aux administrateurs de voir la charte informatique, ce code est en commentaire car ça ne marche pas.

Sur le schèma du diagramme de cas, , il y a le bonhommme  avec l'administrateur et ses droits, mais tous les fonctionnalités ne marchent pas.

Dans mon github , il y a des fichiers bd_accessoire.inc.php, bd_tenue.inc.php, bd.admi.inc.php
