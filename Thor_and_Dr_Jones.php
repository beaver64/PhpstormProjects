<?php

$movie_name = "Indiana Jones and the Last Crusade";
$movie_seen = true;
$movie_release = 1989;
$movie_rating = 8.2;
echo  "$movie_name";
echo "<br />";
if ($movie_seen)
    echo "J'ai déjà vu ce film";
else
    echo "Je n'ai jamais vu ce film";
echo "<br />";
echo "Ce film est sorti en $movie_release";
echo "<br />";
echo "Ce film est noté : $movie_rating sur le site IMBd";
echo "<br />";
?>