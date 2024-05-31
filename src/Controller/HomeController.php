<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    // #[Route('/home', name: 'app_home')]
    // public function index(): Response
    // {
    //     return $this->render('home/index.html.twig', [
    //         'controller_name' => 'HomeController',
    //     ]);
    // }


    #[Route('/test', name: 'app_home')]
    public function index(): Response
    {

        $name = "Dominik Nereit";

        return $this->render('test/index.html.twig', ["name" => $name]);

        // return new Response('Tudo certo com a rota', 202, ["name" => $name]);
    }
}
