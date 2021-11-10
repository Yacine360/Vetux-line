# **Project BTS : Symfony**

*Name* : Vetux-Line

**Rapport Vetux-Line**

### Pré-requis :

* Base de PHP
* Base de Symfony
* Base HTML/CSS
* Base de SQL

### Présentation de Vetux-Line :

Vetux-Line est un site codé grâce au framework Symfony comprenant un langage de programmation en PHP qui a pour ambition de
proposer un système de fusion de fichiers CSV, trier par genre, titre, nom, prénom, e-mail, date de naissance, numéro de téléphone CCType, CCNumber, CVV2, CCExpires, adresse physique (plusieurs colonnes), taille, poids, véhicule et coordonnées GPS.
La fusion des fichier CSV sélectionne seulement les personnes majeures à la date de création du fichier de fusion, elle prend en compte la Contrainte-de-taille qui est d'extraire les clients qui ont des incohérences de valeurs entre la taille en inch et celle en cm au moment de la génération du fichier résultat de la fusion et prend également en compte la Contrainte-de-ccn des doublons sur les numéros de cartes de crédit qui se sont glissés dans les données, qui signifie l'extraction des clients du fichier résultat généré ne pouvant pas être identifiés par leurs numéros de carte de crédit.

Vetux-Line est également doté d'un système d'inscription et d'identification au site doté d'un hashage de mot de passe pour la sécurité est d'un système de rôle comprenant un espace membre et un espace admin vérifier et sécurisé contre les failles informatique.

### Contenue du projet :

* Insription & Identification avec hashage de mot de passe
* Sysème de rôle client & administrateur
* Espace membre
* Espace administrateur
* Système d'upload de fichier CSV
* Système de fusion de plusieurs fichiers CSV
* Triages des informations contenue dans les fichiers CSV avant la fusion

### **Première Partie**

*Type* : Fusion of 2 csv files to 1

What we need to fusion : genre, titre, nom, prénom, email, date de naissance, num tel, CCType, CCNumber, CVV2, CCExpires, adresse physique (plusieurs colonnes), taille, poids, véhicule, coordonnées GPS.

*Selected* :

1. Seules les personnes majeures à la date de création du fichier devront être sélectionnées.
2. Prise en compte de la Contrainte-de-taille. Certains clients ont des incohérences de valeurs entre la taille en inch est celle en cm. Il faudra donc extraire ses clients du fichier résultat.
3. Prise en compte de la Contrainte-de-ccn Des doublons sur le numéro de carte de crédit s'est glissés dans les données, ce qui remet en cause l’intégrité des données sur certains clients (dans le système en question, une carte de crédit ne peut être partagée). Nous vous demandons donc d’extraire les clients ne pouvant pas être identifiés par leur numéro de carte de crédit.

À ce stade, le client n’a pas manifesté de critère de tri. Votre application devra donc proposer à l’utilisateur la possibilité de choisir le type de fusion a appliquer.
- Cela signifie qu’il faudra proposer de trier soit 1er fichier puis 2ème après ou par ordre alphabétique ou par ordre décroisant/croissant de la date de naissance.

Test via PHPUnit -> 2/3 test unitaire.

*Needed* : Upload for 2 files, Download

### **Ressources du projet**

Lien docs Vetux-Line : https://ocapuozzo.github.io/mission-etl-csv/
A étudier : les 2 premiers chapitres de : https://symfony.com/doc/current/service_container.html (durée : ~20mn),
Vous apprendrez à créer un service (MessageGenerator) et à l’utiliser dans un contrôleur, bien suffisant pour commencer.


### **Deuxième Partie**

Voir doc mission
