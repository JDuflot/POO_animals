<?php

use App\AnimalGenerator;

require 'vendor/autoload.php';

$animalGenerator = new AnimalGenerator;
$animals = $animalGenerator->getAnimals(50);


dump($animals);
?>

<!-- // $cat = new Animal();
// $cat->setGender('M');

// $cat
//     ->setGender('M')
//     ->setSpecie('Chat')
//     ->setName('Mani')
//     ->setAge(5)
//     ->setColor('roux')  
//     ->setSize(20)
//     ->setDescription('I am a cat. Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.')
//     ->setPicture("https://catinaflat.blog/wp-content/uploads/2023/01/ginger-cat-facts-1024x1024-1.webp")
// ;

// $dog = new Animal();
// $dog
//     ->setGender('F')
//     ->setSpecie('Dog')
//     ->setName('Disney') 
//     ->setAge(14)
//     ->setColor('blanche et fauve')
//     ->setDescription('I am a dog, ')
//     ->setPicture("https://upload.wikimedia.org/wikipedia/commons/4/47/Favolosa_Fortuna_Diamante_Violetta_Jack_1.jpg")
// ;

// $bunny = new Animal();

// $bunny
//     ->setGender('M')
//     ->setSpecie('Bunny')
//     ->setName('Kara') 
//     ->setAge(7)
//     ->setColor('Banche, gris et fauve')
//     ->setSize(10)
//     ->setDescription('I am a bunny')
//     ->setPicture("https://www.womansworld.com/wp-content/uploads/2019/09/cute-bunny-in-a-field-of-grass-and-white-flowers.jpg")
// ; -->



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
  </head>
  <body>
    <main class ="container">

    <h1>Nos animaux à adopter</h1>
    
    <div class="row">
        <?php foreach ($animals as $animal) : ?>
  <div class="col-sm-4 mb-3">
      
      <div class="card animal">
          <img src=<?= $animal->getPicture() ?> class="card-img-top"  alt="...">
          <div class="card-body">
      <h5 class="card-title"><?= $animal->getName() ?></h5>
        <ul class="list-group">
            <li class="list-group-item">Age : <?= $animal->getAge()?> ans</li>
            <li class="list-group-item">Sexe : <?= $animal->getGender()?></li>
            <li class="list-group-item">Type : <?= $animal->getSpecie()?></li>
            <li class="list-group-item">Couleur(s) : <?= $animal->getColor()?></li>
        </ul>

    <p class="card-text"><?= $animal->getShortDescription() ?></p>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
    </div>
  </div>
  <?php endforeach ?>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>