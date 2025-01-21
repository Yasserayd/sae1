<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SaeController extends AbstractController{
    #[Route('/sae', name: 'app_sae')]
    public function index(): Response
    {
        return $this->render('sae/index.html.twig', [
            'controller_name' => 'SaeController',
        ]);
    }
}
