<?php
require_once __DIR__.'/Product.php';

class Toy extends Product{

    public string $materials;
    public string $toyType;

    public function __construct($_categoryId, $_name, $_description, $_price, $_isFor, $_materials, $_toyType)
    {

        parent:: __construct($_categoryId, $_name, $_description, $_price, $_isFor);

        $this->materials=$_materials;
        $this->toyType=$_toyType;

    }
}

?>