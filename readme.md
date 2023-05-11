# **Project BTS : Symfony**

Yacine El Borgi
Enzo Carpatier

### Pré-requis :

* Base de PHP
* Base de Symfony
* Base HTML/CSS
* Base de SQL

### Objectif de ce projet :

Ce projet a pour but de créer une application web avec le framework symfony permettant à un gestionnaire de l'entreprise Vetux-Line de fusionner les fichiers csv contenant les données des clients français et allemands tout en retirant selon certains critères des clients et des données inutiles commes des doublons pour ensuite les mettre dans une base de données.

### Contenue du projet :

* Une insription & identification avec hashage de mot de passe, confirmation de mot de passe et prise en compte des messages d'erreurs. 
* Un sysème de rôle client & gestionnaire
* Un espace gestionnaire sécurisé avec plusieurs permission de gestionnaires
* Un système d'upload de fichier CSV avec un id unique plus système de hashage en md5
* Un système de fusion de fichiers CSV

### Première partie : Fusion++

### **A/**

Construire un README.md (Celui que vous lisez actuellement).

### **B/**

Pour notre part, nous avions commencé par la Fusion qui ce situe dans src/Services/Fusion.php, ensuite nous avions fait l'upload avec le code du controller qui ce situe dans src/Controller/UploadController.php et le services qui ce situe dans src/Services/FileUploader.php.

Voici la documentation technique pour apprendre à faire un système d'upload de fichier : [zetcode.com/symfony/uploadfile/](https://zetcode.com/symfony/uploadfile/)

**Code Fusion :**

```
public function fusionServices()
    {
        $fichier1 = fopen("../public/filesUploaded/french-data.csv", "r");
        $fichier2 = fopen("../public/filesUploaded/german-data.csv", "r");
        $resultFusion = "../public/filesResultUploaded/french-german-client".date("m.d.Y").".csv";
        $fopen = fopen($resultFusion, 'wb');
        $list = array();
        if($fichier1){
            $line1 = fgetcsv($fichier1, 1000, ",");
            if($fichier2) {
                $line2 = fgetcsv($fichier2, 1000, ",");
                while ($line1) {
                    $list[] = $line1;
                    $line1 = fgetcsv($fichier1, 1000, ",");
                }

                while ($line2){
                    $list[] = $line2;
                    $line2 = fgetcsv($fichier2, 1000, ",");
                }
                fclose($fichier1);
                fclose($fichier2);
            }else{
                echo "Ouverture fichier 2 impossible !";
            }
        }else{
            echo "Ouverture fichier 1 impossible !";
        }
        $list = $this->selectionListe($list);
        $notAccepted = $list[1];
        $list = $list[0];
        $list = $this->projectionListe($list);
        foreach ($list as $fields) {
            fputcsv($fopen, $fields);
        }
        fclose($fopen);
        $return = [];
        $return[] = $resultFusion;
        $return[] = $notAccepted;
        return $return;
    }
```

Pour vous expliquer, ma fusion fonctionne grâce à la fonction "fopen()" qui prend en paramètre 'r' qui signifie "read" et qui va lire le fichier CSV indiqué dans le dossier d'upload "filesUploaded".

La variable $resultFusion indique le chemin et le nom du fichier qui sera généré après l'exécution de la fonction "fusionServices()" avec la date de génération du fichier.

La variable $fopen a pour utilité d'écrire en mode binaire dans le fichier résultat de la variable $resultFusion.

Ensuite, nous créons un tableau vide ($list = array()) qui récupèrera les nombres de lignes et les informations des fichiers $fichier1 et $fichier2.

La première condition prenant en compte $fichier1 a pour objectif de vérifier la lecture du premier fichier pour pouvoir récupérer la première ligne de ce fichier et analyse les noms de ses colonnes sous champs CSV grâce à la fonction "fgetcsv()".

La deuxième condition prenant en compte $fichier2 a pour objectif de vérifier la lecture du deuxième fichier pour pouvoir effectuer une deuxième fois la fonction "fgetcsv()" qui aura pour but de passer la ligne 1 avec le nom de ses colonnes dans le fichier 2.

