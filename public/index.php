<?php require_once '../src/Guerrier.php'; ?>

<h1>Personnages</h1>

<?php
$guerrier = new Guerrier(40);
$autreGuerrier = new Guerrier(55, 60);

var_dump($guerrier->getHealth());
var_dump($autreGuerrier->getHealth());

// interface fluide (rien à voir avec les interfaces en POO)
// https://en.wikipedia.org/wiki/Fluent_interface
$guerrier
  ->setHealth(150)
  ->setStrength(55);

var_dump($guerrier->getHealth());
var_dump($guerrier->getStrength());
