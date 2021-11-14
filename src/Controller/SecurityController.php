<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_inscription")
     */
    public function registration(HttpFoundationRequest $request, EntityManagerInterface $manage, UserPasswordEncoderInterface $hashage) {
        $client = new Client();

        $form = $this->createForm(RegistrationType::class, $client);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $hash = $hashage->encodePassword($client, $client->getPassword());
            $client->setPassword($hash);
            $manage->persist($client);
            $manage->flush();

            return $this->redirectToRoute('security_login');
        }

        return $this->render('FrontEnd/Security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/identification", name="security_login")
     */
    public function login()
    {   
        if($this->getUser()) {
            return $this->redirectToRoute('home');
        }

        return $this->render('FrontEnd/Security/login.html.twig');
    }

    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout(){
        return $this->render('FrontEnd/index.html.twig');
    } 
    
}