Ensuite, nous avons la première instruction qui a pour objectif de faire comprendre que tandis que la première ligne ($line1) n'est pas fausse, inscrire la ligne dans la liste ($list[]), puis rejoué la fonction "fgetcsv()" dans la ligne 1 ($line1) pour passer à la prochaine ligne jusqu'à la dernière du premier fichier qui ira ensuite se stocker dans le tableau $list[].

On effectue la même instruction pour le deuxième fichier, qui lui commence directement par les premières informations et qui les stocke également dans un tableau $list[].

Une fois tout ceci effectué, la fonction "fclose()" fermera automatiquement les deux fichiers.

Une fonctionnalité a été rajoutée avec une fonction s'appelant "selectionListe" passant la variable $list, nous déclarons une variable $notAccepted qui a pour objectif de définir combien de clients ont été retirés de la liste à cause de certains critères non respectés.

Une fois la sélection des clients vérifiés, nous passons la variable $list dans une fonction s'appelant "projectionListe" qui a pour objectif de supprimer les colonnes non prises en charge par Vetux-Line.

Ensuite, Nous passons une structure (foreach) qui passera chaque ligne de la liste ($list) dans le fichier de résultat ($resultFusion) à l'aide de la fonction "fputcsv()" qui prendra en compte les variables "$fopen" et "$fields".

Pour finaliser, nous fermons le fichier de résultat ($resultFusion) et nous retournons le chemin du fichier résultat mais également le nombre de clients refusés.

**Code de Séléction :**

```
    public function selectionListe($list)
    {
        $return = [];
        $compteur=0;
        $notAccepted = 0;
        $valid = false;
        foreach ($list as $line) {
            if($line[0]!=='Number') {
                $inchSize = $line[39];
                $cmSize = $line[40];
                $inches = $cmSize / 2.54;
                $feet = intval($inches / 12);
                $inches = $inches % 12;
                $inchSize2 = sprintf("%d' %d" . '"', $feet, $inches);
                if ($inchSize === $inchSize2) {
                    $birthday = $line[21];
                    $date = explode("/", $birthday);
                    if (count($date) <= 2) {
                        $age = 0;
                    } else {
                        $dateBonFormat = $date[2] . "-" . $date[1] . "-" . $date[0];
                        $date = explode("-", $dateBonFormat);
                        $age = date('Y') - $date[0];
                        if (date('m') < $date[2]) {
                            $age--;
                        } elseif (date('d') < $date[1]) {
                            $age--;
                        }
                    }
                    if ($age >= 18) {
                        $CCN = $line[24];
                        $valid = true;
                        foreach ($list as $line2) {
                            if ($line2[0] !== 'Number' && $line[0] !== $line2[0] && $line[2] !== $line2[2]) {
                                if ($CCN !== $line2[24]) {
                                    $valid = true;
                                } else {
                                    $valid = false;
                                    $notAccepted++;
                                    break;
                                }
                            } else {
                                $valid = true;
                            }
                        }

                    } else{
                        $notAccepted++;
                        $valid = false;
                    }
                }else{
                    $valid = false;
                    $notAccepted++;
                }

                if ($valid == false) {
                    unset($list[$compteur]);
                }

            }
            $compteur++;
        }
        $return[] = $list;
        $return[]= $notAccepted;
        return $return;
    }
```

Pour vous expliquer, ma sélection fonctionne grâce au paramètre $list qui est une liste envoyée par la fusion.

Cette fonction à une structure (foreach) qui testera chaque ligne contenant des informations autres que le nom des colonnes.

La condition étant placée dans la structure foreach, a pour objectif de définir si la première ligne du tableau est différent de "Number", effectué des tests par rapport au inch/cm et pouces/pieds.

Pouces/pieds n'étant pas comparables par rapport à la syntaxe différente, convertir dans un premier temps la taille "cm" en "pieds/pouces" pour pouvoir ensuite les comparés.

Ensuite, vérifier si les "pieds/pouces" sont identiques, alors passons au deuxième test, sinon rajouté +1 clients à la liste des clients rejetés.

