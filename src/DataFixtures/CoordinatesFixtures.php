<?php

namespace App\DataFixtures;

use App\Entity\Coordinates;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as FakerFactory;

class CoordinatesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = FakerFactory::create();
        $colors = ['Biały', 'Czarny', 'Czerwony', 'Zielony', 'Niebieski', 'Żółty', 'Szary'];

        $radius = 30; // Przykładowy promień heksagonu
        $hexHeight = sqrt(3) * $radius;
        $hexWidth = 2 * $radius;
        $vertDist = $hexHeight;
        $horizDist = 3 / 2 * $radius;

        $numCols = 10; // Liczba kolumn w siatce
        $numRows = 20; // Liczba wierszy w siatce

        for ($row = 0; $row < $numRows; $row++) {
            for ($col = 0; $col < $numCols; $col++) {
                // Obliczanie współrzędnych w układzie heksagonalnym
                $x = $col * $horizDist;
                $y = $row * $vertDist + ($col % 2) * ($vertDist / 2);

                // Utwórz nowy obiekt Coordinates
                $coordinate = new Coordinates();
                $coordinate->setPointX($col);
                $coordinate->setPointY($row);
                $coordinate->setStatus($colors[array_rand($colors)]);

                // Zapisz obiekt do bazy danych
                $manager->persist($coordinate);
            }
        }

        $manager->flush();
    }
}
