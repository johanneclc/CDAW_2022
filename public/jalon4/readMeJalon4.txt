Auteur(s)
- Wifek OUERGHEMMI
- Johanne CALCOEN

# Jalon 4

<description>
*****

Scénario :

Tout d’abord, on a la page d’accueil qui s’affiche avec la possibilité de créer un compte (inscription) 
puis la possibilité de se connecter (connexion). 
Lors de l’affichage d’un film sélectionné on peut visionner les informations liées à celui-ci 
et également les commentaires et like de la communauté. 
On ne peut ni commenter ni aimer car on est en tant que visiteur.
 Une fois le compte créé, on sera redirigé vers la page login .
 Une fois connecté on a plus de fonctionnalités affichées qu’un simple visiteur. 
On peut consulter le profil de l’utilisateur connecté et modifier son avatar 
ou ses données. 
On peut aussi accéder aux films les plus likés, 
les films et les playlists tendances 
( générés grâce à des requêtes qu’on a écrites pour filtrer ) .
On peut afficher les détails d’un film le liker et le commenter vu qu’on est connecté.
 On se déconnecte et ouvre le compte administrateur. 
Une fois connecté en tant qu’administrateur, on peut voir la liste des utilisateurs. 
On peut aussi bloquer un utilisateur. 
Si on bloque un utilisateur il aura plus la possibilité de commenter ou d’aimer 
les films . 
Il lui sera indiqué qu’il n’a pas ce droit tout en marquant qu’il est un utilisateur
 bloqué.
 L’administrateur peut également donner le rôle de modérateur à un utilisateur. 

Pour ce projet on a développé un site web en utilisant api IMDb , MySql , Docker , 
Laravel 8 , JavaScript , Bootstrap . 

Vous pouvez cloner ce projet , taper la commande 
Composer update 
puis la commande
 php make migrate

****
Fonctionnalités implémentées :
- création de compte
- connexion au site (login)
   par manque de temps, nous n'avons pas terminé la partie mot de passe oublié
-afficher profil
-changer avatar
-afficher medias
-ajouter medias
-afficher détail média
-liké média
-commenter media
-afficher media les plus liké
-afficher media les plus tendances
-gestion de role(admin,visiteur,utilisateur,modérateur) 
-page admin
-afficher utilisateur pour l'admin
-bloquer un utilisateur par admin
-bloquer l'affichage pour l'utilisateur bloqué
-un viteur ne peut que créer son compte ou voir l'acceuil
-déconnexion


Méthode pour initialiser la base de données :
par les migrations / seeders ou par fichier sql (préciser le chemin).
on a partager la base de donnée avec vous

Route :
vous tappez la commande : 
php migrate serve et vous seriez rediriger 
ou bien 
http://localhost:8083/imtflix/public/index.php

Identifiants sur le site :
admin : johannecalcoen@gmail.com / mdp : jojo
pour tous les autres comptes le mot de passe c'est le prenom
exemple : hubert@gmail.com ->mdp : hubert
wifek@gmail.com -> mdp : wifek


Vidéo de démonstration : https://youtu.be/KCaaIHGAzvs

