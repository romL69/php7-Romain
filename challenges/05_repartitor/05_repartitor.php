<?php
    $c = file_get_contents($argv[1]);
    $t = str_split($c);
    foreach ($t as $h) {
        if ($h != " " && $h != "\n") {
            $r[$h] = $r[$h] ? $r[$h] + 1 : 1;
            $n++;
        }
    }
    arsort($r);
    print_r($r);
    print count($r) . " ($n)
    ";
