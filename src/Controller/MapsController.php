<?php

// src/Controller/HexGridController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapsController extends AbstractController
{
    /**
     * @Route("/maps", name="maps")
     */
    public function index(Request $request): Response
    {
        // Domyślny promień heksagonów
        $radius = $request->query->get('radius', 30);

        return $this->render('maps/maps.html.twig', [
            'radius' => $radius,
        ]);
    }
}

