<?php

$compAdj= [
    'belle',
    'bone',
    'sublime',
    'gentil',
    'mignon',
    'magnifique',
    'splendide',
    'accessible'
];
$comNom= [
    'mes aiselles',
    'une chienne',
    'un crocodile',
    'une orange',
    'ady',
    'une baleine',
    'mon petit asticot',
    'ma cellulite'
];
$comAdj2=[
    'noire',
    'flamboyante',
    'irregardable',
    'puant',
    'blonde',
    'poilue',
    'bleu marine',
    'troglodyte'
];

print "Tu es ".$compAdj[mt_rand(0,count($compAdj)-1)]." comme ".$comNom[mt_rand(0,count($comNom)-1)]." ".$comAdj2[mt_rand(0,count($comAdj2)-1)];
