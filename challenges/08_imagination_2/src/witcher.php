<?php
require_once(__DIR__.'/personnage.php');


class Witcher extends Personnage
{
    public function attack($attack, $magic , $perso)
        {
             $coup=($attack*2)+($magic/2);
             $perso->vie-=$coup;
             $perso->estvivant($perso);
        }
}