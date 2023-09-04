<?php

class Product{

    public $productId=rand(0,10**10);
    public $name;
    public $description;
    public $price;
    public $isForDogs;
    public $isForCats;

    public function __construct($_name, $_description, $_price, $_isForDogs=true, $_isForCats=true)
    {
        $this->name=$_name;
        $this->description=$_description;
        $this->price=$_price;
        $this->isForDogs=$_isForDogs;
        $this->isForCats=$_isForCats;

    }


}



?>

