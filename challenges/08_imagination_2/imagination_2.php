<?php
require_once(__DIR__.'/src/personnage.php');
require_once(__DIR__.'/src/witcher.php');
require_once(__DIR__.'/src/sorciere.php');
require_once(__DIR__.'/src/wildhuntleader.php');
require_once(__DIR__.'/src/wildhuntwarrior.php');


$geralt = new Witcher ('Geralt',70,20,10);
$cirilla = new Witcher('Cirilla', 50,18,18);
$yennifer = new Sorciere ('Yennifer',40,8,22);
$triss = new Sorciere ('Triss', 42 ,12 ,20);
$eredin = new Wildhuntleader('Eredin', 250, 12,10);
$imlerith = new Wildhuntwarrior('Imlerith',150,15,5);
print $geralt->__toString();
print $yennifer->__toString();
print $triss->__toString();
print $eredin->__toString();
print $imlerith->__toString();

$geralt->attack($geralt->attack,$geralt->magic,$eredin);
$yennifer->attack($yennifer->attack,$yennifer->magic,$eredin);
$eredin->attack($eredin->attack, $eredin->magic, $geralt);
$triss->attack($triss->attack, $triss->magic,$imlerith);
$geralt->attack($geralt->attack,$geralt->magic,$eredin);
$cirilla->attack($cirilla->attack,$cirilla->magic,$imlerith);
$yennifer->attack($yennifer->attack,$yennifer->magic,$eredin);
$imlerith->attack($imlerith->attack,$imlerith->magic,$triss);
$cirilla->attack($cirilla->attack,$cirilla->magic,$imlerith);
$geralt->attack($geralt->attack,$geralt->magic,$eredin);
$yennifer->attack($yennifer->attack,$yennifer->magic,$imlerith);
$geralt->attack($geralt->attack,$geralt->magic,$eredin);
