<?php

$compAdj= [
    'compliments'=>['belle','bone','sublime','gentil','mignon','magnifique','splendide','accessible']
];
$comNom= [
    'nom'=>['mes aiselles','une chienne','un crocodile','une orange','ady','une baleine','mon petit asticot','ma cellulite']
];
$comAdj2=[
    'adj'=>['noire','flamboyante','irregardable','puant','blonde','poilue','bleu marine','troglodyte']
];

print "Tu es ".$compAdj['compliments'][mt_rand(0,count($compAdj['compliments'])-1)]." comme ".$comNom['nom'][mt_rand(0,count($comNom['nom'])-1)]." ".$comAdj2['adj'][mt_rand(0,count($comAdj2['adj'])-1)];
