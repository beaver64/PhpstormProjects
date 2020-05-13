<?php

$filmName = "Indiana Jones and the Last Crusade";
$isWatched = true;
$releaseDate = 1989;
$rating = 8.2;

$isWatched ? $isWatched = "Yes" : $isWatched = "No";

echo("Name of the film: $filmName\n");
echo("Have you seen it before? $isWatched\n");
echo("Relesae date: $releaseDate\n");
echo("Rating: $rating");