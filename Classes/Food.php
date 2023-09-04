<?php

require_once __DIR__.'/Product.php';

class Food extends Product{

    public $foodType;
    public $isForCubs; 
    public $nutritionalValues;

    public function __construct($_categoryId, $_name, $_description, $_price, $_isForDogs, $_isForCats, $_foodType, $_isForCubs, $_nutritionalValues)
    {

        parent:: __construct($_categoryId, $_name, $_description, $_price, $_isForDogs, $_isForCats);
        $this->foodType=$_foodType;
        $this->isForCubs=$_isForCubs;
        $this->nutritionalValues=$_nutritionalValues;

    }
}

?>