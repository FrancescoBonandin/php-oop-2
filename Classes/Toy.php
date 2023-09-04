<?php
require_once __DIR__.'/Product.php';

class Toy extends Product{

    public $materials;
    public $toyType;

    public function __construct($_categoryId, $_name, $_description, $_price, $_isForDogs, $_isForCats, $_materials, $_toyType)
    {

        parent:: __construct($_categoryId, $_name, $_description, $_price, $_isForDogs, $_isForCats);

        $this->materials=$_materials;
        $this->toyType=$_toyType;

    }
}

?>