On repasse $valid en valeur fausse pour que le client n'ayant pas de problème de syntaxe puisse passer au deuxième test.

Dans le deuxième test, nous allons récupérer la date de la ligne testée, puis nous vérifions la validité de la date, si le client n'a pas de dates ou n'est pas bon, l'age proposé sera égal à 0.

Ensuite, nous calculons son âge en fonction de sa date de naissance pour pouvoir vérifier si le client est bien majeur.

Si le client n'a pas les critères d'âge requis, ils seront placés dans la liste des clients rejetés ($notAccepted).

Dans le troisième test, nous allons récupérer le CCN de la ligne du client puis nous effectuons une deuxième structure (foreach) qui a en paramètre la liste ($list).

Nous vérifions si ($line2) n'est pas le nom des colonnes et n'a pas le même numéro que $line1 ni le même nom pour éviter qu'il se compare à lui-même.

Nous vérifions également que les CCN sont différents pour que $valid passe en valeur vrai pour pouvoir continuer, si $valid est en valeur fausse, le client sera rejeté et passera donc dans la liste des clients rejetés ($notAccepted).

La variable "$compteur" a pour utilité d'augmenter le nombre de clients rejeté grâce à la fonction "unset($liste[$compteur])".

Ensuite, nous retournons la liste triée.

**Code de Projection :**

```
public function projectionListe($list)
    {
        $listtwo = array();
        $save = array('Number', 'Title', 'GivenName', 'Surname', 'EmailAddress', 'Birthday', 'TelephoneNumber', 'CCType', 'CCNumber', 'CVV2', 'CCExpires', 'StreetAddress', 'City', 'StateFull', 'ZipCode', 'CountryFull', 'Centimeters', 'Kilograms', 'Vehicle', 'Latitude', 'Longitude');
        $row = 0;
        $garde = array();
        $line1 = $list[0];
        foreach ($line1 as $field) {
            if (in_array($field, $save)){
                $garde[] = $row;
            }
            $row++;
        }
        foreach ($list as $line){
            $row = 0;
            foreach ($line as $field) {
                if (in_array($row, $garde)) {
                    $listtwo[] = $field;
                }
                $row++;
            }
            $final[] = $listtwo;
            $listtwo = array();
        }
        return $final;
    }
```

Cette fonction contient une première structure (foreach) prenant en paramètre la première ligne ($line1) de la liste de fusion ($list[0]) contenant une condition qui a pour objectif de sauvegarder les colonnes de la première ligne qui sont les mêmes contenue dans le tableau ($save).

Si la colonne est identique à celle contenue dans le tableau ($save), on rajoute un index de colonnes ($row) dans le tableau ($garde) à chaque fin de condition qui augmentera l'index de colonnes un par un.

À l'aide d'une deuxième structure (foreach), nous allons prendre en compte chaque ligne, puis réinitialisons l'index de colonnes après chaque ligne prises en compte puis nous passons une structure (foreach) qui prendra en compte chaque colonne.

Ensuite, nous vérifions si le tableau ($garde) prend bien en compte le bon index de colonnes, si oui, nous passons ce que contient la colonne ($field) dans la deuxième liste ($listtwo) représentant la ligne triée.

Une fois tout ceci effectué, nous sortons de la condition puis nous augmentons d'un l'index de colonnes en boucle jusqu'à sortir de la structure (foreach) pour ensuite placer la deuxième liste ($listtwo) dans la liste finale ($final) et donc réinitialiser la deuxième liste.

Après avoir trié, chaque ligne et l'avoir déplacé dans la liste finale ($final), nous retournons la liste finale ($final).

### **C/**

Nous avons créer 2 Types de rôles :

* ROLE_CLIENT (Accessible à tout les nouveaux membres)
* ROLE_GESTIONNAIRE (Peut upload et fusionner des fichiers)

**Code du templates de l'index :**

