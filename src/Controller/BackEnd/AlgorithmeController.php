<?php

namespace App\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlgorithmeController extends AbstractController
{
    #[Route('/algorithme', name: 'algorithme')]
    public function index(): Response
    {
        return $this->render('FrontEnd/algo.html.twig', [
            'controller_name' => 'AlgorithmeController',
        ]);
    }
}
