# Realm of Taelion

- Il s'agit d'un projet de site destiné à distribuer des informations sur un serveur minecraft privé. Il s'agit ici d'une première version qui n'est pas destiné à être mise en ligne avant quelle ait eu d'autres ajouts de fonctionnalités, ainsi qu'une charte graphique.

# Installation

Il vous faut cloner ce projet dans un environnement lamp, que ce soit via un conteneur Docker ou directement sur votre système d'exploitation. Il vous faut aussi avoir node js et yarn d'installé en global.

Commencez par faire un ``` composer install ```, puis un ``` yarn install``` pour installer toute les dépendances.

Créez votre .env.local.

Si vous utiliser un container docker, utilisez la console de commande de celui ci, sinon celle que vous utilisez de base, et faites ``` php bin/console doctrine:migrations:migrate ``` pour créer la base de donné, puis ``` php bin/console doctrine:fixtures:load ``` pour charger la fixture du compte admin.

Enfin, faite un ``` yarn encore dev ``` pour créer le build pour la mise en forme du site.

Vous pouvez accéder au login admin en tapant /admin ou /login_admin dans l'url du localhost.

