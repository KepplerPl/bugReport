<?php

namespace App\DataFixtures;

use App\Entity\EntityOne;
use App\Entity\EntityThree;
use App\Entity\EntityTwo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         for($i = 0; $i < 100; $i++) {
             $entityOne = new EntityOne();
             $entityTwo = new EntityTwo();
             $entityThree = new EntityThree();
             $entityOne->setRand12(random_int(1, 2));
             $entityTwo->setRand34(random_int(3, 4));
             $entityThree->setRandomString(bin2hex(random_bytes(5)));
             $manager->persist($entityOne);
             $manager->persist($entityTwo);
             $manager->persist($entityThree);

         }
        $manager->flush();
    }
}
