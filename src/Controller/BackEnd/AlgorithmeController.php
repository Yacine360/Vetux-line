<?php

namespace App\Controller\BackEnd;

use ErrorException;
use League\Csv\Exception;
use League\Csv\Reader;
use League\Csv\Writer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlgorithmeController extends AbstractController
{
    #[Route('/algorithme', name: 'algorithme')]
    public function algorithmeCSV()
    {
        //Nom du répertoire contenant tous les fichiers à fusionner
        $Dir = "csvfile";

        //Nom du fichier de sortie
        $OutputFile = "resultat-data.csv";

        //Scan les fichiers du répertoire dans un tableau
        $Files = scandir ($Dir);

        //Créer un flux dans le fichier de sortie
        $Open = fopen ($OutputFile, "w"); //Utilisez "w" pour démarrer un nouveau fichier de sortie à partir de zéro. Si vous souhaitez incrémenter un fichier existant, utilisez "a".

        // Parcourez les fichiers, lisez leur contenu dans une variable de chaîne et écrivez-le dans le flux de fichiers. Ensuite, nettoyez la variable.
        foreach ($Files as $k => $v) {
            if ($v != "." AND $v != "..") {
                $Data = file_get_contents ($Dir."/".$v);
                fwrite ($Open, $Data);
            }
            unset ($Data);
        }

        //Ferme le flux de fichiers
        fclose ($Open);
        return $this->render('/FrontEnd/resultat.html.twig', array(
            'merge' => $OutputFile
        ));
    }
    /**#[Route('/algorithme', name: 'algorithme')]
    public function algorithmeCSV(): Response
    {
        /// A garder 
        $tabCSV = ["Gender", "GivenName","Surname","Birthday","StreetAddress","Title","EmailAddress","TelephoneNumber","Kilograms","CCType","CCNumber","CVV2","CCExpires","Vehicle"];
 
        /// Premier fichier CSV
        $csv1 = Reader::createFromPath('./csvfile/french-data.csv', 'r');
        $csv1->setHeaderOffset(0);
        $header1 = $csv1->getHeader();
        $records1 = $csv1->getRecords(); 
        
        /// Deuxieme fichier CSV
        // $csv2 = Reader::createFromPath('./csvfile/french-data.csv', 'r');
        // $csv2->setHeaderOffset(0);
        // $header1 = $csv2 ->getHeader();
        // $records1 = $csv2->getRecords(); 

        /// en cours de trie
        function CSV1() {
            foreach ($records1 as $record1) {
                for ($i=0; $i<count($tabCSV);$i++) {
                    $parm = $tabCSV[$i];
                    $tab[$i] = $record1[$parm];
                }
            }
        }

        CSV1();

        // function CSV2() {
        //     foreach ($records as $record2) {
        //         for ($i=0; $i<count($tabName);$i++) {
        //             $para = $tabName[$i];
        //             $tab[$i] = $record2[$para];
        //         }
        //     }
        // }

        $output = Writer::createFromPath('./csvfile/resultat-data.csv');

        return $this->render('/FrontEnd/resultat.html.twig', array(
            'records' => $records1
        ));
    }*/
}
