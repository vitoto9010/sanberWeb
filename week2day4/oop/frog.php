<?php

class Frog extends Animal
{
    public function __construct($n_masuk)
    {
        parent::__construct($n_masuk);
        $this->setLegs(4);
    }

    public function jump()
    {
        echo "hop hop";
    }
}


?>