```
<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            <meta charset="UTF-8">
            {# Run `composer require symfony/webpack-encore-bundle`
            and uncomment the following Encore helpers to start using Symfony UX #}
            {% block stylesheets %}
                <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/index.css") }}" />
            {% endblock %}
            <title>{% block title %}Vetux-Line{% endblock %} - Accueil</title>

            {% block javascripts %}
                {#{{ encore_entry_script_tags('app') }}#}
            {% endblock %}
        {% endblock %}
    </head>
    <body>
        {% block body %}
            <header>
                <div class="wrapper">
                    <div class="logo">
                        <img src="{{ asset("assets/images/logo.png") }}" alt="">
                    </div>
                    <ul class="nav-area">
                        {% if is_granted('ROLE_GESTIONNAIRE') %}
                            <li><a href="{{ path('gestionnaire') }}">Espace Gestionnaires</a></li>
                        {% endif %}
                        {% if not app.user %}
                            <li><a href="{{ path('security_login') }}">Identification</a></li>
                            <li><a href="{{ path('security_inscription') }}">Inscription</a></li>
                        {% endif %}
                        {% if app.user %}
                            <li><a href="{{ path('security_logout') }}">Déconnexion</a></li>
                        {% endif %}
                    </ul>
                </div>
                <div class="welcome">
                    {% if app.user %}
                        <h3>Bonjour {{ app.user.username }}</h3>
                    {% endif %}
                    <h1>Vetux-Line</h1>
                    <h2>Createur de ligne de vêtements</h2>
                </div>
            </header>
        {% endblock %}
    </body>
</html>
```

Dans ce code ci-dessous, nous autorisons l'accès à cette catégorie seulement aux gestionnaires à l'aide d'une condition qui prend en compte une fonction "is_granted()" prenant en compte le type de rôle utilisé pour donner accès à cette catégorie.
```
{% if is_granted('ROLE_GESTIONNAIRE') %}
  <li><a href="{{ path('gestionnaire') }}">Espace Gestionnaires</a></li>
{% endif %}
```

Dans ce code ci-dessous, nous autorisons l'accès à ces catégories seulement aux utilisateurs déconnecté à l'aide d'une condition qui prend en compte une syntaxe "not" qui signifie "non" et appelant l'utilisateur grâce à app.user.
```
{% if not app.user %}
   <li><a href="{{ path('security_login') }}">Identification</a></li>
   <li><a href="{{ path('security_inscription') }}">Inscription</a></li>
{% endif %}
```

Dans ce code ci-dessous, nous autorisons l'accès à la catégorie de déconnexion que si l'utilisateur est authentifié à l'aide d'une condition prenant en compte l'appellations de l'utilisateur grâce à app.user.
```
{% if app.user %}
   <li><a href="{{ path('security_logout') }}">Déconnexion</a></li>
{% endif %}
```

Et dans ce code ci-dessous, nous récupérons le pseudo de l'utilisateur pour l'afficher sur la page d'accueil grâce à une condition prenant en compte l'appellation de l'utilisateur grâce à app.user qui vas définir quand l'afficher et app.user.username qui récupère le nom de l'utilisateur authentifié.
```
{% if app.user %}
  <h3>Bonjour {{ app.user.username }}</h3>
{% endif %}
```

Ce qui donne :

![IndexAfterLogin](public/assets/screenshots/IndexAfterLogin.png?raw=true)


**Code du controller de l'upload :**

