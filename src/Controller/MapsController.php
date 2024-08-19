<?php

// src/Controller/MapController.php

namespace App\Controller;

use App\Repository\CoordinatesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapsController extends AbstractController
{
    #[Route('/maps', name: 'maps')]
    public function index(CoordinatesRepository $coordinatesRepository): Response
    {
        $coordinates = $coordinatesRepository->findAll();
        $coordsData = array_map(fn($c) => [
            'point_x' => $c->getPointX(),
            'point_y' => $c->getPointY(),
            'status' => $c->getStatus(),
        ], $coordinates);

        return $this->render('maps/maps.html.twig', [
            'radius' => 30, // Przykładowa wartość
            'coordinates' => $coordsData,
        ]);
    }
}
