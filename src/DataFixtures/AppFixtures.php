<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $product1 = new Product();
        $product1->setName("Product 1");
        $product1->setDescription("Product 1");

        $product2 = new Product();
        $product2->setName("Product 2");
        $product2->setDescription("Product 2");

        $manager->persist($product1);
        $manager->persist($product2);
        $manager->flush();
    }

     public static function getGroups(): array
     {
         return ["test"];
     }
}
