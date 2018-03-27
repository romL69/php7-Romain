<?php
require_once(__DIR__.'/vehicule.php');
class Voiture extends Vehicule{

    public $couleur;
    public $nbPlaces;
    public function __construct(int $roues,bool $estDemarre,string $couleur, int $nbPlaces)
    {
        $this->roues = $roues;
        $this->estDemarre = $estDemarre;
        $this->couleur = $couleur;
        $this->nbPlaces = $nbPlaces;

    }
    public function __toString()
  {   if($this->estDemarre==false)
      {return "Le vehicule a ".$this->roues." roues, ".$this->nbPlaces." places, est de couleur ".$this->couleur." et est éteinte ";
      }
      else
      {
        return "Le vehicule a ".$this->roues." roues, ".$this->nbPlaces." places, est de couleur ".$this->couleur." et est allumé ";
      }
  }
}

$ferrari = new Voiture(4,false,'rouge',5);
print $ferrari;
print "<br>";
$ferrari->Crever();
$ferrari->Demarrer();
print $ferrari;
