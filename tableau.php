<?php

$sports = [
       'sport d\'hiver'=> ['ski','ski de fond','bobsleigh','biathlon','curling','super G'],
       'sport de combat' => ['boxe','taikwendo','judo','karate','escrime'],
       'sport de ballon' => ['rugby','basketball','volleyball', 'handball','football'],

];
$sports["sport de combat"][0]='boxe thai';
print $sports["sport de combat"][0]."\n";
print $sports["sport de ballon"][0]."\n";
