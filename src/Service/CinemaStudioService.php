<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

class CinemaStudioService
{
    /**
     * Retourne l'âge en fonction de la date de naissance
     *
     * @param date $date Date de naissance au format objet
     * @return void
     */
    public static function showAge($date)
    {
        $date = $date->format('Y-m-d');
        $dateOfBirth = $date;
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        
        return $diff->format('%y');
    }

    public function generateSentence()
    {
        $sentences = [
            1 =>'Désolé mais le montant ne me plait pas',
            2 =>'Du tout, du tout'
        ];

        $refusalSentence = $sentences[rand(1,2)];

        return $refusalSentence;
    }

    public static function averageCalculation(array $numbers)
    {
        $numbers = [];
        $average = array_sum($numbers) / count($numbers);
        
        return $average;
    }

}