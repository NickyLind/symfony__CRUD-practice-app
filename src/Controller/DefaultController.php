<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default/{name}', name: 'app_default')]
    public function index($name): Response
    {
        return $this->redirectToRoute('default2');
    }

    #[Route('/default2/', name: 'default2')]
    public function index2(): Response
    {
        return new Response('I am from default 2 route');
    }
}
