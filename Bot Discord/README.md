# Bot Discord

> Ce bot me permet de gérer mon serveur Discord grâce à des commandes adaptées à ma commuanuté.

### Les commandes
Le dossier [commands] contient toutes les commandes du bot.

+ ban : permet de bannir un membre avec tout un système de logs. Comme mon serveur est en partenariat avec un autre serv qui récupère les membres bannis, le serveur partenaire reçoit une notification quand une personne est bannie. La personne bannie reçoit un message privé du bot avec le lien du serveur partenaire.
+ clear : permet de supprimer un grand nombre de messages d'un seul coup.
+ help : permet d'afficher la liste des commandes avec leur description.
+ roleInfo : permet d'avoir des informations sur un rôle (nom du rôle, couleur, nombre de personnes aillant ce rôle, permissions, etc...).
+ roulette : c'est le mini-jeu. C'est une roulette russe. Au début on a 1 chance sur 6 d'être kick du serveur. Plus on joue et plus la chance d'être kick augmente.
+ servInfo : permet d'avoir des informations sur le serveur (date de création, propriétaire du serveur, nombre de membres, etc...).
+ userInfo : permet d'avoir des informations sur un membre (date de création du compte, date à laquelle la personne a rejoint le serveur, permissions, etc...)

### Les events
Le dossier [events] contient tous les comportements que doit avoir le bot en fonction de certains évènements.

+ guildMemberAdd : le bot enverra un message de bienvenue quand un nouveau membre rejoindra le serveur (en cours de développement)
+ messages : le bot lit tous les messages. Si un message correspond à une commande, alors il fait appel à l'une des commandes du dossier [commands]
+ ready : quand j'allume le bot, au moment où il se connecte un message s'affiche dans la console, m'indiquant que le bot est bien connecté.

### Les fonctions
Le dossier [fonctions] contient les fonctions que j'utilise à travers tout mon projet.
+ date : cette fonction me permet de mettre les dates au format que je veux.

(Ceci est une ancienne version, pour avoir la version mise à jour il faut se référer à [ce repos])

[commands]: ./commands
[events]: ./events
[fonctions]: ./fonctions
[ce repos]: https://github.com/Warriors-Army/warriors-bot-v2
