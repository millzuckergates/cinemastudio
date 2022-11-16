<?php

namespace App\Controller;
use App\Repository\ActeursRepository;
use App\Form\BarreDeRechercheFormType;
use App\Repository\FilmsRepository;
use App\Repository\PersonnagesRepository;
use App\Repository\ProducteursRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RechercheController extends AbstractController
{
    /**
     * @Route("/recherche", name="app_recherche")
     */
    public function index(): Response
    {
        return $this->render('recherche/index.html.twig', [
            'controller_name' => 'RechercheController',
        ]);
    }

    public function BarreDeRecherche(Request $request)
    {
        $form = $this->createForm(BarreDeRechercheFormType::class, null, ['action' => $this->generateUrl('handleSearch')]);
        $form->handleRequest($request);

        return $this->render('recherche/barre-de-recherche.html.twig', [
            'barreDeRechercheForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/rechercher/", name="handleSearch")
     * @param Request $request
     */
    public function handleSearch(
        Request $request, PersonnagesRepository $persoRepo, FilmsRepository $filmsRepo)
    {
        
        $result ="";
        $query = $request->query->get('q');
        
        if($query!="") {
            if(empty($persoRepo->findPersonnagesByName($query)) && empty($filmsRepo->findFilmsByName($query))){
                $result = $this->addFlash('message', 'Aucun résultat pour "'. $query . '"');
                $resultPerso = "";
                $resultFilms = "";               
            }else{
                $resultPerso = $persoRepo->findPersonnagesByName($query);
                $resultFilms = $filmsRepo->findFilmsByName($query);
                               
            }
        }else{
            $result = $this->addFlash('message', 'Vous devez saisir des mots-clé pour rechercher un film, une série ou une star.');
        }

        return $this->render('recherche/recherche.html.twig', [
            'result' => $result,
            'personnages' => $resultPerso,
            'films' => $resultFilms,           
            'query' => $query
        ]);
    }
}
