<?php

require_once __DIR__.'/../Traits/Category-Product_Traits.php';

class AnimalCategory{

    use CatPro;
    
    protected $id;
    public $icon;

    public function __construct($_id, $_name, $_icon){
        $this->id= $_id;
        $this->name=$_name;
        $this->icon=$_icon;
    }

}

$cane=new AnimalCategory(0, 'cane', "<i class='fa-solid fa-dog'></i>");
$gatto=new AnimalCategory(1, 'gatto', "<i class='fa-solid fa-cat'></i>");

?>