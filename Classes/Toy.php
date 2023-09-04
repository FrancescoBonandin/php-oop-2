<?php
require_once __DIR__.'/Product.php';

class Toy extends Product{

    public $materials;
    public $toytype;

    public function __construct($_name, $_description, $_price, $_materials, $_toytype)
    {

        parent:: __construct($_name, $_description, $_price, $_isForDogs=true, $_isForCats=true);

        $this->materials=$_materials;
        $this->toytype=$_toytype;

    }
}

?>