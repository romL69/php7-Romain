<?php

$captain = [

    'name' => $captainName= 'Jacques Spareau',
    'age' => $captainAge=23,
    'is_dead' => $captainDead =true,
    'famous_last_words' => $captainFamousLastWords = 'AAaaargh...',
    ];

if($captain['is_dead'] === true)
{
    print 'Le capitaine '.$captain['name'];
    print " est mort à l'age de ".$captain['age']." ans.\n";
    print 'Ses derniers mots étaient "'.$captain['famous_last_words'].'"'."\n";
}
