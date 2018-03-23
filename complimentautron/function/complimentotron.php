<?php

require_once(__DIR__.'/array_rand.php');

function complimentotron() {
    $adjectives1 = arrayRand(require(__DIR__.'/../data/adjectives1.php'));
    $adjectives2 = arrayRand(require(__DIR__.'/../data/adjective2.php'));
    $nom = arrayRand(require(__DIR__.'/../data/nom.php'));

    return sprintf(
        "Tu es %s comme %s %s !\n",
       $adjectives1,
       $nom,
       $adjectives2

   );
}
