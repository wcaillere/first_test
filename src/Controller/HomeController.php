<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/home")]
class HomeController extends AbstractController
{
    #[Route("/", name: "home_hello")]
    public function hello(): Response
    {
        return new Response('<html lang="fr"><body>hello</body></html>');
    }

    #[Route("/twig", name: "home_twig")]
    public function testTwig(): Response
    {
        return $this->render('testTwig.html.twig', ['word' => "Twig"]);
    }
}
