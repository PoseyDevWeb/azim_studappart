<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class AppFixtures extends Fixture
{

   

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
         // Création de 10 utilisateurs de test
         for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setEmail("user{$i}@example.com")
               ->setNumerosTel("123456789{$i}")
               ->setPlainPassword('azim');

            $manager->persist($user);
        }

        $manager->flush();
    }
}
