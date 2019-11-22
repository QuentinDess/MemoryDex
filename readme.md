Projet : MemoryDex

Les instructions suivantes vous fourniront une version du projet opérationnel sur votre ordinateur local à des fins de test. 

Objet :

La présente application de type gameplay vous permettra de tester votre rapidité dans la chasse de vos meilleurs amis, les pokémon....


Fichiers:

index.php - Contient le point d'entrée à l'application par connexion au compte utilisateur et/ou admin pré-enregistré, renvoit vers un formulaire d'inscription, présente les règles du jeu.
admin/signUpForm - Contient le formulaire d'inscription utilisateur
db/create.php - Contient le fichier de fonction pour créer un nouvel utilisateur
admin/adminUser.php - Contient le READ des USERS dans un tableau avec association de la commande pour UPDATE ou DELETE et CREATE
db/data.php - Contient le système de vérification, de récupération et d'éxécution de la requête de lancement
db/read_highscore.php - Contient la page résultat du gamer avec affichage du score, récupération des dix meilleurs résultats en fonction du temps observé et possibilité de relancer une nouvelle partie.
db/updateUser.php - fonction Update côté gamer.
db/dbConnexion - fonction de connexion à la database, possibilité de changer le username et le password sur l'ensemble des pages.

Prérequis / Authentification

Inscription obligatoire.


Identifiants profil administrateur 
Login : admin
Password : 0000

Identifiants profil utilisateur
A renseigner depuis le formulaire d'inscription pour intégration dans la base de données

Deploiement

Langages utilisés

Cette application de type Gameplay a été développée par notre équipe sur la base suivante :

-HTML/CSS3 : squelette de l'application
-Javascript : moteur du gameplay
-PHP version: 7.3 / Mysql / Apache2 : environnement serveur de dynamisation de l'application
-Bootstrap: aggrément contextuel de design


Versioning

La présente application, MemoryDex est disponible via le service de téléchargement et de gestion de logiciels Github.
Adresse : https://github.com/ratshin38/MemoryDex.

Auteurs :

Liste des contributeurs au projet MemoryDex :
Quentin Dessartine - ratshin38
Soline Molowa - SolineMP
Océane Belardi - Oceane404

Nota bene :

No pokémon were mistreated during developping neither in the testing phase nor for pleasure.....
