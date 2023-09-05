<?php
require_once __DIR__.'/Product.php';


class Bed extends Product{

    public string $materials;
    public bool $isForOutdoor;
    public string $dimensions;

    public function __construct($_categoryId, $_name, $_description, $_price, $_isFor, $_materials, $_isForOutdoor, $_dimensions)
    {

        parent:: __construct($_categoryId, $_name, $_description, $_price, $_isFor);

        $this->materials=$_materials;
        $this->isForOutdoor=$_isForOutdoor;
        $this->dimensions=$_dimensions;

    }
}

?>