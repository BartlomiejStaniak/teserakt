<?php

namespace App\Entity;

use App\Repository\CoordinatesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoordinatesRepository::class)]
class Coordinates
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $point_x = null;

    #[ORM\Column]
    private ?int $point_y = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPointX(): ?int
    {
        return $this->point_x;
    }

    public function setPointX(int $point_x): static
    {
        $this->point_x = $point_x;

        return $this;
    }

    public function getPointY(): ?int
    {
        return $this->point_y;
    }

    public function setPointY(int $point_y): static
    {
        $this->point_y = $point_y;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
