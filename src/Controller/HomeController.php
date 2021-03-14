<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PropertyRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * 
     */
    public function index(PropertyRepository $repo): Response
    {
        $rep = $repo->findLatest();
        return $this->render('home/home.html.twig', [
            'properties' => $rep,
        ]);
    }
}
