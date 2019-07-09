Voici comment installer le CRUD en Laravel en local pour les passionnés d'animaux (Windows):

Pour configurer cette application, vous aurez besoin: du logiciel composer https://getcomposer.org/ d'une version récente de PHP, MySQL (ex: pack WampServer: http://www.wampserver.com/)

Placez les fichiers de laravelCrud dans un dossier dans wamp/www/{votre dossier} Lancez wampserver Dans votre navigateur internet, entrez en url http://localhost/phpmyadmin/ Si c'est la premiere fois que vous lancez, votre Utilisateur est "root" et le mot de passe est vide Connectez-vous Ouvrez "Nouvelle base de données" Entrez un nom (ex: animaux) et selectionnez "utf8_general_ci" dans la liste déroulante. Faites "Créer".

Ouvrez votre dossier contenant les fichiers laravelCrud avec votre éditeur de code préféré. Ouvrez le fichier .env a la racine de ce dossier. Entrez les informations suivantes:

DB_CONNECTION= //votre type de base de données// DB_HOST= //votre numero d'hote// DB_PORT= //votre port// DB_DATABASE= //le nom donné a votre base de données précédemment// DB_USERNAME= //votre utilisateur// DB_PASSWORD= //votre mot de passe//

Sauvegardez

Ouvrez votre invite de commande (windows+r -> "cmd" -> OK) Rendez vous dans votre dossier laravelCrud

Entrez "php atisan migrate" Puis "php artisan serve" Copiez l' adresse IP donnée par l'invite de commande avec "ctrl+shift+c", et collez-le dans l'url de votre navigateur. Enlevez les signes "<>" et ajoutez "/animals" a la fin de l'url.
