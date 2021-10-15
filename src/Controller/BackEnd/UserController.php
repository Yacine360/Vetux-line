<?php

namespace App\Controller\BackEnd;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[IsGranted('ROLE_CLIENT')]
class UserController extends AbstractController
{
    #[Route('/espacemembre', name: 'espacemembre')]
    public function espacemembre() {
        return $this->render('FrontEnd/espacemembre.html.twig');
    }
}