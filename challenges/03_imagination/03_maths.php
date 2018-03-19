<?php

if (is_numeric($argv[1])) {
    print 'Exp ('.$argv[1].')='.$expo= exp($argv[1])."\n";
    print 'log ('.$argv[1].')='.$log= log($argv[1],10)."\n";
    print 'ln ('.$argv[1].')='.$log= log($argv[1])."\n";
    print 'Cos ('.$argv[1].')='.$cos= cos($argv[1])."\n";
    print 'Sin ('.$argv[1].')='.$sin= sin($argv[1])."\n";
    print 'Tan ('.$argv[1].')='.$tan= tan($argv[1])."\n";
    print 'Cosh ('.$argv[1].')='.$cosh= (exp($argv[1])+exp(-$argv[1]))/2;
    print "\n";
    print 'Sinh ('.$argv[1].')=' .$sinh= (exp($argv[1])-exp(-$argv[1]))/2;
    print "\n";
    print 'Tanh('.$argv[1].')=' .$tanh= $sinh/$cosh."\n";
}
else {
    print'Impossible de calculer';
}
