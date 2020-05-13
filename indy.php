<?php

$movies = [
    "Indiana Jones and the Kingdom of the Crystal Skull"    => [
        "Harrison Ford",
        "Cate Blanchett",
        "Karen Allen"
    ],
    "Indiana Jones and the Last Crusade"    => [
        "Harrison Ford",
        "Sean Connery",
        "Denholm Elliott"
    ],
    "Indiana Jones and the Temple of Doom"  => [
        "Harrison Ford",
        "Kate Capshaw",
        "Jonathan Ke Quan"
    ],
];
foreach ($movies as $movie => $names) {
    echo "Dans le film " . $movie . ", les principaux acteurs sont : ";
    $count = 0;
    foreach($names as $name) {
        if ($count === 0) {
            echo $name;
        } else {
            echo ", $name";
        }
        $count++;
    }
    echo ". <br>" . PHP_EOL;
} // a