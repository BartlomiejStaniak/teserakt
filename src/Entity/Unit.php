<?php

namespace App\Entity;

use App\Repository\UnitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UnitRepository::class)]
class Unit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Name = null;

    #[ORM\Column]
    private ?int $Health_point = null;

    #[ORM\Column(nullable: true)]
    private ?int $Mana_point = null;

    #[ORM\Column]
    private ?int $Speed = null;

    #[ORM\Column]
    private ?int $Speed_atack = null;

    #[ORM\Column(type: Types::OBJECT, nullable: true)]
    private ?object $Special_ability = null;

    #[ORM\Column]
    private ?int $Attack_power = null;

    #[ORM\Column]
    private ?int $Armor = null;

    #[ORM\Column(nullable: true)]
    private ?int $Ability_power = null;

    #[ORM\Column(nullable: true)]
    private ?int $Resist_points = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getHealthPoint(): ?int
    {
        return $this->Health_point;
    }

    public function setHealthPoint(int $Health_point): static
    {
        $this->Health_point = $Health_point;

        return $this;
    }

    public function getManaPoint(): ?int
    {
        return $this->Mana_point;
    }

    public function setManaPoint(?int $Mana_point): static
    {
        $this->Mana_point = $Mana_point;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->Speed;
    }

    public function setSpeed(int $Speed): static
    {
        $this->Speed = $Speed;

        return $this;
    }

    public function getSpeedAtack(): ?int
    {
        return $this->Speed_atack;
    }

    public function setSpeedAtack(int $Speed_atack): static
    {
        $this->Speed_atack = $Speed_atack;

        return $this;
    }

    public function getSpecialAbility(): ?object
    {
        return $this->Special_ability;
    }

    public function setSpecialAbility(?object $Special_ability): static
    {
        $this->Special_ability = $Special_ability;

        return $this;
    }

    public function getAttackPower(): ?int
    {
        return $this->Attack_power;
    }

    public function setAttackPower(int $Attack_power): static
    {
        $this->Attack_power = $Attack_power;

        return $this;
    }

    public function getArmor(): ?int
    {
        return $this->Armor;
    }

    public function setArmor(int $Armor): static
    {
        $this->Armor = $Armor;

        return $this;
    }

    public function getAbilityPower(): ?int
    {
        return $this->Ability_power;
    }

    public function setAbilityPower(?int $Ability_power): static
    {
        $this->Ability_power = $Ability_power;

        return $this;
    }

    public function getResistPoints(): ?int
    {
        return $this->Resist_points;
    }

    public function setResistPoints(?int $Resist_points): static
    {
        $this->Resist_points = $Resist_points;

        return $this;
    }
}
