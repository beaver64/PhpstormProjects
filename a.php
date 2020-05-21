<?php

$weapons = ["fists", "whip", "gun"];
$opponentWeapon = $weapons[rand(0,2)]; // it allow to call a random weapon
if ($opponentWeapon === $weapons[0]) // if opponent have fists
{
    $bestWeapon = $weapons[2]; // call gun in $weapons => $bestWeapon
}elseif ($opponentWeapon === $weapons[1]) // if opponent have whip
{
    $bestWeapon = $weapons[0]; // call fists in $weapons => $bestWeapon
}else // if opponent have gun
{
    $bestWeapon = $weapons[1]; // call whip in $weapons => $bestWeapon
}
$indyWeapon = $bestWeapon; // equip Indy with the $bestWeapon
echo "The enemy is fighting with his $opponentWeapon as Indy is fighting with his $indyWeapon ." . "<br>" . PHP_EOL;
echo "Indy's winning again !";