```
class UploadController extends AbstractController
{
    /**
     * @Route("/uploadFile", name="uploadFile")
     * @param Request $request
     * @param string $uploadDir
     * @param FileUploader $uploader
     * @return Response
     */
    public function indexUpload(Request $request, string $uploadDir,
                                FileUploader $uploader, LoggerInterface $logger): Response
    {
        $this->denyAccessUnlessGranted('ROLE_GESTIONNAIRE', null, "Vous n'avez pas la permission pour accéder à cette page.");

        $token = $request->get("token");

        if (!$this->isCsrfTokenValid('upload', $token))
        {
            $logger->info("CSRF failure");

            return new Response("Opération non autorisée",  Response::HTTP_BAD_REQUEST,
                ['content-type' => 'text/plain']);
        }

        $files = $request->files->get('csvFileUpload');

        if (empty($files))
        {

            $this->addFlash('notice', 'Aucun fichier n\'a été spécifié');
            return $this->render('/FrontEnd/espace/gestionnaire.html.twig');

        }

        foreach ($files as $file)
        {
            $filetype = $file->getMimeType();
            if (str_contains($filetype, '/csv')){
                $filename = $file->getClientOriginalName();
                $uploader->upload($uploadDir, $file, $filename);
            }
            else {
                return $this->render('/FrontEnd/espace/gestionnaire.html.twig');
            }
        }
        $this->addFlash('notice', 'Fichiers téléchargés');
        return $this->render('/FrontEnd/Fusion/fusion.html.twig');
    }

    /**
     * @Route("/fusion", name="fusion")
     */
    public function fusion(Fusion $fusionServices)
    {
        $this->denyAccessUnlessGranted('ROLE_GESTIONNAIRE', null, "Vous n'avez pas la permission pour accéder à cette page.");

        $fusion = $fusionServices->fusionServices();
        $notAccepted = $fusion[1];
        $fusion = $fusion[0];
        $fichiers = fopen($fusion, 'r');
        $f = 0;
        $g = 0;
        $total = 0;
        if ($fichiers){
            $line = fgetcsv($fichiers, 1000, ",");
            $line = fgetcsv($fichiers, 1000, ",");
            while ($line) {
                if (in_array("France", $line)){
                    $f++;
                } else{
                    $g++;
                }
                $line = fgetcsv($fichiers, 1000, ",");
            }
        }
        fclose($fichiers);
        $total = $f + $g;
        return $this->render('/FrontEnd/Fusion/DownloadFusion/sequentieldl.html.twig', array('f' => $f, 'g' => $g, 'total' => $total, 'notAccepted' => $notAccepted));
    }

    /**
     * @Route("/fusiondl", name="fusiondl")
     */
    public function fusionDL(Fusion $fusionServices){
        $this->denyAccessUnlessGranted('ROLE_GESTIONNAIRE', null, "Vous n'avez pas la permission pour accéder à cette page.");

        $fusion = $fusionServices->fusionServices();
        $fusion = $fusion[0];

        return $this->file($fusion);
    }
}
```

Comme vous pouvez le remarquer, le controller de l'upload comporte une route vers l'upload de fichiers, une route vers la fusion et une route vers le téléchargement du fichier résultat de la fusion.

Comme vous pouvez le constater, le code ci-dessous revient assez souvent, c'est une fonction qui permet de définir la permission d'accès aux routes et afficher un message d'erreur si vous n'avez pas la permission.
```
$this->denyAccessUnlessGranted('ROLE_GESTIONNAIRE', null, "Vous n'avez pas la permission pour accéder à cette page.");
```

Le code ci-dessous a pour objectif de définir l'upload de fichier.
La variable $files récupère les fichiers upload par le formulaire pour la méthode "POST", on vérifie si des fichiers ont été upload, sinon on renvoie sur la page du formulaire d'upload avec un message d'erreur flash.

Le code contient une structure (foreach) qui a pour but de définir le type de fichier à upload pour éviter que n'importe qui upload n'importe quels fichiers et accèdent aux données sensibles et récupère le nom du fichier.

Puis on passe par la fonction d'upload du service FileUploader.php pour finaliser la procédure d'upload et ainsi stockées les fichiers upload dans un dossier spécifique.
```
$files = $request->files->get('csvFileUpload');

        if (empty($files))
        {

            $this->addFlash('notice', 'Aucun fichier n\'a été spécifié');
            return $this->render('/FrontEnd/espace/gestionnaire.html.twig');

        }

        foreach ($files as $file)
        {
            $filetype = $file->getMimeType();
            if (str_contains($filetype, '/csv')){
                $filename = $file->getClientOriginalName();
                $uploader->upload($uploadDir, $file, $filename);
            }
            else {
                return $this->render('/FrontEnd/espace/gestionnaire.html.twig');
            }
        }
        $this->addFlash('notice', 'Fichiers téléchargés');
        return $this->render('/FrontEnd/Fusion/fusion.html.twig');
```

