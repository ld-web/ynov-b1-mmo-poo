<?php require_once '../src/Mage.php'; ?>
<?php require_once '../src/Guerrier.php'; ?>

<h1>Personnages</h1>

<?php
$guerrier = new Guerrier(40);
$autreGuerrier = new Guerrier(55, 60);
$mage = new Mage(70);

var_dump($guerrier->getHealth());
var_dump($autreGuerrier->getHealth());

// interface fluide (rien à voir avec les interfaces en POO)
// https://en.wikipedia.org/wiki/Fluent_interface
$guerrier
  ->setStrength(55)
  ->setHealth(150);

var_dump($guerrier->getHealth());
var_dump($guerrier->getStrength());

while ($guerrier->getHealth() > 0 && $mage->getHealth() > 0) {
  $mage->attack($guerrier);
  echo "Mage attaque guerrier, points de vie guerrier : " . $guerrier->getHealth() . "<br />";
  $guerrier->attack($mage);
  echo "Guerrier attaque mage, points de vie mage : " . $mage->getHealth() . "<hr />";
}

// do {
//   $mage->attack($guerrier);
//   echo "Mage attaque guerrier, points de vie guerrier : " . $guerrier->getHealth() . "<br />";
//   $guerrier->attack($mage);
//   echo "Guerrier attaque mage, points de vie mage : " . $mage->getHealth() . "<hr />";
// } while ($guerrier->getHealth() > 0 && $mage->getHealth() > 0);