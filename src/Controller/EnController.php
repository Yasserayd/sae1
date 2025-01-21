<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EnController extends AbstractController{
    #[Route('/en', name: 'app_en')]
    public function index(): Response
    {
        return $this->render('en/index.html.twig', [
            'controller_name' => 'EnController',
        ]);
    }
}
