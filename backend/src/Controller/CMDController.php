<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CMDController
{
    #[Route('/api/CMD', name: 'api_CMD')]
    public function index(): Response
    {
        return new Response('Symfony de Carlos Morillas Delgado o Responde a la llamada de React');
    }
}