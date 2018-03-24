<?php
    require_once(__DIR__.'/src/functions.php');
    $slug = randomSerie()['slug'];
    $slug = $_POST['slug'];
    header('Location: /php7-Romain/challenges/06_alphaseries/serie.php?slug='.$slug);
