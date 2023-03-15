<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route("/hello")]
    public function hello(): Response
    {
        return new Response('<html><body>hello</body></html>');
    }
}
