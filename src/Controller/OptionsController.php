<?php

namespace App\Controller;

use App\Entity\Realisateurs;
use App\Form\InfosPersoFormType;
use App\Form\InfosRealFormType;
use App\Form\PasswordFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OptionsController extends AbstractController
{
    /**
     * @Route("/options/parametres/", name="app_options_parametres")
     */
    public function index(): Response
    {
        

        return $this->render('options/parametres.html.twig', [
            
        ]);
    }

    /**
     * @Route("/options/parametres/{id}", name="app_options_parametres")
     */
    public function modfierPerso(Request $request, Realisateurs $real, EntityManagerInterface $em): Response
    {
        // Formulaire informations personnelles
        $persoForm = $this->createForm(InfosPersoFormType::class, $real);
        $persoForm->handleRequest($request);

        if($persoForm->isSubmitted() && $persoForm->isValid()){
            $em->persist($real);
            $em->flush();

            return $this->redirectToRoute('app_options_parametres', ['id' => $this->getUser()->getId()]);
        }

        // Formulaire informations du réalisateur
        $realForm = $this->createForm(InfosRealFormType::class, $real);
        $realForm->handleRequest($request);

        if($realForm->isSubmitted() && $realForm->isValid()){
            $em->persist($real);
            $em->flush();
            
            return $this->redirectToRoute('app_options_parametres');
        }

        return $this->render('options/parametres.html.twig', [
            'persoForm' => $persoForm->createView(),
            'realForm' => $realForm->createView()
        ]);
    }

    /**
     * @Route("/options/parametres/modifier/real/{id}", name="app_options_parametres_modifier_real")
     */
    public function modfierReal(Request $request, Realisateurs $real, EntityManagerInterface $em): Response
    {
        // Formulaire informations du réalisateur
        $realForm = $this->createForm(InfosRealFormType::class, $real);
        $realForm->handleRequest($request);

        if($realForm->isSubmitted() && $realForm->isValid()){
            $em->persist($real);
            $em->flush();
            
            return $this->redirectToRoute('app_bureau');
        }

        return $this->render('options/parametres.html.twig', [
            'realForm' => $realForm->createView()
        ]);
    }

    /**
     * @Route("/options/parametres/modifier/perso/{id}", name="app_options_parametres_modifier_password")
     */
    public function modfierPassword(Request $request, Realisateurs $real, EntityManagerInterface $em): Response
    {
        // Formulaire changement de mot de passe
        $passwordForm = $this->createForm(PasswordFormType::class, $real);
        $passwordForm->handleRequest($request);

        if($passwordForm->isSubmitted() && $passwordForm->isValid()){
            $em->persist($real);
            $em->flush();
            
            return $this->redirectToRoute('app_bureau');
        }

        return $this->render('options/parametres.html.twig', [
            'passwordForm' => $passwordForm->createView()
        ]);
    }
}
