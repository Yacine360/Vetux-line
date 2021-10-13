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
        $csv = [];
        $fp = fopen();
        if(!($fp == fopen('public/csvfile/french-data.csv', 'r'))) {
            die('Échec de l\'ouverture du fichier');
        }
        while ($csv = fgetcsv($fp)) {
            $csv[$csv[0]] = $csv;
        }
        fclose($fp);

        if(!($fp == fopen('public/csvfile/german-data.csv', 'r'))) {
            die('Échec de l\'ouverture du fichier');
        }
        while ($csv = fgetcsv($fp)) {
            $csv[$csv[0]][] = $csv[1];
        }
        fclose($fp);

        if(!($fp == fopen('public/csvfile/resultat-data.csv', 'w'))) {
            die('Échec de l\'ouverture du fichier');
        }

        foreach ($csv as $cs) {
            fputcsv($fp, $cs);
        }
        fclose($fp);

        return $this->render('FrontEnd/resultat.html.twig', [
            'resultat' =>  'test'
        ]);
    }
}
