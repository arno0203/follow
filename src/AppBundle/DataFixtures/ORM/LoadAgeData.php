<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use AppBundle\Entity\Age;
use Doctrine\Common\Persistence\ObjectManager;


class LoadAgeData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $age = new Age();
        $age->setName('Poussinets')
            ->setMin(6)
            ->setMax(6);

        $manager->persist($age);
        $manager->flush();

        $age = new Age();
        $age->setName('Mini-Poussins')
            ->setMin(7)
            ->setMax(8);

        $manager->persist($age);
        $manager->flush();

        $age = new Age();
        $age->setName('Poussins')
            ->setMin(9)
            ->setMax(10);

        $manager->persist($age);
        $manager->flush();

        $age = new Age();
        $age->setName('Benjamins')
            ->setMin(11)
            ->setMax(12);

        $manager->persist($age);
        $manager->flush();

        $age = new Age();
        $age->setName('Minimes')
            ->setMin(13)
            ->setMax(14);

        $manager->persist($age);
        $manager->flush();

        $age = new Age();
        $age->setName('Cadets')
            ->setMin(15)
            ->setMax(17);

        $manager->persist($age);
        $manager->flush();

        $age = new Age();
        $age->setName('Juniors')
            ->setMin(18)
            ->setMax(20);

        $manager->persist($age);
        $manager->flush();

        $age = new Age();
        $age->setName('Seniors')
            ->setMin(21)
            ->setMax(39);

        $manager->persist($age);
        $manager->flush();

        $age = new Age();
        $age->setName('Vétéran')
            ->setMin(40)
            ->setMax(100);

        $manager->persist($age);
        $manager->flush();
    }

}