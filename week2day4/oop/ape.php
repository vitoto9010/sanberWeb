<?php
/* */ 
class Ape extends Animal
{

    public function __construct($n_masuk)
    {
        parent::__construct($n_masuk);
        $this->setLegs(4);
    }

    public function yell()
    {
        echo "Auooo";
    }
}


?>
