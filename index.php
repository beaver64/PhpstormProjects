<?php

$characters = [
    "Negan" => [
        "city" => "The Sanctuary",
        "weapon" => "Lucille"
    ],
    "Daryl" => [
        "city" => "Alexandria",
        "weapon" => "crossbow"
    ],
    "Ezekiel" => [
        "city" => "The Kingdom",
        "weapon" => "Shiva"
    ]
];

echo $characters["Daryl"]["weapon"] . "<br>" . PHP_EOL;

print $characters["Negan"]["city"] . "<br>" . PHP_EOL;

echo $characters["Negan"] . "<br>" . PHP_EOL;