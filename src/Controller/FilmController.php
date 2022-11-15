<?php

namespace App\Controller;

use App\Repository\FilmsRepository;
use App\Repository\ActeursRepository;
use App\Form\BarreDeRechercheFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FilmController extends AbstractController
{
    /**
     * @Route("/film", name="app_film")
     */
    public function index(): Response
    {
        return $this->render('film/index.html.twig', [
            'controller_name' => 'FilmController',
        ]);
    }

}
