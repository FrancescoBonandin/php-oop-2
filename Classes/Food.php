<?php

require_once __DIR__.'/Product.php';

class Food extends Product{

    public string $foodType;
    public bool $isForCubs; 
    public string|null $nutritionalValues;

    public function __construct($_categoryId, $_name, $_description, $_price, $_isFor, $_foodType, $_isForCubs, $_nutritionalValues)
    {

        parent:: __construct($_categoryId, $_name, $_description, $_price, $_isFor);
        $this->foodType=$_foodType;
        $this->isForCubs=$_isForCubs;
        $this->nutritionalValues=$_nutritionalValues;

    }
}

?>