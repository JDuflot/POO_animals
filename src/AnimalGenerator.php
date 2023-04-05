<?php

namespace App;

use App\Animal;
use Faker\Factory;

class AnimalGenerator
{

    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    private function generate() 
    {
        $specie = $this->faker->randomElement(['chat','chien','lapin']);
        $cat = new Animal();

        $cat
        ->setGender($this->faker->randomElement(['Male', 'Female', 'No binary']))
        ->setSpecie($this->faker->randomElement(['Chien','Chat','Lapin', 'Souris']))
        ->setName($this->faker->firstName())
        ->setAge($this->faker->numberBetween(1,25))
        ->setColor($this->faker->randomElement(['blanc','tigré', 'roux', 'noir']))  
        ->setSize(20)
        ->setDescription($this->faker->paragraphs(2, true))
        ->setPicture('https://loremflickr.com/320/240/'.$specie)
;
        return $cat;

    }
    public function getAnimals($nb = 10)
    {
        $animals =[];
for ($i=0; $i<= $nb; $i++) {
    $animals[] = $this->generate();
}
        return $animals;
    }
}