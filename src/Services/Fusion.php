<?php

namespace App\Services;

class Fusion
{
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

    public function selectionListe($list)
    {
        $return = [];
        $compteur=0;
        $notAccepted = 0;
        $valid = false;
        foreach ($list as $line) {
            if($line[0]<>'Number') {
                #comparer les tailles
                $inchSize = $line[39];
                $cmSize = $line[40];
                $inches = $cmSize / 2.54;
                $feet = intval($inches / 12);
                $inches = $inches % 12;
                $inchSize2 = sprintf("%d' %d" . '"', $feet, $inches);
                if ($inchSize === $inchSize2) {
                    #vérifier être majeur
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
                        #vérif carte crédit
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
}