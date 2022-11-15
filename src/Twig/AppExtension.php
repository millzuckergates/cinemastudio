<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/3.x/advanced.html#automatic-escaping
            new TwigFilter('filter_name', [$this, 'doSomething']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('function_name', [$this, 'doSomething']),
            new TwigFunction('noteToStars', [$this, 'noteToStars']),
            new TwigFunction('showAge', [$this, 'showAge']),
            new TwigFunction('reputationToBar', [$this, 'reputationToBar'])
        ];
    }
    
    /**
     * Transforme la note du film en format "étoile"
     *
     * @param int $rating Note du film 
     * @return void
     */
    public function noteToStars($rating)
    {
        if($rating >= 4.8){
            $result = str_repeat('<img class="img-stars" src="/images/star_full.png" alt="Une étoile">', 5);
        }

        if($rating >= 4.3 && $rating < 4.8){
            $result = str_repeat('<img class="img-stars" src="/images/star_full.png" alt="Une étoile">', 4) . '<img class="img-stars" src="/images/star_half.png" alt="Une demie étoile">';
        }

        if($rating >= 3.8 && $rating < 4.3){
            $result = str_repeat('<img class="img-stars" src="/images/star_full.png" alt="Une étoile">', 4) . '<img class="img-stars" src="/images/star_empty.png" alt="Étoile vide">';;
        }

        if($rating >= 3.3 && $rating < 3.8){
            $result = str_repeat('<img class="img-stars" src="/images/star_full.png" alt="Une étoile">', 3) . '<img class="img-stars" src="/images/star_half.png" alt="Une demie étoile">' . '<img class="img-stars" src="/images/star_empty.png" alt="Étoile vide">';
        }

        if($rating >= 2.8 && $rating < 3.3){
            $result = str_repeat('<img class="img-stars" src="/images/star_full.png" alt="Une étoile">', 3) . str_repeat('<img class="img-stars" src="/images/star_empty.png" alt="Étoile vide">', 2);
        }

        if($rating >= 2.3 && $rating < 2.8){
            $result = str_repeat('<img class="img-stars" src="/images/star_full.png" alt="Une étoile">', 2) . '<img class="img-stars" src="/images/star_half.png" alt="Une demie étoile">' . str_repeat('<img class="img-stars" src="/images/star_empty.png" alt="Étoile vide">', 2);
        }

        if($rating >= 1.8 && $rating < 2.3){
            $result = str_repeat('<img class="img-stars" src="/images/star_full.png" alt="Une étoile">', 2) .  str_repeat('<img class="img-stars" src="/images/star_empty.png" alt="Étoile vide">', 3);
        }

        if($rating >= 1.3 && $rating < 1.8){
            $result = str_repeat('<img class="img-stars" src="/images/star_full.png" alt="Une étoile">', 1) . '<img class="img-stars" src="/images/star_half.png" alt="Une demie étoile">' . str_repeat('<img class="img-stars" src="/images/star_empty.png" alt="Étoile vide">', 3);
        }

        if($rating >= 0.8 && $rating < 1.3){
            $result = '<img class="img-stars" src="/images/star_full.png" alt="Une étoile">' . str_repeat('<img class="img-stars" src="/images/star_empty.png" alt="Étoile vide">', 4);
        }

        if($rating < 0.8){
            $result = '<img class="img-stars" src="/images/star_half.png" alt="Une demie étoile">' . str_repeat('<img class="img-stars" src="/images/star_empty.png" alt="Étoile vide">', 4);
        }

        if($rating == null){
            $result = str_repeat('<img class="img-stars" src="/images/star_empty.png" alt="Une étoile">', 5);
        }

        return $result;
    }

    /**
     * Calcul l'âge de le personne en fonction de sa date de naissance
     *
     * @param Date $date
     * @return void
     */
    public function showAge($date)
    {
        $date = $date->format('Y-m-d');
        $dateOfBirth = $date;
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        
        return $diff->format('%y');
    }

    /**
     * Retourne la valeur de la réputation dans une variable
     *
     * @param int $reputation Valeur de la réputation
     * @return void
     */
    public function reputationToBar($reputation)
    {
        $bar = $reputation;

        return $bar;
    }

}
