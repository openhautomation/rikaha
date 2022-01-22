**Changelog**

Vous retrouverez le détail complet des mises à jour sur https://github.com/openhautomation/rikaha

Liste des évolutions majeures de la version courante :

20 01 2022

Ajout de la possibilité de gérer des poêle de la marque Animo (filiale de Rika).

Correction de la gestion du coefficient pour le calcul de la consommation de pellets, autorisation de saisir un coefficient négatif.

/!\ attention après la mise à jour, il est nécessaire de sauvegarder vos équipements

Merci pour les contributions de jbx


24 11 2019

Ajout des paramètres suivants dans la configuration des équipements :

* Poids d'un sac de pellet (Kg)

 Ce paramètre, lorsqu'il est activé, permet de remplir le réservoir sac par sac.
Il est nécéssaire d'afficher la commande "+1 sac dans le réservoir" sur le widget

* Correction de la consommation (%)

 Ce paramètre, lorsqu'il est activé, permet de corriger la consommation calculée, en applicant un poucentage. Par exemple, si vous saisissez 30, la consommation sera majoré de 30 %

17 11 2019

Gestion des commandes d'information d'ouverture de porte et de couvercle de réservoir à pellets.

Attention, pour que cela fonctionne il faut :

que l’information d’ouverture (porte ou couvercle) soit intégrée dans l’environnement Rika,

que la mise à jour des commandes du plugin soit exécutée pendant cet événement.

Les commandes sont inputCover et inputDoor.

10 11 2019

Modifications de la gestion des états

Modifications du calcul de la consommation de pellets

Modification de la gestion des commandes

24 09 2019

Modifications nécessaires afin d'assurer la compatibilité avec Jeedom v4

13 09 2019

Patch pour prendre en compte les lenteurs du site Rika

12 04 2019

/!\ attention après la mise à jour, il est nécessaire de supprimer puis, de créer à nouveau vos équipements

**1. Modification des commandes et du widget**

toutes les commandes peuvent désormais être affichées sur le widget, pas uniquement celles pré-sélectionnées.  
Pour cela, il faut utiliser la case à cocher "Afficher" présente sur la liste des Commandes

Ajout du champ "ordre d'affichage" sur la liste des Commandes
Il permet de gérer l'ordre d'affichage des commandes sur le widget.

Ajout du bouton "Icone" sur la liste des Commandes
Il permet d'afficher la commande avec l'icone sélectionnée sur le widget.

Supression d'un ensemble de commande non utilisé (debug, compteur d'erreur...)
L'objectif est de moins solliciter votre Jeedom.


**2. Commandes envoyées au poêle**

Ajout des commandes :  
Modif état Convection MultiAir 1 et 2  
Modif étendue de convection MultiAir 1 et 2  
Modif degré de convection MultiAir 1 et 2

Gestion de l'envoi des commandes  
Abandon du sytème qui envoyait automatiquement plusieurs fois la commande demandée. Aux utilisateurs de gérer l'eventuelle non execution de la commande demandée dans l'environnement Rika.  
Il est recommandé d'attendre 12 secondes au minimum entre 2 commandes ou une demande de mise à jour.

**3. Ajout des templates dans la configuration des équipements**

Les templates pré-sélectionnent des commandes qui seront affichées sur le widget.  
Sur cette version 3 templates sont disponibles : standard, domo, induo

**4. correction de bugs**

bug d'affichage sur le widget après l'envoi d'une commandes  
bugs mineurs

19 11 2018

Validation du fonctionnement du plugin après la mise à jour de la clef Firenet

Modification du système de retry des ordres envoyés au poêle

30 10 2018 /!\ attention après la mise à jour, il est nécessaire de supprimer puis, de créer à nouveau vos équipements

Gestion du niveau de pellet dans le réservoir. Vous pouvez gérer des actions en configurant dans votre Jeedom la commande "Niveau du réservoir à pellet"

Réorganisation du widget du dashboard

21 09 2018 /!\ attention après la mise à jour, il est nécessaire de supprimer puis, de créer à nouveau vos équipements

Ajout de la modification de la puissance de chauffe. Le range est compris entre 30 et 100 % par pas de 5.

19 09 2018 /!\ attention après la mise à jour, il est nécessaire de supprimer puis, de créer à nouveau vos équipements

Prise en compte dans les scénarios des actions de modification de la temp. de consigne, du mode et de l'état.

Ajout des cron 5, 15 minutes et une heure

Ajout sur le widget de la consommation restante avant entretien

Affichage sur le widget de puissance conditionnée par le mode utilisé

Affichage de temps lorsque le poêle est hors ligne (ne s'affiche que si il est hors ligne).

11 09 2018

Possibilité de modifier l'état (On/Off) du poêle.
