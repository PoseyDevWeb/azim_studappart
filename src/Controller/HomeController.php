<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home.index', methods:'GET')]
    

    public function index(): Response
    {
         // Vérifier si l'utilisateur est connecté
         if (!$this->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw new AccessDeniedException('Accès refusé. Veuillez vous connecter.');
        }
        return $this->render('pages/home/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
