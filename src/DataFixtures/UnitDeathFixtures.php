<?php

namespace App\DataFixtures;

use App\Entity\Unit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UnitDeathFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $unit1 = new Unit();
        $unit1->setName('Skeleton')
            ->setHealthPoint(22)
            ->setManaPoint(0)
            ->setSpeed(10)
            ->setSpeedAtack(12)
            ->setSpecialAbility(null)
            ->setAttackPower(4)
            ->setArmor(1)
            ->setAbilityPower(0)
            ->setResistPoints(0);
        $manager->persist($unit1);

        $unit2 = new Unit();
        $unit2->setName('Zombie')
            ->setHealthPoint(50)
            ->setManaPoint(0)
            ->setSpeed(5)
            ->setSpeedAtack(7)
            ->setSpecialAbility(null)
            ->setAttackPower(10)
            ->setArmor(3)
            ->setAbilityPower(0)
            ->setResistPoints(0);
        $manager->persist($unit2);

        $unit3 = new Unit();
        $unit3->setName('Spider')
            ->setHealthPoint(150)
            ->setManaPoint(0)
            ->setSpeed(20)
            ->setSpeedAtack(10)
            ->setSpecialAbility(null)
            ->setAttackPower(22)
            ->setArmor(10)
            ->setAbilityPower(3)
            ->setResistPoints(2);
        $manager->persist($unit3);




        $manager->flush();
    }
}
