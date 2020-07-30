<?php

class Animal
{
    protected $legs= 2;
    public $cold_blooded = false;
    public $name;
    public function __construct($n_masuk)
    {
        $this->name= $n_masuk;
    }

    public function getLegs ()
    {
        echo $this->legs;
    }

    public function getCold_blooded ()
    {
        if ($this->cold_blooded) {
            echo "True";
        } else {
            echo "False";
        }
    }
}

?>