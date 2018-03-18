<?php

if(is_numeric($argv[1]) && is_numeric($argv[3]) && count($argv)==4) {

    switch ($argv[2]) {
        case '+':
            print "Total = ".$total= $argv[1] + $argv[3];
            break;
        case '-':
             print "Total = ".$total= $argv[1] - $argv[3];
            break;
        case '*':
             print "Total = ".$total= $argv[1] * $argv[3];
            break;
        case '/':
            if($argv[3]==0)
            {
                print "Impossible de diviser par 0";
            }
            else{
             print "Total = ".$total= $argv[1] / $argv[3];
            }
            break;
        default:
            print "Operateur non valide \n";
            break;
    }
}
else {
    print "Arguments invalides";
}
