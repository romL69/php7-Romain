<?php


class Personnage {
    public $nom;
    public $vie;
    public $attack;
    public function __construct(string $nom,int $vie, int $attack, int $magic)
    {
        $this->nom=$nom;
        $this->vie=$vie ;
        $this->attack=$attack;
        $this->magic=$magic;
    }
    public function __toString()
    {
        if($this->vie>0)
        {
            return 'Le personnage s\'appelle '.$this->nom.' , a '.$this->vie.' points de vie, '.$this->attack.' points d\'attaque , '.$this->magic.' points de magie et est en vie. <br> ' ;
        }
        else {
            return 'Le personnage s\'appellait '.$this->nom.' et il est mort. <br>';
        }
    }

    public function estvivant(Personnage $perso)
    {
        if($perso->vie <= 0)
        {
            return print $perso->nom." est mort. <br> ";
        }
        else {
            return print $perso->nom.' a encore '.$perso->vie.' points de vie. <br>';
        }
    }
}
