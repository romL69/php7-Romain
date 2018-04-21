<?php
require 'vendor/autoload.php';
$client = new \GuzzleHttp\Client();
$res = $client->request('GET', 'https://www.tentacode.net');
$ferrari = new \Vehicule\Voiture(4,false,'rouge',5);
print $ferrari;
print "<br>";
$ferrari->Crever();
$ferrari->Demarrer();
print $ferrari;
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    </body>
</html>
