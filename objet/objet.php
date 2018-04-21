<?php
class Voiture
{
    public function __construct(int $roues,bool $estDemarre=false)
    {
        $this->roues = $roues;
        $this->estDemarre = $estDemarre;

    }
    public function __toString()
  {   if($this->estDemarre==false)
      {return "La voiture a ".$this->roues." roues et est éteinte";
      }
      else
      {
          return "La voiture a ".$this->roues." roues et est allumée";
      }
  }
    public $roues;
    public $estDemarre;

    public function Demarrer()
    {
    $this->estDemarre = true;
    }
    public function Crever()
    {
    $this->roues --;
    }
}

$ferrari = new Voiture(4);
print $ferrari;
print "<br>";
$ferrari->Crever();
$ferrari->Demarrer();
print $ferrari;
 ?>
