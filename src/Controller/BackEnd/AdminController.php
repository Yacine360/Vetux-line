<?php

namespace App\Controller\BackEnd;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    #[Route('/espaceadmin', name: 'espaceadmin')]
    public function espaceadmin() {
        return $this->render('FrontEnd/espaceadmin.html.twig');
    }
}