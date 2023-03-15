<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route("/home/hello")]
    public function hello(): Response
    {
        return new Response('<html><body>hello</body></html>');
    }

    #[Route("/home/twig")]
    public function testTwig(): Response
    {
        return $this->render('testTwig.html.twig', ['word' => "Twig"]);
    }
}
