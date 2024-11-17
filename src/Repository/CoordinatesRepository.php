<?php

// src/Repository/CoordinatesRepository.php

namespace App\Repository;

use App\Entity\Coordinates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CoordinatesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coordinates::class);
    }

    public function findVisible($x, $y)
    {
        $qb = $this->createQueryBuilder('c');
        $qb->where('c.point_x BETWEEN :minX AND :maxX')
            ->andWhere('c.point_y BETWEEN :minY AND :maxY')
            ->setParameter('minX', $x )
            ->setParameter('maxX', $x )
            ->setParameter('minY', $y)
            ->setParameter('maxY', $y);

        return $qb->getQuery()->getResult();
    }
}
