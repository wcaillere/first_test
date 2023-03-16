<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/home")]
class HomeController extends AbstractController
{
    #[Route("/hello/{name}", name: "home_hello")]
    public function hello(string $name): Response
    {
        if ($name == "exception") {
            throw new Exception("Test de l'exception");
        }
        if ($name == "errorPage") {
            throw $this->createNotFoundException("Test de l'errorPage");
        }
        return new Response('<html lang="fr"><body>hello '.$name.'</body></html>');
    }

    #[Route("/twig", name: "home_twig")]
    public function testTwig(): Response
    {
        return $this->render('testTwig.html.twig', ['word' => "Twig"]);
    }
}
