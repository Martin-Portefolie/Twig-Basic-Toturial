<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {


        $names = [
            'Serious Businessman', 'Dog Dress', 'Sportstar Dog', 'Angel Costume', 'Dog Accessories',
            'Super Cool Dog',
        ];

        $imageNames = [
            'images/formal.webp', 'images/dress.webp', 'images/sports.png', 'images/angel-costume.png', 'images/swatter.webp',
            'images/super-cool.webp',
        ];

        for ($i = 0; $i < 6; $i++) {
            $entity = new Product();
            $entity->setName($names[$i]);
            $entity->setImagePath($imageNames[$i]);

            $manager->persist($entity);
        }

        $manager->flush();
    }






}
