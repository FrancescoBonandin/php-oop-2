<?php
require_once __DIR__.'/Product.php';


class Bed extends Product{

    public $materials;
    public $isForOutdoor;
    public $dimensions;

    public function __construct($_categoryId, $_name, $_description, $_price, $_isForDogs, $_isForCats, $_materials, $_isForOutdoor, $_dimensions)
    {

        parent:: __construct($_categoryId, $_name, $_description, $_price, $_isForDogs, $_isForCats);

        $this->materials=$_materials;
        $this->isForOutdoor=$_isForOutdoor;
        $this->dimensions=$_dimensions;

    }
}

?>