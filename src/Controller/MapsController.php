<?php
// src/Controller/MapsController.php

// src/Controller/MapsController.php

namespace App\Controller;

use App\Repository\CoordinatesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapsController extends AbstractController
{
    #[Route('/maps', name: 'maps')]
    public function index(CoordinatesRepository $coordinatesRepository): Response
    {
        // Opcjonalnie, możesz zdefiniować początkowe wartości dla x i y
        $initialX = 0;
        $initialY = 0;
        $coordinates = $coordinatesRepository->findVisible($initialX, $initialY);

        $coordsData = array_map(fn($c) => [
            'point_x' => $c->getPointX(),
            'point_y' => $c->getPointY(),
            'status' => $c->getStatus(),
        ], $coordinates);
        $all = $coordinatesRepository->findAll();

        return $this->render('maps/maps.html.twig', [
//            'coordinates' => json_encode($coordsData),
            'coordinates' => json_encode($all),
        ]);
    }

    #[Route('/update-map', name: 'update_map')]
    public function updateMap(Request $request, CoordinatesRepository $coordinatesRepository): Response
    {
        $x = $request->query->get('x');
        $y = $request->query->get('y');

        $visibleCoordinates = $coordinatesRepository->findVisible($x, $y);

        $coordsData = array_map(fn($c) => [
            'point_x' => $c->getPointX(),
            'point_y' => $c->getPointY(),
            'status' => $c->getStatus(),
        ], $visibleCoordinates);

        // Renderuj HTML dla widocznych heksagonów
        return $this->render('maps/partials/hexagons.html.twig', [
            'coordinates' => json_encode($coordsData),
        ]);
    }
}

