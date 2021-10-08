**Project Symfony**

*Name* : Vetux-Line

***Première Partie***

*Type* : Fusion of 2 csv files to 1

What we need to fusion : genre, titre, nom, prénom, email, date de naissance, num tel, CCType, CCNumber, CVV2, CCExpires, adresse physique (plusieurs colonnes), taille, poids, véhicule, coordonnées GPS.

*Selected* :

1. seules les personnes majeures à la date de création du fichier devront être sélectionnées.
2. prise en compte de la Contrainte-de-taille. Certains clients ont des incohérences de valeurs entre la taille en inch et celle en cm. Il faudra donc extraire ces clients du fichier résultat.
3. prise en compte de la Contrainte-de-ccn Des doublons sur le numéro de carte de crédit se sont glissés dans les données, ce qui remet en cause l’intégrité des données sur certains clients (dans le système en question, une carte de crédit ne peut être partagée). Nous vous demandons donc d’extraire les clients ne pouvant pas être identifiés par leur numéro de carte de crédit.

À ce stade, le client n’a pas manifesté de critère de tri. Votre application devra donc proposerer à l’utilisateur la possibilité de choisir le type de fusion à appliquer.
- Cela signifie qu’il faudra proposer de trier soit 1er fichier puis 2ème après ou par ordre alphabétique ou par ordre décroisant/croissant de la date de naissance … 

README.md -> Fera office de rapport de projet.

Test via PHPUnit -> 2/3 test unitaire.

Ressources : Lien docs : https://ocapuozzo.github.io/mission-etl-csv/ 
Ressource à étudier : les 2 premiers chapitres de : https://symfony.com/doc/current/service_container.html (durée : ~20mn), Vous apprendrez à créer un service (MessageGenerator) et à l’utiliser dans un contrôleur, bien suffisant pour commencer.

*Needed* : Upload for 2 files, Download 

***Deuxième Partie***
 
Voir doc mission 
