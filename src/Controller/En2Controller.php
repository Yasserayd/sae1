<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class En2Controller extends AbstractController{
    #[Route('/en2', name: 'app_en2')]
    public function index(): Response
    {
        return $this->render('en2/index.html.twig', [
            'controller_name' => 'En2Controller',
        ]);
    }
}
