<?php

namespace App\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlgorithmeController extends AbstractController
{
    #[Route('/algorithme', name: 'algorithme')]
    public function algorithmeCSV(): Response
    {
        /// Tableau Vide
        $csvResultat= [];
        $csv= [];
        $csv2= [];

        /// Lecture des fichiers CSV
        if(!($fp = fopen('csvfile/french-data.csv', 'r'))) {
            die('Échec de l\'ouverture du fichier');
        }

        if(!($fp2 = fopen('csvfile/german-data.csv', 'r'))) {
            die('Échec de l\'ouverture du fichier');
        }

        /// Lecture + Ajout dans un Tableau des deux fichiers CSV
        echo ("SALUT 1");
        while ($csv == fgetcsv($fp) && $csv2 == fgetcsv($fp2)) {
            echo 'SALUT 2';
            $csv[$csv[0]] = $csvResultat[0];
            $csv2[$csv2[0]] = $csvResultat[1];
            echo ("SALUT 3");
        }

        echo ("SALUT 4");
        /// Fermeture des deux fichiers CSV
        fclose($fp);
        fclose($fp2);

        /// Ouverture du fichier Resulat 
        if(!($fpResultat = fopen('csvfile/resultat-data.csv', 'w'))) {
            die('Échec de l\'ouverture du fichier');
        }

        /// Ecriture du Fichier Resultat
        foreach ((array) $csvResultat as $cs) {
            echo ("SALUT 5");
            fputcsv($fpResultat, (array) $cs);
        }

        /// Close Login
        fclose($fpResultat);

        return $this->render('FrontEnd/resultat.html.twig', [
            'resultats' =>  $csvResultat
        ]);
    }
}
