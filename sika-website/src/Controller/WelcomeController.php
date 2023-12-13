<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/welcome", name: "welcome_")]
class WelcomeController extends AbstractController
{
    #[Route("/alternative", name: "alternative")]
    #[Route("/", name: "index")]
    public function index(
        Request $httpRequest,
        RequestStack $stack,
    ):  Response
    {
        return $this->render('welcome/index.html.twig', [

            'showSikaYellowLine'=> $httpRequest->attributes->get('_route') == 'welcome_index',
            'showEmergencyForm' =>$httpRequest->attributes->get('_route') == 'welcome_index'
        ]);
    }

}
