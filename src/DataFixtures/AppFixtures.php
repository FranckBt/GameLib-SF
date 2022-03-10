<?php

namespace App\DataFixtures;

use src\Entity\Games;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        // on crée 4 auteurs avec noms et prénoms "aléatoires" en français
        $auteurs = Array();
        for ($i = 0; $i < 4; $i++) {
            $auteurs[$i] = new Games();
            $auteurs[$i]->setTitle_game($faker->lastName);
            $auteurs[$i]->setRelease_date_game($faker->firstName);

            $manager->persist($auteurs[$i]);
        }
        $manager->flush();
    }
}
