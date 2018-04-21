<?php

function randomBanner()
{
    $json = file_get_contents(__DIR__.'/data/shows.json');
$shows = json_decode($json, true);
    echo array_rand($shows,count($shows)-1);
}
randomBanner();
