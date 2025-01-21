<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PassionController extends AbstractController{
    #[Route('/passion', name: 'app_passion')]
    public function index(): Response
    {
        return $this->render('passion/index.html.twig', [
            'controller_name' => 'PassionController',
        ]);
    }
}
