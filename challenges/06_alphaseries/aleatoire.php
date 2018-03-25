<?php
    require_once(__DIR__.'/src/functions.php');
    $slug = randomSerie()['slug'];

    header('Location: /php7-Romain/challenges/06_alphaseries/serie.php?slug='.$slug);
