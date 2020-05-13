<?php

// Affiche de 0 à 9 inclus via une boucle
for ($count = 0; $count < 10; $count++){
    echo $count . "<br>" . PHP_EOL;
}

// Affiche de 0 à 10 inclus via une boucle
for ($count = 0; $count <= 10; $count++) {
    echo $count . "<br>" . PHP_EOL;
}

// Affiche de 1 à 10 inclus via une boucle
for ($count = 1; $count <= 10; $count++) {
    echo $count . "<br>" . PHP_EOL;
}

// Affiche de 10 à 0 inclus via une boucle
for ($count = 10; $count >= 0; $count--) {
    echo $count . "<br>" . PHP_EOL;
}

// Affiche de 25 à 50 inclus, tous les 5
for ($count = 25; $count <= 50; $count += 5) {
    echo $count . "<br>" . PHP_EOL;
}

// Affiche les valeurs possibles entre 10 à -10, tous les 3
for ($count = 10; $count >= -10; $count -= 3) {
    echo $count . "<br>" . PHP_EOL;
}

// Conditions
$name = 'Darth Vader';

if ($name === 'Darth Sidious' || $name === 'Darth Vader') {
    echo 'Sith' . "<br>" . PHP_EOL;
} elseif($name === 'Yoda') {
    echo 'Jedi' . "<br>" . PHP_EOL;
} else {
    echo 'Sans doute une personne sans pouvoir' . "<br>" . PHP_EOL;
}


// Tableau indexé : Construis un tableau $jedis (indexé numériquement/auto)
$jedis = ['Obi-Wan Kenobi', 'Yoda', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn'];

// Tableau indexé : Construis un tableau $jedis (indexé numériquement/manuel) !pas d'espace dans un index!

$jedis=[
    0 => 'Obi-Wan Kenobi',
    1 => 'Yoda',
    2 => 'Luke Skywalker',
    3 => 'Windu',
    4 => 'Qui-gon Jinn'
];

// Tableau indexé : Ajoute 'Rey' dans le tableau
array_push($jedis, 'Rey');
//ou !index
$jedis[2] = "Jean";