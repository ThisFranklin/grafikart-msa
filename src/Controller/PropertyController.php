<?php

namespace App\Controller;

use App\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PropertyController extends AbstractController
{
    /**
     * @Route("/properties", name="property.index")
     */
    public function index(): Response
    {

        return $this->render('property/index.html.twig', [
            'current_menu' => 'properties',
        ]);
    }

    /**
     * @Route("/properties/{slug}-{id}", name = "property.show", requirements = {"slug": "[a-z0-9\-]*"})
     * @param \App\Entity\Property $property
     * @return Response
     */
    public function show(Property $property): Response
    {

        return $this->render('property/show.html.twig', [
            'current_menu' => 'properties', 'property' => $property,
        ]);
    }
}
