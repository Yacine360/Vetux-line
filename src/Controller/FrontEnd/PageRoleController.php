<?php

namespace App\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PageRoleController extends AbstractController
{
    /**
     * @Route("/gestionnaire", name="gestionnaire")
     */
    public function gestionnaire(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_GESTIONNAIRE', null, "Vous n'avez pas la permission pour accéder à cette page.");

        return $this->render('FrontEnd/espace/gestionnaire.html.twig');
    }

    /**
     * @Route("/fusionpage", name="fusionpage")
     */
    public function fusionpage(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_GESTIONNAIRE', null, "Vous n'avez pas la permission pour accéder à cette page.");

        return $this->render('FrontEnd/Fusion/fusion.html.twig');
    }
}