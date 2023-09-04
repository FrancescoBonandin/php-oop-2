<?php
require_once __DIR__.'/Product.php';


class Bed extends Product{

    public $materials;
    public $isForOutdoor;
    public $dimensions;

    public function __construct($_name, $_description, $_price, $_materials, $_isForOutdoor, $_dimensions)
    {

        parent:: __construct($_name, $_description, $_price, $_isForDogs=true, $_isForCats=true);

        $this->materials=$_materials;
        $this->isForOutdoor=$_isForOutdoor;
        $this->dimensions=$_dimensions;

    }
}

?>