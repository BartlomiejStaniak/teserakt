<?php

namespace App\DataFixtures;

use App\Entity\Unit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UnitHumanFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $unit1 = new Unit();
        $unit1->setName('Swordsman')
            ->setHealthPoint(35)
            ->setManaPoint(0)
            ->setSpeed(8)
            ->setSpeedAtack(9)
            ->setSpecialAbility(null)
            ->setAttackPower(8)
            ->setArmor(5)
            ->setAbilityPower(0)
            ->setResistPoints(0);
        $manager->persist($unit1);

        $unit2 = new Unit();
        $unit2->setName('Pickeman')
            ->setHealthPoint(80)
            ->setManaPoint(0)
            ->setSpeed(7)
            ->setSpeedAtack(7)
            ->setSpecialAbility(null)
            ->setAttackPower(32)
            ->setArmor(3)
            ->setAbilityPower(0)
            ->setResistPoints(0);
        $manager->persist($unit2);

        $unit3 = new Unit();
        $unit3->setName('Archer')
            ->setHealthPoint(90)
            ->setManaPoint(0)
            ->setSpeed(12)
            ->setSpeedAtack(50)
            ->setSpecialAbility(null)
            ->setAttackPower(13)
            ->setArmor(2)
            ->setAbilityPower(0)
            ->setResistPoints(0);
        $manager->persist($unit3);




        $manager->flush();
    }
}
