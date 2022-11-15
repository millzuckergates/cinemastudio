<?php

namespace App\Controller;

use App\Entity\Acteurs;
use App\Form\TestFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BureauController extends AbstractController
{
    /**
     * @Route("/bureau", name="app_bureau")
     */
    public function index(): Response
    {
        
        return $this->render('bureau/index.html.twig', [
            
        ]);
    }
}
