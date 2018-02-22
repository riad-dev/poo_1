<?php
class Voiture {
    public $marque;
    public $color;
    public $type;

    public function type(){
        echo "Je suis une voiture ".$this->type;
    }
    public function marque(){
        echo " de marque ".$this->marque.".";
    }
    public function couleur(){
        echo "La couleur de la voiture est ".$this->color."<br>";
    }

}

$auto1 = new Voiture();
$auto1->color = 'rouge';
$auto1->type = 'sportive';
$auto1->marque = 'ferrari';
$auto1->couleur();
echo "<br>";
$auto1->type();
$auto1->marque();
echo "<hr>";