Le code ci-dessous définit le chemin d'upload de fichier csv dans le fichier de configuration services.yaml.
```
parameters:
    upload_dir: '%kernel.project_dir%/public/filesUploaded'

services:
    # default configuration for services in *this* file
    _defaults:
        autowire: true      # Automatically injects dependencies in your services.
        autoconfigure: true # Automatically registers your services as commands, event subscribers, etc.

        bind:
            $uploadDir: '%upload_dir%'
```

### **D/**

```
public function fusion(Fusion $fusionServices)
    {
        $this->denyAccessUnlessGranted('ROLE_GESTIONNAIRE', null, "Vous n'avez pas la permission pour accéder à cette page.");

        $fusion = $fusionServices->fusionServices();
        $notAccepted = $fusion[1];
        $fusion = $fusion[0];
        $fichiers = fopen($fusion, 'r');
        $f = 0;
        $g = 0;
        $total = 0;
        if ($fichiers){
            $line = fgetcsv($fichiers, 1000, ",");
            $line = fgetcsv($fichiers, 1000, ",");
            while ($line) {
                if (in_array("France", $line)){
                    $f++;
                } else{
                    $g++;
                }
                $line = fgetcsv($fichiers, 1000, ",");
            }
        }
        fclose($fichiers);
        $total = $f + $g;
        return $this->render('/FrontEnd/Fusion/DownloadFusion/sequentieldl.html.twig', array('f' => $f, 'g' => $g, 'total' => $total, 'notAccepted' => $notAccepted));
    }
```

**Code de la fusion situé dans le conroller UploadController.php : **

La fonction ci-dessus a pour but de retourner deux méthodes : le fichier de résultat de la fusion et le nombre de clients rejetés.

La première ligne de ce code sert à récupérer ces deux méthodes et les stockées dans deux variables différentes ($fusion et $notAccepted).

La suite de ce code permet d'ouvrir le fichier de résultat grâce à la fonction "fopen()" et créer trois nouvelles variables qui définis le nombre de clients étant français, le nombre de clients étant allemands et le nombre de clients étant accepté.

Ensuite, on vérifie si le fichier est bien ouvert puis on passe directement à la seconde ligne en effectuant deux fonctions "fgetcsv()".

Tandis qu'il y a une ligne, on visualise si dans cette ligne se trouve la chaîne de caractères 'France' à l'aide d'une condition prenant en compte une fonction 'in_array("France", $line)'.

Si la valeur renvoyée est vraie, alors on augmente $f de 1, si la valeur renvoyée est fausse, alors on augmente $g de 1.

Ensuite, on passe chaque ligne un par un.

À la fin de là de l'instruction (while), on programme la fermeture du fichier et on calcule le total de clients à l'aide de la variable $total qui est égal à $f + $g.

Et une fois la fusion finaliser, on est retourné vers la page de téléchargement du fichier résultat de la fusion.

**Visualisation du rendu de la page de téléchargement**

![DownloadFusion](public/assets/screenshots/downloadFusion.png?raw=true)


### Visualisation de Vetux-Line :

#### Page d'accueil des utilisateurs :

![Index](public/assets/screenshots/index.png?raw=true)

#### Page d'inscription :

![Inscription](public/assets/screenshots/inscription.png?raw=true)


#### Page d'identification :

![Identification](public/assets/screenshots/identification.png?raw=true)

#### Page d'accueil après l'identification (Autorisation Gestionnaires) :

![IndexAfterLogin](public/assets/screenshots/IndexAfterLogin.png?raw=true)

#### Page espace gestionnaires :

![Gestionnaires](public/assets/screenshots/gestionnaires.png?raw=true)

#### Page espace fusion :

![Fusion](public/assets/screenshots/fusion.png?raw=true)

#### Page download fusion :

![DownloadFusion](public/assets/screenshots/downloadFusion.png?raw=true)

### Evil Story

PDF de toutes les Evils Story réaliser [Vetux-Line Evil Story](https://github.com/EnzoPoint/Vetux-line/blob/master/Evil%20Storie%20Vetux-Line.pdf)
