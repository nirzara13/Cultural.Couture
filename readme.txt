#contexte projet Cultural Couture
Il y deux fichiers de base de données pour mon github mais c'est le bdd.Principal.sql qu'il faut utiliser pour le site.

Et le fichier MCD.bd.sql contient les tables généré sur Loooping, mais je n'utilise pas ces tables.

J'ai crée un site pour permettre aux utilisateurs de voir les différents tenues traditionnels ds pays dans le monde. 
Dans la page d'accueil, il y a 6 continents avec des boutons "Découvrir".
Tout le monde peut accéder et voir la page d'accueil, mais si un utilisateur tente de voir les tenues et les acessoires des pays.
Il devra cliquer sur le bouton "Découvrir" et se connecter pour voir les contenues principaux.  
C'est une fonctionnalité que j'ai mis pour que seules les utilisateurs inscrits et connectés puissent accéder aux contenues.

Sur le controleurPrincipal.php , j'ai voulu mettre une fonctionnalité qui permettrai uniquement aux administrateurs de voir la charte informatique, ce code est en commentaire car ça ne marche pas.

Sur le schèma du diagramme de cas, , il y a le bonhommme  avec l'administrateur et ses droits, mais tous les fonctionnalités ne marchent pas.

Dans mon github , il y a des fichiers bd_accessoire.inc.php, bd_tenue.inc.php, bd.administrateur.inc.php, rechercher.php, favoris.php dans le controleur et favori.php dans le modele qui ne servent pas rien pour le moment. J'ai gardé ces fichiers pour mettre des fonctionnalités qui ne marchent pas, mais j'essayerai de les développer à l'avenir.

Dans les modeles et les controleurs, il y a aura une vueErreur.php, mais cette vue ne sert pas car j'ai mis des messages d'erreurs et il n'y aura rien à modifier dans le modele et le controleur pour cela.


Mon schèma MCD ne correspond pas beaucoup à mon "bdd.Principal.sql." J'ai mis une table "Favoris" car dans les vues de mes tenues et accessoires, j'ai mis des boutons "Ajouter aux favoris" pour permettre aux utilisateurs de mettre en favoris les tenues et les accessoires qu'ils aiment bien. Ensuite , il y a le bouton "Mes favoris" en haut à droite de la page, il mène vers aucune page car j'ai pas pu mettre la fonctionnalité où un utilisateur peut voir la liste des ses favoris.

Et pour finir, la barre de recherche ne fonctionne pas non plus car je n'ai pas réussi.
